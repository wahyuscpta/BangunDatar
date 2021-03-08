<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/latwebservice3.css">
    <title>WEBS APPS</title>
</head>
<body>

    <br><br>

   <div class="container">
       <div class="row">

            <div class="col-md-6 align-items-center">
                <br><br>
                <h1>SEGITIGA</h1>
            </div>

            <div class="col-md-6">
                <form method="POST" action="segitiga.php">

                    <?php   
                            error_reporting(0);
                            $alas = $_GET['alas'];
                            $tinggi = $_GET['tinggi'];
                    ?>

                    <div class="form-group">
                        <label for="inputFName">ALAS</label>
                        <input type="number" class="form-control" value="<?= $alas ?>" id="inputFName" name="alas">
                        <span class="help-block"></span>
                    </div>

                    <div class="form-group">
                        <label for="inputlName">TINGGI</label>
                        <input type="number" class="form-control" value="<?= $tinggi ?>" id="inputLName" name="tinggi">
                        <span class="help-block"></span>
                    </div>

                    <?php   
                            error_reporting(0);
                            $hasil = $_GET['hasil'];
                            if(isset($hasil)) {  
                    ?>

                    <div class="form-group">
                        <label for="inputFName">HASIL</label>
                        <input type="numBer" class="form-control" required="required" id="inputFName" value="<?= $hasil;?>" name="hasil">
                        <span class="help-block"></span>
                    </div>

                    <?php  } ?>

                    <div class="form-actions">
                        <button class="btn btn-primary" name="simpan" type="submit"> SIMPAN </button>
                        <a href="index.php" class="btn btn-success"> RESET </a>
                    </div>

                </form>
            </div>

       </div>
   </div>
    
    <br><br><br><br>

   <div class="container">
       <div class="row">

            <div class="col-md-6 align-items-center">
                <br>
                <h1>LINGKARAN</h1>
            </div>

            <div class="col-md-6">
                <form method="POST" action="lingkaran.php">

                    <?php   
                            error_reporting(0);
                            $jari = $_GET['jari'];
                    ?>

                    <div class="form-group">
                        <label for="inputFName">JARI JARI</label>
                        <input type="number" class="form-control" value="<?= $jari ?>" id="inputFName" name="jari">
                        <span class="help-block"></span>
                    </div>

                    <?php   
                            error_reporting(0);
                            $hasil_lingkaran = $_GET['hasil_lingkaran'];
                            if(isset($hasil_lingkaran)) {  
                    ?>

                    <div class="form-group">
                        <label for="inputFName">HASIL</label>
                        <input type="numBer" class="form-control" required="required" id="inputFName" value="<?= $hasil_lingkaran;?>" name="hasil">
                        <span class="help-block"></span>
                    </div>

                    <?php  } ?>

                    <div class="form-actions">
                        <button class="btn btn-primary" name="simpan" type="submit"> SIMPAN </button>
                        <a href="index.php" class="btn btn-success"> RESET </a>
                    </div>

                </form>
            </div>

       </div>
   </div>

   <br><br><br><br>

<div class="container">
    <div class="row">

         <div class="col-md-6 align-items-center">
             <br>
             <h1>PERSEGI</h1>
         </div>

         <div class="col-md-6">
             <form method="POST" action="persegi.php">

                 <?php   
                         error_reporting(0);
                         $sisi = $_GET['sisi'];
                 ?>

                 <div class="form-group">
                     <label for="inputFName">SISI PERSEGI</label>
                     <input type="number" class="form-control" value="<?= $sisi ?>" id="inputFName" name="sisi">
                     <span class="help-block"></span>
                 </div>

                 <?php   
                         error_reporting(0);
                         $hasil_persegi = $_GET['hasil_persegi'];
                         if(isset($hasil_persegi)) {  
                 ?>

                 <div class="form-group">
                     <label for="inputFName">HASIL</label>
                     <input type="numBer" class="form-control" required="required" id="inputFName" value="<?= $hasil_persegi;?>" name="hasil">
                     <span class="help-block"></span>
                 </div>

                 <?php  } ?>

                 <div class="form-actions">
                     <button class="btn btn-primary" name="simpan" type="submit"> SIMPAN </button>
                     <a href="index.php" class="btn btn-success"> RESET </a>
                 </div>

             </form>
         </div>

    </div>
</div>

<br><br>
 
    
</body>
</html>