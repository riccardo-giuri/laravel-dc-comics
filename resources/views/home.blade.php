@extends("layouts.homePublic")

@section("mainContent")
    <main>
        <div class="jumbotron"></div>

        <div class="comicsContainer">
            <div class="container">
                <div class="row row-cols-6">
                    @foreach ($comics as $comic)
                        <div class="col">
                            <div class="cardContainer">
                                <img src={{ $comic["thumb"] }} alt="">
                        
                                <div class="comicName"> {{ $comic["series"] }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>  
    </main>
@endsection