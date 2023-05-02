<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];

    // relacion de uno a muchos inversa (user<-comment)
    public function user(){
        return $this->belongsTo(User::class);
    }

    //relacion inversa de uno a muchos (comment<-article)
    public function article(){
        return $this->belongsTo(Article::class);
    }
}
