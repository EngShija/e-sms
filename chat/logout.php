<?php
require_once __DIR__. "/../helpers/functions.php";
	if(isset($_COOKIE['userid']))
	   {
	   	            $passwords=$_COOKIE['userid'];
					$user_email=$_COOKIE['useremail'];
	   	    setcookie("userid",$passwords,time()-(60*60*24*7));
			setcookie("useremail",$user_email,time()-(60*60*24*7));
			$queryz = "UPDATE Users Set Online='Offline' WHERE Password='$passwords' ";                        
        database()->query($queryz) or die('Errorr, query failed');	
							
		    redirect_to("../prog.php");
	   }
	else{ redirect_to("../prog.php");
	}
?>