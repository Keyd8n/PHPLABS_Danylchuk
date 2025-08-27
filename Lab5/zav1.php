<?php

if (isset($_GET['month']) && isset($_GET['day'])) {
    $month = (int)$_GET['month'];
    $day   = (int)$_GET['day'];

    $season = "";

    // Зима: 1.12 – 28/29.2
    if (($month == 12 && $day >= 1) || $month == 1 || $month == 2) {
        $season = "Зима";
    }
    // Весна: 1.3 – 31.5
    elseif ($month >= 3 && $month <= 5) {
        $season = "Весна";
    }
    // Літо: 1.6 – 31.8
    elseif ($month >= 6 && $month <= 8) {
        $season = "Літо";
    }
    // Осінь: 1.9 – 30.11
    elseif ($month >= 9 && $month <= 11) {
        $season = "Осінь";
    } else {
        $season = "Некоректна дата";
    }

    echo "<p>Місяць: $month, День: $day → Пора року: <b>$season</b></p>";
}
?>

<h3>Задача 1. Введіть місяць і день</h3>
<form method="get">
    Місяць: <input type="number" name="month" min="1" max="12" required><br>
    День: <input type="number" name="day" min="1" max="31" required><br>
    <input type="submit" value="Визначити пору року">
</form>

<hr>