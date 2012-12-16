<?php
    function ccLogin($user, $pass)
    {
        $FTP_SERVER = "vyom.cc.iitk.ac.in";
        $check = 0;
        $ftp = ftp_connect($FTP_SERVER);
        if(@ftp_login($ftp, $user, $pass))
        $check = 1;
        ftp_close($ftp);
        return $check;
    }
    
    function display($result)
    {
        while ($row = mysql_fetch_assoc($result)) {
	    echo "<ul>";
            echo "<li><b>User: </b>" . $row['user'] . "</li>";
            if(strcmp($row['question'],'')!=0)
            {
                echo "<li><b>Post: </b>" . $row['question'] ."</li>";
            }
            if(strcmp($row['file'],'')!=0)
            {
                echo "<li><b>Download File: </b>: <a href=\"uploadedfile\\". $row['file'] . "\">" . $row['file'] . "</a></li>";
            }
            echo "</ul>";
            echo "<br>";
	}
    }
    
    function display2($result)      //shows extra information
    {
        $flag="q";
        $x="&nbsp&nbsp&nbsp&nbsp&nbsp";
        while ($row = mysql_fetch_assoc($result)) {
            if(strcmp($row['company'],$flag)!=0)
            {
                $flag=$row['company'];
                echo $flag;
            }
	    echo "<ul>";
            echo "<li><b>Time: </b>" . $row['timestamp'] . $x . "<b>ID: </b>" . $row['id'] . $x . "<b> User: </b>" . $row['user'] . "</li>";
            if(strcmp($row['question'],'')!=0)
            {
                echo "<li><b>Post: </b>" . $row['question'] ."</li>";
            }
            if(strcmp($row['file'],'')!=0)
            {
                echo "<li><b>Download File: </b>: <a href=\"uploadedfile/". $row['file'] . "\">" . $row['file'] . "</a></li>";
            }
            
            echo "</ul>";
            echo "<br>";
	}
    }
    
    function display3($result)      //status also shown
    {
            $flag="q";
            $x="&nbsp&nbsp&nbsp&nbsp&nbsp";
            while ($row = mysql_fetch_assoc($result)) {
                if(strcmp($row['company'],$flag)!=0)
                {
                    $flag=$row['company'];
                    echo $flag;
                }
                echo "<ul>";
                echo "<li><b>Time: </b>" . $row['timestamp'] . $x . "<b>ID: </b>" . $row['id'] . $x . "<b> User: </b>" . $row['user'] . "</li>";
                if(strcmp($row['question'],'')!=0)
                {
                    echo "<li><b>Post: </b>" . $row['question'] ."</li>";
                }
                if(strcmp($row['file'],'')!=0)
                {
                    echo "<li><b>Download File: </b>: <a href=\"uploadedfile/". $row['file'] . "\">" . $row['file'] . "</a></li>";
                }                
                echo "<li><b>Status: </b>" . $row['status'] . "</li>";
                echo "</ul>";
                echo "<br>";
            }
    }
    
    function display4($result,$username)      //editable
    {
        $flag="q";
        $x="&nbsp&nbsp&nbsp&nbsp&nbsp";
        while ($row = mysql_fetch_assoc($result)) {
            $id=$row['id'];
            if(strcmp($row['company'],$flag)!=0)
            {
                $flag=$row['company'];
                echo $flag;
            }
	    echo "<ul id=\"temp". $id . "\">";
            echo "<li><b>Time: </b>" . $row['timestamp'] . $x . "<b>ID: </b>" . $row['id'] . $x . "<b> User: </b>" . $row['user'] . "</li>";
            if(strcmp($row['question'],'')!=0)
            {
                echo "<li id><b>Post: </b>
                        <form method=\"POST\">
                        <textarea name=\"q\" rows=\"5\" cols=\"40\" id=\"QUESTION\">" . $row['question'] . "</textarea>
                        <input type=\"hidden\" name=\"username\" value =\"" . $username . "\">
                        <button type=\"button\" value=\"APPROVE\" onclick=\"loadDoc('$id','approve')\">Approve</button>
                        <button type=\"button\" value=\"DELETE\" onclick=\"loadDoc('$id','delete')\">Delete</button>
                        </form></li>";
            }
            if(strcmp($row['file'],'')!=0)
            {
                echo "<li><b>Download File: </b>: <a href=\"uploadedfile\\". $row['file'] . "\">" . $row['file'] . "</a></li>";
            }
            
            echo "</ul>";
            echo "<br>";
	}
    }
    
    function displaypaging($result)
    {
        $totalrows= mysql_num_rows($result);
        $queryperpage=2;
        $page_num = $totalrows/$queryperpage;
        $page_num= intval($page_num);
     //   if($page_num > (int)$page_num) $page_num = (int)$page_num + 1;
        $page_count=1;
       // echo $page_num;
        echo "<ul>";
        while ($row = mysql_fetch_assoc($result)) {
            echo "<li><b>Question: </b>" . $row['question'] . "</li>";
        }
            echo "</ul>";
            echo "<br>";
    }

?>
    