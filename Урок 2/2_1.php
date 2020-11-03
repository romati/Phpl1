<?php
$a = 5;
$b = 8;
if ($a >= 0 && $b >= 0) {
    echo $a - $b;
} else if ($a < 0 && $b < 0) {
    echo $a * $b;
} else if ($a < 0 && $b >= 0) {
    echo $a + $b;
} else if ($a >= 0 && $b < 0) {
    echo $a + $b;
}
