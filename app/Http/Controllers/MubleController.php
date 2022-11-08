<?php

namespace App\Http\Controllers;

use App\Models\Mubles;
use App\Http\Requests\StoreMublesRequest;
use App\Http\Requests\UpdateMublesRequest;

class MubleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mubles = Mubles::all();
        return view('admin.mubles.index', compact('mubles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.mubles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMublesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMublesRequest $request)
    {
        Mubles::create($request->validated());
        return redirect()->route('admin.mubles.index')->with('success', 'Mueble creado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mubles  $mubles
     * @return \Illuminate\Http\Response
     */
    public function show(Mubles $mubles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mubles  $mubles
     * @return \Illuminate\Http\Response
     */
    public function edit(Mubles $mubles)
    {
        return view('admin.mubles.edit', compact('mubles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMublesRequest  $request
     * @param  \App\Models\Mubles  $mubles
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMublesRequest $request, Mubles $mubles)
    {
        $mubles->update($request->validated());
        return redirect()->route('admin.mubles.index')->with('success', 'Mueble editado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mubles  $mubles
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mubles $mubles)
    {
        $mubles->delete();
        return back();
    }
}
