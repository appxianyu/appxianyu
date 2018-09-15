<?php

namespace App\Http\Controllers;

use App\DCate;
use App\XCate;
use Illuminate\Http\Request;

class XCateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //读取数据库 获取用户数据
        $xcates = XCate::orderBy('id','desc')
            ->where('name','like', '%'.request()->keywords.'%')
            ->paginate(10);
        //解析模板显示用户数据
        return view('admin.xcate.index', ['xcates'=>$xcates]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dcate = DCate::all();

        return view('admin.xcate.create',['dcates'=>$dcate]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $xcate = new XCate;

        $xcate->name = $request->name;

        $xcate->dcate_id = $request->dcate_id;

         if($xcate->save()){
            return back()->with('success','添加二级分类成功');
        }else{
            return back()->with('error','添加二级分类失败');
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
        $dcate = DCate::all();
        //解析模板显示数据
        return view('admin.xcate.edit', ['xcate'=>$xcate,'dcates'=>$dcate]);
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
        //获取用户的信息
        $xcate = XCate::findOrFail($id);

        //更新
        $xcate ->name = $request->name;

        $xcate -> dcate_id = $request->dcate_id;

        if($xcate->save()){
            return redirect('/xcate')->with('success','更新成功');
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
        $xcate = XCate::findOrFail($id);

        if($xcate->delete()){
            return back()->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
    }
}
