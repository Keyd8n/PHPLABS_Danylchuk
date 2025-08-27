<?php
echo "Завдання 1: Частотність елементів масиву<br>";

$arr = [1, 2, 2, 3, 3, 3, 4, 5, 5, 1, 2, 4, 4];
$freq = array_count_values($arr);

foreach ($freq as $element => $count) {
    echo "Елемент $element зустрічається $count раз(и)<br>";
}

echo "<br>";
?>