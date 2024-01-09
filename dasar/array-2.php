<?php 

    $anggur = ['1kg','2kg','3kg'];
    $buah = ['mangga' => 500,'pisang'=>250,'anggur' => $anggur];

    // $isi = 'content';

    var_dump($buah);
    echo "<pre>";
    print_r($buah);
    echo "</pre>";

    echo $buah['anggur'][1]."<br>";

    foreach ($buah as $key => $value) {
        if (!is_array($value)) {
            echo $key. " => " .$value;
            echo "<br>";
        }else{
            echo $key;
            foreach ($value as $key => $value) {
                echo "<li>";
                echo $value;
                echo "</li>";
            }
        }
    }

?>