<?php

namespace App\Http\Controllers;

use App\Youlian;
use Illuminate\Http\Request;

class Youliancontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $youlians = Youlian::orderBy('id','desc')
            ->where('name','like', '%'.request()->keywords.'%')
            ->paginate(10);
        return view('admin.youlian.index',compact('youlians'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.youlian.create');
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
        $youlian = new Youlian;
        $youlian -> name = $request->name;
        $youlian -> url = $request->url;

        if($youlian->save()){
            return redirect('/youlian')->with('success','添加成功');  
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
        $youlians = Youlian::findOrFail($id);
        //解析模板显示数据
        return view('admin.youlian.edit', ['youlians'=>$youlians]);
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
        $youlians = Youlian::findOrFail($id);

        //更新
        $youlians->name = $request->name;
        $youlians->url = $request->url;

        if($youlians->save()){
            return redirect('/youlian')->with('success','更新成功');
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
        //
        $youlians = Youlian::findOrFail($id);

        if($youlians->delete()){
            return back()->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
    }
}
