<?php
$nama = "Andreas Damar Saputra";
$nim = "G.231.22.0155";
$jurusan = "Teknik Informatika";
$matkul = ["Rekayasa Web", "Mobile Application", "Machine Learning"];

$data = [
    "nama" => $nama,
    "nim" => $nim,
    "jurusan" => $jurusan,
    "matkul" => $matkul
];

echo json_encode($data);
?>