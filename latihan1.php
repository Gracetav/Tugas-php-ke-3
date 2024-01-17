<?php
// Variabel diluar function
$nama_lengkap = "Afrizal Dwi Handika";
$umur = 18;
$kelas = "XII RPL 1";
$tempat_lahir = "Jakarta";
$tanggal_lahir = "14 Mei 2000";
$nomor_wa = "0895321015259";
$alamat = "Jl Abdul Muis No 44 Jakarta Pusat";

// Function untuk menampilkan biodata
function my_biodata() {
    global $nama_lengkap, $umur, $kelas, $tempat_lahir, $tanggal_lahir, $nomor_wa, $alamat;

    echo "=== Program Biodata Sederhana ===\n<br/>";
    echo "Nama: " . $nama_lengkap . "\n <br/>";
    echo "Umur: " . $umur . "\n<br/>";
    echo "Kelas: " . $kelas . "\n<br/>";
    echo "Tempat/Tanggal Lahir: " . $tempat_lahir . ", " . $tanggal_lahir . "\n<br/>";
    echo "Nomor WA: " . $nomor_wa . "\n<br/>";
    echo "Alamat: " . $alamat . "\n<br/>";
}

// Memanggil fungsi untuk menampilkan biodata
my_biodata();
?>

