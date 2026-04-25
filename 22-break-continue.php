<?php

// contoh break
echo "Contoh break:<br>";
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        break; // berhenti saat i = 5
    }
    echo $i . "<br>";
}

echo "<br>";

// contoh continue
echo "Contoh continue:<br>";
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        continue; // lewati angka 5
    }
    echo $i . "<br>";
}