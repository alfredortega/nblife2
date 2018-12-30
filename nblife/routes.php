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
      case 'customers':
        require_once('models/customer.php');
        $controller = new CustomersController();
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
                       'users' => ['logout','login','register','changepassword','editprofile'],
                       'coaches' => ['index','showmycustomers','showallcustomers','addcustomer','editcustomer','deletecustomer','selectcustomerhtma','addcustomerhtma','editcustomerhtma','deletecustomerhtma','viewsymptomsheet','deletesymptomsheet','selectsymptomsheet','addsymptomsheet','editsymptomsheet'],                            
                       'customers' => ['htmaataglance','index','selecthtma']
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