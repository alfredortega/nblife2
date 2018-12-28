<?php

	class UsersController 
	{

		public function login()
		{
			if(isset($_POST['btnLogin'])) //button id
			{

				$username = $_POST['email'];
				$password = $_POST['password'];
				try
				{
					$user = User::login($username,$password);
					if(isset($user))
					{
						$Curr_Roles = User::getRoles($user->id);
						$userSer = serialize($user);
						$userrolesSer = serialize($Curr_Roles);
						$_SESSION['User'] = $userSer;
						$_SESSION['UserRoles'] = $userrolesSer;

						require_once('views/pages/dashboard.php');
					}
					else
					{
						throw new Exception('damn');
					}
				}
				catch(Exception $err)
				{
					$message = $err;
					$messageType = 'warning';					
					include('views/message.php');
					require_once('views/users/login.php');
				}
			}
			else
			{
				unset($_SESSION['User']);
				unset($_SESSION['UserRoles']);
				require_once('views/users/login.php');
			}
		}
		
		public function logout()
		{
			unset($_SESSION['User']);
			unset($_SESSION['UserRoles']);
			require_once('views/users/login.php');		
		}

		
		public function register()
		{
			try
			{
				if(isset($_POST['Register']))
				{
					$username = $_POST['email'];
					$password = $_POST['password'];
					$confpassword = $_POST['confpassword'];
					$user = User::register($username,$password,$confpassword);
					require_once('views/users/login.php');
				}
				else
				{
				require_once('views/users/register.php');
				}
			}
			catch(Excetion $err)
			{
				require_once('views/users/register.php');
				$messageType = 'warning';
				$message = $err->getMessage();
				require_once('views/message.php');		
			}
		}

		public function changepassword()
		{
			try
			{
				if(isset($_POST['Submit']))
				{
					$userId = $_SESSION['userID'];
					$password = $_POST['password'];
					$confpassword = $_POST['confpassword'];
					User::changepassword($userId,$password,$confpassword);
					$message = "Password has been succesfully updated.";
					require_once('views/message.php');		
				}
				else
				{
					if(isset($_SESSION['UserId']))
					{
						require_once('views/users/changepassword.php');
					}
					else
					{
						require_once('views/users/login.php');
						$messageType = 'warning';
						$message = 'You must be logged into change your password.';
						require_once('views/message.php');		
		
					}

				}
			}
			catch(Exception $err)
			{
				$messageType = 'warning';
				$message = $err->getMessage();
				require_once('views/message.php');		
			}

		}
		
}
?>