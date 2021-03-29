<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jackpot-PHP-Task</title>
    <style>
        body {
            background-color: light blue;
            color: balck;
            font-family: sans-serif;
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>Jackpot</h1>
    <?php
    $randomNumList = array();
    $winningCombination = array(1, 1, 1, 1, 1);
    $losingCombination = array(0, 0, 0, 0, 0);
    $winningProbability = 1 / (pow(2, 5));        //for determing probability of getting all zero's or all once's is 1/2^5
    for ($i = 0; $i < 5; $i++) {
        array_push($randomNumList,rand(0, 1));
    }
    $randomNumberString =   implode(", ",  $randomNumList);
    $winningCombString =   implode(", ",  $winningCombination);
    if ($randomNumList == $winningCombination) {       //comparing arrays
        echo ("Congrats, You are winner");

        echo ("Winning probability is " . $winningProbability);
    } else if ($randomNumList == $losingCombination) {

        echo ("Congrats, but you didn't win anything");
    } else {
        echo  nl2br("Sorry, you lost you got this " .
            $randomNumberString .
            "\nBut the winning combination is " .
            $winningCombString .
            "\nAnd the probability of winning is " .
            $winningProbability);
    }

    ?>
</body>

</html>