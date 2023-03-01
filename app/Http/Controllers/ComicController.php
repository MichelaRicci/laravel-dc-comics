<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $comic = new Comic();


        $comic->fill($data);

        $comic->save();

        
        return to_route('comics.index');
    }


    public function show(string $id)
    {
        $comic = Comic::findOrFail($id);
        return view('comics.show', compact('comic'));
    }
}