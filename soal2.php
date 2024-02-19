<?php
// Urutkan array dibawah ini dari yang terkecil sampai terbesar dengan
// menggunakan perulangan dan kondisi (jangan menggunakan
// sorting function dari bahasa pemrograman)
// Array = [9,3,7,8,2,6,1,4,10,2,2,3]

    $array = [9,3,7,8,2,6,1,4,10,2,2,3];
    //coba SORTING FUNCTION
    // sort($array);
    print_r ($array);

    //Hasil nya nanti
    $result = [];
    //mengambil terkecil
    $min = min($array);
    foreach ($array as $val){
        //cek angka terkecil dulu dan masukkan ke aray haisl
       
        //
        $cek = in_array($val, $array);
        // echo $cek;
    }
    // echo $min;
?>