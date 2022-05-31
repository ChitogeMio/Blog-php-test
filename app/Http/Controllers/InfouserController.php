<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Infouser;

class InfouserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $infousers = Infouser::paginate(5);
        return view('index', compact('infousers'))->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create');
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
        Infouser::create($request->all());
        return redirect()->route('infousers.index')->with('thongbao','them user thanh cong');
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
    public function edit(Infouser $infousers)
    {
        //
        return view('edit',  compact('infousers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Infouser $infousers)
    {
        //
        $infousers->update($request->all());
        return redirect()->route('infousers.index')->with('thongbao','Cap nhap sinh vien thanh cong');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Infouser $infousers)
    {
        //
        $infousers->delete();
        return redirect()->route('infousers.index')->with('thongbao','delete success');
    }
}
