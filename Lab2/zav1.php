<?php
$alpha = 45;
$beta = 60;

// функції sin() і cos() у PHP працюють з радіанами, тому переводимо градуси в радіани
$alpha_rad = deg2rad($alpha);
$beta_rad = deg2rad($beta);

$y = sin($alpha_rad) + cos($beta_rad);

echo "Завдання 1:<br>";
echo "y = sin($alpha°) + cos($beta°) = $y<br><br>";

?>
