<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ComicBook;
use Illuminate\Support\Facades\Validator;

class ComicBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comicBooks = ComicBook::all();
        $navElements = config('store.navbarElements');
        $movies = config('comics');
        $infoList = config('store.infoList');

        return view('comicbook.index', compact('comicBooks', 'navElements', 'movies', 'infoList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $navElements = config('store.navbarElements');
        $movies = config('comics');
        $infoList = config('store.infoList');

        return view('comicbook.create', compact('navElements', 'movies', 'infoList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request = $request->except([':token', '_method']);
        
        $this->checkRequest($request);

        $newBook = new ComicBook();
        $newBook->title = $request['title'];
        $newBook->description = $request['description'];
        $newBook->thumb = $request['thumb'];
        $newBook->price = $request['price'];
        $newBook->series = $request['series']; 
        $newBook->sale_date = $request['sale_date'];
        $newBook->type = $request['type'];
        
        $newBook->artists = $request['artists'];

        $newBook->writers = $request['writers'];

        $newBook->save();

        return redirect()->route('comicbook.show', $newBook->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ComicBook $comicbook)
    {
        // $comicBook = ComicBook::findOrFail($id);

        $navElements = config('store.navbarElements');
        $movies = config('comics');
        $infoList = config('store.infoList');

        return view('comicbook.show', compact('comicbook', 'navElements', 'movies', 'infoList'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ComicBook $comicbook)
    {

        $navElements = config('store.navbarElements');
        $movies = config('comics');
        $infoList = config('store.infoList');

        return view('comicbook.edit', compact('comicbook', 'navElements', 'movies', 'infoList'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ComicBook $comicbook)
    {
        $this->checkRequest($request);

        $comicbook->title = $request['title'];
        $comicbook->description = $request['description'];
        $comicbook->thumb = $request['thumb'];
        $comicbook->price = $request['price'];
        $comicbook->series = $request['series']; 
        $comicbook->sale_date = $request['sale_date'];
        $comicbook->type = $request['type'];
        
        $comicbook->artists = $request['artists'];

        $comicbook->writers = $request['writers'];

        $comicbook->update();

        return redirect()->route('comicbook.show', $comicbook->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ComicBook $comicbook)
    {
        $comicbook->delete();
        return redirect()->route('comicbook.index');
    }

    private function checkRequest($request) {

        $check = Validator::make($request->all(), [
            'title' => 'required|min:5|max:50',
            'description' => 'required',
            'thumb' => 'required|max:255',
            'price' => 'required',
            'series' => 'required',
            'sale_date' => 'required|date',
            'type' => 'required|min:3|max:30',
            'artists' => 'required|min:5|max:255',
            'writers' => 'required|min:5|max:255',
        ], [
            "title.required" => "Il Titolo è obbligatorio!",
            "title.min" => "Devi inserire almeno :min Caratteri",
            "title.max" => "Puoi inserire un massimo di :max caratteri",

            "description.required" => "La Descrizione è obbligatoria!",

            "thumb.required" => "Il Link dell'immagine è obbligatorio!",
            "thumb.max" => "Puoi inserire un massimo di :max caratteri",

            "price.required" => "Il Prezzo è obbligatorio!",

            "series.required" => "La Serie è obbligatoria!",

            "sale_date.required" => "La Data è obbligatoria",

            "type.required" => "Il Tipo è obbligatorio!",
            "type.min" => "Devi inserire almeno :min Caratteri",
            "type.max" => "Puoi inserire un massimo di :max caratteri",

            "artists.required" => "Gli Artisti sono obbligatori",
            "artists.min" => "Devi inserire almeno :min Caratteri",
            "artists.max" => "Puoi inserire un massimo di :max caratteri",

            "writers.required" => "Gli Scrittori sono obbligatori!",
            "writers.min" => "Devi inserire almeno :min Caratteri",
            "writers.max" => "Puoi inserire un massimo di :max caratteri",
        ])->validate();

        return $check;
    }
}
