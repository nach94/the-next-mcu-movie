<?php
require_once('functions/render-template.php');
require_once('functions/consts.php');
require_once('classes/next-movie.php');

$next_movie = NextMovie::fetch_and_create_movie(API_URL);
$next_movie_data = $next_movie -> get_data();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php render_template('head', $next_movie_data);  ?>
</head>
<body>
    <header>

    </header>

    <?php render_template('body', array_merge($next_movie_data, ["until_message" => $next_movie -> get_message()] )); ?>
    
    <footer>

    </footer>
    
    <script>
    
    </script>
</body>
</html>