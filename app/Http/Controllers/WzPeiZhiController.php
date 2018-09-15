<?php

namespace App\Http\Controllers;

use App\WzPeiZhi;
use Illuminate\Http\Request;

class WzPeiZhiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peizhi = WzPeiZhi::first();
        return view('admin.wzpz',compact('peizhi'));
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
        //
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
        $peizhi = WzPeiZhi::find($id);
        $peizhi->title = $request->title; 
        $peizhi->logo = $request->logo;
        $peizhi->pic1 = $request->pic1;
        $peizhi->pic2= $request->pic2;
        $peizhi->pic3 = $request->pic3;
        
        //文件上传
        //检测是否有文件上传
         if ($request->hasFile('logo')) {
            $peizhi->logo = '/'.$request->logo->store('uploads/peizhi/'.date('Ymd'));
        }   

        if ($request->hasFile('pic1')) {
            $peizhi->pic1 = '/'.$request->pic1->store('uploads/peizhi/'.date('Ymd'));
        }
        if ($request->hasFile('pic2')) {
            $peizhi->pic2 = '/'.$request->pic2->store('uploads/peizhi/'.date('Ymd'));
        }
        if ($request->hasFile('pic3')) {
            $peizhi->pic3 = '/'.$request->pic3->store('uploads/peizhi/'.date('Ymd'));
        }


        if($peizhi -> save()){
            return back()->with('success','修改成功');
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
    }
}
