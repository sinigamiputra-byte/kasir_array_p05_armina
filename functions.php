<?php
declare(strict_types=1);

function escapeHtml(string $teks): string
{
    return htmlspecialchars(
        $teks,
        ENT_QUOTES | ENT_SUBSTITUTE,
        'UTF-8'
    );
}

function formatRupiah(int $nilai): string
{
    return 'Rp' . number_format($nilai, 0, ',', '.');
}

function hitungSubtotal(int $harga, int $jumlah): int
{
    return $harga * $jumlah;
}

function hitungTotalKeranjang(array $keranjang): int
{
    $total = 0;

    foreach ($keranjang as $item) {
        $total += hitungSubtotal(
            $item['harga'],
            $item['jumlah']
        );
    }

    return $total;
}

function hitungJumlahBarang(array $keranjang): int
{
    $totalJumlah = 0;

    foreach ($keranjang as $item) {
        $totalJumlah += $item['jumlah'];
    }

    return $totalJumlah;
}

function bandingkanHarga(array $produkA, array $produkB): int
{
    return $produkA['harga'] <=> $produkB['harga'];
}