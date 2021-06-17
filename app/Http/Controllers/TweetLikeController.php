<?php

namespace App\Http\Controllers;

use App\Models\Tweet;

class TweetLikeController extends Controller
{
    public function store(Tweet $tweet)
    {
        $tweet->like();
        return back();
    }

    public function delete(Tweet $tweet)
    {
        $tweet->unlike();
        return back();
    }
}
