<?php
    $con = mysqli_connect("localhost", "root", "", "hibah");

    $sql = mysqli_query($con, "select * from esp2 order by id desc");

    $data = mysqli_fetch_array($sql);

    $baterai3 = $data['baterai3'];

    if ($baterai3 == "") $baterai3 = 0;

    echo $baterai3;
?>