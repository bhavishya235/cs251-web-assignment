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
		    $x=$x . '<tr style="background-color:#B0C4DE; "><th style="color:green"> ' . $row["room"] .
			    ' </th><th style="color:purple;text-align: left">' . $row["description"] . '</th><th style="color:red">' . $row["book_date"]
			    . '</th><th style="color:blue">' . $row["time"] . 'hrs</th></tr>';
		}
		else
		{
		    $x=$x . '<tr style="background-color:#D3D3D3; "><th style="color:green"> ' . $row["room"] .
			    ' </th><th style="color:purple;text-align: left">' . $row["description"] . '</th><th style="color:red">' . $row["book_date"]
			    . '</th><th style="color:blue">' . $row["time"] . 'hrs</th></tr>';
		}
                $i+=1;
            }
        }
        else $x='<tr style="background-color:#B0C4DE; "><th style="color:green">------none------</th></tr>';
    }
?>