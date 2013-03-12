<?php

$user = "root";
$password = "password";
$database = "sample";

mysql_connect(localhost,$user,$password);

@mysql_select_db($database)or die ("Unable to select database");

$query = "SELECT * FROM contacts";
$result = mysql_query($query);

$num = mysql_numrows($result);

mysql_close();


//added comment
//added comment
echo "<b><center>Database Output</center></b></br>";
echo '<table border="1" cellspacing="2" cellpadding="2">';
echo '<tr>
        <th><font face=\"Arial, Helvetica, sans-serif\">Name</font></th>
        <th><font face=\"Arial, Helvetica, sans-serif\">Phone</font></th>
        <th><font face=\"Arial, Helvetica, sans-serif\">Mobile</font></th>
        <th><font face=\"Arial, Helvetica, sans-serif\">Fax</font></th>
        <th><font face=\"Arial, Helvetica, sans-serif\">E-mail</font></th>
        <th><font face=\"Arial, Helvetica, sans-serif\">Website</font></th>
    </tr>';

for ($i = 0; $i < $num; $i++){
        $first=mysql_result($result,$i,"first");
        $last=mysql_result($result,$i,"last");
        $phone=mysql_result($result,$i,"phone");
        $mobile=mysql_result($result,$i,"mobile");
        $fax=mysql_result($result,$i,"fax");
        $email=mysql_result($result,$i,"email");
        $web=mysql_result($result,$i,"web");

        echo "<tr>
                <td>$first</td>
                <td>$phone</td>
                <td>$mobile</td>
                <td>>$fax</td>
                <td>$email</td>
                <td>$web</td>
             </tr>";
}

echo '</table>';

?>