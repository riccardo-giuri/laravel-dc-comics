<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel-comics-giuri</title>

    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body>
    @include('partials.header')

    <div class="comicsContainer pt-4">
        <h1 class="text-center text-light">Creazione nuovo Comics</h1>

        <div class="container">
            <form action="{{ route("comics.store") }}" method="post">
                @csrf
    
                <div class="mb-3 text-light">
                    <label for="form-label">Titolo</label>
                    <input type="text" class="form-control" name="title">
                </div>
                <div class="mb-3 text-light">
                    <label for="form-label">URL immagine</label>
                    <input type="text" class="form-control" name="imageURL">
                </div>
                <div class="mb-3 text-light">
                    <label for="form-label">Serie</label>
                    <input type="text" class="form-control" name="series">
                </div>
                <div class="mb-3 text-light">
                    <label for="form-label">Data Uscita</label>
                    <input type="date" class="form-control" name="sale_date">
                </div>
                <div class="mb-3 text-light">
                    <label for="form-label">Tipo</label>
                    <select type="text" class="form-control" name="type">
                        <option value="comic book">comic book</option>
                        <option value="graphic novel">graphic novel</option>
                        <option value="limited edition">limited edition</option>
                    </select>
                </div>
                <div class="mb-3 text-light">
                    <label for="form-label">Prezzo</label>
                    <input type="number" step="0.01" class="form-control" name="price">
                </div>
                <div class="mb-3 text-light">
                    <label for="form-label">Descrizione</label>
                    <textarea class="form-control" name="description"></textarea>
                </div>
                <div class="mb-3 text-light">
                    <label for="form-label">Artisti (divisi da una virgola e senza spazi)</label>
                    <input type="text" class="form-control" name="artists">
                </div>
                <div class="mb-3 text-light">
                    <label for="form-label">Scrittori (divisi da una virgola e senza spazi)</label>
                    <input type="text" class="form-control" name="writers">
                </div>
                <a href={{route("comics.index")}} class="btn btn-outline-light me-2">Indietro</a>
                <button class="btn btn-outline-light">Salva</button>
            </form>
        </div>
    </div>
</body>

</html>