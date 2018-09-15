<?php

namespace App\Http\Controllers;

use App\HuoDong;
use Illuminate\Http\Request;

class HuoDongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //读取数据库 获取用户数据
        $huodongs = HuoDong::orderBy('id','desc')
            ->where('title','like', '%'.request()->keywords.'%')
            ->paginate(10);
        //解析模板显示用户数据
        return view('admin.huodong.index', ['huodongs'=>$huodongs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.huodong.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $huodong = new HuoDong;
        
        $huodong -> title = $request -> title;
        $huodong -> content = $request -> content;
        $huodong -> opentime = date('Y-m-d H:i:s',strtotime($request->opentime));
        $huodong -> overtime = date('Y-m-d H:i:s',strtotime($request->overtime));

        if($huodong->save()){
            return back()->with('success','发布活动成功');
        }else{
            return back()->with('error','发布活动失败');
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
       
        $huodong = HuoDong::findOrFail($id);
        //解析模板显示数据
        return view('admin.huodong.edit', ['huodong'=>$huodong]);
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
        $huodong = HuoDong::findOrFail($id);
        
        $huodong -> title = $request -> title;
        $huodong -> content = $request -> content;
        $huodong -> opentime = $request->opentime;
        $huodong -> overtime = $request->overtime;

        if($huodong->save()){
            return redirect('/huodong')->with('success','修改活动成功');
        }else{
            return back()->with('error','修改活动失败');
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
        $huodong = HuoDong::findOrFail($id);

        if($huodong->delete()){
            return back()->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
    }
}
