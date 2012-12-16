<?php
    session_start();
    if(isset($_POST['submit2'])) header('Location: register.php');
    elseif(isset($_POST['submit3'])) header('Location: forgotpassword.php');
    else
    {
	include("useridconnection.php");
	
	$name='';
	$username = $_POST['username'];
	$password =  hash('sha512',$_POST['password']);
	
	$check = 1;
    
	//code for checking validity
	$qry="SELECT name,user,pass FROM userid WHERE user='$username' AND pass='$password'";
	$result=mysql_query($qry);
	    
	//Check whether the query was successful or not
	if($result)
	{
	    if(mysql_num_rows($result) == 1)
	    {
		$row = mysql_fetch_assoc($result);
		$name=$row['name'];
		$check=1;
		
	    }
	    else
	    {
	    //Login failed
		$check=0;
	    }
	}
	else
	{
		die("Query failed");
	}
    
	if($check)
	{
	    $_SESSION['user']=$username;
	    $_SESSION['name']=$name;
	    header('Location: user.php');
	}
	else
	{
	    session_destroy();
	    header('Location: ../home/index.php?status=errorauth');
	}
    }
?>