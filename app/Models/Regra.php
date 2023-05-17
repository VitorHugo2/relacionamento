<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regra extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
    ];

    public function usuarios(){
        return $this->belongsToMany(User::class,'user_regras','regra_id','user_id');
    }
}
