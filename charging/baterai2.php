<?php
    $con = mysqli_connect("localhost", "root", "", "hibah");

    $sql = mysqli_query($con, "select * from esp2 order by id desc");

    $data = mysqli_fetch_array($sql);

    $baterai2 = $data['baterai2'];

    if ($baterai2 == "") $baterai2 = 0;

    echo $baterai2;
?>