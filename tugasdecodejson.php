<?php
// 1. Variabel berisi JSON
$json = '{"Nama":"Andreas Damar Saputra","Nim":"G.231.22.0155","Jurusan":"Teknik Informatika","Magitta Kuliah":["Rekayasa Web","Mobile Application","Machine Learning"]}';

$obj = json_decode($json);
$arr = json_decode($json, true);

echo json_encode($obj);
echo json_encode($arr);
?>