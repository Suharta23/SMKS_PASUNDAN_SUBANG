<?php
// jika url kosong, arahkan ke beranda
$url_string = $_GET['url'] ?? 'beranda';

// pecah url berdasarkan tanda /
$url = explode('/', $url_string);

// ambil bagian url
$page = $url[0] ?? null;
$file = $url[1] ?? null;
$var = array_slice($url, 2);
