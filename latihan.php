<?php
class Aritmatika
{
    public $bilangan1;
    public $bilangan2;

    public function tambah ($bil1 = null, $bil2 = null)
    {
      $this->bilangan1 = $bil1;
      $this->bilangan2 = $bil2;
      return "Bilangan : $bil1+$bil2" . " = " . ($bil1+$bil2);
    }
    public function kurang ($bil1 = null, $bil2 = null)
    {
      $this->bilangan1 = $bil1;
      $this->bilangan2 = $bil2;
      return "Bilangan : $bil1-$bil2" . " = " . ($bil1-$bil2);
    }
    public function kali ($bil1 = null, $bil2 = null)
    {
      $this->bilangan1 = $bil1;
      $this->bilangan2 = $bil2;
      return "Bilangan : $bil1*$bil2" . " = " . ($bil1*$bil2);
    }
    public function bagi ($bil1 = null, $bil2 = null)
    {
      $this->bilangan1 = $bil1;
      $this->bilangan2 = $bil2;
      return "Bilangan : $bil1/$bil2" . " = " . ($bil1/$bil2);
    }
}

$Bil1 = new Aritmatika();
echo $Bil1->tambah(10, 20)."<br>";
echo $Bil1->kurang(30, 20)."<br>";
echo $Bil1->kali(3, 2)."<br>";
echo $Bil1->bagi(30, 30)."<hr>";

$Bil2 = new Aritmatika();
echo $Bil1->tambah(20, 20)."<br>";
echo $Bil1->kurang(40, 20)."<br>";
echo $Bil1->kali(5, 2)."<br>";
echo $Bil1->bagi(60, 30);
?>