<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Beer;

class BeerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beers = Beer::all();
        return view('beers.index', ['beers' => $beers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('beers.create');
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
            'name' => 'required|max:50',
            'type' => 'required|max:50',
            'alcohol' => 'required|numeric',
            'description' => 'required',
            'price' => 'required|numeric'
        ]);

        $data = $request->all();
        
        $beer = new Beer();
        // $beer->name = $data['name'];
        // $beer->type = $data['type'];
        // $beer->alcohol = $data['alcohol'];
        // $beer->img = $data['img'];
        // $beer->description = $data['description'];
        // $beer->price = $data['price'];

        // fill prende tutte le chiavi che ho messo in fillable nel model e fa le stesse associazioni che ho sopra utilizzando le chiavi di data
        $beer->fill($data);
        $beer->save();

        return redirect()
            ->route('beers.index')
            ->with('message', 'La birra "'. $beer->name. '" è stata aggiunta correttamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $beers = Beer::find($id);
        if(empty($beers)){
            abort('404');
        }
        return view('beers.show', ['beers' => $beers]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $beer = Beer::findOrFail($id);
        return view('beers.edit', ['beer' => $beer]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Beer $beer)
    {
        $request->validate([
            'name' => 'required|max:50',
            'type' => 'required|max:50',
            'alcohol' => 'required|numeric',
            'description' => 'required',
            'price' => 'required|numeric'
        ]);
        $data = $request->all();
        $beer->update($data);
        return redirect()
            ->route('beers.index')
            ->with('message', 'La birra "'. $beer->name. '" è stata aggioranata correttamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Beer $beer)
    {
        $beer->delete();
        return redirect()
            ->route('beers.index')
            ->with('message', 'La birra "' . $beer->name . '" è stata eliminata correttamente');
    }
}
