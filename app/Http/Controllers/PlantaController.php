<?php

namespace App\Http\Controllers;

use App\Models\Planta;
use Illuminate\Http\Request;

class PlantaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $plantas = Planta::all();
        return view("plantas.index",compact('plantas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("plantas.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Planta::create($request->all());

        return redirect()->route("plantas.index")->with("success","");
    }

    /**
     * Display the specified resource.
     */
    public function show(Planta $planta)
    {
        //
        $planta=Planta::with("riegos","fertilizaciones","exposiciones")->findOrFail($planta->id);
        return view("plantas.show",compact("planta"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Planta $planta)
    {
        //
        return view("plantas.edit",compact("planta"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Planta $planta)
    {
        //

        $planta->update($request->all());
        return redirect()->route("plantas.index")->with("success","");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Planta $planta)
    {
        //
        $planta->delete();
        return redirect()->route("plantas.index")->with("success","");
    }
}
