<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\CinemaRequest;

use App\Models\Artiste;

use App\Models\Cinema;

class CinemaController extends Controller
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
        return view('cinemas.index', [ 'cinemas' => Cinema::paginate(10) ]);//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cinemas.create');//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CinemaRequest $request)
    {
        Cinema::create($request->all());
        return redirect()->route('cinema.index')->with('ok', __('Le cinema a bien été enregistré'));//
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
    public function edit(Cinema $cinema)
    {
        return view('cinemas.edit', [
            'cinema' => $cinema, 
            'artistes' => Artiste::all()
            ]);//
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CinemaRequest $request, Cinema $cinema)
    {
        $cinema->update($request->all());
        return redirect()->route('cinema.index')->with('ok', __('Le film a bien été modifié.'));////
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cinema $cinema)
    {
        $success=$cinema->delete();

        if($success){
            return 'well played';
        }
        else{
            return 'fail';
        }
       // return response()->json();//
    }
}
