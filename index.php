<?php include("variables.php"); ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Hello, world! Ali baba</title>
  </head>
  <body>
        <?php include("navbar.php"); ?>
    
    <div class="container">

    <div class="jumbotron">
  <h1 class="display-4">
      <?php 
            function helaHola($voornaam, $achternaam) {
                echo "Hela Hola, $voornaam $achternaam!";
                }
            $volledige_naam = helaHola("Sinbad", "de Vries");
            echo $volledige_naam;
        ?>
  </h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
</div>

    </div>
    <center>
    <h7>
        <?php
            //functions
            //begroetingsfunctie
            // function helaHola($voornaam, $achternaam) {
            //     echo "Hela Hola, $voornaam $achternaam!";
            // }
            // $volledige_naam = helaHola("Sinbad", "de Vries");
            // echo $volledige_naam;
            // echo "<br/>";
            
            //optelfunctie
            function optellen($getal1, $getal2) {
                return $getal1 + $getal2;
            }
            $som = optellen(50, 44);
            echo $som . "<br/>";
            //random functie uit PHP zelf
            echo rand(0,20) . "<br/>";
            echo mt_rand(0,20) . "<br/>";
            
            //random met array
            $gebruikers = array("John", "Boris", "Helen", "Cynthia");
            $aantal_gebruikers = count($gebruikers);
            echo $gebruikers[mt_rand(0, ($aantal_gebruikers - 1))] . "<br/>";
            
            //datumfunctie uit PHP zelf
            echo date('l jS \of F Y') . "<br/>";
            $today = date('l');
            echo "Today is $today." . "<br/>";
            echo "Copyright " . date('Y') . ". Alle rechten voorbehouden.";

            // string manipulation: woord vervangen
            $zinnetje = "Hela hola kindercola. Happy de peppi, Pepsi!<br/>";
            echo str_replace("Pepsi", "Coca Cola", $zinnetje);
            $kindercola = "kindercola";
            $fritz_cola = "Fritz Cola";
            echo str_replace($kindercola, $fritz_cola, $zinnetje);
            // hoofdletters/kleine letters
            echo strtolower($zinnetje);
            echo strtoupper($zinnetje);
            echo ucwords($zinnetje);
            echo ucfirst($zinnetje);
            echo strlen($zinnetje) . "<br/>";
            //echo str_shuffle($zinnetje);
            //include function -> moved to footer.php
            //echo "Copyright (c) " . date("Y") . " " . $bedrijfsnaam . " - Alle rechten voorbehouden.";
        ?>
    </h7>

    <h7>
        <!-- footersectie -->
        <?php
            include("footer.php");
        ?>
    </h7>
    <h1></h1>
    </center>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>