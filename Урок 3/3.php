<?php
header('Content-type: text/html; charset=utf-8');
ini_set('default_charset', 'UTF-8');

// 1. С помощью цикла while вывести все числа в промежутке от 0 до 100, которые делятся на 3 без остатка.

$a = 1;
while ($a < 100) {
    if ($a % 3 == 0) {
        echo $a++ . ' ';
    }
    $a++;
}

echo '<hr>';

//2. С помощью цикла do…while написать функцию для вывода чисел от 0 до 10, чтобы результат выглядел так:
//0 – это ноль.
//1 – нечетное число.
//2 – четное число.
//3 – нечетное число.
//…
//10 – четное число.
$a = 0;
do {
    if ($a == 0) {
        echo $a . ' – это ноль.' . '<br>';
        $a++;
    } elseif ($a % 2 != 0) {
        echo $a . ' – нечетное число.' . '<br>';
        $a++;
    } else {
        echo $a . ' – четное число.' . '<br>';
        $a++;
    }
} while ($a < 11);

echo '<hr>';


//3. Объявить массив, в котором в качестве ключей будут использоваться названия областей, а в качестве значений – массивы с названиями городов из соответствующей области. Вывести в цикле значения массива, чтобы результат был таким:
//Московская область:
//Москва, Зеленоград, Клин
//Ленинградская область:
//Санкт-Петербург, Всеволожск, Павловск, Кронштадт
//Рязанская область … (названия городов можно найти на maps.yandex.ru)


$areaArr = [
    'Московская область:' => ['Москва', 'Зеленоград', 'Клин'],
    'Ленинградская область:' => ['Санкт-Петербург', 'Всеволожск', 'Кронштадт'],
    'Волгоградская область:' => ['Волгоград', 'Волжский', 'Иловля']
];

function CityRuss($arr)
{
    if (!is_array($arr)) {
        return print "incorrect argument '{$arr}'";
    }
    foreach ($arr as $key => $value) {
        echo $key . '<br>';
        for ($i = 0; $i < $arrLength = count($arr[$key]); $i++) {
            if ($i == $arrLength - 1) {
                echo $arr[$key][$i] . '.' . '<br>';
            } else {
                echo $arr[$key][$i] . ', ';
            }
        }
    }
}

CityRuss($areaArr);

echo '<hr>';


//4. Объявить массив, индексами которого являются буквы русского языка, а значениями – соответствующие латинские буквосочетания (‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’).
//Написать функцию транслитерации строк.

function translit($string)
{
    if (!is_string($string)) {
        return 'incorrect argument';
    }

    $ru = 'А	Б	В	Г	Д	Е	Ё	Ж	З	И	Й	К	Л	М	Н	О	П	Р	С	Т	У	Ф	Х	Ц	Ч	Ш	Щ	Ъ	Ы	Ь	Э	Ю	Я';
    $en = 'A	B	V	G	D	E	E	ZH	Z	I	Y	K	L	M	N	O	P	R	S	T	U	F	KH	TS	CH	SH	SCH	’ 	Y	’ 	E	YU	YA';

    $tranArr = array_combine(explode('	', mb_strtolower($ru)), explode('	', strtolower($en)));
    $stringArr = preg_split('//u', mb_strtolower($string), 0, PREG_SPLIT_NO_EMPTY);

    $Arrruen = [];

    for ($i = 0; $i < count($stringArr); $i++) {
        foreach ($tranArr as $key => $value) {
            if ($stringArr[$i] == $key) {
                array_push($Arrruen, $value);
                break;
            } elseif (preg_match('/[[:punct:]]|\s/', $stringArr[$i])) {
                array_push($Arrruen, $stringArr[$i]);
                break;
            }
        }
    }
    return implode($Arrruen);
}

echo translit('Интересный получился массив.');

echo '<hr>';


//5. Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку.

function probel_1($string)
{
    if (!is_string($string)) {
        return "incorrect argument {$string}";
    }

    return preg_replace('/\s/', '_', $string);
}

echo probel_1('Вроде бы пробелы заменились.');

echo '<hr>';


//7. *Вывести с помощью цикла for числа от 0 до 9, не используя тело цикла. Выглядеть должно так:
//for (…){ // здесь пусто}


for ($b = 0; $b < 10; print $b++ . ' ') {
};

echo '<hr>';

// 8. *Повторить третье задание, но вывести на экран только города, начинающиеся с буквы «К».

function K_City($char, $arr)
{
    if (!is_array($arr) || !is_string($char)) {
        return print 'incorrect arguments.';
    }
    $C_City = 0;
    $cityCount = count($arr, COUNT_RECURSIVE) - count($arr);
    foreach ($arr as $key => $value) {
        for ($i = 0; $i < count($arr[$key]); $i++) {
            $explodeArr = preg_split('//u', $arr[$key][$i], 0, PREG_SPLIT_NO_EMPTY);
            if ($explodeArr[0] == $char) {
                echo implode($explodeArr) . '<br>';
            } else {
                $C_City++;
                if ($C_City == $cityCount) {
                    return print "Города на букву '{$char}' нет в базе.";
                }
            }
        }
    }
}

K_City('К', $areaArr);

echo '<hr>';


//9. *Объединить две ранее написанные функции в одну, которая получает строку на русском языке, 
//производит транслитерацию и замену пробелов на подчеркивания (аналогичная задача решается при конструировании url-адресов 
//на основе названия статьи в блогах).

function translitReplaceSpaces($string)
{
    if (!is_string($string)) {
        return 'incorrect argument';
    }

    $ru = 'А	Б	В	Г	Д	Е	Ё	Ж	З	И	Й	К	Л	М	Н	О	П	Р	С	Т	У	Ф	Х	Ц	Ч	Ш	Щ	Ъ	Ы	Ь	Э	Ю	Я';
    $en = 'A	B	V	G	D	E	E	ZH	Z	I	Y	K	L	M	N	O	P	R	S	T	U	F	KH	TS	CH	SH	SCH	’	Y	’	E	YU	YA';
    $s_Arr = array_combine(explode('	', mb_strtolower($ru)), explode('	', strtolower($en)));
    $stringArr = preg_split('//u', mb_strtolower($string), 0, PREG_SPLIT_NO_EMPTY);

    for ($i = 0; $i < count($stringArr); $i++) {
        foreach ($s_Arr as $key => $value) {
            if ($stringArr[$i] == $key) {
                $requestedArr[] = $value;
                break;
            } elseif (preg_match('/[[:punct:]]|\s/', $stringArr[$i])) {
                $requestedArr[] = $stringArr[$i];
                break;
            }
        }
    }

    return preg_replace('/\s/', '_', implode($requestedArr));
}

echo translitReplaceSpaces('Вот это уже очень сложная функция.');
