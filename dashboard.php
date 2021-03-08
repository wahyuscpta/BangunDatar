<?php
    $segitiga = file_get_contents('segitiga.json');
    $jsonsegitiga = json_decode($segitiga);

    $lingkaran = file_get_contents('lingkaran.json');
    $jsonlingkaran = json_decode($lingkaran);

    
    $persegi = file_get_contents('persegi.json');
    $jsonpersegi = json_decode($persegi);

    $dump = rsort($jsonsegitiga);
    echo $dump;
?>


<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta nam="author" content="Suhari">
    <title>Dashboard</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/latwebservice3.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <br><br>
    <div class="container">
        <div class="row">

            <div class="col-md-6">
                <table class="table table-striped table-bordered table-hover mt-5">
                    <tr>
                        <th colspan="4" class="text-center">TABEL PERSEGI</th>
                    </tr>
                    <tr>
                        <th>No</th>
                        <th>Sisi</th>
                        <th>Hasil</th>
                    </tr>
                        <?php
                            $no=0; foreach($jsonpersegi as $index => $obj): $no++;
                        ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $obj->sisi; ?></td>
                        <td><?php echo $obj->hasil; ?></td>

                        <?php endforeach; ?>
                    </tr>
                </table>
            </div>

            <div class="col-md-6">
                <table class="table table-striped table-bordered table-hover mt-5">
                    <tr>
                        <th colspan="4" class="text-center">TABEL LINGKARAN</th>
                    </tr>
                    <tr>
                        <th>No</th>
                        <th>Jari Jari</th>
                        <th>Hasil</th>
                    </tr>
                        <?php
                            $no=0; foreach($jsonlingkaran as $index => $obj): $no++;
                        ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $obj->jari; ?></td>
                        <td><?php echo $obj->hasil; ?></td>

                        <?php endforeach; ?>
                    </tr>
                </table>
            </div>

            <div class="col-md-12">
                <table class="table table-striped table-bordered table-hover mt-5">
                    <tr>
                        <th colspan="4" class="text-center">TABEL SEGITIGA</th>
                    </tr>
                    <tr>
                        <th>No</th>
                        <th>Alas</th>
                        <th>Tinggi</th>
                        <th>Hasil</th>
                    </tr>
                        <?php
                            $no=0; foreach($jsonsegitiga as $index => $obj): $no++;
                        ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $obj->alas; ?></td>
                        <td><?php echo $obj->tinggi; ?></td>
                        <td><?php echo $obj->hasil; ?></td>

                        <?php endforeach; ?>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <br><br>
    <div class="container">
        <canvas id="myChart"></canvas>
    </div>

    <script>
        let myChart = document.getElementById('myChart').getContext('2d');

        // Global Options
        Chart.defaults.global.defaultFontFamily = 'Lato';
        Chart.defaults.global.defaultFontSize = 18;
        Chart.defaults.global.defaultFontColor = '#777';

        let massPopChart = new Chart(myChart, {
        type:'bar',
        data:{
            labels:['Segitiga', 'Persegi', 'Lingkaran'],
            datasets:[{
            label:'Segitiga',
            data:[

                <?= count($jsonsegitiga) ?>,
                <?= count($jsonpersegi) ?>,
                <?= count($jsonlingkaran) ?>

            ],
            backgroundColor:[
                'rgba(255, 99, 132, 0.6)',
                'rgba(54, 162, 235, 0.6)',
                'rgba(255, 206, 86, 0.6)',
                'rgba(75, 192, 192, 0.6)',
                'rgba(153, 102, 255, 0.6)',
                'rgba(255, 159, 64, 0.6)',
                'rgba(255, 99, 132, 0.6)'
            ],
            borderWidth:1,
            borderColor:'#777',
            hoverBorderWidth:3,
            hoverBorderColor:'#000'
            }]
        },
        options:{
            title:{
            display:true,
            text:'Perbandingan',
            fontSize:25
            },
            legend:{
            display:true,
            position:'right',
            labels:{
                fontColor:'#000'
            }
            },
            layout:{
            padding:{
                left:0,
                right:0,
                bottom:0,
                top:50
            }
            },
            tooltips:{
            enabled:true
            }
        }
        });
    </script>

</body>
</html>