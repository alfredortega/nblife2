<?php
  class PagesController {
    public function index() {
      require_once('views/pages/index.php');
    }

    public function error() {
      require_once('views/pages/error.php');
    }
    
    public function aboutus() {
      require_once('views/pages/aboutus.php');
    }
    
    public function lifestyleataglance()
    {
      require_once ('views/pages/lifestyleataglance.php');
    }

    public function faq()
    {
      require_once ('views/pages/faq.php');
    }

    public function secretsauce()
    {
      require_once ('views/pages/secretsauce.php');
    }

    public function resources()
    {
      require_once ('views/pages/resources.php');
    }

    public function dashboard()
    {
      $user = unserialize($_SESSION['User']);
      require_once ('views/pages/dashboard.php');
    }


  }
?>