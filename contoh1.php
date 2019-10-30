<?php
class sekolah
{
    public $nama;
    public$alamat;

    public function datasekolah ($a = "Smk Assalaam",$b = "Situ Tarate")
    {
        $this->nama=$a;
        $this->alamat=$b;
        return "Nama Sekolah : $a, Alamat Sekolah : $b";
    }
}
$Sekolah1 = new Sekolah();
echo $Sekolah1->datasekolah();
?>