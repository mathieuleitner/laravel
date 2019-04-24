<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Image;

use App\Http\Requests\ArtisteRequest;

use App\Models\Artiste;

class ArtisteController extends Controller
{
    public function __construct(){
        $this->middleware('ajax')->only('destroy');
       /* $this->middleware('auth')->only(['edit']);*/
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*dd(Artiste::where('annee_naissance','<=',1950)->get());*/
        return view('artistes.index', [ 'artistes' => Artiste::paginate(10) ]);//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Artiste $artiste)
    {
        /*Auth()->user()->notify(new ArtisteCreated($artiste));*/
        return view('artistes.create');//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArtisteRequest $request)
    {
       /* $artiste = Artiste::create($request->all());

        $poster = $request->file('poster');
        $filename = 'poster_' . $artiste->id . '.' . $poster->getClientOriginalExtension();

        Image::make($poster)->fit(180,240)->save(public_path('/uploads/posters/' . $filename));*/

        return redirect()->route('artiste.index')->with('ok', __('l\'artiste a bien été enregistré'));//
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
    public function edit(Artiste $artiste)
    {
        $this->authorize('artistes.edit', $artiste);
        return view('artistes.edit', ['artiste' => $artiste]);//
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ArtisteRequest $request, Artiste $artiste)
    {
        $artiste->update($request->all());
        return redirect()->route('artiste.index')->with('ok', __('l\'artiste a bien été modifié'));////
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artiste $artiste)
    {
        $success=$artiste->delete();

        if($success){
            return 'well played';
        }
        else{
            return 'fail';
        }
       // return response()->json();//
    }
}
