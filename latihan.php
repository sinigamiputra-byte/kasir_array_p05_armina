<?php
declare(strict_types=1);

require_once __DIR__ . '/data.php';
require_once __DIR__ . '/functions.php';

$namaProduk = ['Buku Tulis', 'Pulpen', 'Penghapus'];
$namaAwal = $namaProduk;

$namaProduk[] = 'Penggaris';
$sesudahTambah = $namaProduk;

$namaProduk[1] = 'Pulpen Biru';
$sesudahUbah = $namaProduk;

unset($namaProduk[2]);
$sesudahHapus = $namaProduk;

$namaProduk = array_values($namaProduk);
$sesudahRapikan = $namaProduk;

$produkContoh = $daftarProduk[0];
$produkContoh['stok'] = 25;
$produkContoh['kategori'] = 'Alat Tulis';

$hargaProduk = array_column($daftarProduk, 'harga');
sort($hargaProduk, SORT_NUMERIC);

$contohHasil = [
    '1. Array berindeks awal' => $namaAwal,
    '2. Sesudah menambah Penggaris' => $sesudahTambah,
    '3. Sesudah mengubah Pulpen' => $sesudahUbah,
    '4. Sesudah menghapus indeks 2' => $sesudahHapus,
    '5. Sesudah array_values' => $sesudahRapikan,
    '6. Perubahan array asosiatif' => $produkContoh,
    '7. Harga setelah sort' => $hargaProduk,
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Latihan Array — Pertemuan 5</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="container">
        <header class="hero">
            <p class="eyebrow">LATIHAN PERTEMUAN 5</p>

            <h1>Perubahan Array PHP</h1>

            <p>
                Amati key dan value pada setiap tahap.
            </p>

            <nav class="navigation" aria-label="Navigasi praktikum">
                <a href="index.php">Aplikasi utama</a>
                <a href="latihan.php">Latihan array</a>
                <a href="cek_php.php">Cek PHP</a>
            </nav>
        </header>

        <section class="panel">
            <h2>Akses Array Multidimensi</h2>

            <p>
                Nama produk pada indeks 1:
                <strong>
                    <?= escapeHtml($daftarProduk[1]['nama']) ?>
                </strong>
            </p>

            <p>
                Jumlah jenis produk:
                <strong><?= count($daftarProduk) ?></strong>
            </p>
        </section>

        <?php foreach ($contohHasil as $judul => $hasil): ?>
            <section class="panel">
                <h2><?= escapeHtml($judul) ?></h2>

                <pre class="code-output"><?= escapeHtml(
                    print_r($hasil, true)
                ) ?></pre>
            </section>
        <?php endforeach; ?>

        <footer>
            Amati perubahan data sebelum mengerjakan tugas.
        </footer>
    </main>
</body>
</html>