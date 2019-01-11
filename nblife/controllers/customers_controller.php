<?php

require_once('models/htma.php');
require_once('models/htmaratiocalculator.php');

  class ClientsController 
  {
    public function index() //view dashboard
    {
      try 
      {
        require_once('views/clients/dashboard.php');
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
        $client = R::findOne('client',$user->id);
        $cid = $client->id;
        $htmaresults = HTMA::findAllByClientId($cid);
        require_once('views/clients/selecthtma.php');
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
        require_once('views/clients/htmaataglance.php');
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
        Client::sendMessageToCoach();
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
        Client::viewMessages(1);
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
        Client::readMessage(1);
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
        Client::update();
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