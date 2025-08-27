<?php
$number = 121;

$sqrt = sqrt($number);
if ($sqrt == floor($sqrt)) {
    echo "$number є досконалим квадратом (корінь = $sqrt)<br>";
} else {
    echo "$number НЕ є досконалим квадратом<br>";
}
?>
