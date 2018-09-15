<?php

namespace App\Http\Controllers;

use App\Car;
use App\Hb;
use App\Pl;
use App\Pm;
use App\Pml;
use App\Sp;
use App\Tag;
use App\WoMen;
use App\WzPeiZhi;
use App\Youlian;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class PmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        //读取数据库 获取用户数据
        $paimais = Pm::orderBy('id','desc')
            ->where('intro','like','%'.request()->keywords.'%')
            ->paginate(10);
        //解析模板显示用户数据
        return view('admin.paimai.index',compact('paimais'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.paimai.create');
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
        $paimai = new Pm; 
        $paimai -> intro = $request->intro;
        $paimai -> cheng = $request->cheng;
        $paimai -> money = $request->money;
        $paimai -> jmoney = $request->jmoney;
        $paimai -> opentime = date('Y-m-d H:i',strtotime($request->opentime));
        $paimai -> overtime = date('Y-m-d H:i',strtotime($request->overtime));
        $paimai -> user_id = $request->user_id;
        $paimai -> xxcate_id = $request->xxcate_id;

        if($request->hasFile('image')){
             $paimai->image ='/'.$request->image->store('uploads/'.date('Ymd'));
        }

        if($paimai -> save()){
            return redirect('/paimai')->with('success','添加成功');
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
        //
        $paimai = Pm::findOrFail($id);
        $paimais = Pm::all();

        return view('admin.paimai.edit', compact('paimai','paimais'));
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
        $paimai = Pm::findOrFail($id);
        $paimai -> intro = $request->intro;
        $paimai -> cheng = $request->cheng;
        $paimai -> money = $request->money;
        $paimai -> jmoney = $request->jmoney;
        $paimai -> opentime = date('Y-m-d H:i',strtotime($request->opentime));
        $paimai -> overtime = date('Y-m-d H:i',strtotime($request->overtime));
        $paimai -> user_id = $request->user_id;
        $paimai -> xxcate_id = $request->xxcate_id;

        //文件上传
        //检测是否有文件上传

        if ($request->hasFile('image')) {
            $paimai->image = '/'.$request->image->store('uploads/'.date('Ymd'));
        }else{
            echo 111;
        }

        //插入
        if($paimai -> save()){
            return redirect('/paimai')->with('success','修改成功');
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
        //
        $paimai = Pm::findOrFail($id);
        if($paimai -> delete()){
            return back()->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
    }


}
