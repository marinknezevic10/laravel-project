<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'body'
    ];

    public function likedBy(User $user)//we want user to be able to have one like per post
    {
        return $this->likes->contains('user_id', $user->id);
    }

    public function user()//kreiramo vezu izmedu posta i usera kako bi ih mogli ispisati
    {
        return $this->belongsTo(User::class);
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }
}
