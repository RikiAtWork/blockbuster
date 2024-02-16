<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peliculas extends Model
{
    protected $table = "peliculas";
    protected $fillable = ['title', 'year', 'director', 'poster', 'rented', 'synopsis'];
    use HasFactory;
}
