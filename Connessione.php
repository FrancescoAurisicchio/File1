<?php
$link = mysqli_connect("mydatabase", "root", "pass");
    
    
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    
    
    echo "Connect Successfully. Host info: " . mysqli_get_host_info($link);
    if($_SERVER['REQUEST_METHOD']==='GET'){
        echo 'Method GET';
    }
    else{
        echo 'Method diverso';
    }