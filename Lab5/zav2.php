<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $text = $_POST['user_text'] ?? '';

    if (ctype_digit($text)) {
        echo "<p>Рядок містить <b>лише цифри</b>.</p>";
    } else {
        echo "<p>Рядок <b>НЕ містить лише цифри</b>.</p>";
    }
}
?>
<h3>Задача 2. Введіть текст</h3>
<form method="post">
    <input type="text" name="user_text" required>
    <input type="submit" value="Перевірити">
</form>
