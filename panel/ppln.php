<?php
$con = mysqli_connect("localhost", "root", "", "hibahmagetan");

$sql = mysqli_query($con, "select * from esp1 order by id desc");

$data = mysqli_fetch_array($sql);

$ppln = $data['ppln'];

if ($ppln == "") $ppln = 0;

echo $ppln;
