<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>lesson3</title>
</head>
<body>
    <?php
    //Задание 1
    echo "<br>Задание 1<br><br>";
    $n = 0;
    while($n <= 100){
        if($n%3 == 0){
            echo "$n<br>";
        }
        $n++;
    }
    //Задание 2
    echo "<br>Задание 2<br><br>";
        $n = 0;
    function oddEven($m){
        do{
            if($n == 0){
                echo "0 - ноль.<br>";
            }
            else if($n%2 == 0){
                echo "$n - чётное число.<br>";
            }
            else {
                echo "$n - нечётное число.<br>";
            }
            $n++;
        }
        while($n <= $m);
    }
    oddEven(10);
    //Задание 3
    echo "<br>Задание 3<br><br>";
    $cities = [
        "Московская область" => ["Москва", "Клин", "Реутов"],
        "Ленинградская область" => ["Санкт-Петербург", "Выборг", "Кронштадт"],
        "Калининградская область" => ["Калининград", "Гусев", "Балтийск"]
    ];
    foreach($cities as $region => $towns){
    echo $region.":<br>";
        $i = 0;
        foreach($towns as $item){
            $i++;
            $text = '';
            $i == count($towns) ? $text = $item."<br>" : $text = $item.", ";
            echo $text;
        }
    }
    //Задание 4
    echo "<br>Задание 4<br><br>";
    function rusToEng($text){
        $alphabet = [
            "а" => "a", "б" => "b", "в" => "v", "г" => "g", "д" => "d", "е" => "e", "ё" => "yo", "ж" => "zh", "з" => "z", "и" => "i", "й" => "j", "к" => "k", "л" => "l", "м" => "m", "н" => "n", "о" => "o", "п" => "p",
            "р" => "r", "с" => "s", "т" => "t", "у" => "u", "ф" => "f", "х" => "h", "ц" => "c", "ч" => "ch", "ш" => "sh", "щ" => "shch", "ъ" => "'", "ы" => "yh", "ь" => "'", "э" => "eh", "ю" => "yu", "я" => "ya",
            
            "А" => "A", "Б" => "b", "В" => "V", "Г" => "G", "Д" => "D", "Е" => "E", "Ё" => "Yo", "Ж" => "Zh", "З" => "Z", "И" => "I", "Й" => "J", "К" => "K", "Л" => "L", "М" => "M", "Н" => "N", "О" => "O", "П" => "P", 
            "Р" => "R", "С" => "S", "Т" => "T", "У" => "U", "Ф" => "F", "Х" => "H", "Ц" => "C", "Ч" => "Ch", "Ш" => "Sh", "Щ" => "Shch", "Ъ" => "'", "Ы" => "Yh", "Ь" => "'", "Э" => "Eh", "Ю" => "Yu", "Я" => "Ya"
        ];
        return strtr($text, $alphabet);
    }
    echo rusToEng("Время Выполнения Задания 20 минут");
    //Задание 5
    echo "<br><br>Задание 5<br><br>";
    function spaceToUnderline ($space, $underline, $text){
        return str_replace($space, $underline, $text);
    }
    echo spaceToUnderline(" ", "_", "Меняем пробелы на подчёркивания")."<br>";
    //Задание 6
    echo "<br>Задание 6<br><br>";
    $menu = [
        "Пункт 1" => ["Подпункт1.1", "Подпункт 1.2", "Подпункт 1.3", "Подпункт 1.4"],
        "Пункт 2" => ["Подпункт 2.1", "Подпункт 2.2", "Подпункт 2.3", "Подпункт 2.4"],
        "Пункт 3" => ["Подпункт 3.1", "Подпункт 3.2", "Подпункт 3.3"],
        "Пункт 4"
    ];
    echo "<ul>";
    foreach($menu as $supItem => $subItem){
        if(is_array($subItem)){
        echo "<li>$supItem</li>";
        //if(is_array($subItem)){
          echo "<ul>";
            foreach($subItem as $value){
                echo "<li>$value</li>";
            }
            echo "</ul>";
        }
        else{
            echo "<li>$subItem</li>";
        }
    }
    echo "</ul>";
    //Задание 7
    echo "<br>Задание 7<br><br>";
    for($i = 0; $i < 10; print $i++){}
    echo "<br>";
    //Задание 8
    echo "<br>Задание 8<br><br>";
    foreach($cities as $region => $towns){
    echo $region.":<br>";
        foreach($towns as $item){
            if(mb_substr($item, 0, 1) == "К"){
                echo $item."<br>";
            }
        }
    }
    //Задание 9
    echo "<br>Задание 9<br><br>";
    function translitReplace($str){
        return spaceToUnderline(" ", "_", rusToEng($str));
    }
    echo translitReplace("Пример применения объединённой функции");
    ?>
</body>
</html>