<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];
    //relacion de uno a uno inversa (user<-profile)
    public function user() {
        return $this->belongsTo(Profile::class);
    }
}
