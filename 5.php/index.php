<?php
    $bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
    $bil2 = [77, 99, 55, 81, 45, 90, 98];

    
    $frl = array_intersect($bil1,$bil2);
    $bny = array_diff($bil1,$bil2);
    echo "bilangan yang ada di kedua variabel <br>";
    echo implode(" ", $frl).'<br>';
    echo "bilangan yang tidak ada di kedua variabel <br>";
    echo implode(" ", $bny).'<br>';
?>