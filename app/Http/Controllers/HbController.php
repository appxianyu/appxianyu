<?php

namespace App\Http\Controllers;

use App\Hb;
use Illuminate\Http\Request;

class HbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //读取数据库， 获取用户数据
        $huobans = Hb::orderBy('id','desc')
            ->where('name','like', '%'.request()->keywords.'%')
            ->paginate(8);

        //解析模板显示到用户数据
        return view('admin.huoban.index', ['huobans'=>$huobans]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.huoban.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $huobans = new Hb;

        $huobans -> name = $request->name;
        //$huobans -> logo = $request->logo;
        $huobans -> url = $request->url;
        $huobans -> intro = $request->intro;


        if ($request->hasFile('logo')) {
            $huobans->logo = '/'.$request->logo->store('uploads/'.date('Ymd'));
        }

        if($huobans -> save()){
            return redirect('/huoban')->with('success','添加成功');
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
        $huobans = Hb::find($id);

        return view('admin.huoban.edit', ['huobans'=>$huobans]);
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
        
        $huobans = Hb::find($id);
        $huobans->name = $request->name; 
        $huobans->intro = $request->intro; 
        // $huobans->logo = $request->logo;  
        $huobans->url = $request->url; 


        if ($request->hasFile('logo')) {
            $huobans->logo = '/'.$request->logo->store('uploads/'.date('Ymd'));
        }
        
        if($huobans -> save()){
            return redirect('/huoban')->with('success','修改成功');
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
        $huobans = Hb::find($id);
        $huobans -> delete();

        if($huobans -> delete()){
          return redirect('/huoban')->with('success','删除成功');  
        }else{
             return back()->with('error','删除失败');   
        }
    }


    //合作伙伴
    public function hezuo()
    {   
        $huobans = Hb::all();
        return view('home.hezuo.hz',['huobans'=>$huobans]);
    }


    
}
