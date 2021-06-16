<?php

namespace App\Models;

use App\Http\Controllers\TweetController;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Tweet;
use App\Followable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, Followable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getAvatarAttribute()
    {
        return "https://randomuser.me/api/portraits/men/{$this->id}.jpg";
    }

    public function timeline()
    {
        $friends = $this->follows->pluck('id');

        $tweets = Tweet::whereIn('user_id', $friends)
            ->orWhere('user_id', $this->id)
            ->latest()
            ->get();

        return $tweets;
    }

    public function tweets()
    {
        return $this->hasMany(Tweet::class);
    }
}
