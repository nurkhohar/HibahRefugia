<?php
    $con = mysqli_connect("localhost", "root", "", "hibah");

    $sql = mysqli_query($con, "select * from esp2 order by id desc");

    $data = mysqli_fetch_array($sql);

    $ach2 = $data['ach2'];

    if ($ach2 == "") $ach2 = 0;

    echo $ach2;
?>