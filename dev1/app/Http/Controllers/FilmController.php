<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\FilmRequest;

use App\Models\Artiste;

use App\Models\Film;

class FilmController extends Controller
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
        
        /*dd($this->getEloquentSqlWithBindings(Film::whereHas('acteurs', function($query){
            $query->where('nom', 'Allen');
        })));*/
        
        return view('films.index', [ 'films' => Film::paginate(10) ]);//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('films.create', ['artistes' => Artiste::all()]);//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FilmRequest $request)
    {
        Film::create($request->all());
        return redirect()->route('film.index')->with('ok', __('l\'film a bien été enregistré'));//
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
    public function edit(Film $film)
    {
        $this->authorize ('films.manage', $film);
        return view('films.edit', [
            'film' => $film, 
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
    public function update(FilmRequest $request, Film $film)
    {
        $film->update($request->all());
        return redirect()->route('film.index')->with('ok', __('Le film a bien été modifié.'));////
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Film $film)
    {
        $success=$film->delete();

        if($success){
            return 'well played';
        }
        else{
            return 'fail';
        }
       // return response()->json();//
    }

    //LARAVEL DEBUG
    public static function getEloquentSqlWithBindings($query)
	{
	    return vsprintf(str_replace('?', '%s', $query->toSql()), collect($query->getBindings())->map(function ($binding) {
	        return is_numeric($binding) ? $binding : "'{$binding}'";
	    })->toArray());
    }
    
    //Acteurs
    /*public function acteurs_films(){
        $acteurs = \App\Models\Film::where('titre', $this->titre)->first()->acteurs()->get();
        return $acteurs;
    }*/

}
