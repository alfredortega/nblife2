<?php


class User 
{

	public function __construct() 
	{
	}// end constructor

	public static function findById($id) 
	{
		$user = R::findOne('user','id = ?',[$id]);
		return $user;
	}//end findById


	public static function login($username, $password)
	{
		$enc = crypt($password,$GLOBALS['KEY']);
		$user = R::findOne('user', 'username = ? and password = ?',[$username,$enc] );
		try
		{
			if(isset($user))
			{
				if($user->isactive)
				{
					$user->lastlogin = date('Y-m-d H:i:s');
					$user->failedlogins = 0;
					return $user;
				}
				else
				{
					throw new Exception('User Account is locked.');
				}
			}
			else
			{
				throw new Exception('Invalid Username/Password Combination');
			}
		}
		catch(Exception $err)
		{
			throw $err;
		}
	}//end login

	public static function getRoles($id) 
	{
        $Curr_Roles = [];
        $userroles = R::find('userrole', 'user_id = ?', [$id]);
        foreach($userroles as $userrole)
        {
            $role = R::load('role',$userrole->roleid);
            array_push($Curr_Roles,$role);
        }
		return $Curr_Roles;
    }//end getRoles

	public static function register($username, $password, $confPassword)
	{
		try
		{
			if($password == $confPassword)
			{
				$user = R::dispense('user');
				$user->username = $username;
				$user->password = crypt($password,$GLOBALS['KEY']);
				$user->created = date('Y-m-d H:i:s');
				$user->failedlogins = 0;
				$user->islocked = 0;
				$user->isactive = 1;
				$user->lastlogin = date('Y-m-d H:i:s');
				R::store($user);
				$role = R::findOne('role','name = ?', ['Client']);
				$user_role = R::dispense('userrole');
				$user_role->user = $user;
				$user_role->role = $role;
				R::store($user_role);
				return $user;
			}
			else
			{
				throw new Exception("Passwords do not match.");
			}
		}
		catch(Exception $err)
		{
			if(strpos($err->getMessage(),'Integrity constraint violation') != 0)
			{
				throw new Exception('Duplicate username found.');
			}
			else
			{
				throw $err;
			}
		}
	}//end register

	public static function insert($email)
	{
		/*
		This is for when a coach creates a new client and a user must be added first.
		It is provided a default password and the user object will be returned.
		*/
		$password = $GLOBALS['DEFAULT_PASSWORD'];
		$user = R::dispense('user');
		$user->username = $email;
		$user->password = crypt($password,$GLOBALS['KEY']);
		$user->created = date('Y-m-d H:i:s');
		$user->failedlogins = 0;
		$user->islocked = 0;
		$user->isactive = 1;
		$user->lastlogin = date('Y-m-d H:i:s');
		R::store($user);
		$role = R::findOne('role','name = ?', ['Client']);
		$user_role = R::dispense('userrole');
		$user_role->user = $user;
		$user_role->role = $role;
		R::store($user_role);
		return $user;		
	}

	public static function delete($cid)
	{ //we do a soft delete
		$client = R::load('client',$cid);
		$user = R::load('user',$client->user_id);
		$user->lastupdated = date('Y-m-d H:i:s');
		$user->islocked = 1;
		$user->isactive = 0;
		R::store($user);
	}

	public static function update($id, $email)
	{ //we do a soft delete
		$user = findById($id);
		$user->lastupdated = date('Y-m-d H:i:s');
		$user->username = $email;
		R::store($user);
	}

	public static function changepassword($id, $newPassword, $confNewPassword)
	{
		if($newPassword == $confNewPassword)
		{
			$user = R::load('user',$id);
			$user->password = crypt($newPassword,$GLOBALS['KEY']);
			$user->lastupdated = date('Y-m-d H:i:s');
			R::store($user);
		}
		else
		{
			throw new Exception("Passwords do not match.");
		}
	}

}//end user
	?>
