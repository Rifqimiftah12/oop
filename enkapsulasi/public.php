<?php
//buat class laptop
class laptop
{
    public $pemilik;
    //buat public method
    public function hidupkan_laptop()
    {
        return "Hidupkan Laptop";
    }
}
//buat objek jadi class laptop(instansi)
$laptop_anto = new laptop();
//set property
$laptop_anto->pemilik = "Anto";

//tampilkan property
echo $laptop_anto->pemilik;//Anto

//Tampilkan method
echo $laptop_anto->hidupkan_laptop();//"Hidupkan Laptop"
?>