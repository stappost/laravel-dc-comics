@extends ('layouts.comic')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 my-4">
                <h3>Aggiungi un nuovo fumetto</h3>
                <form action="{{ route('comics.update', ['comic' => $comic]) }}" method="post">
                    @csrf

                    @method('PUT')
                    <div class="form-group">
                        <label for="title">Titolo</label>
                        <input type="text" name="title" id="title" placeholder="Titolo" class="form-control"
                            value="{{ $comic->title }}">
                    </div>
                    <div class="form-group">
                        <label for="thumb">URL Immagine</label>
                        <input type="text" name="thumb" id="thumb" placeholder="URL Immagine" class="form-control"
                            value="{{ $comic->thumb }}">
                    </div>
                    <div class="form-group">
                        <label for="series">Serie</label>
                        <input type="text" name="series" id="series" placeholder="Serie" class="form-control"
                            value="{{ $comic->series }}">
                    </div>
                    <div class="form-group">
                        <label for="type">Tipo</label>
                        <input type="text" name="type" id="type" placeholder="tipo" class="form-control"
                            value="{{ $comic->type }}">
                    </div>
                    <div class="form-group">
                        <label for="price">prezzo</label>
                        <input type="text" name="price" id="price" placeholder="prezzo" class="form-control"
                            value="{{ $comic->price }}">
                    </div>
                    <div class="form-group">
                        <label for="sale_date">Data di vendita</label>
                        <input type="text" name="sale_date" id="sale_date" placeholder="Data di vendita"
                            class="form-control" value="{{ $comic->sale_date }}">
                    </div>
                    <div class="form-group">
                        <label for="writers">Scritto da:</label>
                        <input type="text" name="writers" id="writers" placeholder="Scritto da:" class="form-control"
                            value="{{ $comic->writers }}">
                    </div>
                    <div class="form-group">
                        <label for="arts">Artisti</label>
                        <input type="text" name="arts" id="arts" placeholder="Artisti" class="form-control"
                            value="{{ $comic->arts }}">
                    </div>
                    <div class="form-group">
                        <label for="description">Descrizione</label>
                        <textarea name="description" id="description" cols="30" rows="10" placeholder="Descrizione"
                            class="form-control">{{ $comic->description }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-sm btn-success">Salva</button>
                </form>

            </div>
        </div>
    </div>
@endsection
