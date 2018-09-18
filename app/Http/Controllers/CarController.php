<?php

namespace App\Http\Controllers;

use App\Car;
use App\Ding;
use App\Hb;
use App\Huo;
use App\Sp;
use App\Tag;
use App\User;
use App\WoMen;
use App\WzPeiZhi;
use App\Youlian;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   

          $huobans = Hb::all(); 
         $peizhi = WzPeiZhi::first();
        // $shangpin = Sp::all();
        $gw = Car::all();
        $shang = Sp::where('orlogin','0')->where('user_id',session('id'))->count();
        $pin = Sp::where('orlogin','1')->where('user_id',session('id'))->count();
        return view('home.gouwuche',compact('gw','shang','pin','peizhi','huobans'));
        }
   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //执行添加购物车
    public function show($id)
    {
          if(!empty(User::findOrFail(session('id'))->car->where('shangpin_id',$id)->first())){
                    return redirect('/gouwuche')->with('success','此商品已存在');
                }else{
                    $car = new Car;
                    $sp = Sp::findOrFail($id);
                    $car->title = $sp->title;
                    $car->image = $sp->image;
                    $car->cheng = $sp->cheng;
                    $car->money = $sp->money;
                    $car->shangpin_id = $sp->id;
                    $car->user_id = session('id'); 
                    // dd($car);
                    if ($car ->save()) {
                        
                        return redirect('/gouwuche')->with('success','成功');
                        }else{
                            return redirect('/gouwuche')->with('success','成功');
                        }
             
                }
        // dd($car);
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
        
    }


    public function che($id)
    {
        $shan = Car::findOrFail($id);
        if($shan->delete()){
            return back()->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
    }


    //结算
    public function dd(Request $request)
    {
        
          $huobans = Hb::all(); 
        $jiesuan = Car::findOrFail($request->duo);
        $peizhi = WzPeiZhi::first();
        $youlians = Youlian::all();
        $gw = Car::all();
        $tags = Tag::all();
        $women = WoMen::all();
        $shangpin = Sp::all();
        $shang = Sp::where('orlogin','0')->where('user_id',session('id'))->count();
        $pin = Sp::where('orlogin','1')->where('user_id',session('id'))->count();
        $huo = Huo::orderBy('id','desc')->take(3)->get();
        // $huo = Huo::all();
        return view('home.ding.jiesuan',compact('youlians','shangpin','shang','pin','id','shangpinone','huo','tags','women','gw','jiesuan','jiesuan','peizhi','huobans'));
    }

      //购物订单
    public function gwdingdan(Request $request)
    {
        
        $huo = Huo::findOrFail($request->shouhuo_id);
        $sp = Car::findOrFail($request->carid);
        //dd($sp);
        foreach ($sp as $key => $value) {
            $ding = new Ding;
            $ding->title = $value->title;
            $ding->image = $value->image;
            $ding->cheng = $value->cheng;
            $ding->money = $value->money;
            $ding->zhifu = $request->zhifu;
            $ding->title = $value->title;
            $ding->kuaidi = $request->kuaidi;
            $ding->user_id = session('id');
            $ding->shangpin_id = $value->shangpin_id;
            $ding->shouhuo_id = $request->shouhuo_id;
            $ding->save();
        }
        if($ding){
            return redirect('/gerendingdan')->with('success','成功');
        }else{
            return back()->with('success','成功');
        }
        
        
    }


    //app前台购物车
    public function car()
    {
        $car = new Car;
        $car = Car::all();
        // dd($car);
        return view('home.car.index',compact('car'));  
    }

    //购物车删除
    public function qrsc(Request $request)
    {

        $shan = Car::findOrFail($request->shangpin_id);
        if($shan->delete()){
            return back()->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
    }
}
