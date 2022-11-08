<?php

namespace App\Http\Controllers;

use App\Models\Mueble;
use App\Http\Requests\StoreMuebleRequest;
use App\Http\Requests\UpdateMuebleRequest;

class MuebleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $muebles = Mueble::all();
        return view('admin.muebles.index', compact('muebles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.muebles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMuebleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMuebleRequest $request)
    {
        Mueble::create($request->validated());
        return redirect()->route('admin.muebles.index')->with('success','Mueble creado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mueble  $mueble
     * @return \Illuminate\Http\Response
     */
    public function show(Mueble $mueble)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mueble  $mueble
     * @return \Illuminate\Http\Response
     */
    public function edit(Mueble $mueble)
    {
        return view('admin.muebles.edit', compact('mueble'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMuebleRequest  $request
     * @param  \App\Models\Mueble  $mueble
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMuebleRequest $request, Mueble $mueble)
    {
        $mueble->update($request->validated());
        return redirect()->route('admin.muebles.index')->with('success','Mueble editado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mueble  $mueble
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mueble $mueble)
    {
        $mueble->delete();
        return back();
    }
}
