<?php


// class ContohStatic{
//     public static $angka =1;

//     public static function hallo(){
//         return "hallo ".self::$angka++."kali";
//     }
// }
// echo ContohStatic::$angka;
// echo "<br>";
// echo ContohStatic::hallo();
// echo "<br>";
// echo ContohStatic::hallo();
class contoh{

    public static $angka = 1;
    public function halo(){
        return "halo".self::$angka++."kali";
    }
}
$obj = new contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();
echo "<hr>";
$obj2 = new contoh;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();





