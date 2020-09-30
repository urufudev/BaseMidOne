<?php

namespace App\Http\Controllers;

use App\Models\Laboral;
use Illuminate\Http\Request;
use App\Http\Requests\LaboralStoreRequest;
use App\Http\Requests\LaboralUpdateRequest;

class LaboralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laborals = Laboral::orderBy('id', 'DESC')
            
            ->get();
        
        return view('laborals.index', compact('laborals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('laborals.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LaboralStoreRequest $request)
    {
        $laboral = Laboral::create($request->all());

        $notification = array(
            'message' => '<b>Registrado correctamente</b>', 
            'alert-type' => 'success'
        );

        return redirect()->route('laborals.index')
            ->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Laboral  $laboral
     * @return \Illuminate\Http\Response
     */
    public function show(Laboral $laboral)
    {
        return view('laborals.show', compact('laboral'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Laboral  $laboral
     * @return \Illuminate\Http\Response
     */
    public function edit(Laboral $laboral)
    {
        return view('laborals.edit',compact('laboral'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Laboral  $laboral
     * @return \Illuminate\Http\Response
     */
    public function update(LaboralUpdateRequest $request, Laboral $laboral)
    {
        $laboral->fill($request->all())
            ->save();

        return redirect()->route('laborals.index')
            ->with('info', 'REGIMEN LABORAL ACTUALIZADO CON EXITO');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Laboral  $laboral
     * @return \Illuminate\Http\Response
     */
    public function destroy(Laboral $laboral)
    {
        if ($laboral->status == 'ACTIVO') {
            $laboral->update(['status' => 'INACTIVO']);
            return back()->with('danger', 'SE CAMBIO A INACTIVO CORRECTAMENTE ');
        }
        else {
            $laboral->update(['status' => 'ACTIVO']);
            return back()->with('info', 'SE CAMBIO A ACTIVO CORRECTAMENTE ');
        }
    }
}
