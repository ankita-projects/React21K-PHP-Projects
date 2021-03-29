<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
      body {
        background-color: rgba(201, 76, 76, 0.3);
        color: black;
        font-family:sans-serif;
        text-align: center;
      }
    </style>
    <title>Number Counter</title>
  </head>
  <body>
      <h1>Number Counter</h1>
      <?php
        $randomNumber = rand(0,100);                // for generate a random number between 0 - 100

      echo "<p>The random number is $randomNumber, in Finnish it is ";

      $one = "yksi";                           //english to finnish
      $two = "kaksi";
      $three = "kolme";
      $four = "neljä";
      $five = "viisi";
      $six = "kuusi";
      $seven = "seitsemän";
      $eight = "kahdeksan";
      $nine = "yhdeksän";

      $firstDigit = $randomNumber % 10;                              //for Spliting digits
      $secondDigit = ($randomNumber - ($randomNumber % 10)) / 10;
                                                                        
      switch ($firstDigit) {
        case 0:
            $firstDigitString = "";
            break;
        case 1:
            $firstDigitString = $one;
            break;
        case 2:
            $firstDigitString = $two;
            break;
        case 3:
            $firstDigitString = $three;
            break;
        case 4:
            $firstDigitString = $four;
            break;
        case 5:
            $firstDigitString = $five;
            break;
        case 6:
            $firstDigitString = $six;
            break;
        case 7:
            $firstDigitString = $seven;
            break;
        case 8:
            $firstDigitString = $eight;
            break;
        case 9:
            $firstDigitString = $nine;
            break;
      }

      if ($randomNumber > 10) {
        switch ($secondDigit) {
            case 1:
                $secondDigitString = $one;
                break;
            case 2:
                $secondDigitString = $two;
                break;
            case 3:
                $secondDigitString = $three;
                break;
            case 4:
                $secondDigitString = $four;
                break;
            case 5:
                $secondDigitString = $five;
                break;
            case 6:
                $secondDigitString = $six;
                break;
            case 7:
                $secondDigitString = $seven;
                break;
            case 8:
                $secondDigitString = $eight;
                break;
            case 9:
                $secondDigitString = $nine;
                break;
        }
      }

      if ($randomNumber == 0) {                              //converting text in Finnish
        echo "nolla";
      } elseif ($randomNumber == 10) {
        echo "kymmenen";
      } elseif ($randomNumber == 100) {
        echo "sata";
      } elseif ($randomNumber < 10) {
        echo $firstDigitString;
      } elseif ($randomNumber < 20) {
        echo $firstDigitString . "toista";
      } else {
        echo $secondDigitString . "kymmentä" . $firstDigitString;
      }
      ?>
 
  </body>
</html>