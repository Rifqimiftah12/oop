<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Latihan 1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
</head>
<body>
    <!-- Header -->
    <!-- End Header -->

     <!-- Content -->
     
        <div class="col-md-12" style="padding:20px;">
            <div class="table-responsive">
            <div class="card">
                <div class="card-header"><center>Data Pengelola</center></div>
                <br>
                <table class="table">
                <?php
                    class Kelas
                    {
                        public $walikelas, $ketuamurid, $sekertaris, $bendahara, $seksi;

                        public function __construct($walikelas, $ketuamurid, $sekertaris, $bendahara, $seksi)
                        {
                            $this->walikelas=$walikelas;
                            $this->ketuamurid=$ketuamurid;
                            $this->sekertaris=$sekertaris;
                            $this->bendahara=$bendahara;
                            $this->seksi=$seksi;
                        }
                        public function class()
                        {
                        return "Wali kelas  : " .  $this->walikelas . "<br>".
                                "Ketua Murid : " .  $this->ketuamurid . "<br>".
                                "Sekertaris  : " .  $this->sekertaris . "<br>".
                                "Bendahara   : " .  $this->bendahara . "<br>".
                                "Seksi       : " .  $this->seksi . "<br>";
                        }
                    }
                    if(isset($_POST['simpan'])){
                        $wk = $_POST['wk'];
                        $km = $_POST['km'];
                        $sk = $_POST['sk'];
                        $bd = $_POST['bd'];
                        $si = $_POST['si'];
                        
                    }
                    $a = new Kelas($wk, $km, $sk, $bd, $si);
                    echo $a->class();
                    ?>
                </table>
                </form>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer>
    </footer>
    <!-- End Footer -->

    <!-- Js -->
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bootstrap.bundle.js"></script>
    <!-- End Js -->
</body>
</html>