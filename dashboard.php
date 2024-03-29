<?php
    $segitiga = file_get_contents('segitiga.json');
    $jsonsegitiga = json_decode($segitiga);

    $lingkaran = file_get_contents('lingkaran.json');
    $jsonlingkaran = json_decode($lingkaran);

    
    $persegi = file_get_contents('persegi.json');
    $jsonpersegi = json_decode($persegi);

    $jumlah_segitiga = count((array)$jsonsegitiga);
    $jumlah_persegi = count((array)$jsonpersegi);
    $jumlah_lingkaran = count((array)$jsonlingkaran);
    

    $jumlah_data = $jumlah_segitiga+$jumlah_persegi+$jumlah_lingkaran;
    $persen_persegi = $jumlah_persegi/$jumlah_data*100;
    $persen_segitiga = $jumlah_segitiga/$jumlah_data*100;
    $persen_lingkaran = $jumlah_lingkaran/$jumlah_data*100;

?>


<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta nam="author" content="Suhari">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

    <style>
        th{
            text-align: center;
        }
    </style>

<body>

    <div class="container mt-5">
        <div class="row">

        <div class="col-12 mb-5">
            <a href="index.php" class="btn btn-primary">BACK TO HOME</a>
        </div>

            <div class="col-4">
                <div class="card" style="height: 10rem;">
                    <div class="card-body">
                        <h5 class="card-title text-center mt-3">Jumlah Perhitungan Segitiga</h5>
                        <h4 class="card-text text-center mt-4"><?= $jumlah_segitiga ?></h4>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="card" style="height: 10rem;">
                    <div class="card-body">
                        <h5 class="card-title text-center mt-3">Jumlah Perhitungan Persegi</h5>
                        <h4 class="card-text text-center mt-4"><?= $jumlah_persegi ?></h4>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="card" style="height: 10rem;">
                    <div class="card-body">
                        <h5 class="card-title text-center mt-3">Jumlah Perhitungan Lingkaran</h5>
                        <h4 class="card-text text-center mt-4"><?= $jumlah_lingkaran ?></h4>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mt-5">
                <table class="table table-striped table-bordered table-hover mt-5">
                    <tr>
                        <th colspan="5" class="text-center">TABEL LUAS PERSEGI</th>
                    </tr>
                    <tr class="text-center">
                        <th>No</th>
                        <th>Sisi</th>
                        <th>Hasil</th>
                        <th>Tanggal Dibuat</th>
                        <th>Aksi</th>
                    </tr>
                        <?php
                            $no=0; foreach($jsonpersegi as $index => $obj): $no++;
                        ?>
                    <tr class="text-center">
                        <td><?php echo $no; ?></td>
                        <td><?php echo $obj->sisi; ?> cm</td>
                        <td><?php echo $obj->hasil; ?> cm<sup>2</sup></td>
                        <td><?php echo $obj->create_at; ?></td>
                        <td><a href="hapus_persegi.php?id=<?= $obj->id ?>" class="btn btn-danger btn-sm">Hapus</a></td>

                        <?php endforeach; ?>
                    </tr>
                </table>
            </div>

            <div class="col-md-6 mt-5">
                <table class="table table-striped table-bordered table-hover mt-5">
                    <tr>
                        <th colspan="5" class="text-center">TABEL LUAS LINGKARAN</th>
                    </tr>
                    <tr>
                        <th>No</th>
                        <th>Jari Jari</th>
                        <th>Hasil</th>
                        <th>Tanggal Dibuat</th>
                        <th>Aksi</th>
                    </tr>
                        <?php
                            $no=0; foreach($jsonlingkaran as $index => $obj): $no++;
                        ?>
                    <tr class="text-center">
                        <td><?php echo $no; ?></td>
                        <td><?php echo $obj->jari; ?> cm</td>
                        <td><?php echo $obj->hasil; ?> cm<sup>2</sup></td>
                        <td><?php echo $obj->create_at; ?></td>
                        <td><a href="hapus_lingkaran.php?id=<?= $obj->id ?>" class="btn btn-danger btn-sm">Hapus</a></td>

                        <?php endforeach; ?>
                    </tr>
                </table>
            </div>

            <div class="col-md-12">
                <table class="table table-striped table-bordered table-hover mt-5">
                    <tr>
                        <th colspan="6" class="text-center">TABEL LUAS SEGITIGA</th>
                    </tr>
                    <tr class="text-center">
                        <th>No</th>
                        <th>Alas</th>
                        <th>Tinggi</th>
                        <th>Hasil</th>
                        <th>Tanggal Dibuat</th>
                        <th>Aksi</th>
                    </tr>
                        <?php
                            $no=0; foreach($jsonsegitiga as $index => $obj): $no++;
                        ?>
                    <tr class="text-center">
                        <td><?php echo $no; ?></td>
                        <td><?php echo $obj->alas; ?> cm</td>
                        <td><?php echo $obj->tinggi; ?> cm</td>
                        <td><?php echo $obj->hasil; ?> cm<sup>2</sup></td>
                        <td><?php echo $obj->create_at; ?></td>
                        <td><a href="hapus_segitiga.php?id=<?= $obj->id ?>" class="btn btn-danger btn-sm">Hapus</a></td>

                        <?php endforeach; ?>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <div class="container mt-5 mb-5 mx-auto">

        <h3 class="mt-5 mb-5 text-center">Diagram Perbandingan Jumlah Data</h3>

        <table cellpadding="5" class="mx-auto">
            <tr>
                <td valign="bottom" class="pl-3">
                    <div class="text-white text-center" style="padding: <?= $jumlah_persegi*50 ?>px 0px;width: 50px;background-color: red;"><?= $jumlah_persegi ?></div>
                </td>
                <td valign="bottom" class="pl-3">
                    <div  class="text-white text-center" style="padding: <?= $jumlah_segitiga*50 ?>px 0px;width: 50px;background-color: green;"><?= $jumlah_segitiga ?></div>
                </td>
                <td valign="bottom" class="pl-3">
                    <div class="text-white text-center" style="padding: <?= $jumlah_lingkaran*50 ?>px 0px;width: 50px;background-color: blue;"><?= $jumlah_lingkaran ?></div>
                </td>

            </tr>

            <tr>
                <td class="p-3">Persegi</td>
                <td class="p-3">Segitiga</td>
                <td class="p-3">Lingkaran</td>
            </tr>
        </table>
    </div>

    <div class="container mt-5 mb-5 pt-5">

        <h3 class="text-center mb-5">Persentase Perbandingan Jumlah Data</h3>

        <div class="text-white text-center pt-1" style="width: <?= round($persen_persegi) ?>%;height: 40px;background-color: red;">Persegi <?= round($persen_persegi) ?> %</div>

        <div  class="text-white text-center pt-1" style="width: <?= round($persen_segitiga) ?>%;height: 40px;background-color: green;">Segitiga <?= round($persen_segitiga) ?> %</div>

        <div class="text-white text-center pt-1" style="width: <?= round($persen_lingkaran) ?>%;height: 40px;background-color: blue;">Lingkaran <?= round($persen_lingkaran) ?> %</div>


    </div>

</body>
</html>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
