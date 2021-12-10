<?php

//function

//datetime function
// echo (date("l") . " " . date("d - m - Y")) . "<br>"; //1 januari 1970
// echo time();

// $d = mktime(0, 0, 0, 9, 13, 2021); //jam, menit, detik, bulan, tanggal, tahun

// echo "<br>" . date("d/m/Y", $d);

// $string = strtotime("Januari 24");

// echo date("m-d-Y", $string);

//explode() -> 

//array

// array 1 dimensi -> arr[0]
//cara 1
$buah = array("pisang", "nanas", "apel");

//cara 2
$kendaraan = ["motor", "mobil", "pesawat"];

// array multidimensi -> arr[0][1]
$kelompok = [
    [
        "bimo", //ini index ke 0.0
        "dodi",  //ini index ke 0.1
        "minmin"
    ], //array index ke 0.2
    ["linlin", "redi", "sarah"]
];

// array asosiasi -> punya key dan value
$mahasiswa = [
    [
        "nama" => "rahmat",
        "alamat" => "pondok labu"
    ],
    [
        "nama" => "ready",
        "alamat" => "tangerang"
    ]
];

//for atau foreach
//buah
for ($i = 0; $i < count($kendaraan); $i++) {
    echo $kendaraan[$i] . "<br>";
}
echo "<br>";

//foreach kelompok
foreach ($kelompok as $a) { //for ex $kelompok[1] dimasukkin ke $a
    echo $a[0] . "<br>";  //$kelompok[0][0]
    echo $a[1] . "<br>"; //kelompok[0][1]
    echo $a[2] . "<br>";
}

echo  "<br>";

//foreach mahasiswa
foreach ($mahasiswa as $mhs) {
    echo "nama : " . $mhs["nama"] . "<br>"; //$mahasiswa[0]["nama"]
    echo "alamat : " . $mhs["alamat"] . "<br>";
}

var_dump($mahasiswa);

echo "<br>";

print_r($mahasiswa);
