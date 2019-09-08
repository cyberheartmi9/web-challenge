<?php

if(!@mysql_connect("127.0.0.1","root","")){

    die("Sql Connection Failed");
}

else {

    $sql="create database knights";
    $use="use knights";
    mysql_query($use);
    $create_table="CREATE TABLE `knights`.`users` ( `id` INT(4) NOT NULL AUTO_INCREMENT , `username` VARCHAR(32) NOT NULL , `password` VARCHAR(32) NOT NULL , `email` VARCHAR(32) NOT NULL , `filename` VARCHAR(32) NOT NULL , PRIMARY KEY (`id`) ) ENGINE = InnoDB;
";
    if(mysql_query($sql)){
        mysql_query($create_table);
        $sqlinsert="INSERT INTO `knights`.`users` (`id`, `username`, `password`, `email` ) VALUES (NULL, 'admin', 'c4d55b2839ceaf983eec5bb19809714d', 'admin@admin.com')";
        mysql_query($sqlinsert);
        echo "Lab setup";
    }
    else {

        $drop="DROP DATABASE knights";
        mysql_query($drop);
        mysql_query($create_table);
        echo "Rest DB";


    }


}


?>