<?php
    session_start();
    if(isset($_SESSION['user']))
    {
        $name=$_SESSION['name'];
        $user = $_SESSION['user'];
    }
    else
    {
        header('Location: ../home/index.php?status=errorlog');
    }
    
    include("useridconnection.php");
    $pass=$_POST['pass'];
    $repass=$_POST['repass'];
    
    if($repass != $pass)
    {
	header('Location: logout.php?submit2=notsame');
    }
    
    else
    {
	$pass= hash('sha512', $pass);
	$qry="UPDATE `cs251`.`userid` SET `pass` = '$pass' WHERE `userid`.`user`= '$user'";
		
	$result=mysql_query($qry);
	if(!$result){
		    die("database query failed: " . mysql_error());
	    }
	else
	{
	    header('Location: user.php?status=changed');
	}
    }
?>