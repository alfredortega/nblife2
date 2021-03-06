<?php
	require_once('models/client.php');

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
						//A many-to-many relationship
						$Curr_Roles = $user->via('userrole')->sharedRoleList;
//						$Curr_Roles = User::getRoles($user->id);
						$userSer = serialize($user);
						$userrolesSer = serialize($Curr_Roles);
						$_SESSION['User'] = $userSer;
						$_SESSION['UserRoles'] = $userrolesSer;
						$url = '/';
						echo'<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
					}
					else
					{
						throw new Exception('Login Failure');
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
			require_once('views/users/logout.php');		
			$url = '/';
			echo'<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
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
					$user = unserialize($_SESSION['User']);
					$userId = $user->id; 
					$password = $_POST['password'];
					$confpassword = $_POST['confpassword'];
					User::changepassword($userId,$password,$confpassword);
					$message = "Password has been succesfully updated.";
					require_once('views/message.php');		
				}
				else
				{
					if(isset($_SESSION['User']))
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

		public function editprofile()
		{
			try
			{
			  $queries = array();
			  parse_str($_SERVER['QUERY_STRING'],$queries);
			  $id = $queries['id'];
		
			  if(isset($_POST['Submit'])) //update client record
			  {
				$agerangeid = $_POST['agerange'];
				//$dateofbirth = $_POST['dateofbirth'];
				$salutation = $_POST['salutation'];
				$gender = $_POST['gender'];
				$firstname = $_POST['firstname'];
				$middlename = $_POST['middlename'];
				$lastname = $_POST['lastname']; 
				$streetaddress = $_POST['streetaddress']; 
				$streetaddress2 = $_POST['streetaddress2']; 
				$city = $_POST['city']; 
				$state = $_POST['state']; 
				$zipcode = $_POST['zipcode'];
				$homephone = $_POST['homephone'];
				$workphone = $_POST['workphone'];
				$height = $_POST['height'];
				$weight = $_POST['weight'];
				$client = Client::updateClient($id,$agerangeid, $salutation, $gender, $firstname, $middlename, $lastname, $streetaddress, $streetaddress2, $city, $state, $zipcode, $homephone, $workphone, $height, $weight);
				$messageType = 'success';
				$message = "Your profile has been successfully updated!";
				require_once('views/message.php');
	  
			  }
			  else //load client's record
			  {
				$client = Client::findByClientId($id);
				require_once('views/users/editprofile.php');
			  }
	  
			}
			catch(Exception $err)
			{
	  
			}
	  
		}
		
		public function settings()
		{
			if(isset($_POST['Submit'])) //button id
			{
				require_once('views/users/settings.php');
			}
			else
			{
				require_once('views/users/settings.php');
			}

		}


	}
?>