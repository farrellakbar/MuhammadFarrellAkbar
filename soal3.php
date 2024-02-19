<?php
    // Harga untuk tipe barang A adalah Rp. 99.900,-. 
    //Jika membeli dalam jumlah lebih dari 50 maka akan mendapatkan diskon 5% dan 
    //jika membeli di hari Senin atau Kamis maka akan mendapatkan diskon tambahan sebesar 10%.

    // Harga untuk tipe barang B adalah Rp. 49.900,-. 
    //Jika membeli barang dalam jumlah lebih dari 100 maka akan mendapatkan diskon 10% dan
    // jika membeli di hari Jumat maka akan mendapat diskon tambahan 5%.

    // Input = tipe barang, jumlah barang
    // Output = harga akhir

    $tipeBarang = 'B';
    $jumlahBarang = '60';
    $tanggal = date('D');

    $diskon = 0;
    $diskonExtra = 0;
    //Harga Barang
    $hargaBarang = $tipeBarang == 'A' ? '99900' : '49900';

    
    if($tipeBarang == 'A' && $jumlahBarang < 50){
        $diskon = '0.05';
    }
    elseif($tipeBarang == 'B' && $jumlahBarang < 100){
        $diskon = '0.1';
    }
    if($tipeBarang == 'A' && ($tanggal == 'Mon' || $tanggal == 'Thu')){
        $diskonExtra = '0.1';
    }
    elseif($tipeBarang == 'B' && ($tanggal == 'Fri')){
        $diskonExtra = '0.05';
    }

    $subTotal = $hargaBarang * $jumlahBarang;
    if($diskon > 0){
        $diskonSubTotal = $subTotal * $diskon;
        $subTotal = $subTotal - $diskonSubTotal;
    }
    if($diskonExtra > 0){
        $diskonSubTotal = $subTotal * $diskonExtra;
        echo $diskonSubTotal;
        $subTotal = $subTotal - $diskonSubTotal;
    }

    $total = $subTotal;
    
    echo $tanggal;
?>
