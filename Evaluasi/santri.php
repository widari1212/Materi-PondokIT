<?php
class Registrasi 
{
	
	function __construct($santri)
	{

		print_r($santri);

	}

	 static function namaSantri($daftar)
	{
		echo "Daftar Santri Baru \n";
		$baru = $daftar;

		print_r($baru);
	}

}


echo "Tambahkan Daftar Santri Baru \n";
$masuk = (int) fgets(STDIN);

for ($i=0; $i < $masuk ; $i++) { 
	echo "Masukan Nama Santri : \n";
	$nama =(trim(fgets(STDIN)));
	echo "Masukan NIK : \n";
	$nik = (trim(fgets(STDIN)));
		
	$array[]= [$nama,$nik];

	
	$run = $array;
	
}
$santri = $run;
$masuk = new registrasi($santri);

