<?php

$jsonData = '{
    "nama": "Adetia",
    "jurusan": "Teknik Informatika"
}';

$obj = json_decode($jsonData);

// Akses nilai dari PHP Object
echo $obj->nama;
echo $obj->jurusan;

?>