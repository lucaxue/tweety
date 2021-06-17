<?php

namespace App\Models;

use App\Likeable;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tweet extends Model
{
    use HasFactory, Likeable;

    protected $fillable = [
        'user_id', 'body'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
