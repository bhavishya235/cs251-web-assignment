<?php
    //include("useridconnection.php");
    $qry="SELECT * FROM subscribe WHERE user='$user'";
    $result=mysql_query($qry);
    $key="'";
    while($row=mysql_fetch_assoc($result)) $key=$key ."','". $row['keyword'];
    $key.="'";    
    //<input type="checkbox" name="cancel" value="1">&nbsp&nbsp <b>event1:</b> CS101  ACA Meeting  1/10/2012<br><hr>
    
    $qry="SELECT * FROM bookroom WHERE keyword in ($key)";
    $result=mysql_query($qry);
    $x2=" ";
    if($result)
    {
        if(mysql_num_rows($result) != 0)
        {
            $i=1;
            while ($row = mysql_fetch_assoc($result))
            {
		if(((int)$i%2)==0)
                {
		    $x2=$x2 . "<li style=\"background-color:#B0C4DE; \"><b>-><i style=\"color:green\"> " . $row['room'] .
			    " </i>- <b style=\"color:purple\">" . $row['description'] . "</b> on <i style=\"color:red\"> " . $row['book_date']
			    . " </i> at <i style=\"color:white\">" . $row['time'] . "hrs</i></b></li>";
		}
		else
		{
		    $x2=$x2 . "<li style=\"background-color:#D3D3D3; \"><b>-><i style=\"color:green\"> " . $row['room'] .
			    " </i>- <b style=\"color:purple\">" . $row['description'] . "</b> on <i style=\"color:red\"> " . $row['book_date']
			    . " </i> at <i style=\"color:white\">" . $row['time'] . "hrs</i></b></li>";
		}
                $i+=1;
            }
        }
        else $x2="<li><b>------none------</b></li>";
    }
?>