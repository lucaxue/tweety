<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;

class TweetController extends Controller
{
    public function index()
    {
        return view('tweets.index', [
            'tweets' => auth()->user()->timeline()
        ]);
    }

    public function store()
    {
        $attributes = request()->validate([
            'body' => 'required|max:255'
        ]);

        Tweet::create([
            'user_id' => auth()->user()->id,
            'body' => $attributes['body']
        ]);

        return redirect('/home');
    }
}
