<?php

namespace App\Models;

use App\Followable;
use App\Models\Like;
use App\Models\Tweet;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, Followable;

    protected $fillable = [
        'name',
        'username',
        'email',
        'avatar',
        'bio',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getAvatarAttribute($value)
    {
        return asset('storage/' . ($value ?: 'avatars/default.jpg'));
    }

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    public function timeline()
    {
        $friends = $this->follows->pluck('id');

        $tweets = Tweet::whereIn('user_id', $friends)
            ->orWhere('user_id', $this->id)
            ->withLikes()
            ->latest()
            ->paginate(15);

        return $tweets;
    }

    public function tweets()
    {
        return $this->hasMany(Tweet::class)
            ->withLikes()
            ->latest();
    }

    public function path($append = '')
    {
        return route('profile', $this) . $append;
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }
}
