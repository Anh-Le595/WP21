<?php  
	session_start();

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$user = $pass_login = "";
		$user = $_POST['user'];
		$pass_login = $_POST['pass_login'];

		// if(isset($_POST['user']) === true && empty($_POST['user'])== false){
			// require "userController.php";
			require "connectdatabase.php";
			$query = "SELECT * FROM users";
			$result = mysqli_query($dbhandle,$query);

			while ($log = mysqli_fetch_array($result)){
				if ($log['Name'] == $user && $log['Password'] == $pass_login){
					$_SESSION['use'] = $user;
					$_SESSION['check_log'] = true;
					echo "Successfully";
					break;
				}
				else{
						
				}
			}
		// }
	}
?>