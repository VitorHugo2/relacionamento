<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRegra extends Model
{
    use HasFactory;
    protected $fillable = [
        'regra_id',
        'user_id',
    ];
}
