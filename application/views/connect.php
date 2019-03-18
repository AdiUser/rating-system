<?php  
           $servername = "localhost";  
           $username = "root";  
           $password = "";  
           $dbName = "project";
           $connect = mysqli_connect ($servername , $username , $password, $dbName) or die("unable to connect to host");  
           $sql = mysqli_select_db ('project',$connect) or die("unable to connect to database"); 
    ?>   
