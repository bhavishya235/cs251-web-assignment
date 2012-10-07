<html>
<head>
    <title>personalised</title>
    <link rel="stylesheet" type="text/css" href="../home/event.css"/>
    <link rel="stylesheet" type="text/css" href="user.css"/>
</head>
<body>
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
        <li id="list"><a id="present" href="user_status_room.php">Room Status</a></li>
    </ul>
    
    <ul id="menu" style="position:relative; top:25%;left:15%; padding-top: 0;padding-bottom: 2%;padding-right: 0%;padding-left:0%;width: 65%;">
        <li id="one" style="width: 50%;text-align: center;">
            <a href="#" style="font-size: .7em;">CS101</a>
            <span>
                <b><i>CS101</i></b><br>
                <b>STATUS : </b>BOOKED<br>
                <b>DATE : </b>28/9/2012-1/10/2012<br>
                <b>BOOKED BY : </b>Bhavishya Mittal<br>
                <b>PURPOSE : </b>ACA MEETING<br>
            </span>
        </li>
        
        <li id="two" style="width: 50%;text-align: center;">
            <a href="#" style="font-size: .7em;">CS102</a>
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
            Date:25/10   Room: CS201  Purpose: ACA  By: Bhavishya<br>
            Date:   Room:   Purpose: By:<br>
            Date:   Room:   Purpose: By:<br>
        </pre>

    </div>
    </div>

</body>
</html>
