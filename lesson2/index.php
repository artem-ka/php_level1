<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>lesson2</title>
</head>

<body>
    <?php
    // задание 1
    $a = 2;
    $b = -3;
    if($a >= 0 && $b >= 0){
        $c = $a - $b;
    }
    else if($a < 0 && $b < 0){
        $c = $a * $b;
    }
    else{
        $c = $a + $b;
    }
    echo $c."<br>";
    // конец задания 1
    // задание 2
    $a = 7;
    switch($a){
        case 0:
            echo "0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15"."<br>";
            break;
        case 1:
            echo "1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15"."<br>";
            break;
        case 2:
            echo "2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15"."<br>";
            break;
        case 3:
            echo "3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15"."<br>";
            break;
        case 4:
            echo "4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15"."<br>";
            break;
        case 5:
            echo "5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15"."<br>";
            break;
        case 6:
            echo "6, 7, 8, 9, 10, 11, 12, 13, 14, 15"."<br>";
            break;
        case 7:
            echo "7, 8, 9, 10, 11, 12, 13, 14, 15"."<br>";
            break;
        case 8:
            echo "8, 9, 10, 11, 12, 13, 14, 15"."<br>";
            break;
        case 9:
            echo "9, 10, 11, 12, 13, 14, 15"."<br>";
            break;
        case 10:
            echo "10, 11, 12, 13, 14, 15"."<br>";
            break;
        case 11:
            echo "11, 12, 13, 14, 15"."<br>";
            break;
        case 12:
            echo "12, 13, 14, 15"."<br>";
            break;
        case 13:
            echo "13, 14, 15"."<br>";
            break;
        case 14:
            echo "14, 15"."<br>";
            break;
        case 15:
            echo "15"."<br>";
            break;
        default:
            echo "Некорректное значение переменной а";
    }
    // конец задания 2
    // задание 3
    function summation ($a = 0, $b = 0){
        $res = $a + $b;
        return $res; 
    }
    function deduction ($a = 0, $b = 0){
        $res = $a - $b;
        return $res; 
    }
    function multiplication ($a = 0, $b = 0){
        $res = $a * $b;
        return $res; 
    }
    function division ($a = 0, $b = 0){
        $res = $a / $b;
        return $res; 
    }
    echo summation(4,3)."<br>";
    echo deduction(9,6)."<br>";
    echo multiplication(5,4)."<br>";
    echo division(12,3)."<br>";
    // конец задания 3
    // задание 4
    function mathOperation($arg1, $arg2, $operation){
        switch($operation){
            case "+":
                return summation($arg1, $arg2);
            case "-":
                return deduction($arg1, $arg2);
            case "*":
                return multiplication($arg1, $arg2);
            case "/":
                return division($arg1, $arg2);
            default:
                return "Некорректно указан знак операции";
        }
    }
    echo mathOperation(6, 8, "+")."<br>";
    echo mathOperation(12, 7, "-")."<br>";
    echo mathOperation(4, 9, "*")."<br>";
    echo mathOperation(81, 9, "/")."<br>";
    // конец задания 4
    // задание 5
    echo date(Y)."<br>";
    // конец задания 5
    // задание 6
    function power($val, $pow){
        if($pow == 0){
            return 1;
        }
        else if($pow == 1){
            return $val;
        }
        else{
            return $val*power($val, $pow-1);
        }
    }
    echo power(2, 10)."<br>";
    // конец задания 6
    // задание 7
    $h = date("H")-1;
    $m = date("i");
    if ($h==1 || $h==21) {
    $hours = " час";}
    elseif (($h>=2 && $h<=4) || ($h>=22 && $h<=24)) {
    $hours = " часа";}
    else {$hours = " часов";}
    if (($m<20) || ($m>10))
    {$minutes = " минут.";}
    elseif (($m % 10) === 1) {
    $minutes = " минута.";}
    elseif ((($m % 10)>=2) && (($m % 10)<=4)) {
    $minutes = " минуты.";}
    else {
    $minutes = " минут.";}
    echo $h . $hours . " " . $m . $minutes;
    // конец задания 7
    ?>
</body>

</html>
