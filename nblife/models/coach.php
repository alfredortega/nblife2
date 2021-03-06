<?php
    class Coach
    {
        public function __construct() 
        {
        }        

        public static function findAllClients()
        {
            $beans = R::findMulti('client,user',
            'select client.*, user.* from client, user where
             user.id = client.user_id
            and user.isactive = 1 order by client.firstname, client.lastname');
            $clients = $beans['client'];
            return $clients;
        }

    
        public static function findClientsByCoach($userid)
        {
            $coach = R::FindOne('coach','user_id = ?',[$userid]);
            $beans = R::findMulti('client,user',
            'select client.*, user.* from client , user
            where user.id = client.user_id and 
            user.isactive = 1 and client.coach_id = ? order by client.firstname, client.lastname',[$coach->id]);
            $clients = $beans['client'];
//            $emps = $project->via('employee_project')->sharedEmployeeList;

            return $clients;
        }

        public static function addClient($email, $agerangeid, $salutation, $gender, $firstname, $middlename, $lastname, $streetaddress, $streetaddress2, $city, $state, $zipcode, $homephone, $workphone, $height, $weight, $coachid)
        {
            $user = User::insert($email);
            $coach = R::FindOne('coach','user_id = ?',[$coachid]);
            $client = R::dispense('client');
            $agerange = R::load('agerange',$agerangeid);
            $client->agerange = $agerange;
  //           $client->dateofbirth =$dateofbirth;
            $client->salutation = $salutation;
            $client->gender = $gender;
            $client->firstname = $firstname;
            $client->middlename = $middlename;
            $client->lastname = $lastname;
            $client->streetaddress = $streetaddress;
            $client->streetaddress2 = $streetaddress2;
            $client->city = $city;
            $client->state = $state;
            $client->zipcode = $zipcode;
            $client->homephone = $homephone;
            $client->workphone = $workphone;
            $client->height = $height;
            $client->weight = $weight;
            $client->user = $user;
            $client->coach = $coach;      
            R::store($client);     
            return $client; 
        }

        public static function updateClient($id,$agerangeid, $salutation, $gender, $firstname, $middlename, $lastname, $streetaddress, $streetaddress2, $city, $state, $zipcode, $homephone, $workphone, $height, $weight, $userid)
        {
            $coach = R::FindOne('coach','user_id = ?',[$userid]);
            $client = R::load('client',$id);
            $agerange = R::load('agerange',$agerangeid);
            $client->agerange = $agerange;
 //           $client->dateofbirth =$dateofbirth;
            $client->salutation = $salutation;
            $client->gender = $gender;
            $client->firstname = $firstname;
            $client->middlename = $middlename;
            $client->lastname = $lastname;
            $client->streetaddress = $streetaddress;
            $client->streetaddress2 = $streetaddress2;
            $client->city = $city;
            $client->state = $state;
            $client->zipcode = $zipcode;
            $client->homephone = $homephone;
            $client->workphone = $workphone;
            $client->height = $height;
            $client->weight = $weight;
            $client->coach = $coach;      
            R::store($client);     
            return $client; 
        }

        
    }


?>