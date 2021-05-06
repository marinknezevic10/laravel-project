<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'body'
    ];

    public function user()//kreiramo vezu izmedu posta i usera kako bi ih mogli ispisati
    {
        return $this->belongsTo(User::class);
    }
}
