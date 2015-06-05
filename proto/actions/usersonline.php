<?php
/* Start the session */
include_once('../config/init.php');

session_start();

define("MAX_IDLE_TIME", 3);

echo session_save_path();


function getOnlineUsers(){

	if ( $directory_handle = opendir( session_save_path() ) ) {
		$count = 0;
		while ( false !== ( $file = readdir( $directory_handle ) ) ) {
			if($file != '.' && $file != '..'){

				if(time()- fileatime(session_save_path() . '\\' . $file) < MAX_IDLE_TIME * 60) {
					$count++;
				}
			}
			closedir($directory_handle);

			echo $count;

		} 
	}

	echo 'Number of online users: ' . getOnlineUsers() . '<br>';
	
}
getOnlineUsers();


?>