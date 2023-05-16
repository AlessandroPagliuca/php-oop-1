<?php 

include __DIR__ .'/Models/Movie.php';

include __DIR__ .'/Models/Genres.php';

include __DIR__ .'/server/dbMovie.php';


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/style.css">
    <title>php-oop-1</title>
</head>
<body>

    <header class="text-center bg-dark">

        <h1 class="p-5 text-white">List of Movies</h1>

    </header>

    <main class="d-flex justify-content-center align-items-center bg-dark">
        <?php foreach ($movies as $movie) { ?>    
            <div class="card movie">
                <div class="card-body">
                    <p><?php echo $movie->getTitle()?></p>
                    <p><?php echo $movie->getGenre()?></p>
                    <p><?php echo $movie->getlenguage()?></p>
                    <p><?php echo $movie->getYear()?></p>
                </div>
            </div>
        <?php } ?>

    </main>
</body>
</html>