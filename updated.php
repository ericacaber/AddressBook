<?php

$ud_id=$_POST['ud_id'];
$ud_first=$_POST['ud_first'];
$ud_last=$_POST['ud_last'];
$ud_phone=$_POST['ud_phone'];
$ud_mobile=$_POST['ud_mobile'];
$ud_fax=$_POST['ud_fax'];
$ud_email=$_POST['ud_email'];
$ud_web=$_POST['ud_web'];

$username="root";
$password="password";
$database="sample";
mysql_connect(localhost,$username,$password);


$query="UPDATE contacts SET first='$ud_first', last='$ud_last', phone='$ud_phone', mobile='$ud_mobile', fax='$ud_fax', email='$ud_email', web='$ud_web' WHERE id='$ud_id'";
mysql_query($query);
echo "Record Updated";
mysql_close();


//update1

//update2

//update3

?>