<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\SalleRequest;

use App\Models\Salle;

use App\Models\Cinema;

class SalleController extends Controller
{
    public function __construct(){
        $this->middleware('ajax')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('salles.index', [ 'salles' => Salle::paginate(10) ]);//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('salles.create', ['cinemas' => Cinema::all()]);//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SalleRequest $request)
    {
        Salle::create($request->all());
        return redirect()->route('salle.index')->with('ok', __('La salle a bien été enregistrée'));//
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
    public function edit(Salle $salle)
    {
        return view('salles.edit', [
            'salle' => $salle, 
            'cinemas' => Cinema::all()
            ]);//
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SalleRequest $request, Salle $salle)
    {   
        $salle->update($request->all());
        return redirect()->route('salle.index')->with('ok', __('La salle a bien été modifié.'));////
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Salle $salle)
    {
        $success=$salle->delete();

        if($success){
            return 'well played';
        }
        else{
            return 'fail';
        }

    }
}
