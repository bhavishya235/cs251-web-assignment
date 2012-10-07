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
    include("user_page_content.php");
?>
<html>
<head>
    <title>personalised</title>
    <link rel="stylesheet" type="text/css" href="user.css"/>
    <link rel="stylesheet" type="text/css" href="../home/event.css"/>
</head>
<body>
<div style="width:1033px;height: 600px;">
    <div>
        <b style="letter-spacing: .1em;font-size: 2em;position: absolute;top:20px;left:300px">Welcome, <?php echo $name; ?></b>
        <a href="user.php" style="position: absolute;left:90px;top:25px"><img src="../images/home.jpg" style="width: 20%";></a>
	<button style="position: absolute;right:15%;top:3%">change password</button>
        <form id="logoutform" name="logout" action="logout.php" method="post">
        <input type="submit" value="Log Out"></form> 
    </div>
    
    <ul id="options">
        <li id="list"><a href="user_book_room.php">Booking</a></li>
        <li id="list"><a href="user_subscribe.php">Subscribe</a></li>
        <li id="list"><a href="user_cancel_room.php">Cancel Booking</a></li>
        <li id="list"><a href="user_status_room.php">Room Status</a></li>
    </ul>
    
    
        <ul id="usercontent2" style="background-color:grey;padding-top:0;padding-bottom: 2em;padding-left: 1em;padding-right: 1em;
                                        border: groove; position: absolute; top:30%;height: auto;width:70%;
                                        left: 8em;margin-left: 0;">
            <li style="border-bottom: inset;"><b>My Bookinks:</b></li>
            <?php
                    echo $x;
            ?>
            <li style="border-bottom: inset;border-top: inset"><b>My Subscribes:</b></li>
        </ul>
</div>
</body>
</html>
