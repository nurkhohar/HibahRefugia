<?php
$con = mysqli_connect("localhost", "root", "", "hibahmagetan");

$sql = mysqli_query($con, "select * from esp2 order by id desc");

$data = mysqli_fetch_array($sql);

$apv = $data['apv'];

if ($apv == "") $apv = 0;

echo $apv;
