<?php

namespace App\Http\Controllers;

use App\Models\ComicBook;
use App\Http\Requests\StoreComicBookRequest;
use App\Http\Requests\UpdateComicBookRequest;

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
    public function store(StoreComicBookRequest $request)
    {
        // $request = $request->except([':token', '_method']);
        $request = $request->validated();

        $newBook = new ComicBook();  
        $newBook->fill($request);
        $newBook->save();

        return to_route('comicbook.show', $newBook->id);
        //return redirect()->route('comicbook.show', $newBook->id);

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
    public function update(UpdateComicBookRequest $request, ComicBook $comicbook)
    {
        $request = $request->validated();

        $comicbook->fill($request);
        $comicbook->update();

        return to_route('comicbook.index', $comicbook->id);
        //return redirect()->route('comicbook.show', $comicbook->id);

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
        return to_route('comicbook.index');
        //return redirect()->route('comicbook.index');
    }

}
