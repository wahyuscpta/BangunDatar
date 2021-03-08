<?php

    if (isset($_POST['simpan'])){

        $jari = $_POST['jari'];
        $hasil = $jari*$jari*3.14;
        $id = uniqid(rand());
        date_default_timezone_set('Asia/Makassar');
        $create = date("Y-m-d H:i:s");

        $data = file_get_contents('lingkaran.json');
        $data = json_decode($data, true);

        $add_arr = ['id' => $id, 'jari' => $jari, 'hasil' => $hasil, 'create_at' => $create];

        $data[$id] = $add_arr;
        
        $data = json_encode($data, JSON_PRETTY_PRINT);
        file_put_contents('lingkaran.json', $data);;

        header("Location: index.php?jari=$jari&hasil_lingkaran=$hasil");
    } 
    
?>