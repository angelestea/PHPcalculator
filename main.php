<?php

/* 
Ejercicio3
 * Hacer una interfaz de usuario (formulario), con dos
 * inputs y 4 botones, uno para sumar restar dividir y multiplicar
 */
$result=false;
if(isset($_POST['num1'])&&isset($_POST['num2'])):
      
    function sign( $number ) {
        return ( $number > 0 ) ? 1 : ( ( $number < 0 ) ? -1 : 0 );
    }
    if(isset($_POST['sum'])){
        $result=$_POST['num1'] + $_POST['num2'];
        $result="The sum of these values is: $result";
    }
      
    if(isset($_POST['rest'])){
        //if($_POST['num1']<0)&&$_POST['num2']<0)
        $result=$_POST['num1'] - $_POST['num2'];
        $result="The rest of these values is: $result";
    }
      
    if(isset($_POST['multiplication'])){
        $result="The multiplication of these values is: ".$_POST['num1'] * $_POST['num2'];
    }
      
    if(isset($_POST['division'])){
        $result="The division of these values is: ".$_POST['num1'] / $_POST['num2'];
    }

endif;

?>

<!DOCTYPE>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Exercise3</title>
    </head>
    <body>
        <h1>Calculator in PHP</h1>
        <form action="" method="POST">
            
            <input type="number" name="num1" placeholder="Input a number">
            <input type="number" name="num2" placeholder="Input a number"></br>
            <button type="submit" name="multiplication">Get product</button>
            <button type="submit" name="division">Get division</button>
            <button type="submit" name="sum">Get sum</button>
            <button type="submit" name="rest">Get rest</button>
        </form>
        <?php
                //RESULT
                if ($result != false){}
                    echo $result;
                ?>
    </body>
</html>
