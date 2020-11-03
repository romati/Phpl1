3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами.
Обязательно использовать оператор return.<br>
<?php
function sum($a, $b)
{
    return $a + $b;
}
function razn($a, $b)
{
    return $a - $b;
}
function proiz($a, $b)
{
    return $a * $b;
}
function dele($a, $b)
{
    if ($b == 0) {
        return "на 0 делить нельзя!";
    }
    return $a / $b;
}
