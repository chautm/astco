<header>
	<img src="./img/rblogo.png" alt="My Chau Vietnamese Restaurant" />

<?php
	
	if(!isset($_SESSION)) session_start();
    
    $errorMsg = "";
	
	
	if ( isset($_POST['logout']))
	{
		if(!isset($_SESSION)) session_start();

		session_destroy();
	
	}
	

	if ( isset($_POST['username']) && isset($_POST['password']) )
	{
		require_once("./include/membersite_config.php");

		if(isset($_POST['Signin']))
		{
			
   			if($fgmembersite->Login())
   			{
   				$_SESSION['username'] = $_POST['username'];
				$_SESSION['logged_in'] = 1;		
   			}
   			else
   			{   				
   				echo "<p align='right'>".$fgmembersite->GetErrorMessage()."</p>";   				
   				
   			}
		}

	}

	echo '<form method="post" action="' . $_SERVER["PHP_SELF"] .'" >';

	if (!isset($_SESSION['logged_in']))
	{	
		
		echo $errorMsg . "<br />";
	
		echo <<<_END
		<div class="topcorner">
			<input type='hidden' name='submitted' id='submitted' value='1'/>

	 		<input type="text" name="username" class ='roundText' placeholder='User Name' required="required maxlenghth='50'"/>

 			<input type="password" name="password" class ='roundText' placeholder='Password' autocomplete='off' required="required"/>
 			
			<input type="submit" name="Signin" value="Sign In" /> 
			<br/>			
			<a href="register.php">Register</a> &#124;
			<a href="reset-pwd-req.php">Reset Password</a> &#124;								
			<a href="shoppingcart.php">View Cart</a> 						
		</div>
_END;


		/* TODO: Add user registration and password recovery
		<a href="register.php">Register</a>
		<a href="reset-pwd-req.php">Forgot Password</a>
		*/
		
	}
	else
	{
		echo <<<_END
		<div class="topcorner">
		Welcome!
		<input type="submit" name="logout" value="Logout" > 
		<br/>
		<a href="change-pwd.php">Change Password</a> &#124;		
		<a href="shoppingcart.php">View Cart</a> 		
		</div>
_END;
	}

	echo '</form>'

?>

</header>