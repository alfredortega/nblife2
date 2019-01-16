<?php
  function call($controller, $action) {
    require_once('controllers/' . $controller . '_controller.php');

    switch($controller) {
      case 'pages':
        $controller = new PagesController();
        break;
      case 'users':
	      require_once('models/user.php');
        $controller = new UsersController();
        break;
      case 'clients':
        require_once('models/client.php');
        $controller = new ClientsController();
        break;
      case 'coaches':
        require_once('models/coach.php');
        $controller = new CoachesController();
        break;

  }

    $controller->{ $action }();
  }

  // we're adding an entry for the new controller and its actions
  $controllers = array('pages' => ['aboutus','index', 'lifestyleataglance', 'error','faq','secretsauce','resources','dashboard'],
                       'users' => ['logout','login','register','changepassword','editprofile','settings'],
                       'coaches' => ['index','showmyclients','showallclients','addclient','editclient','deleteclient','selectclienthtma','addclienthtma','editclienthtma','deleteclienthtma','viewsymptomsheet','deletesymptomsheet','selectsymptomsheet','addsymptomsheet','editsymptomsheet','uploadbarchart'],                            
                       'clients' => ['htmaataglance','index','selecthtma']
                       );
  
  
  
  


  if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
      call($controller, $action);
    } else {
      call('pages', 'error');
    }
  } else {
    call('pages', 'error');
  }
?>