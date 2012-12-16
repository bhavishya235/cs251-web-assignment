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
    $keyword=$_POST['keyword'];
    if(!$keyword)
    {
        header('Location: user_subscribe.php?status=empty');
        
    }
    else
    {
        $qry="SELECT * FROM subscribe WHERE keyword ='$keyword' AND user='$user'";
        $result=mysql_query($qry);
    
        if($result)
        {
            if(mysql_num_rows($result) == 1)
            {
                //echo "more";
                header('Location: user_subscribe.php?status=alreadysubscribed');
            }
            else
            {
                $qry="INSERT INTO `cs251`.`subscribe` (`id`, `user`,`keyword`,`timestamp`)
                VALUES ('', '$user','$keyword',CURRENT_TIMESTAMP)";
                $result=mysql_query($qry);
                if(!$result)
                {
                    die("database query failed: " . mysql_error());
                }
                else
                {
                    header('Location: user_subscribe.php?status=subscribed');
                }    
            }
        }
    }
    
    
?>