<?php

//  kamu bukan siapa-siapa
function menghitungLuasSegitiga(int $alas, int $tinggi){
    $luas = $alas * $tinggi;
    return $luas;
}

$luasPersegi = menghitungLuasSegitiga(10,6);
echo "Luas segitiga adalah: " . $luasPersegi;


// tugas membuat function untuk menghitung luas segitiga