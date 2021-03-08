<?php

    if (isset($_POST['simpan'])){

        $alas= $_POST['alas'];
        $tinggi= $_POST['tinggi'];
        $hasil = $alas*$tinggi/2;
        $id = uniqid(rand());

        $data = file_get_contents('segitiga.json');
        $data = json_decode($data, true);

        $add_arr = ['id' => $id, 'alas' => $alas, 'tinggi' => $tinggi, 'hasil' => $hasil];

        $data[$id] = $add_arr;
        
        $data = json_encode($data, JSON_PRETTY_PRINT);
        file_put_contents('segitiga.json', $data);

        header("Location: index.php?alas=$alas&tinggi=$tinggi&hasil=$hasil");
    } 
    
?>