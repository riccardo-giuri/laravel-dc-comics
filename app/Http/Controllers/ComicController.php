<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function index() {
        $allcomics = Comic::all();

        return view("comics.index", ["comicsData" => $allcomics]);
    }

    public function show($id) {
        $selectedComic = Comic::findorFail($id);

        return view("comics.show", ["selectedComic" => $selectedComic]);
    }

    public function create() {
        return view("comics.create");
    }

    public function store(Request $request) {
        $data = $request->all();

        $newComic = new Comic();

        $newComic->title = $data["title"];
        $newComic->description = $data["description"];
        $newComic->imageURL = $data["imageURL"];
        $newComic->price = $data["price"];
        $newComic->series = $data["series"];
        $newComic->sale_date = $data["sale_date"];
        $newComic->type = $data["type"];
        $newComic->artists = json_encode(explode(",", $data["artists"]));
        $newComic->writers = json_encode(explode(",", $data["writers"]));

        $newComic->save();

        return redirect()->route('comics.index');
    }

    public function destroy($id) {
        $comic = Comic::findorFail($id);

        $comic->delete();

        return redirect()->route('comics.index');
    }

    public function edit($id) {
        $selectedComic = Comic::find($id);

        $selectedComic->artists = json_decode($selectedComic->artists);
        $selectedComic->writers = json_decode($selectedComic->writers);

        return view("comics.edit", ["selectedComic" => $selectedComic]);
    }

    public function update(Request $request, $id) {
        $comic = Comic::findorFail($id);

        $data = $request->all();

        $data["artists"] = json_encode(explode(",", $data["artists"]));
        $data["writers"] = json_encode(explode(",", $data["writers"]));

        $comic->update($data);

        return redirect()->route("comics.show", $id);
    }
}
