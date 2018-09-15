<?php

namespace App\Http\Controllers;

use App\Huo;
use Illuminate\Http\Request;

class HuoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $huo = Huo::orderBy('id','desc')
            ->where('name','like', '%'.request()->keywords.'%')
            ->paginate(10);
        return view('admin.huo.index',compact('huo'));
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
         
         $huo = new Huo;
        
        $huo-> name = $request -> name;
        $huo-> intro = $request -> intro;
        $huo-> tag = $request -> tag;
        $huo-> phone = $request -> phone;
        $huo-> province = $request -> province;
        $huo-> city = $request -> city;
        $huo-> area = $request -> area;

        if($huo->save()){
            return back()->with('success','添加收货地址成功');
        }else{
            return back()->with('error','添加收货地址失败');
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
        $huo = Huo::findOrFail($id);
         return view('admin.huo.edit', compact('huo'));
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
        $huo = Huo::findOrFail($id);
        
        $huo-> name = $request -> name;
        $huo-> intro = $request -> intro;
        $huo-> tag = $request -> tag;
        $huo-> phone = $request -> phone;
        $huo-> province = $request -> province;
        $huo-> city = $request -> city;
        $huo-> area = $request -> area;

        if($huo->save()){
            return redirect('/huo')->with('success','修改成功');
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
         $huo = Huo::findOrFail($id);

        if($huo->delete()){
            return back()->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
    }
}
