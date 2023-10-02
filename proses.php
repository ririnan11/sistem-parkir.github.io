<?php
// Fungsi untuk menghitung biaya parkir
function hitungBiayaParkir($jenis_kendaraan, $jam_masuk, $jam_keluar) {
    // Konversi jam masuk dan jam keluar ke dalam format waktu
    $waktu_masuk = strtotime($jam_masuk);
    $waktu_keluar = strtotime($jam_keluar);

    // Hitung selisih waktu dalam detik
    $selisih_waktu = $waktu_keluar - $waktu_masuk;

    // Menentukan biaya per jam berdasarkan jenis kendaraan
    if ($jenis_kendaraan == "motor") {
        $biaya_per_jam = 5000; // Biaya per jam untuk motor
    } elseif ($jenis_kendaraan == "mobil") {
        $biaya_per_jam = 7000; // Biaya per jam untuk mobil
    } elseif ($jenis_kendaraan == "sepeda") {
        $biaya_per_jam = 2000; // Biaya per jam untuk sepeda
    } else {
        // Jenis kendaraan tidak valid, berikan nilai default atau keluarkan pesan kesalahan
        $biaya_per_jam = 0;
        echo "Jenis Kendaraan Tidak Valid!";
        return;
    }

    // Hitung total biaya parkir
    $biaya_parkir = ($selisih_waktu / 3600) * $biaya_per_jam; // Dalam satuan jam

    return $biaya_parkir;
}

// Ambil data dari formulir
$no_plat = $_POST['no_plat'];
$jenis_kendaraan = $_POST['jenis_kendaraan'];
$jam_masuk = $_POST['jam_masuk'];
$jam_keluar = $_POST['jam_keluar'];

// Hitung biaya parkir
$biaya_parkir = hitungBiayaParkir($jenis_kendaraan, $jam_masuk, $jam_keluar);

// Tampilkan hasil
echo "<h1>Hasil Perhitungan Biaya Parkir</h1>";
echo "Nomor Plat Kendaraan: " . $no_plat . "<br>";
echo "Jenis Kendaraan: " . $jenis_kendaraan . "<br>";
echo "Jam Masuk: " . $jam_masuk . "<br>";
echo "Jam Keluar: " . $jam_keluar . "<br>";
echo "Biaya Parkir: " . number_format($biaya_parkir, 0, ',', '.') . " Rupiah<br>";
?>
