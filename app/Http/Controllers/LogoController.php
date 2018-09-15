<?php

namespace App\Http\Controllers;

use App\DCate;
use App\Logo;
use Illuminate\Http\Request;

class LogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $logos = Logo::orderBy('id','desc')
            ->where('name','like', '%'.request()->keywords.'%')
            ->paginate(10);
        
        return view('admin.logo.index',compact('logos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dcate = DCate::all();
        return view('admin.logo.create',compact('dcate'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $logos = new Logo;

        $logos -> dcate_id = $request ->dcate_id;
        $logos -> name= $request ->name;
        //文件上传
        //检测是否有文件上传
       
        if ($request->hasFile('image')) {
            $logos->image = '/'.$request->image->store('uploads/logo/'.date('Ymd'));
        }

        
         
        if ($logos -> save()) {
            return redirect('logo')->with('success','添加成功');
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
        $logos = Logo::find($id);
        $dcate = DCate::all();
        return view('admin.logo.edit',compact('logos','dcate'));
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
         $logos = Logo::find($id);

        $logos -> dcate_id = $request ->dcate_id;
        $logos -> name= $request ->name;
        //文件上传
        //检测是否有文件上传
            
        if ($request->hasFile('image')) {
            $logos->image = '/'.$request->image->store('uploads/logo/'.date('Ymd'));
        }

        
        
        if ($logos -> save()) {
            return redirect('logo')->with('success','修改成功');
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
        $logos = Logo::find($id);
        
        // dd($id);
         if ($logos->delete()) {
            
            return back()->with('success','删除成功');
        }else{
            return redirect('logo')->with('error','删除失败');
        }
    }
}
