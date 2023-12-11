<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Controller extends Controller
{
    public function index()
    {
        // call api

        $posts = Http::get("https://jsonplaceholder.typicode.com/posts");

        return $posts;
    }
}
