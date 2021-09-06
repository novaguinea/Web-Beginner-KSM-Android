<!DOCTYPE html>
<html>

<head>
    <title>Pertemuan 1 yeay</title>
</head>

<body>

    <?php

    //print "ini tulisan aja dari ganti phpnya hehe <br>";

    ?>

</body>

</html>

<?php

//halo ini comment
/**ini juga comment
 * tapi multiline
 */

$x = 1;
$y = "ini string";
//echo $x;
var_dump($x);
var_dump($y);

/**
 * 1. numerik: integer, float
 * 2. boolean: true/false
 * 3. array
 * 4. object -> class
 * 5. null
 * 6. string  -> gabungin kata pakai titik
 * 
 * STRING
 * a. length -> strlen()
 * 
 */

$text = "web beginner ksm android"; //web basic ksm android
$len = strlen($text);

//echo $len; panjang string

//ngitung kata yang ada di string
$count_word = str_word_count($text);
echo $count_word . "<br>";

//reverse string
$revstr = strrev($text);
echo $revstr . "<br>";

//replace string
$replacestr = str_replace("beginner", "basic", $text);
echo $replacestr . "<br>";


//operator --> + - * / dll
$a = 1;
$b = 5;

echo $a * $b . "<br>";

/**
 * PERCABANGAN
 * if, else if, else 
 */

if (1 === "1") {
    echo "kambing" . "<br>";
} else {
    echo "domba" . "<br>";
}


/**
 * PERULANGAN
 * 1. for -> perulangan yg batasnya jelas
 * 2. while
 * 3. do while
 * 4. foreach
 * 
 */

// $count = 0;

// while ($count != 0) {
//     echo "jalan" . "<br>";
// }

// echo "berhenti saat while" . "<br>";

// do {
//     $count++;
//     echo "jalan terus" . $count . "<br>";
// } while ($count != 2);

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
    echo $value . "<br>";
}

echo "1" . 1;

?>