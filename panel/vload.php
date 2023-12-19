<?php
$con = mysqli_connect("localhost", "root", "", "hibahmagetan");

$sql = mysqli_query($con, "select * from esp2 order by id desc");

$data = mysqli_fetch_array($sql);

$vload = $data['vload'];

if ($vload == "") $vload = 0;

echo $vload;
