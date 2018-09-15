<?php

namespace App\Http\Controllers;

use App\Car;
use App\DCate;
use App\Hb;
use App\Sc;
use App\Sp;
use App\Tag;
use App\User;
use App\WoMen;
use App\WzPeiZhi;
use App\XCate;
use App\XxCate;
use App\Youlian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ScController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $shoucang = new Sc;
        // dd($request->user);
        // dd($request->shangpin);
        $shoucang->user_id = $request->user;
        $shoucang->shangpin_id = $request->shangpin;
        if($shoucang->save()){
            return redirect('/shoucang/create')->with('success','收藏成功');
        }else{
            return back()->with('error','收藏失败');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $huobans = Hb::all(); 
        $peizhi = WzPeiZhi::first();
        $huobans = Hb::all();
        $gw = Car::all();
        $tags = Tag::all();
        $women = WoMen::all();
        $dcate = DCate::all();
        $xcate = XCate::all();
        $xxcate = XxCate::all();
        $shangpin = Sp::all();
        $user = User::all();
        $shang = Sp::where('orlogin','0')->where('user_id',session('id'))->count();
        $pin = Sp::where('orlogin','1')->where('user_id',session('id'))->count();
        $shoucang = Sc::where('user_id',session('id'))->get();
        $youlians = Youlian::all();
       
        return view('home.grzx.shoucang',compact('shoucang','dcate','xcate','xxcate','shangpin','user','shang','pin','women','tags','gw','youlians','peizhi','huobans'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return 'store';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return 'show';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sp = Sp::findOrFail($id);
        $shoucang = Sc::where('shangpin_id',$id);

        if($sp->delete() && $shoucang->delete()){
            return back()->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
    }
}
