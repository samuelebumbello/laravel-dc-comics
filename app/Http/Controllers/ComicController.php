<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();

        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("comics.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    //Con la request ricevo tutti i dati inviati dal form
    public function store(Request $request)
    {
        //Ricevo i dati dal form
        $form_data = $request->all();
        // dd($form_data);

        $new_comic = new Comic();
        // $new_comic->title = $form_data['title'];
        // $new_comic->slug = Comic::generateSlug($new_comic->title);
        // $new_comic->thumb = $form_data['thumb'];
        // $new_comic->series = $form_data['series'];
        // $new_comic->description = $form_data['description'];
        // $new_comic->type = $form_data['type'];

        $form_data['slug'] = Comic::generateSlug($form_data['title']);

        $new_comic->fill($form_data);

        $new_comic->save();

        // dd($new_comic);

        //Reindirizzo alla pagina show dopo l'invio dei dati
        return redirect()->route('comics.show',$new_comic);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comics.show' , compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        //
    }
}
