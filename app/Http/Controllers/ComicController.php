<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use illuminate\support\Str;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->all();

        $newComic = new Comic;
        $newComic->title = $data['title'];
        $newComic->thumb = $data['thumb'];
        $newComic->price = $data['price'];
        $newComic->series = $data['series'];
        $newComic->sale_date = $data['sale_date'];
        $newComic->type = $data['type'];
        $newComic->slug = Str::slug( $newComic->title .'-').'-' .$newComic->id;
        $newComic->save();

        $request->session()->flash('message', 'Creazione di ' . $newComic->title . ' effettuata con successo');
        return redirect()->route('comics.show', $newComic->slug);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $comic = Comic::where('slug', $slug)->firstOrFail();
        return view('comics.show',compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $comic = Comic::where('slug', $slug)->firstOrFail();
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $sentData = $request -> all();
        $comic = Comic::where('slug', $slug)->firstOrFail();
        $comic->title = $sentData['title'];
        $comic->thumb = $sentData['thumb'];
        $comic->price = $sentData['price'];
        $comic->series = $sentData['series'];
        $comic->sale_date = $sentData['sale_date'];
        $comic->type = $sentData['type'];
        $comic->slug = $sentData['slug'];
        $comic->save();

        $request->session()->flash('message', 'Update effettuato con successo!' . $comic->title);

        return redirect()->route('comics.show',$comic->slug);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$slug)
    {

        $comic = Comic::where('slug', $slug)->firstOrFail();
        $comic->delete();

        $request->session()->flash('message', 'Eliminazione effettuata con successo!');
        return redirect()->route('comics.index');
    }
}
