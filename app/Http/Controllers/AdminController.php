<?php

namespace App\Http\Controllers;

use App\Car;
use App\Jubao;
use App\User;
use Illuminate\Foundation\Testing\Concerns\session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
    	$user = User::find(\Session::get('id'));

    	return view('admin',compact('user'));

    }

    public function inde()
    {
    	
    	$jubao = Jubao::get();
    	return view('admin.jubao.inde',compact('jubao'));
    }


    public function gw()
    {
        return view('admin.gw');
    }

    //后台购物车
    public function gouwu()
    {
        
        $shangpins = Car::orderBy('id','desc')
            ->where('shangpin_id','like', '%'.request()->keywords.'%')
            ->paginate(5);
            // dd($shangpins);
        
            
        return view('admin.gouwu',compact('shangpins'));
    }


    //后台登入页面
    //登陆
    public function login()
    {   
        return view('admin.login');

    }

    //登录操作
    public function dologin(Request $request)
    {   
        $user = DB::table('users')->where('username',$request->username)->first();
        
        if(!$user){
            return back()->with('error','登录失败');
        }

        //检查是否是管理员
        if($user->oradmin==0){
            return back()->with('success','登录成功');
        }

        if($user->oradmin==1){
            //校验密码
           if(Hash::check($request->password, $user->password)){
            //写入session
            session(['username'=>$user->username, 'id'=>$user->id,'pic'=>$user->pic]);
            return redirect('/admin')->with('success','登录成功');
         }else{
            return back()->with('error','登录失败');
        }
        }
         
    }


    //退出登入
    public function logout(Request $request)
    {
        //
        $request->Session()->flush();

        return redirect('/admin/login')->with('success','退出成功');
    }

}
