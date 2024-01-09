<?php 
    $buah = ['apel','jeruk',500,'pisang',300];

    var_dump($buah);

    echo "<br>";

    echo $buah[1];

    echo "<br>";

    foreach ($buah as $key => $value) {
        echo $key. "=>" . $value;
        echo "<br>";
    }

    //array asosiatif

    $harga = ['mangga' => 300, 'apel' => 500, 'pisang' => 1000];

    var_dump($harga);

    echo "<br>";

    foreach($harga as $key => $value){
        echo $key. " harganya " .$value;
        echo "<br>";
    }

    $isi = array_keys($harga);
    var_dump($isi);
?>