<?php
declare(strict_types=1);

$mahasiswa = [
    'nama' => 'Armina',
    'nim' => '25110007',
    'kelas' => 'TK Grup D',
];

$daftarProduk = [
    [
        'kode' => 'BRG001',
        'nama' => 'Buku Tulis',
        'harga' => 11000,
        'stok' => 20,
    ],
    [
        'kode' => 'BRG002',
        'nama' => 'Pulpen',
        'harga' => 5000,
        'stok' => 30,
    ],
    [
        'kode' => 'BRG003',
        'nama' => 'Penghapus',
        'harga' => 3000,
        'stok' => 15,
    ],
    [
        'kode' => 'BRG004',
        'nama' => 'Penggaris',
        'harga' => 8000,
        'stok' => 10,
    ],
    [
        'kode' => 'BRG005',
        'nama' => 'Spidol',
        'harga' => 12000,
        'stok' => 12,
    ],
    [
    'kode' => 'BRG006',
    'nama' => 'Pensil',
    'harga' => 4000,
    'stok' => 25,
],
];

$keranjang = [
    [
        'kode' => $daftarProduk[0]['kode'],
        'nama' => $daftarProduk[0]['nama'],
        'harga' => $daftarProduk[0]['harga'],
        'jumlah' => 4,
    ],
    [
        'kode' => $daftarProduk[1]['kode'],
        'nama' => $daftarProduk[1]['nama'],
        'harga' => $daftarProduk[1]['harga'],
        'jumlah' => 3,
    ],
    [
        'kode' => $daftarProduk[2]['kode'],
        'nama' => $daftarProduk[2]['nama'],
        'harga' => $daftarProduk[2]['harga'],
        'jumlah' => 4,
    ],
];