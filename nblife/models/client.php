<?php
  class Client {

    public function __construct() {

    }


    public static function all() 
    {
      $clients = R::findAll('client');
      return $clients;
    }

    public static function findByCoachId($id) 
    {
      $clients = R::find('client','coach_id = ?',[$id]);
      return $clients;
    }
    
    
    public static function findByClientId($id) 
    {
      $client = R::load('client',$id);
      return $client;
    }

    public function getHTMAByClientId($clientid)
    {
      return R::find('htmaresult','client_id = ? ORDER BY labdate DESC',[$clientid]);
    }

    public function getHTMAById($rid)
    {
      return R::load('htmaresult',[$clientid]);
    }


    public static function sendMessageToCoach()
    {
      echo 'send message to coach';
    }
    
    public static function viewMessages($custid)
    {
      echo 'view message list';    
    }

    public static function readMessage($messageid)
    {
      echo 'read a message';    
    }

    public static function updateClient($id,$agerangeid, $salutation, $gender, $firstname, $middlename, $lastname, $streetaddress, $streetaddress2, $city, $state, $zipcode, $homephone, $workphone, $height, $weight)
    {
        $client = R::load('client',$id);
        $agerange = R::load('agerange',$agerangeid);
        $client->agerange = $agerange;
//        $client->dateofbirth =$dateofbirth;
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
        R::store($client);     
        return $client; 
    }

}
?>