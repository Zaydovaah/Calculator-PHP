<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="calculator.css">
    <title>Document</title>
</head>

<body>
    <header>
        <h1>Basic Calculator</h1>
        <h3>For Basic Calculi</h3>
        <h6>Pro Tip: don't divide by zero!</h6>
    </header>
    <form action="index.php" class="form-container" method="POST">

        <span class="numinputs">
            <input type="number" name="num1" placeholder="Number 1" autocomplete="off">
            <input type="number" name="num2" placeholder="Number 2" autocomplete="off">
        </span>
        <select name="operator" class="operator">
            <option value="null">None</option>
            <option value="+">Add</option>
            <option value="-">Subtract</option>
            <option value="*">Multiply</option>
            <option value="/">Divide</option>
        </select>
        <span>
            <button name="submit" value="submit" type="submit" class="calculate">Calculate</button>
            <button name="reset" value="reset" type="reset" class="reset">reset</button>
        </span>

    </form>

    <p>Answer:</p>

    <?php

        
        if (isset($_POST["submit"])) {
               $form1 = $_POST["num1"];
               $form2 = $_POST["num2"];
               $operator = $_POST["operator"];

             
               

               switch ($operator) {
                

                  case "null":
                  if (isset($_POST["submit"]) || empty($form1) || empty($form2)) {
                     echo "<p>Please Fill All Fields";  
                    
                  } 
                   /* elseif (issset(($form1)) || issset(($form2))) {echo " </br> Select an Operator";} */
                    else { echo "<p>=>";}
                  break;

                  case "+":
                  $result = $form1 + $form2;
                  echo "<p>$form1 + $form2 = $result";
                  break;

                  case "-":
                  $result = $form1 - $form2;
                  echo "<p>$form1 - $form2 = $result";
                  break;

                  case "*":
                  $result = $form1 * $form2;
                  echo "<p>$form1 * $form2 = $result";
                  break;

                  case "/":
                  
                  if ($form2 == "0") {echo "<p>Did you just DIVIDE BY ZERO?! *facepalm* This is Why Aliens Never Visit Us?";}
                  elseif ($form2 != "0") $result = $form1 / $form2; {echo "<p>$form1 / $form2 = $result";}
                  break;
                  
               }
         }  
         
    ?>

</body>

</html>