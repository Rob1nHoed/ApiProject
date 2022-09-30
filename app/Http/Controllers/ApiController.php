<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function index()
    {
        $response = Http::get('https://api.imgflip.com/get_memes');
        $memes = $response->json();
        $count = count($memes['data']['memes']);
        $meme = $memes['data']['memes'][rand(0, $count - 1)];
        return view('randomImage', compact('meme'));
    }
}
