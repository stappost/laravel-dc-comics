<?php

namespace App\Http\Controllers;

use App\Models\comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        $form_data = $this->validation($request->all());

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
        // $comic['writers'] = json_decode($comic['writers']);
        // $comic['arts'] = json_decode($comic['arts']);
        $comic['arts'] = explode(',', $comic['arts']);
        $comic['writers'] = explode(',', $comic['writers']);

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
        $form_data = $this->validation($request->all());

        $comic->title = $form_data['title'];
        $comic->description = $form_data['description'];
        $comic->thumb = $form_data['thumb'];
        $comic->series = $form_data['series'];
        $comic->type = $form_data['type'];
        $comic->price = $form_data['price'];
        $comic->sale_date = $form_data['sale_date'];
        $comic->writers = $form_data['writers'];
        $comic->arts = $form_data['arts'];
        
        $comic['arts'] = json_encode($comic['arts']);
        $comic['writers'] = json_encode($comic['writers']);
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

    private function validation($data){
        
        $validator = Validator::make(
            $data,
            [
                'title' => 'required|max:255' ,
                'description' => 'required',
                'thumb' => 'required',
                'series' => 'required|max:50',
                'type' => 'required|max:50',
                'price' => 'required|max:15',
                'sale_date' => 'required|max:15',
                'writers' => '',
                'arts' => ''
            ],
            [
                'title.required' => 'Il titolo è obbligatorio',
                'title.max' => 'Il titolo deve essere al massimo 255 caratteri',
                'description.required' => 'La descrizione è obbligatoria',
                'thumb.required' => 'Il link dell\'immagine è obbligatorio',
                'series.required' => 'La serie è obbligatoria',
                'series.max' => 'La serie deve essere al massimo 50 caratteri',
                'type.require' => 'Il tipo è obbligatorio',
                'type.max' => 'il tipo deve essere al massimo 50 caratteri',
                'price.require' => 'Il prezzo è obbligatorio',
                'price.max' => 'il prezzo deve essere al massimo 15 caratteri',
                'sale_date.require' => 'la data di vendita è obbligatoria',
                'sale_date.max' => 'la data di vendita deve essere al massimo 15 caratteri'
            ]
        )->validate();

        return $validator;
    }
}
