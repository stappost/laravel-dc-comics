<?php

namespace App\Http\Controllers;

use App\Models\comic;
use Illuminate\Http\Request;

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
        return view('comics', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form_data = $request->all();

        $comic = new Comic();
        $comic->title = $form_data['title'];
        $comic->description = $form_data['description'];
        $comic->thumb = $form_data['thumb'];
        $comic->series = $form_data['series'];
        $comic->type = $form_data['type'];
        $comic->price = $form_data['price'];
        $comic->sale_date = $form_data['sale_date'];
        $form_data['writers'] = json_encode($form_data['writers']);
        $comic->writers = $form_data['writers'];
        $form_data['arts'] = json_encode($form_data['arts']);
        $comic->arts = $form_data['arts'];

        $comic->save();
        


        return redirect()->route('comics.index', ['comic' => $comic]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(comic $comic)
    {
        $comic['arts'] = explode(',', $comic['arts']);
        $comic['writers'] = explode(',', $comic['writers']);
        // $comic['writers'] = json_decode($comic['writers']);
        // $comic['arts'] = json_decode($comic['arts']);
        return view('details', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(comic $comic)
    {
        return view('edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, comic $comic)
    {
        $form_data = $request->all();

        $comic->title = $form_data['title'];
        $comic->description = $form_data['description'];
        $comic->thumb = $form_data['thumb'];
        $comic->series = $form_data['series'];
        $comic->type = $form_data['type'];
        $comic->price = $form_data['price'];
        $comic->sale_date = $form_data['sale_date'];
        $form_data['writers'] = json_encode($form_data['writers']);
        $comic->writers = $form_data['writers'];
        $form_data['arts'] = json_encode($form_data['arts']);
        $comic->arts = $form_data['arts'];

        $comic->update();
        
        return redirect()->route('comics.show', ['comic' => $comic]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.store');
    }
}
