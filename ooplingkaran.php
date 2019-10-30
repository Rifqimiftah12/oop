<?php
class Lingkaran
{
    public $jari, $phi= 3.14;

    public function __construct($jari)
    {
        $this->jari = $jari;
    }
    public function luas()
    {
        $luas = $this->phi * $this->jari * $this->jari;
        return $luas;
    }
    public function keliling()
    {
        $kel = 2 * ($this->phi * $this->jari);
        return $kel;
    }
}

if(isset($_POST['submit'])){
	$jari = $_POST['jari'];


}
$linkaran = new Lingkaran ($jari);
echo "jari-jari : " .$linkaran ->jari. "<br>";
echo "Luas Lingkaran Adalah :" . $linkaran->luas()."<br>";
echo "Keliling Lingkaran Adalah :" . $linkaran->keliling(). "<br>";

?>