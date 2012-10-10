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
   // $_SERVER['user'] = $_REQUEST['user'];
?>
<html>
<head>
    <title>Bookin_Page</title>
    <link rel="stylesheet" type="text/css" href="user.css"/>
    <link rel="stylesheet" type="text/css" href="style.css"/>

</head>
<body>
<div style="width:auto;height:auto;">
    <div id="header">
        <h3 style="letter-spacing: .1em;font-size: 2em;position: absolute;top:.1%;">BOOKING</h3>
        <a href="user.php" style="position: absolute;left:10%;top:3%"><img src="../images/home.jpg" style="width: 20%";></a>
        <form id="logoutform" name="logout" action="logout.php" method="get">
        <input type="submit" value="Log Out"></form> 
    </div>
    <ul id="options">
        <li id="list"><a id="present" href="user_book_room.php">Booking</b></a></li>
        <li id="list"><a href="user_subscribe.php">Subscribe</a></li>
        <li id="list"><a href="user_cancel_room.php">Cancel Booking</a></li>
        <li id="list"><a href="user_status_room.php">Calendar</a></li>
    </ul>
    <div id="wrap">
	<form action="bookroombackend.php" method="post" id="contactform">
	    <ul>
		<li>
		    <label>ROOM</label>
		    <select name="room" class="fieldbox">
                        <option value="CS101">CS101
                        <option value="CS102">CS102
		    </select>
		</li>	
    		<li>
                    <label>Keyword</label>
		    <select name="keyword" class="fieldbox">
                        <option value="aca meeting">ACA Meeting
                        <option value="lectures">Lecture
                        <option value="competetions">Competitions
                        <option value="workshop">Workshop
		    </select>
    		</li>
                <li>
                    <label>Description</label>
                    <span class="msgbox"><textarea class="area" name="description" rows="3" cols="25"></textarea></span><br><br><br>
                </li>
                <li id="date">
                <br><br>
                    DATE:
                    <select name="month">
                        <option value="1">January
                        <option value="2">February
                        <option value="3">March
                        <option value="4">April
                        <option value="5">May
                        <option value="6">June
                        <option value="7">July
                        <option value="8">August
                        <option value="9">September
                        <option value="10">October
                        <option value="11">November
                        <option value="12">December
                    </select>
                    <select name="day">
                        <option value="1">01
                        <option value="2">02
                        <option value="3">03
                        <option value="4">04
                        <option value="5">05
                        <option value="6">06
                        <option value="7">07
                        <option value="8">08
                        <option value="9">09
                        <option value="10">10
                        <option value="11">11
                        <option value="12">12
                        <option value="13">13
                        <option value="14">14
                        <option value="15">15
                        <option value="16">16
                        <option value="17">17
                        <option value="18">18
                        <option value="19">19
                        <option value="20">20
                        <option value="21">21
                        <option value="22">22
                        <option value="23">23
                        <option value="24">24
                        <option value="25">25
                        <option value="26">26
                        <option value="27">27
                        <option value="28">28
                        <option value="29">29
                        <option value="30">30
                        <option value="31">31
                    </select>
                    <select name="year">
                        <option value="2012">2012
                        <option value="2013">2013
                        <option value="2014">2014
                        <option value="2015">2015
                    </select><br><br><br><br>
                    <hr><br><br><br><br><i><b>Time:(hrs)</b></i>
                        From:
                    <select name="time">
                        <option value="1">1
                        <option value="2">2
                        <option value="3">3
                        <option value="4">4
                        <option value="5">5
                        <option value="6">6
                        <option value="7">7
                        <option value="8">8
                        <option value="9">9
                        <option value="10">10
                        <option value="11">11
                        <option value="12">12
                        <option value="13">13
                        <option value="14">14
                        <option value="15">15
                        <option value="16">16
                        <option value="17">17
                        <option value="18">18
                        <option value="19">19
                        <option value="20">20
                        <option value="21">21
                        <option value="22">22
                        <option value="23">23
                        <option value="24">24
                        </select>  
                </li>
            </ul>	
	    <input type="submit" value="Send" id="sendbutton" name="sendbutton"/>
	</form>
	<?php
	    if(isset($_GET['status']))
	    {
		if($_GET['status']=="alreadybooked")
		{
		    $x="
			<script>
			{
			    alert('Sorry!!!Room Already Booked.');
			}
			</script>";
		    echo $x;
		}
		elseif($_GET['status']=="selectroom")
		{
		    $x="
			<script>
			{
			    alert('Please select a room');
			}
			</script>";
		    echo $x;
		}
	    }
	?>
	    
    </div>
</body>
</html>
