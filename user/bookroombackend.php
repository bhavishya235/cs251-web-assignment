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

    include("useridconnection.php");
    $room=$_POST['room'];
    $keyword=$_POST['keyword'];
    $description=$_POST['description'];
    $time=$_POST['time'];
    $date = $_POST['year'] . "-" . $_POST['month'] . "-" . $_POST['day'];
    
    if(empty($room))
    {
        header('Location: user_book_room.php?status=selectroom');    
    }
    $qry="SELECT * FROM bookroom WHERE room='$room' AND book_date='$date' AND time='$time'";
    //echo $qry;
    $result=mysql_query($qry);
	    
	//Check whether the query was successful or not
    if($result)
    {
        if(mysql_num_rows($result) >= 1)
        {
            //echo "more";
            header('Location: user_book_room.php?status=alreadybooked');
        }
        else
        {   //echo "less";
            $qry="INSERT INTO `cs251`.`bookroom` (`id`, `user`, `room`, `keyword`, `description`, `book_date`, `time`, `timestamp`)
            VALUES ('', '$user', '$room', '$keyword', '$description', '$date', '$time', CURRENT_TIMESTAMP)";
                    
            $result=mysql_query($qry);
            if(!$result)
            {
                die("database query failed: " . mysql_error());
            }
            else
            {
                header('Location: user.php?status=booked');
            }
        }
    }
?>