<?php

    if(isset($_GET['id'])){

        $id =  $_GET['id'];

        $file = 'persegi.json';
        $data = file_get_contents($file);
        $data = json_decode($data, true);

        unset($data[$id]);

        $data = json_encode($data, JSON_PRETTY_PRINT);
        $data = file_put_contents($file, $data);

        header('location: dashboard.php');

    }

?>