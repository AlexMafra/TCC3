
<?php
	 if ($_GET["pg"]=="") {
	 
		include "sectionAgenda.php";
					
		 }else{
			 		
		
		include base64_decode($_GET["pg"]);		
						
	 }	
?>