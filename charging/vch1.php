<?php
    $con = mysqli_connect("localhost", "root", "", "hibah");

    $sql = mysqli_query($con, "select * from esp2 order by id desc");

    $data = mysqli_fetch_array($sql);

    $vch1 = $data['vch1'];

    if ($vch1 == "") $vch1 = 0;

    echo $vch1;
?>