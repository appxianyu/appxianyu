<?php

namespace App\Http\Controllers;

use App\Jifen;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //读取数据库， 获取用户数据
        $users = User::orderBy('id','desc')
            ->where('username','like', '%'.request()->keywords.'%')
            ->paginate(8);

        //解析模板显示到用户数据
        return view('admin.user.index', ['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User;
        $jifen = new Jifen;
        $user -> username = $request->username;
        $user -> password = Hash::make($request->password);
        $user -> email = $request->email;
        $user -> name = $request->name;
        $user -> sfenz = $request->sfenz;
        $user -> phone = $request->phone;
        


        //文件上传
        //检测是否有文件上传
            
        if ($request->hasFile('pic')) {
            $user->pic = '/'.$request->pic->store('uploads/'.date('Ymd'));
        }


        if($user -> save()){

            $jifen ->user_id = $user->id;
            $jifen->save();
            return redirect('/user')->with('success','添加成功');
        }else{
            return back()->with('error','添加失败');
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
        $user = User::find($id);

        return view('admin.user.edit', ['user'=>$user]);
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
        $user = User::find($id);
        $user->username = $request->username; 
        $user->email = $request->email;
        $user->name = $request->name;
        $user->sfenz= $request->sfenz;
        $user->phone = $request->phone;
        $user->oradmin = $request->oradmin;
        
        //文件上传
        //检测是否有文件上传
            
        if ($request->hasFile('pic')) {
            $user->pic = '/'.$request->pic->store('uploads/'.date('Ymd'));
        }


        if($user -> save()){
            return redirect('/user')->with('success','修改成功');
        }else{
            return back()->with('error','修改失败');
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
        // dd($id);
        $user = User::find($id);
        $user -> delete();

        if($user -> delete()){
          return redirect('/user')->with('success','删除成功');  
        }else{
             return back()->with('error','删除失败');   
        }
    }
}
