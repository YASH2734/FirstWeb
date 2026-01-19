<?php
$marks = [80, 88, 74, 67, 89];

for ($i = 0; $i < count($marks); $i++) {
    echo "Marks obtained in Subject No." . ($i + 1) . " =" . $marks[$i] . PHP_EOL.'<br>';
}
?>
