<?php
    session_start();    
    if(isset($_SESSION['user']))session_destroy();
?>
<html>
<head>
    <title>Room_book</title>
    <link rel="stylesheet" type="text/css" href="event.css"/>
</head>
<body>
    <div id="header">
        <h3>EVENT MANAGEMENT</h3>
        <form id="loginform" name="login" action="../user/login.php" method="post">
        <label>Username:</label>
        <input type="text" name="username"><br>
        <label>Password:</label>
        <input type="password" name="password"><br>
        <input type="submit" name="submit1" value="Login">
	<input type="submit" name="submit2" value="Register">
	<input type="submit" name="submit3" value="forgot password"></form>
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
	    }
	?>	
    </div>
    
    <ul id="menu">
        <li id="one">
            <a href="#">CS101</a>
            <span>
                <b><i>CS101</i></b><br>
                <b>STATUS : </b>BOOKED<br>
                <b>DATE : </b>28/9/2012-1/10/2012<br>
                <b>BOOKED BY : </b>Bhavishya Mittal<br>
                <b>PURPOSE : </b>ACA MEETING<br>
            </span>
        </li>
        
        <li id="two">
            <a href="#">CS102</a>
            <span>
                <b><i>CS102</i></b><br>
                <b>STATUS : </b>BOOKED<br>
                <b>DATE : </b>2/10/2012-4/10/2012<br>
                <b>BOOKED BY : </b>Professors<br>
                <b>PURPOSE : </b>Exam Discussion<br>
            </span>
        </li>
    </ul>
    
    <div class="contentbg">
    <div class="transbox">
        <p id="default">
	    <?php
		/*Date:25/10   Room: CS201  Purpose: ACA  By: Bhavishya<br>
		Date:   Room:   Purpose: By: Time:<br>
		Date:   Room:   Purpose: By: Time:<br>*/
	    ?>
        </pre>

    </div>
    </div>
    
</body>
</html>
