<?php
    $con = mysqli_connect("localhost", "root", "", "hibah");

    $sql = mysqli_query($con, "select * from esp2 order by id desc");

    $data = mysqli_fetch_array($sql);

    $vch4 = $data['vch4'];

    if ($vch4 == "") $vch4 = 0;

    echo $vch4;
?>