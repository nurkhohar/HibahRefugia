<?php
$con = mysqli_connect("localhost", "root", "", "hibahmagetan");

$v1 = $_GET['v1'];
$a1 = $_GET['a1'];
$p1 = $_GET['p1'];
$w1 = $_GET['w1'];
$v2 = $_GET['v2'];
$a2 = $_GET['a2'];
$p2 = $_GET['p2'];
$w2 = $_GET['w2'];

mysqli_query($con, "alter table esp1 auto_increment=1");

$simpan = mysqli_query($con, "insert into esp (vpln,apln,ppln,wpln,vbat,abat,pbat,wbat) values ('$v1','$a1','$p1','$w1','$v2','$a2','$p2','$w2')");

if ($simpan)
  echo "berhasil terkirim";
else
  echo "gagal terkirim";
