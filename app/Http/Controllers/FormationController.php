<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormationRequest;
use App\{
    Formation,
    Categorie
};

class FormationController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($slug = null) {
        // $formations = Formation::all(); si on n'utilise pas la 
        $query = $slug ? Categorie::whereSlug($slug)->firstOrFail()->formations() : Formation::query();
        //$formations = $query->withTrashed()->oldest('nomformation')->paginate(15);
        $formations = $query->oldest('nomformation')->paginate(15);
        $categories = Categorie::all();
        return view('index', compact('formations', 'categories', 'slug'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $categories=Categorie::all();
        return view('create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormationRequest $request) {
        Formation::create($request->all());
        return redirect()->route('formation.index')->with('info', 'La formation a bien été créé');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Formation $formation) {
        $categorie=$formation->categorie->nom;
        return view('show', compact('formation','categorie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Formation $formation) {
        return view('edit', compact('formation'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FormationRequest $request, Formation $formation) {
        //
        $formation->update($request->all());
        return redirect()->route('formation.index')->with('info', 'La formation a bien été modifiée');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Formation $formation) {
        $formation->delete();
        return back()->with('info', 'La formation a bien été supprimée');
    }

}
