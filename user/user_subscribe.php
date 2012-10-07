<html>
<head>
    <title>personalised</title>
    <link rel="stylesheet" type="text/css" href="user.css"/>
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
    <div id="header">
        <h3 style="letter-spacing: .1em;font-size: 2em;position: absolute;top:.1%;">SUBSCRIBE</h3>
        <a href="user.php" style="position: absolute;left:10%;top:3%"><img src="../images/home.jpg" style="width: 20%";></a>
        <form id="logoutform" name="logout" action="../home/index.php" method="get">
        <input type="submit" value="Log Out"></form> 
    </div>
    <ul id="options">
        <li id="list"><a href="user_book_room.php">Booking</b></a></li>
        <li id="list"><a id="present" href="user_subscribe.php">Subscribe</a></li>
        <li id="list"><a href="user_cancel_room.php">Cancel Booking</a></li>
        <li id="list"><a href="user_status_room.php">Room Status</a></li>
    </ul>
    
    <div id="wrap">
	<form action="#" method="post" id="contactform">
	    <ul style="position:absolute;left: 20%; background: url(../images/grey.jpg);
                        font-size:.6em;font-family: sans-serif;padding:4em 4em 4em 5em;">
                <li>
                    <label><b>Keyword</b></label>
        	    <span class="fieldbox"><input type="text" name="keyword" value=""/></span>
    		</li>
		<li>
		    <label><b>Before</b></label>
			<select name="before">
                        <option value="hour">1 hour
                        <option value="day">1 day
                        <option value="week">1 week
                        <option value="month">1 month
			</select>
		</li>
                <input type="submit" value="Subscribe" name="subscribe" style="position:absolute;left:40%;"/>
            </ul>
        </form>
        
	<form action="#" method="post">
            <div style="position: absolute;top:65%;left:30%;background: url(../images/grey.jpg); width:30%;
                        padding: .1em 2em 2em 3em;">
                    <label>Unsubscribe</label><hr>    
                    <input type="checkbox" name="unsubscribe" value="1">&nbsp&nbsp Hacku
                    <input type="checkbox" name="unsubscribe" value="2">&nbsp&nbsp ACA Meeting<br><hr>
                    <input type="submit" value="unsubscribe" name="unsubscribe"/>
            </div>
        </form>
    </div>
</body>
</html>
