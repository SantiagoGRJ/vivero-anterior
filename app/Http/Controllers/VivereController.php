<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVivereRequest;
use App\Models\Vivere;
use Illuminate\Http\Request;

class VivereController extends Controller
{
    public function index()
    {
        //
        $viveres=Vivere::all();
        return view('viveres.index',compact('viveres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('viveres.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVivereRequest $request)
    {
        //
        Vivere::create($request->validated());
        return redirect()->route("viveres.index")->with("success","");
    }

    /**
     * Display the specified resource.
     */
    public function show(Vivere $vivere)
    {
        //
        return view('viveres.show',compact('vivere'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vivere $vivere)
    {
        //
        return view('viveres.edit',compact('vivere'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreVivereRequest $request, Vivere $vivere)
    {
        //
        $vivere->update($request->validated());
        return redirect()->route('viveres.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vivere $vivere)
    {
        //
        $vivere->delete();
        return redirect()->route('viveres.index');
    }
}
