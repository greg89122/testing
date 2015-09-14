<?php
	 if( ! ini_get('date.timezone') )
		{
			date_default_timezone_set('GMT');
		}
	$tdade=date("Y")-1;
	
	ob_start();
	session_start();
	$_SESSION['prevurl']=$_SERVER['REQUEST_URI'];
	//echo $_SESSION['loggedu'];
	$logme="";
	if(isset($_SESSION['loggedut'])){
		$logme=$_SESSION['loggedut'];
	}
	
	$msg="";
	if(isset($_REQUEST['msg'])!=""){
		$msg=$_REQUEST['msg'];
	}

	/* force to login for future
	if(!$logme){
		header("Location: login.php");
		exit;
	}
	*/


?>
