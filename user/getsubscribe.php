<?php
    include("useridconnection.php");
    $qry="SELECT * FROM subscribe WHERE user='$user'";
    $result=mysql_query($qry);
	    
    //<input type="checkbox" name="cancel" value="1">&nbsp&nbsp <b>event1:</b> CS101  ACA Meeting  1/10/2012<br><hr>
    $x=" ";
    if($result)
    {
        if(mysql_num_rows($result) != 0)
        {
            $i=1;
            while ($row = mysql_fetch_assoc($result))
            {
		if(((int)$i%2)==0)
                {
		    $x=$x . '<input type="checkbox" name="cancel[]" value="' . $row['id'] . '">&nbsp&nbsp
                            <i style="background-color:#D3D3D3;">' . $row['keyword'] . '</i><hr>';
		}
		else
		{
		    $x=$x . '<input type="checkbox" name="cancel[]" value="' . $row['id'] . '">&nbsp&nbsp
                            <i style="background-color:#B0C4DE;">' . $row['keyword'] . '</i><hr>';
		}
                $i+=1;
            }
        }
        else $x="<li><b>------no subscription------</b></li>";
    }
?>