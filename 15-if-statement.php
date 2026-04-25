<?php

$name = "echa";
$grade = 70;
$standar = 75;
$remidial = 60;

if($grade > $standar) {
    echo "Lulus";
}elseif($remidial > $standar) {
    echo "Lulus jalur Remedial";
}else{
    echo "Tidak Lulus";
}

// tugas 
// tambahkan logikan perbandingan
// tugas
// tambahan logika perbandingan

if ($grade == $standard) {
    echo "Nilai sama dengan standar";
}

if ($grade != $standard) {
    echo "Nilai tidak sama dengan standar";
}

if ($grade >= $standard) {
    echo "Nilai lebih atau sama dengan standar";
}

if ($grade <= $standard) {
    echo "Nilai kurang atau sama dengan standar";
}