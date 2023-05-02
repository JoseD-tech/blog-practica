<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];

    //relacion de uno a uno inversa(user<-article)
    public function user() {
        return $this->belongsTo(User::class);
    }

    // relacion de uno a muchos (articles-commets)
    public function comment(){
        return $this->hasMany(Comment::class);
    }

    //relacion de uno a uno inversa(categoria<-article)
    public function category() {
        return $this->belongsTo(Category::class);
    }
}
