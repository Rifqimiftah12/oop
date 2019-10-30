<?php
class Hp
{
    private $pin_hp = 150102;
    protected $pin_aplikasi = 150102;
    public $merk;

    public function masuk_hp()
    {
        $this->pin_hp;
        return "Masuk home hp = " . $this->pin_hp;
    }
}
class aplikasi extends Hp
{
    public function foto()
  {
    return"<br> Masuk Aplikasi = " . $this->pin_aplikasi;
  }
}

$hp = new Hp();
$aplikasi = new aplikasi();

$hp->merk = "Xiomi<br>";
echo $hp->merk;
echo $hp->masuk_hp();
echo $aplikasi->foto();
    
?>