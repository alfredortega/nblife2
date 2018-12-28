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

    public static function update()
    {
      echo 'updating my own info as a customer';
    }

}
?>