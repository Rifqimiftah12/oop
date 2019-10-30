<?php
class siswa
 {

        public $nama,$alamat,$usia,$hobi;

    public function datadiri($nama=rifqi,$alamat=Cangkuang,$usia=17)
    {
        $this->nama = $nama;
        $this->alamat = $alamat;
        $this->usia = $usia;
        return "Nama : $nama, Alamat : $alamat, Usia : $usia";
    }

    public function hobi($hobi)
    {
        $this->hobi = $hobi;
        return $this->datadiri() . "Hobi : $hobi ";
    }
}

$Siswa1 = new Siswa();
$Siswa1->datadiri('Ahmad', 'Bandung', 18);
echo $Siswa1->hobi("Mancing");
