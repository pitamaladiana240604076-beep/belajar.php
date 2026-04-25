<?php

// 1. luas persegi panjang
function luasPersegiPanjang(int $panjang, int $lebar) {
    $luas = $panjang * $lebar;
    return $luas;
}

// 2. luas persegi
function luasPersegi(int $sisi) {
    $luas = $sisi * $sisi;
    return $luas;
}

// 3. tugas: luas segitiga
function luasSegitiga(int $alas, int $tinggi) {
    $luas = 0.5 * $alas * $tinggi;
    return $luas;
}