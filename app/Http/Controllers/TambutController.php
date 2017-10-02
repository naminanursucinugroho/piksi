<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tambut;

class TambutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request)
    {
        //
        $tambut = tambut::all();
        return view('tambut.index',compact('tambut'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('tambut.create');
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
        $tambut=new tambut;
        $tambut->nama=$request->a;
        $tambut->stok = $request->b;
        $tambut->harga = $request->c;
        if($request->hasfile('cover')){
            $tambuts=$request->file('cover');
            $extension=$tambuts->getClientOriginalExtension();
            $filename=str_random(6). '.' .$extension;
            $destinationPath=public_path() .
            DIRECTORY_SEPARATOR . 'img';
            $tambuts->move($destinationPath ,$filename);
            $tambut->cover=$filename;
        }
        $tambut->save();
        return redirect()->route('tambut.index');
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
         $tambut = tambut::findOrFail($id);
        return view('tambut.show', compact('tambut'));
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
         $tambut = tambut::findOrFail($id);
        return view('tambut.edit', compact('tambut'));
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
         $tambut = tambut::findOrFail($id);
         $tambut->nama=$request->a;
        $tambut->stok = $request->b;
        $tambut->harga = $request->c;
        if($request->hasfile('cover')){
            $tambuts=$request->file('cover');
            $extension=$tambuts->getClientOriginalExtension();
            $filename=str_random(6). '.' .$extension;
            $destinationPath=public_path() .
            DIRECTORY_SEPARATOR . 'img';
            $tambuts->move($destinationPath ,$filename);
            $tambut->cover=$filename;
        }
        $tambut->save();
        return redirect()->route('tambut.index');
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
          $tambut = tambut::findOrFail($id);
        $tambut ->delete();
        return redirect()->route('tambut.index');
    }
}
