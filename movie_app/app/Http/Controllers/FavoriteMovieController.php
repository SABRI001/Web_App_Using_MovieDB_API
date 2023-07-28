<?php

// app/Http/Controllers/FavoriteMovieController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FavoriteMovie; // Assuming you have a model named FavoriteMovie to interact with the database.

class FavoriteMovieController extends Controller
{
    public function index()
    {
        $favorites = FavoriteMovie::paginate(10);

        return view('favorites.index', compact('favorites'));
    }
public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'movie_id' => 'required|integer',
        ]);

        // Get the movie ID from the request data
        $movieId = $request->input('movie_id');

        // Save the favored movie into the database
        try {
            FavoriteMovie::create([
                'movie_id' => $movieId,
            ]);

            return response()->json(['message' => 'Movie added to favorites!']);
        } catch (\Exception $e) {
            // Handle any exceptions or errors that may occur during the database operation
            return response()->json(['error' => 'Failed to add the movie to favorites.'], 500);
        }
    }
public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'movie_id' => 'required|integer',
        ]);

        // Get the movie ID from the request data
        $movieId = $request->input('movie_id');

        // Save the favored movie into the database
        try {
            FavoriteMovie::create([
                'movie_id' => $movieId,
            ]);

            return response()->json(['message' => 'Movie added to favorites!']);
        } catch (\Exception $e) {
            // Handle any exceptions or errors that may occur during the database operation
            return response()->json(['error' => 'Failed to add the movie to favorites.'], 500);
        }
    }
	 public function index()
    {
        $favorites = FavoriteMovie::paginate(10);

        return view('favorites.index', compact('favorites'));
    }
}
