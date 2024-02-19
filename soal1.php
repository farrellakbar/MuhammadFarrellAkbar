<?php
    //a5b3c3d4ez

    // input aaabbcccddeddbzaa
    // aaa
    //bb
    //ccc
    //dd
    //e
    //ddb
    //zaa
    $input = 'aaabbcccddeddbzaa';
    // $split = explode('', $input);

    //memecah satu huruf abjad
    // masukkan ke sebuah array
    //gunakan fungsi menghitung jumlah value array yang sama

    $arrayWithSumValue = [];
    sort($arrayWithSumValue);
    $result = '';
    foreach ($arrayWithSumValue as $key => $value) {
        $result .= $key.$value;
    }
    echo $result;
?>