@extends("layouts.homePublic")

@section("mainContent")
    <main>
        <div class="jumbotron"></div>

        <div class="comicsContainer">
            <div class="container">
                <div class="row">
                    <div class="col-5 d-flex align-items-center ms-5">
                        <div class="text_container text-light">
                            <h6>IL NOSTRO CATALOGO</h6>
                            <h1>UN SACCO DI TITOLI</h1>
                            <p>Le grandi storie dei supereroi DC ti aspettano! Da Batman a Superman fino a flash. Scopri i nostri fumetti</p>
                            <a href="{{ route("comics.index") }}" class="btn btn-outline-light">SCOPRI I NOSTRI COMICS!</a>
                        </div>
                    </div>

                    <div class="col-6">
                        <img src="https://nypost.com/wp-content/uploads/sites/2/2020/04/sothebys-dc-comics-48.jpg?quality=75&strip=all" alt="" class="w-100">
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection