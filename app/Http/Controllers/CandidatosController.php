<?php

namespace App\Http\Controllers;

use App\Candidato;
use Illuminate\Http\Request;

class CandidatosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $candidatos = Candidato::latest()->paginate(10);

        return view('candidatos.index', compact('candidatos'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('candidatos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'cedula' => 'required|numeric|unique:candidatos|digits_between:10,13',
            'numero_movil' => 'required|numeric',
            'email' => 'required|email:rfc'
        ]);
        Candidato::create($validated);

        return redirect()->route('candidatos.index')->with('success', 'Candidato almacenado con exito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Candidato  $candidato
     * @return \Illuminate\Http\Response
     */
    public function show(Candidato $candidato)
    {
        return view('candidatos.show', compact('candidato'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Candidato  $candidato
     * @return \Illuminate\Http\Response
     */
    public function edit(Candidato $candidato)
    {
        return view('candidatos.edit', compact('candidato'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Candidato  $candidato
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Candidato $candidato)
    {
        $validated = $request->validate([
            'cedula' => 'required|numeric|unique:candidatos|digits_between:10,13',
            'numero_movil' => 'required|numeric',
            'email' => 'required|email:rfc'
        ]);
        $candidato->update($validated);

        return redirect()->route('candidatos.index')->with('success', 'Candidato actualizado.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Candidato  $candidato
     * @return \Illuminate\Http\Response
     */
    public function destroy(Candidato $candidato)
    {
        //
    }
}
