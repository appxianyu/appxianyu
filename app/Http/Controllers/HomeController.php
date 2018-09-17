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


        return view('home.index');


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

    //分类
    public function zongcate()
    {
        $dcate = DCate::all();
        return view('home.cate',compact('dcate'));
    }

    //分类页面
    public function appxcate(Request $request)
    {
        $xxcate = XxCate::where('xcate_id',$request->xcate)->get();
        
        return view('home.xcate',compact('xxcate'));
    }

    //app我的
    public function wode()
    {
        return view('home.me.wode');
    }

    //app登录
    public function login()
    {
        return view('home.me.login');
    }

    //app登录操作
    public function dologin(Request $request)
    {   
        //获取用户的数据
        $user = User::where('username',$request->username)->first();
        // dd($user);
        
        if(!$user){
            return back()->with('error','登录失败');
        }

        //校验密码
        if(Hash::check($request->password, $user->password)){
            //写入session
            session(['username'=>$user->username, 'id'=>$user->id,'pic'=>$user->pic]);
            return redirect('/')->with('success','登录成功');
        }else{
            return back()->with('error','登录失败');
        }
         
    }

     //退出登入
    public function logout(Request $request)
    {
        //
        $request->session()->flush();

        return redirect('/login')->with('success','退出成功');
    }


    //用户注册
    public function zhuce()
    {
        return view('home.me.zhuce');
    }


    //注册
    public function reg(Request $request)
    {

        $user = new User;

        $user -> username = $request->username;
        $user -> password = Hash::make($request->password);

        if($user -> save()){
            return redirect('/')->with('success','添加成功');
        }else{
            return back()->with('error','添加失败');
        }
    }


    //生活第一页面
     public function gu()
    {   
        $huodong = HuoDong::all();
         return view('home.guang.gu',compact('huodong'));
    }

    //胜过第二页面
    public function guo($id)
    {   
        
        $huo = HuoDong::findOrFail($id);
         return view('home.guang.guo',compact('huo'));
    }
}
