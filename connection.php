<?php 
    $servername = "localhost";  //usually it is localhost
    $username = "root";      //this is the default username
    $db_name = "database1";  //db_name, is the database in which we store our data which is login.php
    $password = "";   //because by default phpmyadmin password is an empty string

    //3306 is the default port number
    //note that we can change our default port number
    //and also we set a query and then we can check the port number
    $conn = new mysqli($servername, $username, $password, $db_name,3306);
    if($conn->connect_error){
        die("Connection failed".$conn->connect_error);
    }


    //to validate the connection
    // echo "Connection successful";
    
    ?>