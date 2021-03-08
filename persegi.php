<?php

    if (isset($_POST['simpan'])){

        $sisi = $_POST['sisi'];
        $hasil = $sisi*$sisi;
        $id = uniqid(rand());
        date_default_timezone_set('Asia/Makassar');
        $create = date("Y-m-d H:i:s");

        $data = file_get_contents('persegi.json');
        $data = json_decode($data, true);

        $add_arr = ['id' => $id, 'sisi' => $sisi, 'hasil' => $hasil, 'create_at' => $create];

        $data[$id] = $add_arr;
        
        $data = json_encode($data, JSON_PRETTY_PRINT);
        file_put_contents('persegi.json', $data);

        header("Location: index.php?sisi=$sisi&hasil_persegi=$hasil");
    } 
    
?>