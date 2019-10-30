<?php
 class Singa{
  public $warna       = 'orange';
  public $panjang       = 260.5;
  public $berjalan    =true;
  public $jumlah_kaki = 4;
  public function berburu()
  {
      return "-Singa biasanya dia berburu rusa(atau semacam binatang lainnya) untuk dimakan bersama keluarganya tp ada juga singa yang pelit
      atau tidak mau membagikan hasil buruannya";
  }
  public function makan()
  {
      return "-Setelah itu singa bisa memakan hasil buruan itu seperti diatas bisa di makan dengan keluarga
      atau dimakan oleh singa itu sendiri";
  }
  public function tidur()
  {
      return "-Dan biasanya setelah makan singa-singa itu ada yang suka langsung tidur";
  }
  public function bermain()
  {
      return "-Dan setelah tidur singa biasanya bermain bersama sejenisnya misalkan singa yang masih kecil 
      itu suka bermain dengan singa seumurannya lagi";
  }
  public function berjaga()
  {
      return "-Dan biasanya singa dewasa itu suka ada yang menjaga keluarganya atau berjaga pada malam
      hari karena disaat malam suka ada yang menyerang para kelompok singa";
  }
  public function melahirkan($var, $var2)
  {
      return "-Dan biasanya singa dewasa melakukan perkawinan ".$var. ' dan ' .$var2;
  }
 }
 $singa_asli = new Singa;
 echo $singa_asli->warna;
 echo "<br>".$singa_asli->panjang;
 echo "<br>".$singa_asli->jumlah_kaki;
 echo "<br>".$singa_asli->berjalan;
 echo "<br>".$singa_asli->berburu();
 echo "<br>".$singa_asli->makan();
 echo "<br>".$singa_asli->tidur();
 echo "<br>".$singa_asli->bermain();
 echo "<br>".$singa_asli->berjaga();
 echo "<br>".$singa_asli->melahirkan('Jantan','Betina');
 echo "<hr>";
?>