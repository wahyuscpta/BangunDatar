<?php

    if (isset($_POST['simpan'])){

        $alas= $_POST['alas'];
        $tinggi= $_POST['tinggi'];
        $hasil = $alas*$tinggi/2;
        date_default_timezone_set('Asia/Makassar');
        $create = date("Y-m-d H:i:s");
        $id = uniqid();

        $data = file_get_contents('segitiga.json');
        $data = json_decode($data, true);

        $add_arr = ['id' => $id, 'alas' => $alas, 'tinggi' => $tinggi, 'hasil' => $hasil, 'create_at' => $create];

        $data[$id] = $add_arr;
        
        $data = json_encode($data, JSON_PRETTY_PRINT);
        file_put_contents('segitiga.json', $data);

        header("Location: index.php?alas=$alas&tinggi=$tinggi&hasil=$hasil");
    } 
    
?>