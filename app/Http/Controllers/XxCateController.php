<?php

namespace App\Http\Controllers;

use App\DCate;
use App\XCate;
use App\XxCate;
use Illuminate\Http\Request;

class XxCateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //读取数据库 获取用户数据
        $xxcates = XxCate::orderBy('id','desc')
            ->where('name','like', '%'.request()->keywords.'%')
            ->paginate(10);
        //解析模板显示用户数据
        return view('admin.xxcate.index', ['xxcates'=>$xxcates]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dcate = DCate::all();

        $xcate = XCate::all();

        return view('admin.xxcate.create',['dcates'=>$dcate,'xcates'=>$xcate]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $xxcate = new XxCate;

        $xxcate->name = $request->name;

        $xxcate->xcate_id = $request->xcate_id;

         if($xxcate->save()){
            return back()->with('success','添加三级级分类成功');
        }else{
            return back()->with('error','添加三级分类失败');
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
        //获取用户的信息
        $xcate = XCate::findOrFail($id);
        $xxcate = XxCate::findOrFail($id);
        $dcate = DCate::all();
        $xcates = XCate::all();

        //解析模板显示数据
        return view('admin.xxcate.edit', ['xcate'=>$xcate,'dcates'=>$dcate,'xxcates'=>$xxcate,'xcates'=>$xcates]);
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
        $xxcate = XxCate::findOrFail($id);

        $xxcate->name = $request->name;

        $xxcate->xcate_id = $request->xcate_id;

         if($xxcate->save()){
            return redirect('/xxcate')->with('success','修改三级级分类成功');
        }else{
            return back()->with('error','修改三级分类失败');
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
        $xxcate = XxCate::findOrFail($id);

        if($xxcate->delete()){
            return back()->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
    }
}
