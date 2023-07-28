<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class MovieController extends Controller
{
    public function index()
    {
        $apiKey = 'efef8fe4294201885d6133c1c1043900';
        $response = Http::get("https://api.themoviedb.org/3/discover/movie", [
            'api_key' => $apiKey,
            'language' => 'en-US',
            'sort_by' => 'popularity.desc',
            'page' => 2, // Adjust this for pagination
        ]);

        $movies = $response->json()['results'];

       return view('movies.index', ['movies' => $movies]);
    }
public function favorite(Request $request)
    {
        // Validate the incoming request data, if needed
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
}
