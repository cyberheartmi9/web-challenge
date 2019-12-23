<?php


require "../../Core/WAF/Sql-inj/Filters.php";
require "../../Core/WAF/Sql-inj/Connection-inc.php";

$waf=new Sql_Filter();


$id=$_GET['id'];



$waf->Level1($id);









$sql="SELECT * FROM `users` WHERE id=$id";
$re=mysql_query($sql);

if($row = mysql_fetch_array($re)){

    echo "Name : ".$row['username']."<br> Password :".$row['password']."<br> Email :".$row['email']."<br> Filename ".$row['filename'];


}else{
    echo '<font color= "#0000FF">';
    //print_r(mysql_error());
    echo "</font>";
}



?>