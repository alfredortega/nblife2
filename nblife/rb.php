<?php
	include ('inc/global.php');
	include ('inc/rb.php');
	
	R::setup( $GLOBALS['DB'], $GLOBALS['DBUSER'], $GLOBALS['DBPASSWORD'] );

/**	
	R::freeze(true);
	$cust = R::load('customer',1);
	$symptomsheet=r::dispense('symptomsheet');
//	$symptomsheet-> = 'P';

	$symptomsheet->createddate = date('Y-m-d');
	$symptomsheet->customer = $cust;
	$symptomsheet->acne = 'P';
	$symptomsheet->alcoholism = 'P';
	$symptomsheet->allergieschemical = 'P';
	$symptomsheet->allergiesdairy = 'P';
	$symptomsheet->allergieseggs = 'P';
	$symptomsheet->allergiesfish = 'P';
	$symptomsheet->allergiesmold = 'P';
	$symptomsheet->allergiesseasonal = 'P';
	$symptomsheet->anemia = 'p';
	$symptomsheet->anger = 'P';
	$symptomsheet->angina = 'P';
	$symptomsheet->anxiety = 'P';
	$symptomsheet->arteriosclerosis = 'P';
	$symptomsheet->osteoarthritis = 'P';
	$symptomsheet->rheumatoidarthritis = 'P';
	$symptomsheet->asthma = 'P';
	$symptomsheet->autism = 'P';
	$symptomsheet->adhd = 'P';
	$symptomsheet->bipolar = 'P';
	
	$symptomsheet->bloating = 'P';
	
	$symptomsheet->bloodpressurehigh = 'P';
	$symptomsheet->bloodpressurelow = 'P';
	$symptomsheet->bodytemperaturecoldinwinter = 'P';
	$symptomsheet->bodytemperaturelow = 'P';
	$symptomsheet->brainfog = 'P';
	$symptomsheet->breastsfibrocystic = 'P';
	$symptomsheet->breaststumors = 'P';

	$symptomsheet->bronchitis = 'P';
	$symptomsheet->chronicfatigue= 'P';
	$symptomsheet->cirrhosis = 'P';
	$symptomsheet->colitis = 'P';


	$symptomsheet->bursitis = 'P';
	$symptomsheet->cantskipmeals = 'P';
	$symptomsheet->cholesterolhigh = 'P';
	$symptomsheet->confusion = 'P';
	
	$symptomsheet->constipationoccasional = 'P';
	$symptomsheet->constipationongoing = 'P';
	$symptomsheet->diarrheaoccasional = 'P';
	$symptomsheet->diarrheaongoing = 'P';
	$symptomsheet->gas = 'P';
	$symptomsheet->stomachpain = 'P';

	
	$symptomsheet->cough = 'P';
	$symptomsheet->cramps = 'P';
	$symptomsheet->cravefats = 'P';
	$symptomsheet->cravesaltyfoods = 'P';
	$symptomsheet->cravestarches = 'P';
	$symptomsheet->cravesweets = 'P';
	$symptomsheet->cystsovarian = 'P';
	$symptomsheet->delayeddevelopment = 'P';
	$symptomsheet->depression = 'P';
	$symptomsheet->diabetes1 = 'P';
	$symptomsheet->diabetes2 = 'P';
	$symptomsheet->diabetes3 = 'P';
	$symptomsheet->diverticulitis = 'P';
	
	
	
	$symptomsheet->dizziness = 'P';
	$symptomsheet->dryskin = 'P';
	
	$symptomsheet->drugaddiction = 'P';
	$symptomsheet->dyslexia = 'P';
	$symptomsheet->eczema = 'P';
	$symptomsheet->emphysema = 'P';
	$symptomsheet->cataracts = 'P';
	$symptomsheet->glaucoma = 'P';
	
	
	
	$symptomsheet->easybruising = 'P';
	$symptomsheet->excessiveplaqueonteeth = 'P';
	$symptomsheet->fatigue = 'P';
	$symptomsheet->fibromyalgia = 'P';
	$symptomsheet->fissuresanal = 'P';
	$symptomsheet->fistulas = 'P';
	$symptomsheet->fractures = 'P';
	$symptomsheet->gallstones = 'P';
	$symptomsheet->gout = 'P';
	$symptomsheet->graves = 'P';
	$symptomsheet->gumdisease = 'P';
	$symptomsheet->hairloss = 'P';
	$symptomsheet->headachesmigraine = 'P';
	$symptomsheet->headachessinus = 'P';
	$symptomsheet->headachestension = 'P';
	
	$symptomsheet->heartattack = 'P';

	$symptomsheet->heartbeatsskip = 'P';
	$symptomsheet->heartpalpitations = 'P';
	$symptomsheet->heartraterapid = 'P';
	$symptomsheet->hemorrhoids = 'P';
	$symptomsheet->hives = 'P';
	$symptomsheet->hotflashes = 'P';
	$symptomsheet->hungerexcessive = 'P';
	$symptomsheet->hungernoappetite = 'P';
	$symptomsheet->hyperkinesis = 'P';
	$symptomsheet->hyperthyroidism = 'P';
	$symptomsheet->hypoglycemia = 'P';
	$symptomsheet->hypothyroidism = 'P';
	$symptomsheet->impotence = 'P';
	$symptomsheet->infectionsbladder = 'P';
	$symptomsheet->infectionsfungalcandida = 'P';
	$symptomsheet->infectionsfungalyeast = 'P';
	$symptomsheet->infectionskidney = 'P';
	$symptomsheet->infectionsviruses = 'P';
	$symptomsheet->infertility = 'P';
	$symptomsheet->inflammation = 'P';
	$symptomsheet->irritability = 'P';
	$symptomsheet->irritablebeforemeals = 'P';
	$symptomsheet->jointpain = 'P';
	$symptomsheet->jointstiffness = 'P';
	$symptomsheet->kidneystones = 'P';
	$symptomsheet->learningdisability = 'P';
	$symptomsheet->lyme = 'P';
	$symptomsheet->menieresdisease = 'P';
	$symptomsheet->menopause = 'P';
	$symptomsheet->menstruationdelayedstopped = 'P';
	$symptomsheet->mentalretardation = 'P';
	$symptomsheet->mindraces = 'P';
	$symptomsheet->moodswings = 'P';
	$symptomsheet->multiplesclerosis = 'P';
	$symptomsheet->musclecramps = 'P';
	$symptomsheet->musclepain = 'P';
	$symptomsheet->muscleweakness = 'P';
	$symptomsheet->neuritis = 'P';
	$symptomsheet->neuropathy = 'P';
	$symptomsheet->obsessivecompulsive = 'P';
	$symptomsheet->osteoporosis = 'P';
	$symptomsheet->panicattacks = 'P';
	$symptomsheet->papsmearabnormal = 'P';
	$symptomsheet->parkinsonsdisease = 'P';
	$symptomsheet->periodsheavy = 'P';
	$symptomsheet->periodsirregular = 'P';
	$symptomsheet->periodslight = 'P';
	$symptomsheet->poorcirculation = 'P';
	$symptomsheet->poormemory = 'P';
	$symptomsheet->postnasaldrip = 'P';
	$symptomsheet->premenstrualsyndrome = 'P';
	$symptomsheet->prostateproblems = 'P';
	$symptomsheet->psoriasis = 'P';
	$symptomsheet->schizophrenia = 'P';
	$symptomsheet->scleroderma = 'P';
	$symptomsheet->seizures = 'P';
	$symptomsheet->sensitivetocaffeine = 'P';
	$symptomsheet->sensitivetoheat = 'P';
	$symptomsheet->sinuscongestion = 'P';
	$symptomsheet->slowwoundhealing = 'P';
	$symptomsheet->smoking = 'P';
	$symptomsheet->sugarreactions = 'P';
	$symptomsheet->tendtogainweight = 'P';
	$symptomsheet->tendtoloseweight = 'P';
	$symptomsheet->toothdecayfrequentcavities = 'P';
	$symptomsheet->triglycerideshigh = 'P';
	$symptomsheet->troublesleeping = 'P';
	
	$symptomsheet->tumoractive = 'P';
	$symptomsheet->tumorbenign = 'P';		
	$symptomsheet->tumorcancer = 'P';
	$symptomsheet->tumorfatty = 'P';		
	
	
	$symptomsheet->ulcer = 'P';
	$symptomsheet->urinationfrequent = 'P';
	$symptomsheet->urinationpainful = 'P';
	$symptomsheet->vaginalyeastinfections = 'P';
	$symptomsheet->waterretention = 'P';


	
	R::store($symptomsheet);




	$cust = R::load('customer',1);
	$htma = R::dispense('htmaresult');
	
	$htma->labnumber = 865486;
	$htma->labdate = date('Y-m-d');
	$htma->customer = $cust;
	
	$htma->calcium = 0.01;
	$htma->magnesium = 0.01;
	$htma->sodium = 0.01;
	$htma->potassium = 0.01;
	$htma->iron = 0.01;
	$htma->copper = 0.01;
	$htma->manganese = 0.01;
	$htma->zinc = 0.01;
	$htma->chromium = 0.01;
	$htma->selenium = 0.01;
	$htma->phosphorus = 0.01;

	//toxic minerals
	$htma->lead = 0.01;
	$htma->mercury = 0.01;
	$htma->cadmium = 0.01;
	$htma->arsenic = 0.01;
	$htma->aluminum = 0.01;

	//additional minerals
	$htma->nickel = 0.01;
	$htma->cobalt = 0.01;
	$htma->molybdenum = 0.01;
	$htma->lithium = 0.01;
	$htma->boron = 0.01;	
	
	
	R::store($htma);


















//	R::freeze (TRUE);


	
	$user1 = R::dispense('user');
	$user1->username = 'alfredortegaiii@gmail.com';
	$user1->password = 'rmn109NIV!';
	$user1id = '';
	try	{
		$user1id = R::store($user1);
	}
	catch(Exception $err)
	{
		echo $err->getMessage();	
	}


	$adminrole = R::dispense('role'); 
	$adminrole->name = 'Admin';
	$adminid = R::store($adminrole);
	
	$coachrole = R::dispense('role'); 
	$coachrole->name = 'Coach';
	$coachroleid = R::store($coachrole);

	$customerrole = R::dispense('role'); 
	$customerrole->name = 'Customer';
	$customerid = R::store($customerrole);

	$director = R::dispense('role'); 
	$director->name = 'Director';
	$directorid = R::store($director);
	
	$srcoachrole = R::dispense('role'); 
	$srcoachrole->name = 'Sr. Coach';
	$srcoachroleid = R::store($srcoachrole);

	
	$al = R::dispense('user');
	$al->username = 'alfredortegaiii@gmail.com';
	$al->password = 'rmn109NIV!';
	$alid = '';
	try	{
		$alid = R::store($al);
	}
	catch(Exception $err)
	{
		echo $err->getMessage();	
	}
	
	$leslie = R::dispense('user');
	$leslie->username = 'leslie.b@thetopdog.com';
	$leslie->password = 'rmn109NIV#';
	$leslieid = '';
	try	{
		$leslieid = R::store($leslie);
	}
	catch(Exception $err)
	{
		echo $err->getMessage();	
	}
	
	$coach = R::dispense('coach');
	$coach->email = 'leslie.b@thetopdog.com';
	$coach->phone = '816-885-0098';
	$coach->firstname = 'Leslie';
	$coach->middlename = '';
	$coach->lastname = 'Brown';
	$coach->user = $leslie;
	$coachid = R::store($coach);


	
	
	$customer = R::dispense('customer');
	$customer->dateofbirth = '1974/06/30';
	$customer->salutation = 'Mr.';
	$customer->gender = 'M';
	$customer->firstname = 'Alfred';
	$customer->middlename = '';
	$customer->lastname = 'Ortega III';
	$customer->streetaddress = '2821 NE Marywood Lane';
	$customer->streetaddress2 = '';
	$customer->city = 'Lees Summit';
	$customer->state = 'MO';
	$customer->zipcode= '64086-3906';
	$customer->homephone = '816-820-1578';
	$customer->workphone = '816-225-8841';
	$customer->height = "5'8";
	$customer->weight = '165';
	$customer->user = $al;
	$customer->coach = $coach;
	R::store($customer);


	$userrole = R::dispense('userrole');
	$userrole->userid = $leslieid;
	$userrole->roleid = $coachroleid;
	R::store($userrole);
	
	$userrole1 = R::dispense('userrole');
	$userrole1->userid = $alid;
	$userrole1->roleid = $adminid;
	R::store($userrole1);
	
	$userrole2 = R::dispense('userrole');
	$userrole2->userid = $alid;
	$userrole2->roleid = $customerrole->id;
	R::store($userrole2);


//find all the roles for a user (1 in this example)

	$testUser = 1;
	$user = R::load('user', $testUser);
	$userid = $user->id;
	
	$userroles = R::find('userrole', 'userid = ?', [$userid]);
	$Curr_Roles = [];
	foreach($userroles as $userrole)
	{
		$role = R::load('role',$userrole->roleid);
		array_push($Curr_Roles,$role);
	}
	
	foreach($Curr_Roles as $role)
	{
		echo $role->name . '<br/>';
	}

	
	$coach = R::load('coach',1);
	$f = reset($coach->ownCustomerList);
	$l = end($coach->ownCustomerList);
	foreach($coach->ownCustomerList as $customer)
	{
		echo $customer->id .  ' ' . $customer->firstname;
	}
	
	
*/	

$users = R::findAll('user');
$password = 'rmn109NIV';
$enc = crypt($password,$GLOBALS['KEY']);
foreach($users as $user)
{
	$user->password = $enc;
	R::store($user);
}
?>