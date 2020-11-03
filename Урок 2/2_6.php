6. С помощью рекурсии организовать функцию возведения числа в степень.
Формат: function power($val, $pow), где $val – заданное число, $pow – степень. <br>
<?php
function power($val, $pow)
{
    if ($pow == 1)
        return $val;

    if ($pow == 0)
        return 1;

    if ($pow < 0)
        return power(1 / $val, -$pow); //возведение в отрицательную степень
    else
        return $val * power($val, $pow - 1); //dвозведение в положительную степень
}

$x = power(2, 3);
echo "$x";
