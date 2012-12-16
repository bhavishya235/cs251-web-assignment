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
    $Door = $_POST['cancel'];
    //echo $Door;
    if(empty($Door))
    {
        header('Location: user_cancel_room.php?status=selectoption');  
    }
    else
    {
        $N = count($Door);
        $x="'" . $Door[0];
        for($i=1; $i < $N; $i++)
        {
            $x=$x . "','" . $Door[$i];
            //echo $x;
        }
        $x.="'";
        $qry="DELETE FROM bookroom WHERE id in ($x); ";
        //echo $qry;
        $result=mysql_query($qry);
        header('Location: user_cancel_room.php?status=deleted');
    }
    
?>