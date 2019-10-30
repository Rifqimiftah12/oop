<?php
class Komputer
{
    private $jenis_processor = "Intel Core i7-4790 3.6Ghz";
    public function tampilkan_prcessor()
    {
        return $this->jenis_processor;
    }
}

class laptop extends Komputer
{

    public function tampilkan_prcessor()
    {
        return $this->jenis_processor;
    }
}

$komputer_baru = new Komputer();
$laptop_baru = new laptop();

echo $komputer_baru->tampilkan_prcessor();

echo $laptop_baru->tampilkan_prcessor();
?>