<?php
    session_start();
    if(isset($_SESSION['user']))
    {
        $user = $_SESSION['user'];
    }
    else
    {
        header('Location: ../home/index.php?status=errorlog');
    }
     include("user_cancel_room_content.php");
?>
<html>
<head>
    <title>personalised</title>
    <link rel="stylesheet" type="text/css" href="user.css"/>
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<div style="width:auto;height:auto;">
    <div id="header">
        <h3 style="letter-spacing: .1em;font-size: 2em;position: absolute;top:.1%;">CANCELLING</h3>
        <a href="user.php" style="position: absolute;left:10%;top:3%"><img src="../images/home.jpg" style="width: 20%";></a>
        <form id="logoutform" name="logout" action="logout.php" method="post">
        <input type="submit" value="Log Out"></form> 
    </div>
    <ul id="options">
        <li id="list"><a href="user_book_room.php">Booking</b></a></li>
        <li id="list"><a href="user_subscribe.php">Subscribe</a></li>
        <li id="list"><a id="present" href="user_cancel_room.php">Cancel Booking</a></li>
        <li id="list"><a href="user_status_room.php">Calendar</a></li>
    </ul>
    
    <div id="wrap">
	<form action="cancelroombackend.php" method="post">
            <div id="preference" style="position: absolute;top: 30%;left:20%;width:45%;height:60%;">
                <p style="font-size: 2em; font-family: serif;font-style: oblique;">Cancel Booking Of :</p><hr><br>
		<?php
		    echo $x;
    		?>
                    <input type="submit" value="cancel booking"/>
            </div>
        </form>
    </div>
    
</body>
</html>
