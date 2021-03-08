<?php

    if (isset($_POST['simpan'])){

        $sisi = $_POST['sisi'];
        $hasil = $sisi*$sisi;
        $id = uniqid(rand());

        $data = file_get_contents('persegi.json');
        $data = json_decode($data, true);

        $add_arr = ['id' => $id, 'sisi' => $sisi, 'hasil' => $hasil];

        $data[$id] = $add_arr;
        
        $data = json_encode($data, JSON_PRETTY_PRINT);
        file_put_contents('persegi.json', $data);

        header("Location: index.php?sisi=$sisi&hasil_persegi=$hasil");
    } 
    
?>