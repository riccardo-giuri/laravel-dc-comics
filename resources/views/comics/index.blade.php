@extends("layouts.cardDisplay")

@section("CardsContent")
    <main>
        <div class="comicsContainer">
            <h1 class="text-center text-light mb-4 pt-4">Lista Comics</h1>
            <div class="text-center mb-4">
                <a href={{route("comics.create")}} class="btn btn-outline-light">Aggiungi un nuovo fumetto</a>
            </div>

            <div class="container">
                <div class="row row-cols-4">
                    @foreach ($comicsData as $comic)
                        <div class="col">
                            <div class="cardContainer">
                                <a href="{{route("comics.show", $comic->id)}}">
                                    <img src={{ $comic->imageURL }} alt="">
                            
                                    <div class="comicName"> {{ $comic->title }}</div>
                                    <div class="comicName">Data Uscita: {{ $comic->sale_date }}</div>
                                    <div class="comicName">Prezzo: {{ $comic->price }} €</div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>  
    </main>
@endsection


