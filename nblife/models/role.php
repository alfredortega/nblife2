<?php

class Role
{
    public $id;
    public $Name;

	public function __construct($Id,$Name) 
	{
		$name = $Name;
		$id = $Id;
    }

	public static function findAll() 
	{
		$users = R::findAll('role');
		return $users;

	}//end findAll
	
	public static function findByUserId($userid) 
	{
        $Curr_Roles = [];
        $userroles = R::find('userrole', 'userid = ?', [$userid]);
        foreach($userroles as $userrole)
        {
            $role = R::load('role',$userrole->roleid);
            array_push($Curr_Roles,$role);
        }
		return $Curr_Roles;
    }//end findByiserId


	public static function findById($id) 
	{
		$role = R::findOne('role','id = ?',[$id]);
		return $role;
    }//end findById







}


?>