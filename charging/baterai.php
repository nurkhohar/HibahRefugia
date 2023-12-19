<?php
    $con = mysqli_connect("localhost", "root", "", "dbmonitoringesc");

    $sql = mysqli_query($con, "select * from tb_sensor order by id desc");

    $data = mysqli_fetch_array($sql);

    $baterai = $data['baterai'];

    if ($baterai == "") $baterai = 10;

    echo $baterai;
?>