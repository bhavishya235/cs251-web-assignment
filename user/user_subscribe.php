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
    include("getsubscribe.php");
?>
<html>
<head>
    <title>personalised</title>
    <link rel="stylesheet" type="text/css" href="user.css"/>
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<div style="width:1033px;height: 600px;">
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
        <li id="list"><a href="user_status_room.php">Calender</a></li>
    </ul>

    <div style="position: absolute;left: 1%;top:30%;background-color: grey;width: 25%;padding:1em 1em 1em 1em;">
	<p>Here you can subscribe to particular keywords like "lectures,aca meeting,hacku etc".
	    And then you will get special mention of these events on your home page when they are booked.
	    If you no longer want their notifications you can unsubscribe them.</p>
    </div>
    <div id="wrap">
	<form action="addsubscribe.php" method="post" id="contactform">
	    <ul style="position:absolute;left: 40%; background: url(../images/grey.jpg);
                        font-size:.6em;font-family: sans-serif;padding:4em 4em 4em 5em;">
		<?php
		    if(isset($_GET["status"]))
		    {
			$er=$_GET["status"];
			if(strcmp($er,"empty")==0)
			{
			    echo "*please fill the keyword"; 
			}
			else if(strcmp($er,"alreadysubscribed")==0)
			{
			    echo "*already subscribed to this";
			}
			else if(strcmp($er,"subscribed")==0)
			{
			    echo "*successfully subscribed";
			}
		    }
		?>
                <li>
                    <label><b>Keyword</b></label>
		    <select name="keyword">
                        <option value="aca meeting">ACA Meeting
                        <option value="lectures">Lecture
                        <option value="competetions">Competitions
                        <option value="workshop">Workshop
		    </select>
    		</li>
                <input type="submit" value="Subscribe" name="subscribe" style="position:absolute;top:80%;left:40%;"/>
            </ul>
        </form>
        
	<form action="unsubscribe.php" method="post">
            <div style="position: absolute;top:60%;left:32%;background: url(../images/grey.jpg); width:32%;
                        padding: .1em 2em 2em 3em;font-size: small">
                    <label><b>Unsubscribe</b></label><hr>
		    <?php
			echo $x;
		    ?>
		     <input type="submit" name="submit" value="unsubscribe">
            </div>
        </form>
    </div>
</body>
</html>
