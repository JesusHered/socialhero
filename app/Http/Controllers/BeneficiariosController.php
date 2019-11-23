<?php

namespace App\Http\Controllers;

use App\beneficiarios;
use Illuminate\Http\Request;

class BeneficiariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        beneficiarios::create(['nombre' => $request->nombre, 'usuario' => $request->usuario, 'correo' => $request->correo, 'password' => $request->password]);
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\beneficiarios  $beneficiarios
     * @return \Illuminate\Http\Response
     */
    public function show(beneficiarios $beneficiarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\beneficiarios  $beneficiarios
     * @return \Illuminate\Http\Response
     */
    public function edit(beneficiarios $beneficiarios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\beneficiarios  $beneficiarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, beneficiarios $beneficiarios)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\beneficiarios  $beneficiarios
     * @return \Illuminate\Http\Response
     */
    public function destroy(beneficiarios $beneficiarios)
    {
        //
    }
}
