@extends ('layouts.comic')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 my-4">
                <h3>Aggiungi un nuovo fumetto</h3>
                <form action="{{ route('comics.store') }}" method="post">
                    @csrf

                    <div class="form-group">
                        <label for="title">Titolo</label>
                        <input type="text" name="title" id="title" placeholder="Titolo" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="thumb">URL Immagine</label>
                        <input type="text" name="thumb" id="thumb" placeholder="URL Immagine" class="form-control"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="series">Serie</label>
                        <input type="text" name="series" id="series" placeholder="Serie" class="form-control"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="type">Tipo</label>
                        <input type="text" name="type" id="type" placeholder="tipo" class="form-control"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="price">prezzo</label>
                        <input type="text" name="price" id="price" placeholder="prezzo" class="form-control"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="sale_date">Data di vendita</label>
                        <input type="text" name="sale_date" id="sale_date" placeholder="Data di vendita"
                            class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="writers">Scritto da:</label>
                        <input type="text" name="writers" id="writers" placeholder="Scritto da:" class="form-control"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="arts">Artisti</label>
                        <input type="text" name="arts" id="arts" placeholder="Artisti" class="form-control"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="description">Descrizione</label>
                        <textarea name="description" id="description" cols="30" rows="10" placeholder="Descrizione"
                            class="form-control" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-sm btn-success">Salva</button>
                </form>

            </div>
        </div>
    </div>
@endsection
