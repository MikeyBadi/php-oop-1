<?php
  require __DIR__ . "/class/movie.php";

  $movies = [];

  $goneGirl = new Movie("149", "	David Fincher");
  $goneGirl ->setName("Gone Girl");
  $goneGirl ->setYear("2014");
  $movies[] = $goneGirl;

  $theAccountant = new Movie("128", "Gavin O'Connor");
  $theAccountant ->setName("The Accountant");
  $theAccountant ->setYear("2016");
  $movies[] = $theAccountant;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <h1>Movies</h1>
    <div class="film">
      <?php foreach ($movies as $movie):?>
        <p> Movie name: </p>
        <h3> <?php echo $movie->getName() ?> </h3>
        <p> Year: </p>
        <h3> <?php echo $movie->getYear() ?> </h3>
        <p> Lenght: </p>
        <h3> <?php echo $movie-> length ?> min</h3>
        <p> Director: </p>
        <h3> <?php echo $movie-> director ?> </h3>
        <hr>
      <?php endforeach;?>
    </div>
</body>
</html>