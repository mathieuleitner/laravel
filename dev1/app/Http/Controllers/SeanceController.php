<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Seance;
use App\Models\Film;
use App\Models\Cinema;
use App\Models\Salle;

class SeanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('seances.index', ['seances' => Seance::all()]);//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('seances.create', [
            'films' => Film::all(),
            'cinemas' => Cinema::all(),
            'salles' => Salle::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Seance::create($request->all());
        return redirect()->route('seance.index')->with('ok', __('La seance a bien été enregistrée'));//
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Seance $seance)
    {
        return view('seances.edit', [
            'seance' => $seance, 
            'films' => Film::all(),
            'cinemas' => Cinema::all(),
            'salles' => Salle::all()
            ]);//
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Seance $seance)
    {
        $seance->update($request->all());
        return redirect()->route('seance.index')->with('ok', __('La séance a bien été modifié.'));////
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seance $seance)
    {
        $success=$seance->delete();

        if($success){
            return 'well played';
        }
        else{
            return 'fail';
        }

    }
}
