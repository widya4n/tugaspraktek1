<?php

$jsonData = '{
    "nama": "Ahmad Widyan Luthfil Huda",
    "jurusan": "Teknik Informatika"
}';

$obj = json_decode($jsonData);

// Akses nilai dari PHP Object
echo $obj->nama;
echo $obj->jurusan;


?>
