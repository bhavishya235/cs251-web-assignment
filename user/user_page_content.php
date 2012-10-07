<?php
    include("useridconnection.php");
    $qry="SELECT * FROM bookroom WHERE user='$user' ORDER BY book_date+time";
    $result=mysql_query($qry);
	    
    //Check whether the query was successful or not
    if($result)
    {
	$x=" ";
        if(mysql_num_rows($result) != 0)
        {
            $i=1;
            while ($row = mysql_fetch_assoc($result))
            {
		if(((int)$i%2)==0)
                {
		    $x=$x . "<li style=\"background-color:#B0C4DE; \"><b>-><i style=\"color:green\"> " . $row['room'] .
			    " </i>- <b style=\"color:purple\">" . $row['description'] . "</b> on <i style=\"color:red\"> " . $row['book_date']
			    . " </i> at <i style=\"color:white\">" . $row['time'] . "hrs</i></b></li>";
		}
		else
		{
		    $x=$x . "<li style=\"background-color:#D3D3D3; \"><b>-><i style=\"color:green\"> " . $row['room'] .
			    " </i>- <b style=\"color:purple\">" . $row['description'] . "</b> on <i style=\"color:red\"> " . $row['book_date']
			    . " </i> at <i style=\"color:white\">" . $row['time'] . "hrs</i></b></li>";
		}
                $i+=1;
            }
        }
        else $x="<li><b>------none------</b></li>";
    }
?>