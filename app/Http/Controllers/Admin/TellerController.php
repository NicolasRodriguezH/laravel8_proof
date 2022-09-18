<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Seller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* Seria mejor un input para filtrar registros? */
        //$sellers = Seller::paginate(4);
        $sellers = Seller::where('status', 1)->get();
        //Seller::all(1, Str::length($sellers) - 1);

        return view('admin.tellers.index', compact('sellers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Seller $teller)
    {
        return view('admin.tellers.edit', compact('teller'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Seller $teller)
    {
        $request->validate([
            'cedula' => 'required',
            'nombre' => 'required',
            'email' => "required|unique:sellers,email,$teller->id",
            'telefono' => 'required'
        ]);

        $teller->update($request->all());

        return redirect()->route('admin.tellers.edit', $teller)->with('info', 'La informacion se actualizo con exito');
    }
}
