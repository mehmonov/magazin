<?php

namespace App\Http\Controllers;

use App\Models\Hodim;
use Illuminate\Http\Request;

class HodimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hodims = Hodim::all();
        return view('hodimlar.index',['hodims'=>$hodims]);
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
     * @param  \App\Models\Hodim  $hodim
     * @return \Illuminate\Http\Response
     */
    public function show(Hodim $hodim)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hodim  $hodim
     * @return \Illuminate\Http\Response
     */
    public function edit(Hodim $hodim)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hodim  $hodim
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hodim $hodim)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hodim  $hodim
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hodim $hodim)
    {
        //
    }
}
