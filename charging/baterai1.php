<?php
    $con = mysqli_connect("localhost", "root", "", "hibah");

    $sql = mysqli_query($con, "select * from esp2 order by id desc");

    $data = mysqli_fetch_array($sql);

    $baterai1 = $data['baterai1'];

    if ($baterai1 == "") $baterai1 = 0;

    echo $baterai1;
?>