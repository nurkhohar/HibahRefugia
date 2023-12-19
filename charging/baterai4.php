<?php
    $con = mysqli_connect("localhost", "root", "", "hibah");

    $sql = mysqli_query($con, "select * from esp2 order by id desc");

    $data = mysqli_fetch_array($sql);

    $baterai4 = $data['baterai4'];

    if ($baterai4 == "") $baterai4 = 0;

    echo $baterai4;
?>