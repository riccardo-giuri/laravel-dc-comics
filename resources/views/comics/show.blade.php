@extends("layouts.cardDisplay")

@section("CardsContent")
    <main>
        <div class="comicsContainer pt-4">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <img src={{ $selectedComic->imageURL}} alt="" class="w-100">
                    </div>

                    <div class="col-6">
                        <ul class="comicDetails">
                            <li>
                                <span class="list_item_title">Titolo: </span>
                                <span>{{$selectedComic->title}}</span>
                            </li>
                            <li>
                                <span class="list_item_title">Serie: </span>
                                <span>{{$selectedComic->series}}</span>
                            </li>
                            <li>
                                <span class="list_item_title">Tipo: </span>
                                <span>{{$selectedComic->type}}</span>
                            </li>
                            <li>
                                <span class="list_item_title">Data di uscita: </span>
                                <span>{{$selectedComic->sale_date}}</span>
                            </li>
                            <li>
                                <span class="list_item_title">Prezzo: </span>
                                <span>{{$selectedComic->price}}€</span>
                            </li>
                            <li>
                                <span class="list_item_title">Descrizione: </span>
                                <span>{{$selectedComic->description}}</span>
                            </li>
                            <li>
                                <span class="list_item_title">Scrittori: </span>
                                <span>{{$selectedComic->writers}}</span>
                            </li>
                            <li>
                                <span class="list_item_title">Artisti: </span>
                                <span>{{$selectedComic->artists}}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection