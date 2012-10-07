<?php
    include("useridconnection.php");
    $name=$_POST['name'];
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    $repass=$_POST['repass'];
    $mail=$_POST['mail'];
    $address=$_POST['address'];
    
    $qry="SELECT* FROM userid WHERE user='$user'";
    $result=mysql_query($qry);
	    
    //Check whether the query was successful or not
    if($_POST['name']=="" || $_POST['user']=="" || $_POST['pass']=="" || $_POST['mail']=="" || $_POST['address']=="")
    {
	header('Location: register.php?status=empty');
    }
    elseif($result)
    {
        if(mysql_num_rows($result) == 1)
	{
	    	header('Location: register.php?status=used');
	}
    }
    elseif($repass != $pass)
    {
	header('Location: register.php?status=notsame');
    }
    
    else
    {
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
    }
?>