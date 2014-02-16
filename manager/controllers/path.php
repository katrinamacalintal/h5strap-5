<?php
	
	# ROOT URL PATH SETTINGS IF HTACCESS IS ENABLED
	# Set value of '1' if the path set from Root. 
	# Set value of '2' if the path set from Folder.
	
	if ($path == "1") :
	
		function curPageURL() {
			$pageURL  = "http";
			if ($_SERVER["HTTPS"] == "on") :
				$pageURL .= "s";
			endif;
			$pageURL .= "://";
			
			if ($_SERVER["SERVER_PORT"] != "80") :
				$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"])."/";
			else :
				$pageURL .= $_SERVER["SERVER_NAME"].dirname($_SERVER['PHP_SELF'])."/";
			endif;
			
			return $pageURL;
		}
		
		# GET THE ROOT PATH URL
		$root = curPageURL();
	
	elseif ($path == "2") :
	
		function curPageURL() {
			$pageURL  = "http";
			if ($_SERVER["HTTPS"] == "on") :
				$pageURL .= "s";
			endif;
			$pageURL .= "://";
			
			if ($_SERVER["SERVER_PORT"] != "80") :
				$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"])."/";
			else :
				$pageURL .= $_SERVER["SERVER_NAME"].mb_substr(dirname($_SERVER['PHP_SELF']),0,-mb_strlen(strrchr(dirname($_SERVER['PHP_SELF']),"/")))."/";
			endif;
			
			return $pageURL;
		}
		
		# GET THE ROOT PATH URL
		$root = curPageURL();
	
	endif;

?>