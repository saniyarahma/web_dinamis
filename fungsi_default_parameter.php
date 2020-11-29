<?php
    // Memmbuat Fungsi/Function dengan Parameter
    function perkenalan($salam, $nama){
        echo $salam." <br>";
        echo "Selamat datang di channel ".$nama."<br>";
        echo "Jangan lupa like, komen, dan subscribe ya<br>";
        echo "<hr>";
    }

    // Memanggil fungsi dengan parameter
    perkenalan("Assalamualaikum", "Saniya");

    $salam = "Selamat Pagi";
    $nama = "Polines Official";
    perkenalan($salam, $nama);
?>