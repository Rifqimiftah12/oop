<?php
class Siswa
{
    public function __destruct()
    {
        echo "<br> Ini adalah Destructor";
    }
    public function hallo()
    {
        return"<br> Hallo PHP";
    }
    public function __construct()
    {
        echo "<br> Ini adalah Constructor";
    }
}
$hello = new siswa();
echo $hello->hallo();
?>