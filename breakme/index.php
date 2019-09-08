<h1> Enrypted transfered data to database could prevent you from sql injection  but sometime if forget something could lead to breach </h1>	<br>
<a href="/breakme/setup/install.php">Click to Setup Database </a>
<form action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" method="post">
    <br>
    username : <input type="text" name="u"><br>
    password : <input type="text" name="p"><br>
    <input type="submit" value="Login">


</form>





<?php

require "db/Connection-inc.php";


if(isset($_POST['u'])&&isset($_POST['p'])){

$u=mysql_escape_string($_POST['u']);
$pass=mysql_escape_string($_POST['p']);
$p=hash("md5",$pass,true);
if(!empty($u)&&!empty($pass)){

$sql="SELECT * FROM `users` WHERE username='$u' and password='$p' ";
$re=mysql_query($sql);

if($row = mysql_fetch_assoc($re)){

    echo "<h1>Flag{Welcome_T0_W33kly_chall3nge}</h1>";
}




else {
	echo "<br>login failed";
}
}
}

else{

}



?>
