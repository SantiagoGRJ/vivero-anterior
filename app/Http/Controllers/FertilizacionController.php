<?php

namespace App\Http\Controllers;
use App\Models\Fertilizacion;
use Illuminate\Http\Request;

class FertilizacionController extends Controller
{
    public function index()
    {
        //
        $fertilizacion=Fertilizacion::all();
        return view("fertilizacion.index",compact("fertilizacion"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("fertilizacion.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Fertilizacion::create($request->all());
        return redirect()->route('fertilizacion.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Fertilizacion $fertilizacion)
    {
        //
        return view('fertilizacion.show',compact('fertilizacion'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fertilizacion $fertilizacion)
    {
        //
        return view('fertilizacion.edit',compact('fertilizacion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Fertilizacion $fertilizacion)
    {
        //
        $fertilizacion->update($request->all());
        return redirect()->route('fertilizacion.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fertilizacion $fertilizacion)
    {
        //
        $fertilizacion->delete();
        return redirect()->route('fertilizacion.index');
    }
}
