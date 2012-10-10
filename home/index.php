<?php
    session_start();    
    if(isset($_SESSION['user']))session_destroy();
    include("index_content.php");
?>
<html>
<head>
    <title>Room_book</title>
    <link rel="stylesheet" type="text/css" href="event.css"/>
    <script>
	function view(x)
	{
	    //alert(x);
	    var x0='<?php echo $x0; ?>';
	    var x2='<?php echo $x2; ?>';
	    var x1='<?php echo $x1; ?>';
	    if(x==0) document.getElementById("default").innerHTML=x0;
	    if(x==1) document.getElementById("default").innerHTML=x1;
	    if(x==2) document.getElementById("default").innerHTML=x2;
	    
	}
    </script>
</head>
<body>
<div style="width:auto;height:auto;">
    <div id="header">
        <h3>EVENT MANAGEMENT</h3>
        <form id="loginform" name="login" action="../user/login.php" method="post">
	    <label>Username:</label>
	    <input type="text" name="username"><br>
	    <label>Password:</label>
	    <input type="password" name="password"><br>
	    <input type="submit" name="submit1" value="Login">
	    <input type="submit" name="submit2" value="Register">
	</form>
	<?php
	    if(isset($_GET["status"]))
	    {
		$er=$_GET["status"];
		if(strcmp($er,"errorauth")==0)
		{
		    echo "* wrong username or password"; 
		}
		else if(strcmp($er,"errorlog")==0)
		{
		    echo "* login first";
		}
		else if(strcmp($er,"registered")==0)
		{
		    echo "*registered";
		}
	    }
	?>	
    </div>
    
    <ul id="menu">
        <li id="one">
            <a href="#" onmouseover="view(1)" onmouseout="view(0)">CS101</a>
        </li>
        
        <li id="two">
            <a href="#" onmouseover="view(2)" onmouseout="view(0)">CS102</a>
        </li>
    </ul>
    
    <div class="contentbg">
    <div class="transbox">
        <table id="default" style=" opacity: 3;" >
	    <script>
		view(0);
	    </script>
	</table>
    </div>
    </div>
    
</body>
</html>
