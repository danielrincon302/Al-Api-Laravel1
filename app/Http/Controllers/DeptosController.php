<?php

namespace App\Http\Controllers;

use App\Models\Deptos;
use Illuminate\Http\Request;

class DeptosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$deptos = Deptos::latest()->paginate(10);
        return [
            "data" => $deptos
        ];*/
        $deptos = Deptos::get();
        return [
            "data" => $deptos
        ];
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\Deptos  $deptos
     * @return \Illuminate\Http\Response
     */
    public function show(Deptos $deptos)
    {
        return [
            "data" =>$deptos
        ];
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Deptos  $deptos
     * @return \Illuminate\Http\Response
     */
    public function edit(Deptos $deptos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Deptos  $deptos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Deptos $deptos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Deptos  $deptos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Deptos $deptos)
    {
        //
    }
}
