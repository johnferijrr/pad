<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCivitasRequest;
use App\Http\Requests\UpdateCivitasRequest;
use App\Models\Civitas;

class CivitasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('civitas.data')->with([
            'civitas' => Civitas::all()
        ]);
    }

    

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCivitasRequest $request)
    {
        $validate = $request->validated(); 
    }

    /**
     * Display the specified resource.
     */
    public function show(Civitas $civitas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Civitas $civitas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCivitasRequest $request, Civitas $civitas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Civitas $civitas)
    {
        //
    }
}
