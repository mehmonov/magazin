<?php

namespace App\Http\Controllers;

use App\Models\Mahsulot;
use Illuminate\Http\Request;

class MahsulotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahsulotlar = Mahsulot::all();
        return view('mahsulot.index', compact('mahsulotlar'));
    }
    public function getProductData(Request $req)
    {
        $mahsulot = Mahsulot::where('name','LIKE','%'.$req->s.'%')->get();
       
        return response()->json(['data'=>$mahsulot]);
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
     * @param  \App\Models\Mahsulot  $mahsulot
     * @return \Illuminate\Http\Response
     */
    public function show(Mahsulot $mahsulot)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mahsulot  $mahsulot
     * @return \Illuminate\Http\Response
     */
    public function edit(Mahsulot $mahsulot)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mahsulot  $mahsulot
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mahsulot $mahsulot)
    {
        dd($request);   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mahsulot  $mahsulot
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mahsulot $mahsulot)
    {
       
        $mahsulot->delete($mahsulot);
        return redirect()->route('mahsulot.index');

    }
}
