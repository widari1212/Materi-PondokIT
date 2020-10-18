<?php
class Registrasi 
{
    static $student = [];
	
	function __construct()
	{

		var_dump(self::$student);

	}

public	 static function insertDataStudent($nama,$nik)
	{
		$data = self::$student = [
            "nama"=> $nama,
            "nik" => $nik
        ];
    
	}

}
	echo "Masukan Nama Santri : \n";
	$nama =(trim(fgets(STDIN)));
	echo "Masukan NIK : \n";
	$nik = (trim(fgets(STDIN)));
		
	$array[]= [$nama,$nik];




Registrasi:: insertDataStudent($nama,$nik);

