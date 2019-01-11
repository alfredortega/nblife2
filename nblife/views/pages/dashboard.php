<?php 
$roles = [];
foreach($Curr_Roles as $role)
{
    $role->name;
    array_push($roles,$role->name);
} 


require_once('tabs/dashboard_coach.php');


if(in_array('Admin',$roles))
{
//    require_once('tabs/dashboard_admin.php');
}
else
{
    if(in_array('Coach',$roles)  || in_array('Director',$roles)    )
    {
        require_once('tabs/dashboard_coach.php');
    }
    else
    {
        require_once('tabs/dashboard_client.php');
    }
}





?>