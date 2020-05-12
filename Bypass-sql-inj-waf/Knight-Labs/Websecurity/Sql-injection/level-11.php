<?php


require "../../Core/WAF/Sql-inj/Connection-inc.php";
require "../../Core/WAF/Sql-inj/Crypto.php";




$method="aes-256-cbc";
$password="secret";




$data=$_GET['id'];


$dec=new Crypto($data,$password,$method);
$id=$dec->Decrypt();


if($id==false){


    echo "<h1> cant Decrypt it !!!!!!</h1>";
    echo "<a href='/Knight-Labs/Websecurity/Sql-injection/search.php?name=1'> hint  </a><br>";


}



else {

    $sql = "SELECT * FROM `users` WHERE id=$id";
    $re = mysql_query($sql);

    if ($row = mysql_fetch_array($re)) {

        echo "Name : " . $row['username'] . "<br> Password :" . $row['password'] . "<br> Email :" . $row['email'];


    } else {
        echo '<font color= "#0000FF">';
        print_r(mysql_error());
        echo "</font>";
    }

}


?>
