<?php
date_default_timezone_set('America/Chicago');    
$GLOBALS['BASE_URL'] = 'http://nblife/';
//$GLOBALS['BASE_URL'] = 'https://nblife-alfredortegaiii28764.codeanyapp.com/';

$GLOBALS['KEY'] = '$6$rounds=5000$B@SeB@ll9675ChBrn)pepa$';
$GLOBALS['DB']= 'mysql:host=localhost;dbname=nblife';
$GLOBALS['DBUSER'] = 'root';
$GLOBALS['DBPASSWORD'] = '';
$GLOBALS['DEFAULT_PASSWORD'] = 'Ch@ngem3!';



//http://stackoverflow.com/questions/965611/forcing-access-to-php-incomplete-class-object-properties
function CastToClass($class, $object)
{
  return unserialize(preg_replace('/^O:\d+:"[^"]++"/', 'O:' . strlen($class) . ':"' . $class . '"', serialize($object)));
}


?>
