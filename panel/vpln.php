<?php
$con = mysqli_connect("localhost", "root", "", "hibahmagetan");

$sql = mysqli_query($con, "select * from esp1 order by id desc");

$data = mysqli_fetch_array($sql);

$vpln = $data['vpln'];

if ($vpln == "") $vpln = 0;

echo $vpln;
