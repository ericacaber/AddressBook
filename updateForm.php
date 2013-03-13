<?php

$id=$_GET['id'];
$username="root";
$password="password";
$database="sample";
mysql_connect(localhost,$username,$password);

$query=" SELECT * FROM contacts WHERE id='$id'";
$result=mysql_query($query);
$num=mysql_numrows($result);
mysql_close();

 for($i = 0; i < $num; $i++){
    $first=mysql_result($result,$i,"first");
    $last=mysql_result($result,$i,"last");
    $phone=mysql_result($result,$i,"phone");
    $mobile=mysql_result($result,$i,"mobile");
    $fax=mysql_result($result,$i,"fax");
    $email=mysql_result($result,$i,"email");
    $web=mysql_result($result,$i,"web");

    echo '
        <form action=\"updated.php\" method=\"post\">
        //<input type=\"hidden\" name=\"ud_id\" value=\"<? echo $id; ?>">
        First_Name:<input type=\"text\" name=\"ud_first\" value=\"$first\"><br>
        Last Name: <input type=\"text\" name=\"ud_last\" value="<? echo $last; ?>"><br>
        Phone Number: <input type=\"text\" name=\"ud_phone\" value="<? echo $phone; ?>"><br>
        Mobile Number: <input type=\"text\" name=\"ud_mobile\" value="<? echo $mobile; ?>"><br>
        Fax Number: <input type=\"text\" name=\"ud_fax\" value="<? echo $fax; ?>"><br>
        E-mail Address: <input type=\"text\" name=\"ud_email\" value="<? echo $email; ?>"><br>
        Web Address: <input type="\text\" name=\"ud_web\" value="<? echo $web; ?>"><br>
        <input type="\Submit\" value="\Update\">
        </form>';

     //try

     //33
}


?>