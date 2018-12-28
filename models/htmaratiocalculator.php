<?php


  class HTMARatioCalculator
    {
        var $htma = '';
        var $oxidationtype = '';
        var $oxidationvalue =.001;
        var $autonomicnervoussystemstate = '';
        var $sodium = .001; //NA
        var $potassium = .001; //K
        var $magnesium = .001; //MG
        var $calcium = .001; //CA
        var $phosphorus = .001; //P
        var $zinc = .001; //ZN
        var $copper = .001;  //CU
        

        var $calciumdividedbymagnessium = .001;
        var $calciumdividedbymagnessiumidealratio = 6.67;
        var $calciumdividedbymagnessiumpercentage = .001;

        var $calciumdividedbypotassium = .001;
        var $calciumdividedbypotassiumidealratio = 4.00;
        var $calciumdividedbypotassiumpercentage = .001;

        var $sodiumdividedbymagnesium = .001;
        var $sodiumdividedbymagnesiumidealratio = 4.17;
        var $sodiumdividedbymagnesiumpercentage = .001;

        var $sodiumdividedbypotassium = .001;
        var $sodiumdividedbypotassiumidealratio = 2.50;
        var $sodiumdividedbypotassiumpercentage = .001;


        var $zincividedbycopper = .001;
        var $zincividedbycopperidealratio = 8.00; 
        var $zincividedbycopperpercentage = .001;

        var $calciumdividedbyphosphorus = .001;
        var $calciumdividedbyphosphorusidealratio = 2.50;
        var $calciumdividedbyphosphoruspercentage = .001;





        public function __construct($htmaresult) {
            $this->htma = $htmaresult;

            $this->setsodiumdividedbypotassium();
            $this->setcalciumdividedbypotassium();
            $this->setcalciumdividedbymagnessium();
            $this->setzincividedbycopper();
            $this->setcalciumdividedbyphosphorus();
            $this->setsodiumdividedbymagnesium();
            $this->setOxidationType();
            $this->setAutonomicNervousSystemState();
        }

        //  (Na/K)
        function setsodiumdividedbypotassium()
        {
            $this->sodiumdividedbypotassium = round($this->htma->sodium / $this->htma->potassium,2);
            $this->sodiumdividedbypotassiumpercentage = round($this->sodiumdividedbypotassium / $this->sodiumdividedbypotassiumidealratio,2) * 100;
        }

        // (Ca/K)
        function setcalciumdividedbypotassium()
        {
            $this->calciumdividedbypotassium = round($this->htma->calcium / $this->htma->potassium,2);
            $this->calciumdividedbypotassiumpercentage = round($this->calciumdividedbypotassium / $this->calciumdividedbypotassiumidealratio,2)* 100;
        }

        //  (Na/Mg)
        function setsodiumdividedbymagnesium()
        {
            $this->sodiumdividedbymagnesium = round($this->htma->sodium / $this->htma->magnesium,2);
            $this->sodiumdividedbymagnesiumpercentage = round($this->sodiumdividedbymagnesium / $this->sodiumdividedbymagnesiumidealratio,2)* 100;
        }

        // (CA/MG)
        function setcalciumdividedbymagnessium()
        {
            $this->calciumdividedbymagnessium = round($this->htma->calcium / $this->htma->magnesium,2);
            $this->calciumdividedbymagnessiumpercentage = round($this->calciumdividedbymagnessium / $this->calciumdividedbymagnessiumidealratio,2)* 100;
        }

        // (ZN/CU)
        function setzincividedbycopper()
        {
            $this->zincividedbycopper = round($this->htma->zinc / $this->htma->copper,2);
            $this->zincividedbycopperpercentage = round($this->zincividedbycopper / $this->zincividedbycopperidealratio,2)* 100;
        }

        // (CA/P)
        function setcalciumdividedbyphosphorus()
        {
            $this->calciumdividedbyphosphorus = round($this->htma->calcium / $this->htma->phosphorus,2);
            $this->calciumdividedbyphosphoruspercentage = round($this->calciumdividedbyphosphorus / $this->calciumdividedbyphosphorusidealratio,2)* 100;
        }

        // (Ca/P)
        function setAutonomicNervousSystemState()
        {

            if($this->calciumdividedbyphosphorus < 2.5)
            {
                $this->autonomicnervoussystemstate = 'SYMPATHETIC';
            }
            else
            {
                $this->autonomicnervoussystemstate = 'PARASYMPATHETIC';
            }
        }

        function setOxidationType()
        {
            $this->oxidationvalue = $this->calciumdividedbypotassium - $this->sodiumdividedbymagnesium;
            if($this->calciumdividedbypotassium < 4)
            {
                if($this->sodiumdividedbymagnesium >= 4.17)
                {
                    $this->oxidationtype = 'FAST';
                }
                else
                {
                    $this->oxidationvalue = $this->sodiumdividedbymagnesium - $this->calciumdividedbypotassium;
                    if($this->oxidationvalue>=0)
                    {
                        $this->oxidationtype = 'MIXED-FAST';
                    }
                    else
                    {
                        $this->oxidationtype = 'MIXED-SLOW';
                    }
                }
            }
            else
            {
                if($this->sodiumdividedbymagnesium >= 4.17)
                {
                    $this->oxidationvalue = $this->sodiumdividedbymagnesium - $this->calciumdividedbypotassium;
                    if($this->oxidationvalue>=0)
                    {
                        $this->oxidationtype = 'MIXED-FAST';
                    }
                    else
                    {
                        $this->oxidationtype = 'MIXED-SLOW';
                    }
                }
                else
                {
                    $this->oxidationtype = 'SLOW';
                }
            }
        }
            
    }



?>