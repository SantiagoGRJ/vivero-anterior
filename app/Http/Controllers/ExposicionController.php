<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreExposicionRequest;
use App\Models\Exposicion;
use Illuminate\Http\Request;

class ExposicionController extends Controller
{
    public function index()
    {
        //
        $exposicion = Exposicion::all();
        return view("exposicion.index",compact("exposicion"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("exposicion.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreExposicionRequest $request)
    {
        //

        Exposicion::create($request->validated());
        return redirect()->route('exposicion.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Exposicion $exposicion)
    {
        //
        return view('exposicion.show',compact('exposicion'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Exposicion $exposicion)
    {
        //
        return view('exposicion.edit',compact('exposicion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreExposicionRequest $request, Exposicion $exposicion)
    {
        //
        $exposicion->update($request->validated());
        return redirect()->route('exposicion.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Exposicion $exposicion)
    {
        //
        $exposicion->delete();
        return redirect()->route('exposicion.index');
    }
}
