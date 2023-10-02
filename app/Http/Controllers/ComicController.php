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
}
