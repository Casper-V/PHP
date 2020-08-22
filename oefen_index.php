<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <br/>
    <center>
    <h5>
        <?php
            //print to the webpage
            echo 'Hello world<br/>';
            $first_name = "Boris";
            $last_name = "Boef";
            echo $first_name . " " . $last_name;
            echo "<br/>";
            $num_1 = 14;
            $num_2 = 3;
            //var_dump($num_1 <= $num_2);
            echo "John's dog said: \"Woof\".";
        ?>
    </h5>
    <br/>
    <br/>
    <h5>

        <?php
            //print number comparison
            if ($num_1 < $num_2) {
                echo $num_1 . " is less than " . $num_2;
            } elseif ($num_1 == $num_2) {
                echo $num_1 . " is equal to " . $num_2;
            } else {
                echo $num_1 . " is greater than " . $num_2;
            }
        ?>
    </h5>
    <br/>
    <h5>
        <?php
            //numerieke array
            $teamleden = array("Carl", "Steven", "Martha");
            $voornamen = array("John", "Donald", "Sarah", "Mary", $teamleden);
            echo $voornamen[4][2];

                //associative array
            $bestelling = array(
            "John"=>"Quatro Staggioni",
            "Donald"=>"Pepperoni",
            "Sarah"=>"Seafood",
            );
            echo $bestelling["Donald"] . "<br/>";
            //$aantal = count($bestelling);
            echo $teamleden[count($teamleden) - 1];
        ?>
    </h5>

    <h5>
        <?php
            //teller met while loop
            $counter = 0;
            while ($counter < 10) {
                echo "The current counter value is $counter<br/>";
                ++$counter;
            }
            //alternatieve notatie van teller
            $counter2 = 0;
            do {
                echo "The current counter value is $counter2<br/>";
                ++$counter2;
            } while ($counter2 < 10);

        ?>
    </h5>
    <h5>
        <?php
            //for loop
            for ($count = 5; $count <= 10; ++$count) {
                echo "The current count is $count.<br/>";
            }
        ?>
    </h5>
    <h1>
        <?php
            //foreach loop
        $teamleden = array("Carl", "Steven", "Martha");
        foreach ($teamleden as $name_value) {
            echo "Hello, $name_value<br/>";
        }
        ?>
    </h1>

    </center>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>

