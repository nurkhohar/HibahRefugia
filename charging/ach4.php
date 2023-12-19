<?php
    $con = mysqli_connect("localhost", "root", "", "hibah");

    $sql = mysqli_query($con, "select * from esp2 order by id desc");

    $data = mysqli_fetch_array($sql);

    $ach4 = $data['ach4'];

    if ($ach4 == "") $ach4 = 0;

    echo $ach4;
?>