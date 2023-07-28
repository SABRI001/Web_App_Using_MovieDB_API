<?php

// app/Models/FavoriteMovie.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FavoriteMovie extends Model
{
    protected $table = 'favorite_movies';
    
    // If you have any additional fields that are fillable,
    // you can define them using the $fillable property.
    // For example:
    // protected $fillable = ['movie_id'];
    
    // If you have any fields that should be guarded (not mass assignable),
    // you can define them using the $guarded property.
    // For example:
    // protected $guarded = ['id'];
}
