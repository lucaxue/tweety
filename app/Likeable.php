<?php

namespace App;

use App\Models\Like;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;

trait Likeable
{
	public function scopeWithLikes(Builder $query)
	{
		$query->leftJoinSub(
			'select tweet_id, sum(liked) likes, sum(!liked) dislikes from likes group by tweet_id',
			'likes',
			'likes.tweet_id',
			'tweets.id'
		);
	}

	public function likes()
	{
		return $this->hasMany(Like::class);
	}

	public function like(?User $user = null, bool $liked = true)
	{
		return $this->likes()->updateOrCreate([
			'user_id' => $user->id ?? auth()->id()
		], [
			'liked' => $liked
		]);
	}

	public function dislike(?User $user = null)
	{
		return $this->like($user, false);
	}

	public function unlike(?User $user = null)
	{
		return $this->likes()
			->where('user_id', $user->id ?? auth()->id())
			->delete();
	}

	public function isLikedBy(User $user, bool $liked = true)
	{
		return $user->likes
			->where('tweet_id', $this->id)
			->where('liked', $liked)
			->count();
	}

	public function isDislikedBy(User $user)
	{
		return $this->isLikedBy($user, false);
	}
}
