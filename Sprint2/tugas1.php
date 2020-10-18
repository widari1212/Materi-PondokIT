<?php
class hello{
    public function __construct($nama){
        echo " Selamat Datang ". $nama;
    }
}
$salam = new hello ('Widari');
