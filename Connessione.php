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
    use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('jhanny');
$log->pushHandler(new StreamHandler('path/to/your.log', Logger::WARNING));

// add records to the log
$log->warning('Foo');
$log->error('Bar');
