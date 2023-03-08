<?php   
    session_start();
    $servername = "localhost";
    $server_user = "root";
    $server_password = "";
    $database_name = "examwebsite-db";
    $port = 3306;
    
    $connectdb = new mysqli($servername,$server_user , $server_password, $database_name, $port);
    if($connectdb->connect_error){
        die('Connection Failed:' .$connectdb->connect_error);
      }else{
      }
?>
