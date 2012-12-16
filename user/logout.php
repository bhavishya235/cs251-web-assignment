<?php
    session_start();
    if(!isset($_POST['submit2']))
    {
        session_destroy();
        header('Location: ../home/index.php');    
    }
?>
<html>
    <body>
        <form action="changepassword.php" method="post" style="background-color: grey;position: relative;top: 30%;left: 30%;padding: 3em 3em 3em 3em;width: 40%">
            New Password:<br>
            <input type="password" name="pass" value=""><br><br>
            Re-type Password:<br>
            <input type="password" name="repass" value=""><br><br>
            <input type="submit" name="submit" value="Change Password">
        </form>
        <?php
	    if(isset($_GET["submit2"]))
	    {
		$er=$_GET["status"];
		if(strcmp($er,"notsame")==0)
		{
		    echo "*enter same password in both feilds"; 
		}
            }
        ?>
    </body>
</html>