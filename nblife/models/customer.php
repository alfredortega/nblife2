<?php
  class Customer {

    public function __construct() {

    }


    public static function all() 
    {
      $customers = R::findAll('customer');
      return $customers;
    }

    public static function findByCoachId($id) 
    {
      $customers = R::find('customer','coach_id = ?',[$id]);
      return $customers;
    }
    
    
    public static function findByCustomerId($id) 
    {
      $customer = R::load('customer',$id);
      return $customer;
    }

    public function getHTMAByCustomerId($customerid)
    {
      return R::find('htmaresult','customer_id = ? ORDER BY labdate DESC',[$customerid]);
    }

    public function getHTMAById($rid)
    {
      return R::load('htmaresult',[$customerid]);
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

    public static function updateCustomer($id,$dateofbirth, $salutation, $gender, $firstname, $middlename, $lastname, $streetaddress, $streetaddress2, $city, $state, $zipcode, $homephone, $workphone, $height, $weight)
    {
        $customer = R::load('customer',$id);
        $customer->dateofbirth =$dateofbirth;
        $customer->salutation = $salutation;
        $customer->gender = $gender;
        $customer->firstname = $firstname;
        $customer->middlename = $middlename;
        $customer->lastname = $lastname;
        $customer->streetaddress = $streetaddress;
        $customer->streetaddress2 = $streetaddress2;
        $customer->city = $city;
        $customer->state = $state;
        $customer->zipcode = $zipcode;
        $customer->homephone = $homephone;
        $customer->workphone = $workphone;
        $customer->height = $height;
        $customer->weight = $weight;
        R::store($customer);     
        return $customer; 
    }

}
?>