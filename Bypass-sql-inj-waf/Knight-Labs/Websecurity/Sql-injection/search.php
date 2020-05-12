<?php
require "../../Core/WAF/Sql-inj/Crypto.php";

$method="aes-256-cbc";
$password="secret";




if((isset($_GET['name']) && (!empty($_GET['name'])))) {
    $data=$_GET['name'];
    $enc=new Crypto($data,$password,$method);

    echo $enc->Encrypt();

}
else{
    echo "<h1> please Set get name parameter </h1>";

}







?>

