<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ComicBook;

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
}
