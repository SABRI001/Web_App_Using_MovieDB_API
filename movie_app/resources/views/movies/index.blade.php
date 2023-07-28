<!-- resources/views/movies/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
   <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Movie List</title>
</head>
<body>
    <h1>Movie List</h1>
    <ul>
        @foreach($movies as $movie)
            <li>
                <h2>{{ $movie['title'] }}</h2>
                <p>Release Date: {{ $movie['release_date'] }}</p>
                <p>Overview: {{ $movie['overview'] }}</p>
               <button class="favorite-button" data-movie-id="{{ $movie['id'] }}">Favorite</button>

            </li>
        @endforeach
    </ul>

<!-- resources/views/movies/index.blade.php -->
<!-- ... other HTML code ... -->

<script>
$(".favorite-button").on("click", function() {
    var movieId = $(this).data("movie-id");
    console.log("Movie ID:", movieId);
    // JavaScript/jQuery code to handle the favorite button click event
    $(".favorite-button").on("click", function() {
        var movieId = $(this).data("movie-id");

        // Send an AJAX request to save the favored movie into the database
        $.ajax({
            type: "POST",
            url: "{{ route('favorite.movies.store') }}",
            data: {
                movie_id: movieId,
                _token: "{{ csrf_token() }}",
            },
            success: function(response) {
                // Handle the successful response, if needed
                alert("Movie added to favorites!");
            },
            error: function(xhr, status, error) {
                // Handle the error response, if needed
                console.error(xhr.responseText);
                alert("Failed to add the movie to favorites. Please try again later.");
            }
        });
    });
</script>


</body>
</html>
