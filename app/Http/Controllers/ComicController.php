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
        $selectedComic = Comic::find($id);

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
        $newComic->artists = json_encode($data["artists"]);
        $newComic->writers = json_encode($data["writers"]);

        $newComic->save();

        return redirect()->route('comics.index');
    }
}
