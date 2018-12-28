<?php
  require_once('models/user.php');
  require_once('models/customer.php');
  require_once('models/htma.php');
  require_once('models/htmaratiocalculator.php');
  require_once('models/symptomsheet.php');


  class CoachesController 
  {

    public function index()
    {
      $messageType = 'success';
      $message = "Some dashboard here";
      require_once('views/message.php');
}

    public function showmycustomers() 
    {
      $user = unserialize($_SESSION['User']);
      $userid = $user->id;
      $customers = Coach::findCustomersByCoach($userid);
      require_once('views/coaches/showmycustomers.php');

/*       if(isset($_SESSION['User']) & in_array('Coach',$_SESSION['UserRoles'])   )
      {
        $user = $_SESSION['User'];
        $customers = Coach::findCustomersByCoach($user->id);
        require_once('views/coachs/index.php');
      }
      else
      {
        $message = "Not authorized";
        $messageType = 'danger';
				include('views/message.php');
				require_once('views/users/login.php');
      }
 */
    }//end showmycustomers
 
    public function showallcustomers() 
    {
      $customers = Coach::findAllCustomers();
      require_once('views/coaches/showallcustomers.php');
/*       
      if(isset($_SESSION['User']) & in_array('Coach',$_SESSION['UserRoles'])   )
      {
        $customers = Coach::findAllCustomers();
        require_once('views/coaches/showAllCustomers.php');
      }
      else
      {
        $message = "Not authorized";
        $messageType = 'danger';
				include('views/message.php');
				require_once('views/users/login.php');
      } 
*/
    }

    public function addCustomer()
    {
      if(isset($_POST['Submit']))
      {
        $user = unserialize($_SESSION['User']);
        $userid = $user->id;
        $email = $_POST['emailaddress'];
        $dateofbirth = $_POST['dateofbirth'];
        $salutation = $_POST['salutation'];
        $gender = $_POST['gender'];
        $firstname = $_POST['firstname'];
        $middlename = $_POST['middlename'];
        $lastname = $_POST['lastname']; 
        $streetaddress = $_POST['streetaddress']; 
        $streetaddress2 = $_POST['streetaddress2']; 
        $city = $_POST['city']; 
        $state = $_POST['state']; 
        $zipcode = $_POST['zipcode'];
        $homephone = $_POST['homephone'];
        $workphone = $_POST['workphone'];
        $height = $_POST['height'];
        $weight = $_POST['weight'];
        $customer = Coach::addCustomer($email, $dateofbirth, $salutation, $gender, $firstname, $middlename, $lastname, $streetaddress, $streetaddress2, $city, $state, $zipcode, $homephone, $workphone, $height, $weight, $userid);

        $messageType = 'success';
        $message = "Customer has been successfully added!";
        require_once('views/message.php');

        //then redirect to customer symptoms page
      }
      else
      {
        require_once('views/coaches/addcustomer.php');
      }
    }


    public function editcustomer()
    {


      try
      {
        $queries = array();
        parse_str($_SERVER['QUERY_STRING'],$queries);
        $cid = $queries['id'];
  
        if(isset($_POST['Submit'])) //update customer record
        {
          $user = unserialize($_SESSION['User']); //to get the coach's id
          $userid = $user->id;
          $dateofbirth = $_POST['dateofbirth'];
          $salutation = $_POST['salutation'];
          $gender = $_POST['gender'];
          $firstname = $_POST['firstname'];
          $middlename = $_POST['middlename'];
          $lastname = $_POST['lastname']; 
          $streetaddress = $_POST['streetaddress']; 
          $streetaddress2 = $_POST['streetaddress2']; 
          $city = $_POST['city']; 
          $state = $_POST['state']; 
          $zipcode = $_POST['zipcode'];
          $homephone = $_POST['homephone'];
          $workphone = $_POST['workphone'];
          $height = $_POST['height'];
          $weight = $_POST['weight'];
          $customer = Coach::updateCustomer($cid, $dateofbirth, $salutation, $gender, $firstname, $middlename, $lastname, $streetaddress, $streetaddress2, $city, $state, $zipcode, $homephone, $workphone, $height, $weight, $userid);
          $messageType = 'success';
          $message = "Customer has been successfully updated!";
          require_once('views/message.php');

        }
        else //load custome record
        {
          $customer = Customer::findByCustomerId($cid);
          require_once('views/coaches/editcustomer.php');
        }

      }
      catch(Exception $err)
      {

      }
    }

    public function deleteCustomer()
    {
      $queries = array();
      parse_str($_SERVER['QUERY_STRING'],$queries);
      $cid = $queries['id'];
      if(isset($_POST['Submit']))
      {
        User::delete($cid);
        $messageType = 'success';
        $message = "<br/>Customer has been successfully deleted!";
        require_once('views/message.php');
      }
      else
      {
        $customer = Customer::findByCustomerId($cid);
        require_once('views/coaches/deletecustomer.php');
      }
    }


    public function deleteCustomerhtma()
    {
      $queries = array();
      parse_str($_SERVER['QUERY_STRING'],$queries);
      $htmaid = $queries['id'];
      if(isset($_POST['Submit']))
      {
        HTMA::delete($htmaid);
        $messageType = 'success';
        $message = "<br/>HTMA has been successfully deleted!";
        require_once('views/message.php');
      }
      else
      {
        $htma = HTMA::findByID($htmaid);
        require_once('views/coaches/deletecustomerhtma.php');
      }
    }


    public function selectcustomerhtma()
    {
      try
      {
        $queries = array();
        parse_str($_SERVER['QUERY_STRING'],$queries);
        $cid = $queries['id'];
        $customer = R::load('customer',$cid);
        $fullname = $customer->lastname . ', ' . $customer->firstname . ' ' . $customer->middlename;
        $htmaresults = HTMA::findAllByCustomerId($cid);
        require_once('views/coaches/selectcustomerhtma.php');
      }
      catch(Exception $err)
      {
        $messageType = 'warning';
        $message = $err->getMessage();
        require_once('views/message.php');
      }

    }

    public function addcustomerhtma()
    {
      $queries = array();
      parse_str($_SERVER['QUERY_STRING'],$queries);
      $cid = $queries['id'];
      if(isset($_POST['Submit']))
      {
        try
        {
          $labnumber= $_POST['labnumber'];
          $labdate= $_POST['labdate'];
  
          //nutrient minerals
          $calcium= $_POST['calcium'];
          $magnesium= $_POST['magnesium'];
          $sodium= $_POST['sodium'];
          $potassium= $_POST['potassium'];
          $iron= $_POST['iron'];
          $copper= $_POST['copper'];
          $manganese= $_POST['manganese'];
          $zinc= $_POST['zinc'];
          $chromium= $_POST['chromium'];
          $selenium= $_POST['selenium'];
          $phosphorus= $_POST['phosphorus'];
  
          //toxic minerals
          $lead= $_POST['lead'];
          $mercury= $_POST['mercury'];
          $cadmium= $_POST['cadmium'];
          $arsenic= $_POST['arsenic'];
          $aluminum= $_POST['aluminum'];
  
          //additional minerals
          $nickel= $_POST['nickel'];
          $cobalt= $_POST['cobalt'];
          $molybdenum= $_POST['molybdenum'];
          $lithium= $_POST['lithium'];
          $boron= $_POST['boron'];
          $htma = HTMA::addhtmaresult($cid,$labnumber,$labdate,$calcium,$magnesium,$sodium,$potassium, $iron,$copper,$manganese,$zinc,$chromium,$selenium,$phosphorus,$lead,$mercury,$cadmium,$arsenic,$aluminum,$nickel,$cobalt,$molybdenum,$lithium,$boron);
          $messageType = 'success';
          $message = 'HTMA Record successfully added. You can edit/review it by <a href="' . $GLOBALS['BASE_URL'] . 'coaches/editcustomerhtma/' . $htma->id .  '">click here.</a>';
          require_once('views/message.php');
        }
        catch(Exception $err)
        {
          $messageType = 'warning';
          $message = $err->getMessage();
          require_once('views/message.php');
        }
      }
      else
      {
        $today = date("Y-m-d");
        $customer = R::load('customer',$cid);
        $fullname = $customer->lastname . ', ' . $customer->firstname . ' ' . $customer->middlename;
        $age = date_diff(date_create($customer->dateofbirth),date_create($today))->format('%y');
        $gender = $customer->gender;
        $labdate = $today;
        require_once('views/coaches/addcustomerhtma.php');
      }
    }

    public function editcustomerhtma()
    {
      $queries = array();
      parse_str($_SERVER['QUERY_STRING'],$queries);
      $htmaid = $queries['id'];
      if(isset($_POST['Submit']))
      {
        try
        {
          $labnumber= $_POST['labnumber'];
          $labdate= $_POST['labdate'];
  
          //nutrient minerals
          $calcium= $_POST['calcium'];
          $magnesium= $_POST['magnesium'];
          $sodium= $_POST['sodium'];
          $potassium= $_POST['potassium'];
          $iron= $_POST['iron'];
          $copper= $_POST['copper'];
          $manganese= $_POST['manganese'];
          $zinc= $_POST['zinc'];
          $chromium= $_POST['chromium'];
          $selenium= $_POST['selenium'];
          $phosphorus= $_POST['phosphorus'];
  
          //toxic minerals
          $lead= $_POST['lead'];
          $mercury= $_POST['mercury'];
          $cadmium= $_POST['cadmium'];
          $arsenic= $_POST['arsenic'];
          $aluminum= $_POST['aluminum'];
  
          //additional minerals
          $nickel= $_POST['nickel'];
          $cobalt= $_POST['cobalt'];
          $molybdenum= $_POST['molybdenum'];
          $lithium= $_POST['lithium'];
          $boron= $_POST['boron'];
          $updatedhtma = HTMA::updatehtmaresult($htmaid,$labnumber,$labdate,$calcium,$magnesium,$sodium,$potassium, $iron,$copper,$manganese,$zinc,$chromium,$selenium,$phosphorus,$lead,$mercury,$cadmium,$arsenic,$aluminum,$nickel,$cobalt,$molybdenum,$lithium,$boron);
          $htma = R::Load('htmaresult',$htmaid);
          $messageType = 'success';
          $message = 'HTMA Record successfully updated';
          $today = date("Y-m-d");
          $customer = R::load('customer',$htma->customer_id);
          $fullname = $customer->lastname . ', ' . $customer->firstname . ' ' . $customer->middlename;
          $age = date_diff(date_create($customer->dateofbirth),date_create($today))->format('%y');
          $gender = $customer->gender;
          require_once('views/message.php');
          $htmaratiocalculator = new HTMARatioCalculator($htma);
          require_once('views/coaches/editcustomerhtma.php');
        }
        catch(Exception $err)
        {
          $messageType = 'warning';
          $message = $err->getMessage();
          require_once('views/message.php');
        }
      }
      else
      {
        $htma =  HTMA::findByID($htmaid);
        $today = date("Y-m-d");
        $customer = R::load('customer',$htma->customer_id);
        $fullname = $customer->lastname . ', ' . $customer->firstname . ' ' . $customer->middlename;
        $age = date_diff(date_create($customer->dateofbirth),date_create($today))->format('%y');
        $gender = $customer->gender;
        $htmaratiocalculator = new HTMARatioCalculator($htma);
        require_once('views/coaches/editcustomerhtma.php');
      }      
    }

    public function viewsymptomsheet()
    {
      $queries = array();
      parse_str($_SERVER['QUERY_STRING'],$queries);
      $sid = $queries['id'];
      $symptomsheet = SymptomSheet::getById($sid);
      $customer = Customer::findByCustomerId($symptomsheet->customer_id);
      $fullname = $customer->lastname . ', ' . $customer->firstname . ' ' . $customer->middlename;
      $gender = $customer->gender;
      require_once('views/coaches/viewsymptomsheet.php');
    }

    public function selectsymptomsheet() //for view only coaches view
    {
      $queries = array();
      parse_str($_SERVER['QUERY_STRING'],$queries);
      $cid = $queries['id'];
      $customer = Customer::findByCustomerId($cid);
      $fullname = $customer->lastname . ', ' . $customer->firstname . ' ' . $customer->middlename;
      $symptomsheets = SymptomSheet::getByCustomerId($cid);
      require_once('views/coaches/selectsymptomsheet.php');
      //
    }

    public function deletesymptomsheet()
    {
      $queries = array();
      parse_str($_SERVER['QUERY_STRING'],$queries);
      $sid = $queries['id'];
      if(isset($_POST['Submit']))
      {
        SymptomSheet::delete($sid);
        $messageType = 'success';
        $message = "<br/>Symptom Sheet has been successfully deleted!";
        require_once('views/message.php');
      }
      else
      {
        $symptomsheet = SymptomSheet::getById($sid);
        $cid = $symptomsheet->customer_id;
        $customer = Customer::findByCustomerId($cid);
        $fullname = $customer->lastname . ', ' . $customer->firstname . ' ' . $customer->middlename;
  
        require_once('views/coaches/deletesymptomsheet.php');
      }

    }

    public function addsymptomsheet()
    {
      $queries = array();
      parse_str($_SERVER['QUERY_STRING'],$queries);
      $cid = $queries['id'];
      $customer = Customer::findByCustomerId($cid);
      $fullname = $customer->lastname . ', ' . $customer->firstname . ' ' . $customer->middlename;
      $gender = $customer->gender;
      if(isset($_POST['Submit']))
      {

        $createddate = $_POST['createddate'];
        $acne = (isset($_POST['acne'])) ? 1 : 0;
        $adhd = (isset($_POST['adhd'])) ? 1 : 0;
        $alcoholism = (isset($_POST['alcoholism'])) ? 1 : 0;
        $allergieschemical = (isset($_POST['allergieschemical'])) ? 1 : 0;
        $allergiesdairy = (isset($_POST['allergiesdairy'])) ? 1 : 0;
        $allergieseggs = (isset($_POST['allergieseggs'])) ? 1 : 0;
        $allergiesfish = (isset($_POST['allergiesfish'])) ? 1 : 0;
        $allergiesmold = (isset($_POST['allergiesmold'])) ? 1 : 0;
        $allergiesseasonal = (isset($_POST['allergiesseasonal'])) ? 1 : 0;
        $anemia = (isset($_POST['anemia'])) ? 1 : 0;
        $anger = (isset($_POST['anger'])) ? 1 : 0;
        $angina = (isset($_POST['angina'])) ? 1 : 0;
        $anxiety = (isset($_POST['anxiety'])) ? 1 : 0;
        $arteriosclerosis = (isset($_POST['arteriosclerosis'])) ? 1 : 0;
        $asthma = (isset($_POST['asthma'])) ? 1 : 0;
        $autism = (isset($_POST['autism'])) ? 1 : 0;
        $bipolar = (isset($_POST['bipolar'])) ? 1 : 0;
        $bloating = (isset($_POST['bloating'])) ? 1 : 0;
        $bloodpressurehigh = (isset($_POST['bloodpressurehigh'])) ? 1 : 0;
        $bloodpressurelow = (isset($_POST['bloodpressurelow'])) ? 1 : 0;
        $bodytemperaturecoldinwinter = (isset($_POST['bodytemperaturecoldinwinter'])) ? 1 : 0;
        $bodytemperaturelow = (isset($_POST['bodytemperaturelow'])) ? 1 : 0;
        $brainfog = (isset($_POST['brainfog'])) ? 1 : 0;

        $bronchitis = (isset($_POST['bronchitis'])) ? 1 : 0;
        $bursitis = (isset($_POST['bursitis'])) ? 1 : 0;
        $cantskipmeals = (isset($_POST['cantskipmeals'])) ? 1 : 0;
        $cataracts = (isset($_POST['cataracts'])) ? 1 : 0;
        $cholesterolhigh = (isset($_POST['cholesterolhigh'])) ? 1 : 0;
        $chronicfatigue = (isset($_POST['chronicfatigue'])) ? 1 : 0;
        $cirrhosis = (isset($_POST['cirrhosis'])) ? 1 : 0;
        $colitis = (isset($_POST['colitis'])) ? 1 : 0;
        $confusion = (isset($_POST['confusion'])) ? 1 : 0;
        $constipationoccasional = (isset($_POST['constipationoccasional'])) ? 1 : 0;
        $constipationongoing = (isset($_POST['constipationongoing'])) ? 1 : 0;
        $cough = (isset($_POST['cough'])) ? 1 : 0;
        $cravefats = (isset($_POST['cravefats'])) ? 1 : 0;
        $cravesaltyfoods = (isset($_POST['cravesaltyfoods'])) ? 1 : 0;
        $cravestarches = (isset($_POST['cravestarches'])) ? 1 : 0;
        $cravesweets = (isset($_POST['cravesweets'])) ? 1 : 0;



        $delayeddevelopment = (isset($_POST['delayeddevelopment'])) ? 1 : 0;
        $depression = (isset($_POST['depression'])) ? 1 : 0;
        $diabetes1 = (isset($_POST['diabetes1'])) ? 1 : 0;
        $diabetes2 = (isset($_POST['diabetes2'])) ? 1 : 0;
        $diabetes3 = (isset($_POST['diabetes3'])) ? 1 : 0;
        $diarrheaoccasional = (isset($_POST['diarrheaoccasional'])) ? 1 : 0;
        $diarrheaongoing = (isset($_POST['diarrheaongoing'])) ? 1 : 0;
        $diverticulitis = (isset($_POST['diverticulitis'])) ? 1 : 0;
        $dizziness = (isset($_POST['dizziness'])) ? 1 : 0;
        $drugaddiction = (isset($_POST['drugaddiction'])) ? 1 : 0;
        $dryskin = (isset($_POST['dryskin'])) ? 1 : 0;
        $dyslexia = (isset($_POST['dyslexia'])) ? 1 : 0;
        $easybruising = (isset($_POST['easybruising'])) ? 1 : 0;
        $eczema = (isset($_POST['eczema'])) ? 1 : 0;
        $emphysema = (isset($_POST['emphysema'])) ? 1 : 0;
        $excessiveplaqueonteeth = (isset($_POST['excessiveplaqueonteeth'])) ? 1 : 0;
        $fatigue = (isset($_POST['fatigue'])) ? 1 : 0;
        $fibromyalgia = (isset($_POST['fibromyalgia'])) ? 1 : 0;
        $fissuresanal = (isset($_POST['fissuresanal'])) ? 1 : 0;
        $fistulas = (isset($_POST['fistulas'])) ? 1 : 0;
        $fractures = (isset($_POST['fractures'])) ? 1 : 0;
        $gallstones = (isset($_POST['gallstones'])) ? 1 : 0;
        $gas = (isset($_POST['gas'])) ? 1 : 0;
        $glaucoma = (isset($_POST['glaucoma'])) ? 1 : 0;
        $gout = (isset($_POST['gout'])) ? 1 : 0;
        $graves = (isset($_POST['graves'])) ? 1 : 0;
        $gumdisease = (isset($_POST['gumdisease'])) ? 1 : 0;
        $hairloss = (isset($_POST['hairloss'])) ? 1 : 0;
        $headachesmigraine = (isset($_POST['headachesmigraine'])) ? 1 : 0;
        $headachessinus = (isset($_POST['headachessinus'])) ? 1 : 0;
        $headachestension = (isset($_POST['headachestension'])) ? 1 : 0;
        $heartattack = (isset($_POST['heartattack'])) ? 1 : 0;
        $heartbeatsskip = (isset($_POST['heartbeatsskip'])) ? 1 : 0;
        $heartpalpitations = (isset($_POST['heartpalpitations'])) ? 1 : 0;
        $heartraterapid = (isset($_POST['heartraterapid'])) ? 1 : 0;
        $hemorrhoids = (isset($_POST['hemorrhoids'])) ? 1 : 0;
        $hives = (isset($_POST['hives'])) ? 1 : 0;
        $hotflashes = (isset($_POST['hotflashes'])) ? 1 : 0;
        $hungerexcessive = (isset($_POST['hungerexcessive'])) ? 1 : 0;
        $hungernoappetite = (isset($_POST['hungernoappetite'])) ? 1 : 0;
        $hyperkinesis = (isset($_POST['hyperkinesis'])) ? 1 : 0;
        $hyperthyroidism = (isset($_POST['hyperthyroidism'])) ? 1 : 0;
        $hypoglycemia = (isset($_POST['hypoglycemia'])) ? 1 : 0;
        $hypothyroidism = (isset($_POST['hypothyroidism'])) ? 1 : 0;
        $infectionsbladder = (isset($_POST['infectionsbladder'])) ? 1 : 0;
        $infectionsfungalcandida = (isset($_POST['infectionsfungalcandida'])) ? 1 : 0;
        $infectionsfungalyeast = (isset($_POST['infectionsfungalyeast'])) ? 1 : 0;
        $infectionskidney = (isset($_POST['infectionskidney'])) ? 1 : 0;
        $infectionsviruses = (isset($_POST['infectionsviruses'])) ? 1 : 0;
        $infertility = (isset($_POST['infertility'])) ? 1 : 0;        
        $inflammation = (isset($_POST['inflammation'])) ? 1 : 0;
        $irritability = (isset($_POST['irritability'])) ? 1 : 0;
        $irritablebeforemeals = (isset($_POST['irritablebeforemeals'])) ? 1 : 0;
        $jointpain = (isset($_POST['jointpain'])) ? 1 : 0;
        $jointstiffness = (isset($_POST['jointstiffness'])) ? 1 : 0;
        $kidneystones = (isset($_POST['kidneystones'])) ? 1 : 0;
        $learningdisability = (isset($_POST['learningdisability'])) ? 1 : 0;
        $lyme = (isset($_POST['lyme'])) ? 1 : 0;
        $menieresdisease = (isset($_POST['menieresdisease'])) ? 1 : 0;
        $mentalretardation = (isset($_POST['mentalretardation'])) ? 1 : 0;
        $mindraces = (isset($_POST['mindraces'])) ? 1 : 0;
        $moodswings = (isset($_POST['moodswings'])) ? 1 : 0;
        $multiplesclerosis = (isset($_POST['multiplesclerosis'])) ? 1 : 0;
        $musclecramps = (isset($_POST['musclecramps'])) ? 1 : 0;
        $musclepain = (isset($_POST['musclepain'])) ? 1 : 0;
        $muscleweakness = (isset($_POST['muscleweakness'])) ? 1 : 0;
        $neuritis = (isset($_POST['neuritis'])) ? 1 : 0;
        $neuropathy = (isset($_POST['neuropathy'])) ? 1 : 0;
        $obsessivecompulsive = (isset($_POST['obsessivecompulsive'])) ? 1 : 0;
        $osteoarthritis = (isset($_POST['osteoarthritis'])) ? 1 : 0;
        $osteoporosis = (isset($_POST['osteoporosis'])) ? 1 : 0;
        $panicattacks = (isset($_POST['panicattacks'])) ? 1 : 0;
        $parkinsonsdisease = (isset($_POST['parkinsonsdisease'])) ? 1 : 0;
        $poorcirculation = (isset($_POST['poorcirculation'])) ? 1 : 0;
        $poormemory = (isset($_POST['poormemory'])) ? 1 : 0;
        $postnasaldrip = (isset($_POST['postnasaldrip'])) ? 1 : 0;
        $premenstrualsyndrome = (isset($_POST['premenstrualsyndrome'])) ? 1 : 0;
        $psoriasis = (isset($_POST['psoriasis'])) ? 1 : 0;
        $rheumatoidarthritis = (isset($_POST['rheumatoidarthritis'])) ? 1 : 0;
        $schizophrenia = (isset($_POST['schizophrenia'])) ? 1 : 0;
        $scleroderma = (isset($_POST['scleroderma'])) ? 1 : 0;
        $seizures = (isset($_POST['seizures'])) ? 1 : 0;
        $sinuscongestion = (isset($_POST['sinuscongestion'])) ? 1 : 0;
        $slowwoundhealing = (isset($_POST['slowwoundhealing'])) ? 1 : 0;
        $smoking = (isset($_POST['smoking'])) ? 1 : 0;
        $stomachpain = (isset($_POST['stomachpain'])) ? 1 : 0;
        $sugarreactions = (isset($_POST['sugarreactions'])) ? 1 : 0;
        $tendtogainweight = (isset($_POST['tendtogainweight'])) ? 1 : 0;
        $tendtoloseweight = (isset($_POST['tendtoloseweight'])) ? 1 : 0;
        $toothdecayfrequentcavities = (isset($_POST['toothdecayfrequentcavities'])) ? 1 : 0;
        $triglycerideshigh = (isset($_POST['triglycerideshigh'])) ? 1 : 0;
        $troublesleeping = (isset($_POST['troublesleeping'])) ? 1 : 0;
        $tumoractive = (isset($_POST['tumoractive'])) ? 1 : 0;
        $tumorbenign = (isset($_POST['tumorbenign'])) ? 1 : 0;
        $tumorcancer = (isset($_POST['tumorcancer'])) ? 1 : 0;
        $tumorfatty = (isset($_POST['tumorfatty'])) ? 1 : 0;
        $ulcer = (isset($_POST['ulcer'])) ? 1 : 0;
        $urinationfrequent = (isset($_POST['urinationfrequent'])) ? 1 : 0;
        $urinationpainful = (isset($_POST['urinationpainful'])) ? 1 : 0;

        if($gender == 'M')
        {

          $impotence = (isset($_POST['impotence'])) ? 1 : 0;
          $prostateproblems = (isset($_POST['prostateproblems'])) ? 1 : 0;

          $breastsfibrocystic = 0;
          $breaststumors = 0;
          $cramps = 0;
          $cystsovarian = 0;        
          $menopause = 0;
          $menstruationdelayedstopped = 0;
          $periodsheavy = 0;
          $periodsirregular = 0;
          $periodslight = 0;
          $papsmearabnormal = 0;
          $sensitivetocaffeine = 0;
          $sensitivetoheat = 0;
          $vaginalyeastinfections = 0;
          $waterretention = 0;
        }
        else
        {
          $impotence = 0;
          $prostateproblems = 0;
          $breastsfibrocystic = (isset($_POST['breastsfibrocystic'])) ? 1 : 0;
          $breaststumors = (isset($_POST['breaststumors'])) ? 1 : 0;
          $cramps = (isset($_POST['cramps'])) ? 1 : 0;
          $cystsovarian = (isset($_POST['cystsovarian'])) ? 1 : 0;        
          $menopause = (isset($_POST['menopause'])) ? 1 : 0;
          $menstruationdelayedstopped = (isset($_POST['menstruationdelayedstopped'])) ? 1 : 0;
          $periodsheavy = (isset($_POST['periodsheavy'])) ? 1 : 0;
          $periodsirregular = (isset($_POST['periodsirregular'])) ? 1 : 0;
          $periodslight = (isset($_POST['periodslight'])) ? 1 : 0;
          $papsmearabnormal = (isset($_POST['papsmearabnormal'])) ? 1 : 0;
          $sensitivetocaffeine = (isset($_POST['sensitivetocaffeine'])) ? 1 : 0;
          $sensitivetoheat = (isset($_POST['sensitivetoheat'])) ? 1 : 0;
          $vaginalyeastinfections = (isset($_POST['vaginalyeastinfections'])) ? 1 : 0;
          $waterretention = (isset($_POST['waterretention'])) ? 1 : 0;
        }

        $symptomsheet = SymptomSheet::insert( $cid, $createddate, $acne, $adhd, $alcoholism, $allergieschemical, $allergiesdairy, $allergieseggs, $allergiesfish, $allergiesmold, $allergiesseasonal, $anemia, $anger, $angina, $anxiety, $arteriosclerosis, $asthma, $autism, $bipolar, $bloating, $bloodpressurehigh, $bloodpressurelow, $bodytemperaturecoldinwinter, $bodytemperaturelow, $brainfog, $breastsfibrocystic, $breaststumors, $bronchitis, $bursitis, $cantskipmeals, $cataracts, $cholesterolhigh, $chronicfatigue, $cirrhosis, $colitis, $confusion, $constipationoccasional, $constipationongoing, $cough, $cramps, $cravefats, $cravesaltyfoods, $cravestarches, $cravesweets, $cystsovarian, $delayeddevelopment, $depression, $diabetes1, $diabetes2, $diabetes3, $diarrheaoccasional, $diarrheaongoing, $diverticulitis, $dizziness, $drugaddiction, $dryskin, $dyslexia, $easybruising, $eczema, $emphysema, $excessiveplaqueonteeth, $fatigue, $fibromyalgia, $fissuresanal, $fistulas, $fractures, $gallstones, $gas, $glaucoma, $gout, $graves, $gumdisease, $hairloss, $headachesmigraine, $headachessinus, $headachestension, $heartattack, $heartbeatsskip, $heartpalpitations, $heartraterapid, $hemorrhoids, $hives, $hotflashes, $hungerexcessive, $hungernoappetite, $hyperkinesis, $hyperthyroidism, $hypoglycemia, $hypothyroidism, $impotence, $infectionsbladder, $infectionsfungalcandida, $infectionsfungalyeast, $infectionskidney, $infectionsviruses, $infertility, $inflammation, $irritability, $irritablebeforemeals, $jointpain, $jointstiffness, $kidneystones, $learningdisability, $lyme, $menieresdisease, $menopause, $menstruationdelayedstopped, $mentalretardation, $mindraces, $moodswings, $multiplesclerosis, $musclecramps, $musclepain, $muscleweakness, $neuritis, $neuropathy, $obsessivecompulsive, $osteoarthritis, $osteoporosis, $panicattacks, $papsmearabnormal, $parkinsonsdisease, $periodsheavy, $periodsirregular, $periodslight, $poorcirculation, $poormemory, $postnasaldrip, $premenstrualsyndrome, $prostateproblems, $psoriasis, $rheumatoidarthritis, $schizophrenia, $scleroderma, $seizures, $sensitivetocaffeine, $sensitivetoheat, $sinuscongestion, $slowwoundhealing, $smoking, $stomachpain, $sugarreactions, $tendtogainweight, $tendtoloseweight, $toothdecayfrequentcavities, $triglycerideshigh, $troublesleeping, $tumoractive, $tumorbenign, $tumorcancer, $tumorfatty, $ulcer, $urinationfrequent, $urinationpainful, $vaginalyeastinfections, $waterretention); 
        $messageType = 'success';
        $message = 'Symptom Sheet successfully added. You can edit/review it by <a href="' . $GLOBALS['BASE_URL'] . 'coaches/selectsymptomsheet/' . $cid .  '">click here.</a>';
        require_once('views/message.php');

      }
      else
      {
        require_once('views/coaches/addsymptomsheet.php');
      }

    }

    public function editsymptomsheet()
    {
      $queries = array();
      parse_str($_SERVER['QUERY_STRING'],$queries);
      $sid = $queries['id'];
      $symptomsheet = SymptomSheet::getById($sid);
      $customer = Customer::findByCustomerId($symptomsheet->customer_id);
      $fullname = $customer->lastname . ', ' . $customer->firstname . ' ' . $customer->middlename;
      $gender = $customer->gender;
            
			if(isset($_POST['Submit'])) //button id
			{
        $acne = (isset($_POST['acne'])) ? 1 : 0;
        $adhd = (isset($_POST['adhd'])) ? 1 : 0;
        $alcoholism = (isset($_POST['alcoholism'])) ? 1 : 0;
        $allergieschemical = (isset($_POST['allergieschemical'])) ? 1 : 0;
        $allergiesdairy = (isset($_POST['allergiesdairy'])) ? 1 : 0;
        $allergieseggs = (isset($_POST['allergieseggs'])) ? 1 : 0;
        $allergiesfish = (isset($_POST['allergiesfish'])) ? 1 : 0;
        $allergiesmold = (isset($_POST['allergiesmold'])) ? 1 : 0;
        $allergiesseasonal = (isset($_POST['allergiesseasonal'])) ? 1 : 0;
        $anemia = (isset($_POST['anemia'])) ? 1 : 0;
        $anger = (isset($_POST['anger'])) ? 1 : 0;
        $angina = (isset($_POST['angina'])) ? 1 : 0;
        $anxiety = (isset($_POST['anxiety'])) ? 1 : 0;
        $arteriosclerosis = (isset($_POST['arteriosclerosis'])) ? 1 : 0;
        $asthma = (isset($_POST['asthma'])) ? 1 : 0;
        $autism = (isset($_POST['autism'])) ? 1 : 0;
        $bipolar = (isset($_POST['bipolar'])) ? 1 : 0;
        $bloating = (isset($_POST['bloating'])) ? 1 : 0;
        $bloodpressurehigh = (isset($_POST['bloodpressurehigh'])) ? 1 : 0;
        $bloodpressurelow = (isset($_POST['bloodpressurelow'])) ? 1 : 0;
        $bodytemperaturecoldinwinter = (isset($_POST['bodytemperaturecoldinwinter'])) ? 1 : 0;
        $bodytemperaturelow = (isset($_POST['bodytemperaturelow'])) ? 1 : 0;
        $brainfog = (isset($_POST['brainfog'])) ? 1 : 0;

        $bronchitis = (isset($_POST['bronchitis'])) ? 1 : 0;
        $bursitis = (isset($_POST['bursitis'])) ? 1 : 0;
        $cantskipmeals = (isset($_POST['cantskipmeals'])) ? 1 : 0;
        $cataracts = (isset($_POST['cataracts'])) ? 1 : 0;
        $cholesterolhigh = (isset($_POST['cholesterolhigh'])) ? 1 : 0;
        $chronicfatigue = (isset($_POST['chronicfatigue'])) ? 1 : 0;
        $cirrhosis = (isset($_POST['cirrhosis'])) ? 1 : 0;
        $colitis = (isset($_POST['colitis'])) ? 1 : 0;
        $confusion = (isset($_POST['confusion'])) ? 1 : 0;
        $constipationoccasional = (isset($_POST['constipationoccasional'])) ? 1 : 0;
        $constipationongoing = (isset($_POST['constipationongoing'])) ? 1 : 0;
        $cough = (isset($_POST['cough'])) ? 1 : 0;
        $cravefats = (isset($_POST['cravefats'])) ? 1 : 0;
        $cravesaltyfoods = (isset($_POST['cravesaltyfoods'])) ? 1 : 0;
        $cravestarches = (isset($_POST['cravestarches'])) ? 1 : 0;
        $cravesweets = (isset($_POST['cravesweets'])) ? 1 : 0;



        $delayeddevelopment = (isset($_POST['delayeddevelopment'])) ? 1 : 0;
        $depression = (isset($_POST['depression'])) ? 1 : 0;
        $diabetes1 = (isset($_POST['diabetes1'])) ? 1 : 0;
        $diabetes2 = (isset($_POST['diabetes2'])) ? 1 : 0;
        $diabetes3 = (isset($_POST['diabetes3'])) ? 1 : 0;
        $diarrheaoccasional = (isset($_POST['diarrheaoccasional'])) ? 1 : 0;
        $diarrheaongoing = (isset($_POST['diarrheaongoing'])) ? 1 : 0;
        $diverticulitis = (isset($_POST['diverticulitis'])) ? 1 : 0;
        $dizziness = (isset($_POST['dizziness'])) ? 1 : 0;
        $drugaddiction = (isset($_POST['drugaddiction'])) ? 1 : 0;
        $dryskin = (isset($_POST['dryskin'])) ? 1 : 0;
        $dyslexia = (isset($_POST['dyslexia'])) ? 1 : 0;
        $easybruising = (isset($_POST['easybruising'])) ? 1 : 0;
        $eczema = (isset($_POST['eczema'])) ? 1 : 0;
        $emphysema = (isset($_POST['emphysema'])) ? 1 : 0;
        $excessiveplaqueonteeth = (isset($_POST['excessiveplaqueonteeth'])) ? 1 : 0;
        $fatigue = (isset($_POST['fatigue'])) ? 1 : 0;
        $fibromyalgia = (isset($_POST['fibromyalgia'])) ? 1 : 0;
        $fissuresanal = (isset($_POST['fissuresanal'])) ? 1 : 0;
        $fistulas = (isset($_POST['fistulas'])) ? 1 : 0;
        $fractures = (isset($_POST['fractures'])) ? 1 : 0;
        $gallstones = (isset($_POST['gallstones'])) ? 1 : 0;
        $gas = (isset($_POST['gas'])) ? 1 : 0;
        $glaucoma = (isset($_POST['glaucoma'])) ? 1 : 0;
        $gout = (isset($_POST['gout'])) ? 1 : 0;
        $graves = (isset($_POST['graves'])) ? 1 : 0;
        $gumdisease = (isset($_POST['gumdisease'])) ? 1 : 0;
        $hairloss = (isset($_POST['hairloss'])) ? 1 : 0;
        $headachesmigraine = (isset($_POST['headachesmigraine'])) ? 1 : 0;
        $headachessinus = (isset($_POST['headachessinus'])) ? 1 : 0;
        $headachestension = (isset($_POST['headachestension'])) ? 1 : 0;
        $heartattack = (isset($_POST['heartattack'])) ? 1 : 0;
        $heartbeatsskip = (isset($_POST['heartbeatsskip'])) ? 1 : 0;
        $heartpalpitations = (isset($_POST['heartpalpitations'])) ? 1 : 0;
        $heartraterapid = (isset($_POST['heartraterapid'])) ? 1 : 0;
        $hemorrhoids = (isset($_POST['hemorrhoids'])) ? 1 : 0;
        $hives = (isset($_POST['hives'])) ? 1 : 0;
        $hotflashes = (isset($_POST['hotflashes'])) ? 1 : 0;
        $hungerexcessive = (isset($_POST['hungerexcessive'])) ? 1 : 0;
        $hungernoappetite = (isset($_POST['hungernoappetite'])) ? 1 : 0;
        $hyperkinesis = (isset($_POST['hyperkinesis'])) ? 1 : 0;
        $hyperthyroidism = (isset($_POST['hyperthyroidism'])) ? 1 : 0;
        $hypoglycemia = (isset($_POST['hypoglycemia'])) ? 1 : 0;
        $hypothyroidism = (isset($_POST['hypothyroidism'])) ? 1 : 0;
        $infectionsbladder = (isset($_POST['infectionsbladder'])) ? 1 : 0;
        $infectionsfungalcandida = (isset($_POST['infectionsfungalcandida'])) ? 1 : 0;
        $infectionsfungalyeast = (isset($_POST['infectionsfungalyeast'])) ? 1 : 0;
        $infectionskidney = (isset($_POST['infectionskidney'])) ? 1 : 0;
        $infectionsviruses = (isset($_POST['infectionsviruses'])) ? 1 : 0;
        $infertility = (isset($_POST['infertility'])) ? 1 : 0;        
        $inflammation = (isset($_POST['inflammation'])) ? 1 : 0;
        $irritability = (isset($_POST['irritability'])) ? 1 : 0;
        $irritablebeforemeals = (isset($_POST['irritablebeforemeals'])) ? 1 : 0;
        $jointpain = (isset($_POST['jointpain'])) ? 1 : 0;
        $jointstiffness = (isset($_POST['jointstiffness'])) ? 1 : 0;
        $kidneystones = (isset($_POST['kidneystones'])) ? 1 : 0;
        $learningdisability = (isset($_POST['learningdisability'])) ? 1 : 0;
        $lyme = (isset($_POST['lyme'])) ? 1 : 0;
        $menieresdisease = (isset($_POST['menieresdisease'])) ? 1 : 0;
        $mentalretardation = (isset($_POST['mentalretardation'])) ? 1 : 0;
        $mindraces = (isset($_POST['mindraces'])) ? 1 : 0;
        $moodswings = (isset($_POST['moodswings'])) ? 1 : 0;
        $multiplesclerosis = (isset($_POST['multiplesclerosis'])) ? 1 : 0;
        $musclecramps = (isset($_POST['musclecramps'])) ? 1 : 0;
        $musclepain = (isset($_POST['musclepain'])) ? 1 : 0;
        $muscleweakness = (isset($_POST['muscleweakness'])) ? 1 : 0;
        $neuritis = (isset($_POST['neuritis'])) ? 1 : 0;
        $neuropathy = (isset($_POST['neuropathy'])) ? 1 : 0;
        $obsessivecompulsive = (isset($_POST['obsessivecompulsive'])) ? 1 : 0;
        $osteoarthritis = (isset($_POST['osteoarthritis'])) ? 1 : 0;
        $osteoporosis = (isset($_POST['osteoporosis'])) ? 1 : 0;
        $panicattacks = (isset($_POST['panicattacks'])) ? 1 : 0;
        $parkinsonsdisease = (isset($_POST['parkinsonsdisease'])) ? 1 : 0;
        $poorcirculation = (isset($_POST['poorcirculation'])) ? 1 : 0;
        $poormemory = (isset($_POST['poormemory'])) ? 1 : 0;
        $postnasaldrip = (isset($_POST['postnasaldrip'])) ? 1 : 0;
        $premenstrualsyndrome = (isset($_POST['premenstrualsyndrome'])) ? 1 : 0;
        $psoriasis = (isset($_POST['psoriasis'])) ? 1 : 0;
        $rheumatoidarthritis = (isset($_POST['rheumatoidarthritis'])) ? 1 : 0;
        $schizophrenia = (isset($_POST['schizophrenia'])) ? 1 : 0;
        $scleroderma = (isset($_POST['scleroderma'])) ? 1 : 0;
        $seizures = (isset($_POST['seizures'])) ? 1 : 0;
        $sinuscongestion = (isset($_POST['sinuscongestion'])) ? 1 : 0;
        $slowwoundhealing = (isset($_POST['slowwoundhealing'])) ? 1 : 0;
        $smoking = (isset($_POST['smoking'])) ? 1 : 0;
        $stomachpain = (isset($_POST['stomachpain'])) ? 1 : 0;
        $sugarreactions = (isset($_POST['sugarreactions'])) ? 1 : 0;
        $tendtogainweight = (isset($_POST['tendtogainweight'])) ? 1 : 0;
        $tendtoloseweight = (isset($_POST['tendtoloseweight'])) ? 1 : 0;
        $toothdecayfrequentcavities = (isset($_POST['toothdecayfrequentcavities'])) ? 1 : 0;
        $triglycerideshigh = (isset($_POST['triglycerideshigh'])) ? 1 : 0;
        $troublesleeping = (isset($_POST['troublesleeping'])) ? 1 : 0;
        $tumoractive = (isset($_POST['tumoractive'])) ? 1 : 0;
        $tumorbenign = (isset($_POST['tumorbenign'])) ? 1 : 0;
        $tumorcancer = (isset($_POST['tumorcancer'])) ? 1 : 0;
        $tumorfatty = (isset($_POST['tumorfatty'])) ? 1 : 0;
        $ulcer = (isset($_POST['ulcer'])) ? 1 : 0;
        $urinationfrequent = (isset($_POST['urinationfrequent'])) ? 1 : 0;
        $urinationpainful = (isset($_POST['urinationpainful'])) ? 1 : 0;

        if($gender == 'M')
        {

          $impotence = (isset($_POST['impotence'])) ? 1 : 0;
          $prostateproblems = (isset($_POST['prostateproblems'])) ? 1 : 0;

          $breastsfibrocystic = 0;
          $breaststumors = 0;
          $cramps = 0;
          $cystsovarian = 0;        
          $menopause = 0;
          $menstruationdelayedstopped = 0;
          $periodsheavy = 0;
          $periodsirregular = 0;
          $periodslight = 0;
          $papsmearabnormal = 0;
          $sensitivetocaffeine = 0;
          $sensitivetoheat = 0;
          $vaginalyeastinfections = 0;
          $waterretention = 0;
  
  
        }
        else
        {
          $impotence = 0;
          $prostateproblems = 0;
          $breastsfibrocystic = (isset($_POST['breastsfibrocystic'])) ? 1 : 0;
          $breaststumors = (isset($_POST['breaststumors'])) ? 1 : 0;
          $cramps = (isset($_POST['cramps'])) ? 1 : 0;
          $cystsovarian = (isset($_POST['cystsovarian'])) ? 1 : 0;        
          $menopause = (isset($_POST['menopause'])) ? 1 : 0;
          $menstruationdelayedstopped = (isset($_POST['menstruationdelayedstopped'])) ? 1 : 0;
          $periodsheavy = (isset($_POST['periodsheavy'])) ? 1 : 0;
          $periodsirregular = (isset($_POST['periodsirregular'])) ? 1 : 0;
          $periodslight = (isset($_POST['periodslight'])) ? 1 : 0;
          $papsmearabnormal = (isset($_POST['papsmearabnormal'])) ? 1 : 0;
          $sensitivetocaffeine = (isset($_POST['sensitivetocaffeine'])) ? 1 : 0;
          $sensitivetoheat = (isset($_POST['sensitivetoheat'])) ? 1 : 0;
          $vaginalyeastinfections = (isset($_POST['vaginalyeastinfections'])) ? 1 : 0;
          $waterretention = (isset($_POST['waterretention'])) ? 1 : 0;
        }

        $symptomsheet = SymptomSheet::update( $sid, $acne, $adhd, $alcoholism, $allergieschemical, $allergiesdairy, $allergieseggs, $allergiesfish, $allergiesmold, $allergiesseasonal, $anemia, $anger, $angina, $anxiety, $arteriosclerosis, $asthma, $autism, $bipolar, $bloating, $bloodpressurehigh, $bloodpressurelow, $bodytemperaturecoldinwinter, $bodytemperaturelow, $brainfog, $breastsfibrocystic, $breaststumors, $bronchitis, $bursitis, $cantskipmeals, $cataracts, $cholesterolhigh, $chronicfatigue, $cirrhosis, $colitis, $confusion, $constipationoccasional, $constipationongoing, $cough, $cramps, $cravefats, $cravesaltyfoods, $cravestarches, $cravesweets, $cystsovarian, $delayeddevelopment, $depression, $diabetes1, $diabetes2, $diabetes3, $diarrheaoccasional, $diarrheaongoing, $diverticulitis, $dizziness, $drugaddiction, $dryskin, $dyslexia, $easybruising, $eczema, $emphysema, $excessiveplaqueonteeth, $fatigue, $fibromyalgia, $fissuresanal, $fistulas, $fractures, $gallstones, $gas, $glaucoma, $gout, $graves, $gumdisease, $hairloss, $headachesmigraine, $headachessinus, $headachestension, $heartattack, $heartbeatsskip, $heartpalpitations, $heartraterapid, $hemorrhoids, $hives, $hotflashes, $hungerexcessive, $hungernoappetite, $hyperkinesis, $hyperthyroidism, $hypoglycemia, $hypothyroidism, $impotence, $infectionsbladder, $infectionsfungalcandida, $infectionsfungalyeast, $infectionskidney, $infectionsviruses, $infertility, $inflammation, $irritability, $irritablebeforemeals, $jointpain, $jointstiffness, $kidneystones, $learningdisability, $lyme, $menieresdisease, $menopause, $menstruationdelayedstopped, $mentalretardation, $mindraces, $moodswings, $multiplesclerosis, $musclecramps, $musclepain, $muscleweakness, $neuritis, $neuropathy, $obsessivecompulsive, $osteoarthritis, $osteoporosis, $panicattacks, $papsmearabnormal, $parkinsonsdisease, $periodsheavy, $periodsirregular, $periodslight, $poorcirculation, $poormemory, $postnasaldrip, $premenstrualsyndrome, $prostateproblems, $psoriasis, $rheumatoidarthritis, $schizophrenia, $scleroderma, $seizures, $sensitivetocaffeine, $sensitivetoheat, $sinuscongestion, $slowwoundhealing, $smoking, $stomachpain, $sugarreactions, $tendtogainweight, $tendtoloseweight, $toothdecayfrequentcavities, $triglycerideshigh, $troublesleeping, $tumoractive, $tumorbenign, $tumorcancer, $tumorfatty, $ulcer, $urinationfrequent, $urinationpainful, $vaginalyeastinfections, $waterretention);
        $messageType = 'success';
        $message = 'Symptom Sheet successfully added. You can edit/review it by <a href="' . $GLOBALS['BASE_URL'] . 'coaches/editsymptomsheet/' . $sid .  '">click here.</a>';
        require_once('views/message.php');
      }
      else
      {
        // $symptomsheet = SymptomSheet::getById($sid);
        // $customer = Customer::findByCustomerId($symptomsheet->customer_id);
        // $fullname = $customer->lastname . ', ' . $customer->firstname . ' ' . $customer->middlename;
        // $gender = $customer->gender;

        require_once('views/coaches/editsymptomsheet.php');
      }

    }


}
?>