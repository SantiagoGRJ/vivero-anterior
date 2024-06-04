<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRiegoRequest;
use App\Models\Riego;
use Illuminate\Http\Request;

class RiegoController extends Controller
{
    public function index()
    {
        //
        $Riego = Riego::all();
        return view("riegos.index",compact("Riego"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("riegos.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRiegoRequest $request)
    {
        //

        Riego::create($request->validated());
        return redirect()->route('riegos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Riego $riego)
    {
        //
        return view('riegos.show',compact('riego'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Riego $riego)
    {
        //
        return view('riegos.edit',compact('riego'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreRiegoRequest $request, Riego $riego)
    {
        //
        $riego->update($request->validated());
        return redirect()->route('riegos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Riego $riego)
    {
        //
        $riego->delete();
        return redirect()->route('riegos.index');
    }
}
