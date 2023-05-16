<?php 

include __DIR__ .'/Models/Movie.php';

$movie1 = new Movie('Shark', 'Horror', 'en', '1988' );

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
    <main class="d-flex justify-content-center align-items-center">
        <div class="card">
            <div class="card-body">
                <p><?php echo $movie1->getTitle()?></p>
                <p><?php echo $movie1->getGenre()?></p>
                <p><?php echo $movie1->getlenguage()?></p>
                <p><?php echo $movie1->getYear()?></p>
            </div>
        </div>
    </main>
</body>
</html>