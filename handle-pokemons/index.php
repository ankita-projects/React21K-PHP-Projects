<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Handle Pokemons</title>
</head>

<body>
    <?php
    $string = file_get_contents("data.json");
    $json_array = json_decode($string, true);
    $elementCount  = count($json_array["results"]);
    

    ?>
    <h1>
        <?php
        echo "Total number of pokemons are " . $elementCount;
        ?>
    </h1>
    <?php
       foreach ($json_array["results"] as $value) {
        echo "Name : ". $value["name"] . "<br>";
        echo "URL : ".$value["url"] . "<br>";
      }
        ?>
</body>

</html>