<?php

namespace App\Http\Controllers;

use App\Models\Equipos;
use App\Http\Requests\StoreEquiposRequest;
use App\Http\Requests\UpdateEquiposRequest;

class EquiposController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipos = Equipos::all();
        return view('admin.equipos.index', compact('equipos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.equipos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEquiposRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEquiposRequest $request)
    {
        Equipos::create($request->validated());
        return redirect()->route('admin.equipos.index')->with('success', 'Equipo creado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Equipos  $equipos
     * @return \Illuminate\Http\Response
     */
    public function show(Equipos $equipos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Equipos  $equipos
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipos $equipos)
    {
        return view('admin.equipos.edit', compact('equipos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEquiposRequest  $request
     * @param  \App\Models\Equipos  $equipos
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEquiposRequest $request, Equipos $equipos)
    {
        $equipos->update($request->validated());
        return redirect()->route('admin.equipos.index')->with('success', 'Equipo editado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Equipos  $equipos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipos $equipos)
    {
        $equipos->delete();
        return back();
    }
}
