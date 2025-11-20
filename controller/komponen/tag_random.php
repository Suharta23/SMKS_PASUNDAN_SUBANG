<?php 

function tag($text) {
   $words = explode(' ', $text);
    $total = count($words);

    // jumlah kata yang akan diberi <span>
    if ($total <= 3) {
        $count = 1;            // jika kata ≤ 3 → 1 kata
    } else {
        $count = rand(2, 3);   // jika kata > 3 → 2 atau 3 kata random
        if ($count > $total) {
            $count = $total - 1;
        }
    }

    // pilih index kata secara acak
    $indexes = array_rand($words, $count);
    if (!is_array($indexes)) $indexes = [$indexes];

    // beri tag <span>
    foreach ($indexes as $i) {
        $words[$i] = "<span class='teg'>{$words[$i]}</span>";
    }

    return implode(' ', $words);
}


// $judulcard_tampil = tag($judulcard);
// echo $judulcard_tampil;


 ?>