<?php

   $a = $_POST['num1'];
    $b = $_POST['num2'];
    $opr = $_POST['opr'];

    if($opr == "+"){
        $result = $a + $b;
    }elseif($opr == "-"){
        $result = $a - $b;
    }elseif($opr == "*"){
        $result = $a * $b;
    }elseif($opr == "/"){
        $result = $a / $b;
    }else{
        echo "Invalid Operator";
    }

    echo "The result is: " . $result;
?>