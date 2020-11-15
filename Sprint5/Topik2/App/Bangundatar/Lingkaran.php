<?php

namespace Datar;

class Lingkaran
{
    function __construct()
    {
        if (isset($_POST['hitung1'])) {
            $jari = $_POST;
            $jari = $_POST['jari'];
            $luas = 22 / 7 * $jari * $jari;

            echo "Nilai Jari-jari = $jari <br>";
            echo "Luas = 22/7 * $jari * $jari = $luas";
        }
    }
}
