<?php

namespace App\Http\Controllers;

use App\Car;
use App\Ding;
use App\Hb;
use App\Huo;
use App\Sp;
use App\Tag;
use App\WoMen;
use App\WzPeiZhi;
use App\Youlian;
use Illuminate\Http\Request;

class DingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //读取数据库 获取用户数据
        $dings = Ding::orderBy('id','desc')
            ->where('title','like', '%'.request()->keywords.'%')
            ->paginate(10);
        
        return view('admin.ding.index',compact('dings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ding = new Ding;
        $huo = Huo::findOrFail($request->shouhuo_id);
        $sp = Sp::findOrFail($request->spid);
        $ding->title = $sp->title;
        $ding->image = $sp->image;
        $ding->cheng = $sp->cheng;
        $ding->money = $sp->money;
        $ding->zhifu = $request->zhifu;
        $ding->title = $sp->title;
        $ding->kuaidi = $request->kuaidi;
        $ding->user_id = session('id');
        $ding->shangpin_id = $sp->spid;
        $ding->shouhuo_id = $request->shouhuo_id;
        $sp->orlogin = 1;
         if($ding->save()){
            return redirect('/dingdan')->with('success','订单提交成功');
        }else{
            return back()->with('error','订单提交失败');
        }
       

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $peizhi = WzPeiZhi::first();
        $huobans = Hb::all(); 
        $gw = Car::all();
        $tags = Tag::all();
        $women = WoMen::all();
        $shangpin = Sp::all();
        $shang = Sp::where('orlogin','0')->where('user_id',session('id'))->count();
        $pin = Sp::where('orlogin','1')->where('user_id',session('id'))->count();
        $shangpinone = Sp::findOrFail($id);
        $youlians = Youlian::all();
        $huo = Huo::orderBy('id','desc')->take(3)->get();
        $youlians = Youlian::all();
        // $huo = Huo::all();

        return view('home.ding.create',compact('shangpin','shang','pin','id','shangpinone','huo','tags','women','gw','youlians','huobans','peizhi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $dingdan = Ding::findOrFail($id);
         return view('admin.ding.edit', compact('dingdan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $ding = Ding::findOrFail($id);
         $huo = Huo::findOrFail($ding->shouhuo_id);
        //更新
        $ding->title = $request->title;
        $ding->kuaidi = $request->kuaidi; 
        $ding->province = $request->province;
        $ding->city = $request->city;
        $ding->area = $request->area;
        $huo ->name = $request->name;
        if($ding->save() && $huo->save()){
            return redirect('/dingdan')->with('success','更新成功');
        }else{
            return back()->with('error','更新失败');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ding = Ding::findOrFail($id);

        if($ding->delete()){
            return back()->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
    }


 
}
