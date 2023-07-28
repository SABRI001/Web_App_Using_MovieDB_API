<?php

// database/migrations/2023_07_28_123456_create_favorite_movies_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFavoriteMoviesTable extends Migration
{
    public function up()
    {
        Schema::create('favorite_movies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('movie_id');
            // Add any additional fields you want to save, e.g., user_id if you want to associate favorites with users.
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('favorite_movies');
    }
}
