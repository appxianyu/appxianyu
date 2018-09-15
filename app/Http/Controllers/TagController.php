<?php

namespace App\Http\Controllers;

use App\Sp;
use App\Tag;
use App\XxCate;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         //读取数据库 获取用户数据
        $tags = Tag::orderBy('id','desc')
            ->where('name','like', '%'.request()->keywords.'%')
            ->paginate(10);
        //解析模板显示用户数据
        return view('admin.tag.index', ['tags'=>$tags]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 

        $tags = Tag::all();

        return view('admin.tag.create',['tags'=>$tags]);
         
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tags = new Tag;

        $tags->name = $request->name;

        if($tags->save()){
            return redirect('/tag')->with('success','添加标签成功');
        }else{
            return back()->with('error','添加标签失败');
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
        $tags = Tag::findOrFail($id);
        //解析模板显示数据
        return view('admin.tag.edit', ['tags'=>$tags]);
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
        $tags = Tag::findOrFail($id);

        //更新
        $tags ->name = $request->name;

        if($tags->save()){
            return redirect('/tag')->with('success','更新成功');
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
        $tags = Tag::findOrFail($id);

        if($tags->delete()){
            return back()->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
    }

   
}
