<?php
$con = mysqli_connect("localhost", "root", "", "hibahmagetan");

$sql = mysqli_query($con, "select * from esp2 order by id desc");

$data = mysqli_fetch_array($sql);

$vpv = $data['vpv'];

if ($vpv == "") $vpv = 0;

echo $vpv;
