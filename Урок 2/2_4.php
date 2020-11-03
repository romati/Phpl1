4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов,
$operation – строка с названием операции. В зависимости от переданного значения операции выполнить одну из арифметических операций
(использовать функции из пункта 3) и вернуть полученное значение (использовать switch). <br>
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

function mathOperation($arg1, $arg2, $operation)
{
    switch ($operation) {
        case '+':
            return sum($arg1, $arg2);
        case '-':
            return razn($arg1, $arg2);
        case '*':
            return proiz($arg1, $arg2);
        case '/':
            return dele($arg1, $arg2);
        default:
            echo "Не верно заданы аргументы!";
    }
}
$x = mathOperation(8, 1, '*');
echo "$x";
