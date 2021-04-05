<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use App\Location;
use App\Category;
use App\Gallery;
use App\Album;

class AlbumsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items =Album::with(['galleries', 'locations', 'categories'])->get();
        return view('pages.album', [
            'items' => $items
        ]);
    }
    public function details(Request $request, $slug){
        $items =Album::with(['galleries', 'locations', 'categories'])->where('slug', $slug)->firstOrFail();
        return view('pages.detail', [
            'items' => $items
        ]);
    }

}
