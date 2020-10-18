<?php
class coba{
    
    const nama = 'widari';
}
echo coba::nama;
echo "<hr>";
// define ('nama','widari');=>tidak bisa disimpan di dalam kelas.
// echo nama;


// const umur = 18;
// echo umur;
function coba(){
    return __FUNCTION__;
}
echo coba();



