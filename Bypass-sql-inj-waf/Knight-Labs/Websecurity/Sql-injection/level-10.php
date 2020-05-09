<?php


require "../../Core/WAF/Sql-inj/Connection-inc.php";



$id=$_GET['id'];

$key='secret';

$sign=md5($id.$key);
//echo $sign."<br>";
$sig=$_GET['sig'];

if($sig==$sign) {


    $sql = "SELECT * FROM `users` WHERE id=$id";
    $re = mysql_query($sql);

    if ($row = mysql_fetch_array($re)) {

        echo "Name : " . $row['username'] . "<br> Password :" . $row['password'] . "<br> Email :" . $row['email'] . "<br> Filename " . $row['filename'];


    } else {
        echo '<font color= "#0000FF">';
        print_r(mysql_error());
        echo "</font>";
    }
}
else{

    echo "<h1>Bad sign ";

}

?>
