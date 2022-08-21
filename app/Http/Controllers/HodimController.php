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
        $hodim = new Hodim();
        $hodim->fish = $request->fish;
        $hodim->role_id = $request->role_id;
        $hodim->phone1 = $request->phone1;
        $hodim->phone2 = $request->phone2;
       $hodim->t_sana = $request->t_sana;
       $hodim->description = $request->description;
       $hodim->img = $request->rasm;
       $hodim->password = $request->password;

        $hodim->save();
        return redirect()->route('hodim.index');
        
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
        $hodim = Hodim::find($request->id);
        $hodim->fish = $request->fish;
        if ($request->role_id != null) {
            $hodim->role_id = $request->role_id;
        }
        
        $hodim->phone1 = $request->phone1;
        $hodim->phone2 = $request->phone2;
         $hodim->t_sana = $request->t_sana;
            $hodim->description = $request->description;
            $hodim->img = $request->rasm;
            $hodim->password = $request->password;
            $hodim->save();
            return redirect()->route('hodim.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hodim  $hodim
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hodim $hodim)
    {
      
        $hodim->delete();
        return redirect()->route('hodim.index');
    }
    public function delete($id)
    {
        dd($id);
        // $hodim = Hodim::find($id);
        // $hodim->delete();
        // return redirect()->route('hodim.index');
    }
   
}
