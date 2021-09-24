<?php

// define('NAMA', 'Sandhika Ghalih');
// echo NAMA;

// echo "<br>";

// const UMUR = 32;
// echo UMUR;

//class Coba {
//    const NAMA = 'Sandika';
// }

// echo Coba::NAMA;


// echo __FILE__;



// function coba() {
//    return __FUNCTION__;
// }

// echo coba();

class coba {
    public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;











?>