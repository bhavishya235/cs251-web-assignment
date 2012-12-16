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
     include("../home/index_content.php");
?>
<html>
<head>
    <title>personalised</title>
    <link rel="stylesheet" type="text/css" href="../home/event.css"/>
    <link rel="stylesheet" type="text/css" href="user.css"/>
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
        <h3 style="letter-spacing: .1em;font-size: 2em;position: absolute;top:.1%;">ROOM STATUS</h3>
        <a href="user.php" style="position: absolute;left:10%;top:3%"><img src="../images/home.jpg" style="width: 20%";></a>
        <form id="logoutform" name="logout" action="logout.php" method="get">
        <input type="submit" value="Log Out"></form> 
    </div>
    <ul id="options">
        <li id="list"><a href="user_book_room.php">Booking</b></a></li>
        <li id="list"><a href="user_subscribe.php">Subscribe</a></li>
        <li id="list"><a href="user_cancel_room.php">Cancel Booking</a></li>
        <li id="list"><a id="present" href="user_status_room.php">Calendar</a></li>
    </ul>
    
    <ul id="menu" style="position:relative; top:25%;left:15%; padding-top: 0;padding-bottom: 2%;padding-right: 0%;padding-left:0%;width: 65%;">
        <li id="one" style="width: 50%;text-align: center;">
            <a href="#" onmouseover="view(1)" onmouseout="view(0)" style="font-size: .7em;">CS101</a>
        </li>
        
        <li id="two" style="width: 50%;text-align: center;">
            <a href="#" onmouseover="view(2)" onmouseout="view(0)" style="font-size: .7em;">CS102</a>
        </li>
    </ul>
    
    <div class="contentbg">
    <div class="transbox">
        <table id="default">
            <script>
		view(0);
	    </script>
        </table>

    </div>
    </div>

</body>
</html>
