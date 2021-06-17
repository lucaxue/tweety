<?php

namespace App\Http\Controllers;

use App\Models\Tweet;

class TweetDislikeController extends Controller
{
    public function store(Tweet $tweet)
    {
        $tweet->dislike();
        return back();
    }

    public function delete(Tweet $tweet)
    {
        $tweet->unlike();
        return back();
    }
}
