<?php
class Segitiga
{
    public $alas, $tinggi;

    public function __construct($alas, $tinggi)
    {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }
    public function luas()
    {
        $luas = $this->alas * $this->tinggi / 2;
        return $luas;
    }
    
}
if(isset($_POST['simpan'])){

    $alas = $_POST['alas'];
    $tinggi = $_POST['tinggi'];
}
$segitiga = new Segitiga ($alas, $tinggi);
echo "Alas : $segitiga->alas <br>";
echo "Tinggi : $segitiga->tinggi <br>";
echo "Luas Segitiga : " . $segitiga->luas(). "<br>";
?>