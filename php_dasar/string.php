<?php 
//Menghitung jumlah karakter dengan strlen()";
$kalimat = "Belajar pemrograman di malasngoding.com";
echo strlen($kalimat);

echo "</br>";
echo "</br>";
//Menghitung Jumlah kata pada String dengan str_word_count()
$kalimat = "Belajar pemrograman di malasngoding";
echo str_word_count($kalimat);


echo "</br>";
echo "</br>";
//Membalik String dengan strrev
$kalimat = "Belajar pemrograman di malasngoding";
echo strrev($kalimat);

echo "</br>";
echo "</br>";
//Memfilter dan mengganti string dengan str_replace
$kalimat = "Belajar pemrograman di malasngoding";
echo str_replace("Belajar","Tutorial",$kalimat);

?>