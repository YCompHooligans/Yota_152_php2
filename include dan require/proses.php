<?php
include "inc.php";
echo "nilai pada variable angka adalah $angka";
echo "<br>";
echo "maka hasil dari $angka adalah";
echo "<br>";

if ($angka==100){
    echo "memuaskan";
} elseif ($angka<100 && $angka>=85){
    echo "Sangat Baik";
} elseif ($angka<85 && $angka>=70){
    echo "Baik";
} elseif ($angka<70 && $angka>=55){
    echo "Cukup";
} elseif ($angka<55 && $angka>=0){
    echo "Kurang";
}