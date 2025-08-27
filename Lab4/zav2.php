<?php
echo "Завдання 2: Простi числа від 1 до 50<br>";

function isPrime($number) {
    if ($number < 2) return false;
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) return false;
    }
    return true;
}

// Використання функції для чисел від 1 до 50
for ($n = 1; $n <= 50; $n++) {
    if (isPrime($n)) {
        echo $n . " ";
    }
}
?>
