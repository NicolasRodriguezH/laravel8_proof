<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Seller;
use Illuminate\Http\Request;

class SuperUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sellers = Seller::all();

        return view('admin.superusers.index', compact('sellers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.superusers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'cedula' => 'required',
            'nombre' => 'required',
            'email' => 'required|unique:sellers',
            'telefono' => 'required'
        ]);

        $seller = Seller::create($request->all());
        return redirect()->route('admin.superusers.edit', $seller)->with('info', 'El vendedor se registro con exito');

    }

    public function edit(Seller $superuser)
    {
        return view('admin.superusers.edit', compact('superuser'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Seller $superuser)
    {
        $request->validate([
            'cedula' => 'required',
            'nombre' => 'required',
            'email' => "required|unique:sellers,email,$superuser->id",
            'telefono' => 'required'
        ]);

        $superuser->update($request->all());

        return redirect()->route('admin.superusers.edit', $superuser)->with('info', 'La informacion se actualizo con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seller $superuser)
    {

        $superuser->delete();
        return redirect()->route('admin.superusers.index')->with('info', 'El vendedor se elimino con exito');
    }
}
