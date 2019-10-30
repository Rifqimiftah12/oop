<?php
//buat class laptop
class laptop
{
    protected $pemilik;
    //buat protected method
    protected function hidupkan_laptop()
    {
        return "Hidupkan Laptop";
    }
}
//buat objek dari class laptop(instansi)
$laptop_anto = new laptop();

//set protected property akan menghasilkan error
$laptop_anto->pemilik = "Anto";
//fatal error : cannot access protected property laptop::$pemilik

//tampilkan protected property akan menghasilkan error
echo $laptop_anto->pemilik;
//fatal error : cannot access protected property laptop::$pemilik

//jalankan protected method akan menghasilkan error
echo $laptop_anto->hidupkan_laptop();
//fatal error : call to protected method
?>