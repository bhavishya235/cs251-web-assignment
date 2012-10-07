<?php
    session_start();
    if(isset($_SESSION['user']))
    {
        $user_name=$_GET['name'];
        $user = $_SESSION['user'];
    }
    else
    {
        header('Location: ../home/index.php?status=errorlog');
    }

    include("useridconnection.php");
    $name=$_POST['name'];
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    $mail=$_POST['mail'];
    $address=$_POST['address'];
    
    $pass= hash('sha512', $pass);
    
    $qry="INSERT INTO `cs251`.`userid` (`id`, `name`, `user`, `pass`, `timestamp`, `email`,`address`)
            VALUES ('', '$name', '$user', '$pass', CURRENT_TIMESTAMP, '$mail','$address');";
            
    $result=mysql_query($qry);
    if(!$result){
		die("database query failed: " . mysql_error());
	}
    else
    {
        header('Location: ../home/index.php?status=registered');
    }
?>