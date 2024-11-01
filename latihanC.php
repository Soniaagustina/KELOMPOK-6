<?php
// Membuat array multidimensi untuk produk
$produk = [
    ["ID" => 001 ,"nama" => "piston", "stok" => 10, "harga" => 200000],
    ["ID" => 002,"nama" => "pelek", "stok" => 12, "harga" => 1000000],
    ["ID" => 003,"nama" => "lampu", "stok" => 8, "harga" => 40000],
    ["ID" => 004, "nama" => "spion", "stok" => 16, "harga" => 70000],
    ["ID" => 005, "nama" => "rem", "stok" => 15, "harga" => 50000],
    ["ID" => 006,"nama" => "baut", "stok" => 12, "harga" => 3000],
    ["ID" => 007, "nama" => "busi", "stok" => 15, "harga" => 30000],
];

// Mengurutkan array berdasarkan nama produk
usort($produk, function($a, $b) {
    return strcmp($a['nama'], $b['nama']);
});

// Menampilkan array dalam bentuk tabel
echo "<table border='0'>
<tr>
    <th>ID</th>
    <th>Nama Produk</th>
    <th>Stok</th>
    <th>Harga</th>
</tr>";

foreach ($produk as $item) {
    echo "<tr>
        <td>{$item['ID']}</td>
        <td>{$item['nama']}</td>
        <td>{$item['stok']}</td>
        <td>" . number_format($item['harga'], 0, ',', '.') . "</td>
    </tr>";
}

?>