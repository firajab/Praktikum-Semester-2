<?php
require_once 'class_mahasiswa.php';

$daf1 = new Mahasiswa('0117', 'Aisyah', 'TI', 2021, 4.0);
$daf2 = new Mahasiswa('0116', 'Aliyah', 'SI', 2021, 2.8);

echo 'NIM : '. $daf1->nim .
    '<br>Nama : '. $daf1->nama .
    '<br>IPK : '. $daf1->ipk . 
    '<br>Prodi : '. $daf1->prodi .
    '<br>Tahun Angkatan : '. $daf1->thn_angkatan .
    '<br>Keterangan : '. $daf1->predikat_ipk();
    
echo  '<hr>NIM : '. $daf2->nim .
    '<br>Nama : '. $daf2->nama .
    '<br>Prodi : '. $daf2->prodi .
    '<br>Tahun Angkatan : '. $daf2->thn_angkatan .
    '<br>IPK : '. $daf2->ipk . 
    '<br>Keterangan : '. $daf2->predikat_ipk();
?>