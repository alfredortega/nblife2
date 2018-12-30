<?php

require_once('models/htma.php');
require_once('models/htmaratiocalculator.php');

  class CustomersController 
  {
    public function index() //view dashboard
    {
      try 
      {
        require_once('views/customers/dashboard.php');
      }
      catch(Exception $err)
      {
        $messageType = 'warning';
        $message = $err->getMessage();
        require_once('views/message.php');
      }
    }

    public function selecthtma()
    {
      try
      {
        $user = unserialize($_SESSION['User']);
        $customer = R::findOne('customer',$user->id);
        $cid = $customer->id;
        $htmaresults = HTMA::findAllByCustomerId($cid);
        require_once('views/customers/selecthtma.php');
      }
      catch(Exception $err)
      {
        $messageType = 'warning';
        $message = $err->getMessage();
        require_once('views/message.php');
      }      
    }

    public function htmaataglance()
    {
      
      try 
      {
        $queries = array();
        parse_str($_SERVER['QUERY_STRING'],$queries);
        $hid = $queries['id'];
        $htma = HTMA::findByID($hid);
        $htmacalc = new HTMARatioCalculator($htma);
        require_once('views/customers/htmaataglance.php');
      }
      catch(Exception $err)
      {
        $messageType = 'warning';
        $message = $err->getMessage();
        require_once('views/message.php');
      }



    }

    public function sendMessageToCoach()
    {
      try 
      {
        Customer::sendMessageToCoach();
      }
      catch(Exception $err)
      {
        $messageType = 'warning';
        $message = $err->getMessage();
        require_once('views/message.php');
      }

      
    }

    public function viewMessages()
    {
      try 
      {
        Customer::viewMessages(1);
      }
      catch(Exception $err)
      {
        $messageType = 'warning';
        $message = $err->getMessage();
        require_once('views/message.php');
      }      
      
    }

    public function readMessage()
    {
      try 
      {
        Customer::readMessage(1);
      }
      catch(Exception $err)
      {
        $messageType = 'warning';
        $message = $err->getMessage();
        require_once('views/message.php');
      }      
      
    }

    public function updateInfo()
    {
      try 
      {
        Customer::update();
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