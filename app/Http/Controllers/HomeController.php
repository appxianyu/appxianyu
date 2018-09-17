<?php

namespace App\Http\Controllers;


use App\Car;
use App\DCate;
use App\Ding;
use App\Gg;
use App\Hb;
use App\HuoDong;
use App\Jubao;
use App\Pl;
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
use Illuminate\Support\Facades\Hash;


class HomeController extends Controller
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
        $gw = Car::all();
        $tags = Tag::all();
        $women = WoMen::all();
        $dcate = DCate::all();
        $xcate = XCate::all();
        $xxcate = XxCate::all();
        $shangpin = Sp::all();
        $gw = Car::all();
        $gg = Gg::all();
        $user = User::all();
        $youlians = Youlian::all();
        $users = Session()->get('id');
        $shang = Sp::where('orlogin','0')->where('user_id',session('id'))->count();
        $pin = Sp::where('orlogin','1')->where('user_id',session('id'))->count();


        return view('home.index',compact('dcate','xcate','xxcate','shangpin','gw','user','users','shang','pin','women','tags','youlians','gg','peizhi','huobans'));


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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
       
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

        $jubao = Jubao::find($id);
        $jubao -> delete();

        if($jubao -> delete()){
          return redirect('/jubao')->with('success','删除成功');  
        }else{
             return back()->with('error','删除失败');   
        }
    }


  

     public function gu()
    {   
        $huodong = HuoDong::all();
         return view('home.guang.gu',compact('huodong'));
    }

    public function guo($id)
    {   
        
        $huo = HuoDong::findOrFail($id);
         return view('home.guang.guo',compact('huo'));
    }

    //商品详情页面
    public function sp($id)
    {
      $shangpin = Sp::findOrFail($id);
         return view('home.xq.xqq',compact('shangpin'));
    }
}
