<?php
declare(strict_types=1);

require_once __DIR__ . '/data.php';
require_once __DIR__ . '/functions.php';

$produkTerurut = $daftarProduk;
usort($produkTerurut, 'bandingkanHarga');

$jumlahJenisProduk = count($daftarProduk);
$jumlahJenisKeranjang = count($keranjang);
$jumlahBarang = hitungJumlahBarang($keranjang);
$totalBelanja = hitungTotalKeranjang($keranjang);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Kasir Array Lab — Pertemuan 5</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="container">
        <header class="hero">
            <p class="eyebrow">PRAKTIKUM PEMROGRAMAN WEB II</p>

            <h1>Kasir Array Lab</h1>

            <p>
                Pengelolaan produk dan keranjang belanja
                menggunakan array PHP.
            </p>

            <div class="identitas">
                <strong>
                    <?= escapeHtml($mahasiswa['nama']) ?>
                </strong>

                <span>
                    NIM: <?= escapeHtml($mahasiswa['nim']) ?>
                </span>

                <span>
                    <?= escapeHtml($mahasiswa['kelas']) ?>
                </span>
            </div>

            <nav class="navigation" aria-label="Navigasi praktikum">
                <a href="index.php">Aplikasi utama</a>
                <a href="latihan.php">Latihan array</a>
                <a href="cek_php.php">Cek PHP</a>
            </nav>
        </header>

        <section class="summary" aria-label="Ringkasan">
            <div class="summary-item">
                <span>Jenis produk</span>
                <strong><?= $jumlahJenisProduk ?></strong>
            </div>

            <div class="summary-item">
                <span>Jenis dalam keranjang</span>
                <strong><?= $jumlahJenisKeranjang ?></strong>
            </div>

            <div class="summary-item">
                <span>Jumlah barang dibeli</span>
                <strong><?= $jumlahBarang ?></strong>
            </div>

            <div class="summary-item">
                <span>Total belanja</span>
                <strong><?= formatRupiah($totalBelanja) ?></strong>
            </div>
        </section>

        <section class="panel">
            <h2>1. Katalog Produk</h2>

            <p class="description">
                Urutan data mengikuti array pada file data.php.
            </p>

            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Kode</th>
                            <th>Nama produk</th>
                            <th class="numeric">Harga</th>
                            <th class="numeric">Stok</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($daftarProduk as $indeks => $produk): ?>
                            <tr>
                                <td><?= $indeks + 1 ?></td>

                                <td>
                                    <?= escapeHtml($produk['kode']) ?>
                                </td>

                                <td>
                                    <?= escapeHtml($produk['nama']) ?>
                                </td>

                                <td class="numeric">
                                    <?= formatRupiah($produk['harga']) ?>
                                </td>

                                <td class="numeric">
                                    <?= $produk['stok'] ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </section>

        <section class="panel">
            <h2>2. Produk Berdasarkan Harga Termurah</h2>

            <p class="description">
                Program mengurutkan salinan katalog menggunakan usort().
            </p>

            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>Urutan</th>
                            <th>Kode</th>
                            <th>Nama produk</th>
                            <th class="numeric">Harga</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($produkTerurut as $indeks => $produk): ?>
                            <tr>
                                <td><?= $indeks + 1 ?></td>

                                <td>
                                    <?= escapeHtml($produk['kode']) ?>
                                </td>

                                <td>
                                    <?= escapeHtml($produk['nama']) ?>
                                </td>

                                <td class="numeric">
                                    <?= formatRupiah($produk['harga']) ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </section>

        <section class="panel">
            <h2>3. Keranjang Belanja</h2>

            <p class="description">
                Subtotal setiap baris adalah harga dikalikan jumlah.
            </p>

            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Produk</th>
                            <th class="numeric">Harga satuan</th>
                            <th class="numeric">Jumlah</th>
                            <th class="numeric">Subtotal</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($keranjang as $indeks => $item): ?>
                            <tr>
                                <td><?= $indeks + 1 ?></td>

                                <td>
                                    <?= escapeHtml($item['nama']) ?>
                                </td>

                                <td class="numeric">
                                    <?= formatRupiah($item['harga']) ?>
                                </td>

                                <td class="numeric">
                                    <?= $item['jumlah'] ?>
                                </td>

                                <td class="numeric">
                                    <?= formatRupiah(
                                        hitungSubtotal(
                                            $item['harga'],
                                            $item['jumlah']
                                        )
                                    ) ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>

                    <tfoot>
                        <tr>
                            <th colspan="4">Total belanja</th>

                            <th class="numeric">
                                <?= formatRupiah($totalBelanja) ?>
                            </th>
                        </tr>
                    </tfoot>
                </table>
            </div>

            <p class="note">
                Keranjang berisi
                <?= $jumlahJenisKeranjang ?> jenis produk
                dengan total <?= $jumlahBarang ?> barang.
                Data keranjang ditentukan melalui file data.php.
            </p>
        </section>

        <footer>
            Praktikum Pertemuan 5 —
            Array Asosiatif dan Multidimensi
        </footer>
    </main>
</body>
</html>