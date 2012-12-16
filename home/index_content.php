<?php
    include("../user/useridconnection.php");
    
    $today = date("Y-m-d");
    $till = new DateTime();
    $qry="
            SELECT *
            FROM `bookroom`
            WHERE `book_date` BETWEEN CURDATE() AND DATE_ADD(CURDATE(),INTERVAL 7 DAY)
        ";
    $result=mysql_query($qry);
    
    $x0="<b>BOOKINGS IN NEXT 7 DAYS<b><br><hr>";
    if($result)
    {
        if(mysql_num_rows($result) != 0)
        {
            $i=1;
            while ($row = mysql_fetch_assoc($result))
            {
		if(((int)$i%2)==0)
                {
                    
		    $x0=$x0 . '<tr style="background-color:#B0C4DE; "><th style="color:green"> ' . $row["room"] .
			    ' </th><th style="color:purple">' . $row["description"] . '</th><th style="color:red">' . $row["book_date"]
			    . '</th><th style="color:blue">' . $row["time"] . 'hrs</th></tr>';
		}
		else
		{
		    $x0=$x0 . '<tr style="background-color:#D3D3D3;"><th style="color:green">' . $row["room"] .
			    ' </th><th style="color:purple">' . $row["description"] . '</th><th style="color:red"> ' . $row['book_date']
			    . ' </th><th style="color:blue">' . $row["time"] . 'hrs</th></tr>';
		}
                $i+=1;
            }
        }
        else $x0='<b>------no event in next 7 days------</b>';
    }
    
    
    $qry="
            SELECT *
            FROM `bookroom`
            WHERE `room` LIKE 'CS101'
        ";
    $result=mysql_query($qry);
    
        
    //Check whether the query was successful or not
    $x1="<b>BOOKINGS IN CS101<b><br><hr>";
    if($result)
    {
        if(mysql_num_rows($result) != 0)
        {
            $i=1;
            while ($row = mysql_fetch_assoc($result))
            {
                
		if(((int)$i%2)==0)
                {
                    
		    $x1=$x1 . '<tr style="background-color:#B0C4DE; "><th style="color:green"> ' . $row["room"] .
			    ' </th><th style="color:purple">' . $row["description"] . '</th><th style="color:red">' . $row["book_date"]
			    . '</th><th style="color:blue">' . $row["time"] . 'hrs</th></tr>';
		}
		else
		{
		    $x1=$x1 . '<tr style="background-color:#D3D3D3; "><th style="color:green"> ' . $row["room"] .
			    ' </th><th style="color:purple">' . $row["description"] . '</th><th style="color:red">' . $row["book_date"]
			    . '</th><th style="color:blue">' . $row["time"] . 'hrs</th></tr>';
		}
                $i+=1;
            }
        }
        else $x1='<b>------no booking in CS101------</b>';
    }
    
    $qry="
            SELECT *
            FROM `bookroom`
            WHERE `room` LIKE 'CS102'
        ";
    $result=mysql_query($qry);
	    
    //Check whether the query was successful or not
    $x2="<b>BOOKINGS IN CS102<b><br><hr>";
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
			    ' </th><th style="color:purple">' . $row["description"] . '</th><th style="color:red">' . $row["book_date"]
			    . '</th><th style="color:blue">' . $row["time"] . 'hrs</th></tr>';
		}
		else
		{
		    $x2=$x2 . '<tr style="background-color:#B0C4DE; "><th style="color:green"> ' . $row["room"] .
			    ' </th><th style="color:purple">' . $row["description"] . '</th><th style="color:red">' . $row["book_date"]
			    . '</th><th style="color:blue">' . $row["time"] . 'hrs</th></tr>';
		}
                $i+=1;
            }
        }
        else $x2="<li><b>------no booking in CS102------</b></li>";
    }
?>