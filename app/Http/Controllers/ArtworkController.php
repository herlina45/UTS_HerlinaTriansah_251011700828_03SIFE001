<?php

namespace App\Http\Controllers;

use App\Models\Artwork;
use Illuminate\Http\Request;

class ArtworkController extends Controller
{
    public function index()
    {
        $artworks = Artwork::paginate(8);

        return view('artworks.index', compact('artworks'));
    }

    public function show(Artwork $artwork)
    {
        return view('artworks.show', compact('artwork'));
    }
}