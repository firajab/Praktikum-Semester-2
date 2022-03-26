<?php
require_once 'class_nilaiMahasiswa.php';

$mhs1 = new nilaiMahasiswa('0117', 'Aminah', 'Pemrograman Web', 70);
$mhs2 = new nilaiMahasiswa('0119', 'Fatimah', 'Basis Data', 90);

echo 'NIM : '. $mhs1->nim .
    '<br>Nama : '. $mhs1->nama .
    '<br>Mata Kuliah : '. $mhs1->matkul .
    '<br>Nilai : '. $mhs1->nilai .
    '<br>Grade : '. $mhs1->grade();
    '<br>Keterangan : '. $mhs1->hasil();

echo '<hr>NIM : '. $mhs2->nim .
    '<br>Nama : '. $mhs2->nama .
    '<br>Mata Kuliah : '. $mhs2->matkul .
    '<br>Nilai : '. $mhs2->nilai .
    '<br>Grade : '. $mhs2->grade();
    '<br>Keterangan : '. $mhs2->hasil();
?>