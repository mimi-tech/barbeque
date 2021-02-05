<?php
$server = "localhost";
$username = "root";
$password = "root";
$db       = "barbeque";

//create a connection
$conn = mysqli_connect ( $server, $username, $password, $db );

    //check connection
    
    if(!$conn ){
       // die( "connection failed: " . mysqli_connect_error() );
		echo "not Connected successfully";
    }else{ 

        //echo "Connected successfully";
    }
?>
