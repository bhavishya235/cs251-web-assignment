<html>
<body>
<div style="background-color: grey;position: relative;top: 30%;left: 30%;padding: 3em 3em 3em 3em;width: 40%">
    <h3>Registration Form</h3>
    <form action="registerbackend.php" method="post">
        Name:<br>
        <input type="text" name="name" value=""><br><br>
        Username:<br>
        <input type="text" name="user" value=""><br><br>
        Password:<br>
        <input type="password" name="pass" value=""><br><br>
        Re-type Password:<br>
        <input type="password" name="repass" value=""><br><br>
        E-mail:<br>
        <input type="text" name="mail" value=""><br><br>
        Address:<br>
        <textarea class="area" name="address" rows="3" cols="50"></textarea><br><br>
        <input type="submit" value="Send">
        <input type="reset" value="Reset">
    </form>
    
    <?php
        if(isset($_GET["status"]))
	    {
		$er=$_GET["status"];
                if(strcmp($er,"notsame")==0)
		{
		    echo "*enter same password in both fields "; 
		}
                if(strcmp($er,"empty")==0)
		{
		    echo "*do not leave any feild empty "; 
		}
                if(strcmp($er,"used")==0)
		{
		    echo "*username already taken....choose another"; 
		}
            }
    ?>
</div>
</body>
</html>

