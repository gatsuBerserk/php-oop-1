<?php
    @include("class/Movies.php"); 

    $batman = new Movies("The Batman", "Cinecomics", 2022, "Nella notte di Halloween il corrotto sindaco di Gotham City Don Mitchell Jr. viene assassinato da un misterioso serial killer mascherato che si identifica come l'Enigmista. ",
    [" Robert Pattinson", "Zoë Kravitz", "Paul Dano", "Jeffrey Wright", "John Turturro", "Andy Serkis", " Colin Farrell"],  5)


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP monies Carmine Passante classe 55</title>
</head>
<body>
    <h1>
        <?php echo $batman-> getTitle(); ?>
    </h1>
    <div class="info">
        <p> Genere:
            <?php 
                echo $batman-> genre ;
            ?>
        </p>
        <p> Anno:
            <?php 
                echo $batman-> year ;
            ?>
        </p>
        <p> Descrizione:
            <?php 
                echo $batman-> getDescription();
            ?>
        </p>
        <p> Attori:
            <?php 
                echo implode(", ", $batman->actors) ;
            ?>
        </p>
        <p> Voto:
            <?php 
                echo $batman-> vote ;
            ?>
        </p>
    </div>
    
</body>
</html>