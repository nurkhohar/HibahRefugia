<?php
    $con = mysqli_connect("localhost", "root", "", "hibah");

    $sql = mysqli_query($con, "select * from esp2 order by id desc");

    $data = mysqli_fetch_array($sql);

    $ach3 = $data['ach3'];

    if ($ach3 == "") $ach3 = 0;

    echo $ach3;
?>