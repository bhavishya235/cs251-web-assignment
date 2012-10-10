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
		    $x2=$x2 . '<tr style="background-color:#B0C4DE; "><th style="color:green"> ' . $row["room"] .
			    ' </th><th style="color:purple; text-align: left">' . $row["description"] . '</th><th style="color:red">' . $row["book_date"]
			    . '</th><th style="color:blue">' . $row["time"] . 'hrs</th></tr>';
		}
		else
		{
		    $x2=$x2 . '<tr style="background-color:#D3D3D3; "><th style="color:green"> ' . $row["room"] .
			    ' </th><th style="color:purple;text-align: left">' . $row["description"] . '</th><th style="color:red">' . $row["book_date"]
			    . '</th><th style="color:blue">' . $row["time"] . 'hrs</th></tr>';
		}
                $i+=1;
            }
        }
        else $x='<tr style="background-color:#B0C4DE; "><th style="color:green">------none------</th></tr>';
    }
?>