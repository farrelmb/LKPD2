<?php
    $nama1 = "Farel";
    $nama2 = "Banyu";
    $jumlah1 = strlen($nama1);
    $jumlah2 = strlen($nama2);
    $selisih =abs($jumlah1 - $jumlah2);
   
    if($jumlah1 > $jumlah2){
        echo "$nama1 memiliki jumlah karakter lebih banyak dari $nama2 : selisih $selisih karakter";
    } else if($jumlah1 < $jumlah2) {
        echo "$nama1 memiliki jumlah karakter lebih sedikit dari $nama2 : selisih $selisih karakter";
    } else {
        echo "Kedua nya memiliki jumlah karakter yang sama : kedua nya memiliki jumlah $jumlah1";
    }
?>