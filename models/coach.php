<?php
    class Coach
    {
        public function __construct() 
        {
        }        

        public static function findAllCustomers()
        {
            $beans = R::findMulti('customer,user',
            'select customer.*, user.* from customer, user where
             user.id = customer.user_id
            and user.isactive = 1');
            $customers = $beans['customer'];
            return $customers;
        }

    
        public static function findCustomersByCoach($userid)
        {
            $coach = R::FindOne('coach','user_id = ?',[$userid]);
            $beans = R::findMulti('customer,user',
            'select customer.*, user.* from customer , user
            where user.id = customer.user_id and 
            user.isactive = 1 and customer.coach_id = ?',[$coach->id]);
            $customers = $beans['customer'];
            return $customers;
        }

        public static function addCustomer($email, $dateofbirth, $salutation, $gender, $firstname, $middlename, $lastname, $streetaddress, $streetaddress2, $city, $state, $zipcode, $homephone, $workphone, $height, $weight, $userid)
        {
            $user = User::insert($email);
            $coach = R::FindOne('coach','user_id = ?',[$userid]);
            $customer = R::dispense('customer');
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
            $customer->user = $user;
            $customer->coach = $coach;      
            R::store($customer);     
            return $customer; 
        }

        public static function updateCustomer($id,$dateofbirth, $salutation, $gender, $firstname, $middlename, $lastname, $streetaddress, $streetaddress2, $city, $state, $zipcode, $homephone, $workphone, $height, $weight, $userid)
        {
            $coach = R::FindOne('coach','user_id = ?',[$userid]);
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
            $customer->coach = $coach;      
            R::store($customer);     
            return $customer; 
        }

        
    }


?>