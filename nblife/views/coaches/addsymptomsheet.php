<form method="POST" action="">
    <div class="row">
        <br/>
        <div class="col-lg-4">
                Name: <?php echo $fullname; ?>   
        </div>
        <div class="col-lg-4">
                Date: <input type='date' id='createddate' name='createddate'  value='<?php echo date("Y-m-d"); ?>'><br/> 
        </div>
    </div>
    <br/>
    <div class="row">
        <div class="col-lg-3">
            <input type='checkbox' id='alchoholism' name='alcoholism'>Alcoholism<br/>
            <input type='checkbox' id='anemia' name='anemia'>Anemia<br/>
            <input type='checkbox' id='anxiety' name='anxiety'>Anxiety<br/>
            Arthritis:<br/>
            &nbsp;&nbsp;&nbsp;<input type='checkbox' id='osteoarthritis' name='osteoarthritis'>Osteo<br/>
            &nbsp;&nbsp;&nbsp;<input type='checkbox' id='rheumatoidarthritis' name='rheumatoidarthritis'>Rheumatoid<br/>
            <input type='checkbox' id='asthma' name='asthma'>Asthma<br/>
            <input type='checkbox' id='autism' name='autism'>Autism<br/>
            <input type='checkbox' id='adhd' name='adhd'>Attention Deficit ADD/ADHD<br/>
            <input type='checkbox' id='bipolar' name='bipolar'>Bipolar Disorder<br/>
            <input type='checkbox' id='bronchitis' name='bronchitis'>Bronchitis<br/>
            <input type='checkbox' id='chronicfatigue' name='chronicfatigue'>Chronic Fatigue<br/>
            <input type='checkbox' id='cirrhosis' name='cirrhosis'>Cirrhosis<br/>
            <input type='checkbox' id='colitis' name='colitis'>Colitis<br/>
            <br/>
            <input type='checkbox' id='delayeddevelopment' name='delayeddevelopment'>Delayed Development<br/>
            <input type='checkbox' id='depression' name='depression'>Depression<br/>
            <input type='checkbox' id='diabetes1' name='diabetes1'>Diabetes Type 1<br/>
            <input type='checkbox' id='diabetes2' name='diabetes2'>Diabetes Type 2<br/>
            <input type='checkbox' id='diabetes3' name='diabetes3'>Diabetes Type 3<br/>
            <input type='checkbox' id='diverticulitis' name='diverticulitis'>Diverticulitis<br/>
            <input type='checkbox' id='drugaddiction' name='drugaddiction'>Drug Addiction<br/>
            <input type='checkbox' id='dyslexia' name='dyslexia'>Dyslexia<br/>
            <input type='checkbox' id='eczema' name='eczema'>Eczema<br/>
            <input type='checkbox' id='emphysema' name='emphysema'>Emphysema<br/>
            Eye Disease:<br/>
            &nbsp;&nbsp;&nbsp;<input type='checkbox' id='cataracts' name='cataracts'>Cataracts<br/>
            &nbsp;&nbsp;&nbsp;<input type='checkbox' id='glaucoma' name='glaucoma'>Glaucoma<br/>
            <br/>
            <input type='checkbox' id='fibromyalgia' name='fibromyalgia'>Fibromyalgia<br/>
            <input type='checkbox' id='gout' name='gout'>Gout<br/>
            <input type='checkbox' id='graves' name='graves'>Graves<br/>
            <input type='checkbox' id='hemorrhoids' name='hemorrhoids'>Hemorrhoids<br/>
            <input type='checkbox' id='hyperkinesis' name='hyperkinesis'>Hyperkinesis<br/>
            <input type='checkbox' id='hyperthyroidism' name='hyperthyroidism'>Hyperthyroidism<br/>
            <input type='checkbox' id='hypoglycemia' name='hypoglycemia'>Hypoglycemia<br/>
            <input type='checkbox' id='hypothyroidism' name='hypothyroidism'>Hypothyroidism<br/>
            Headaches:<br/>
            &nbsp;&nbsp;&nbsp;<input type='checkbox' id='headachesmigraine' name='headachesmigraine'>Migraine<br/>
            &nbsp;&nbsp;&nbsp;<input type='checkbox' id='headachessinus' name='headachessinus'>Sinus<br/>
            &nbsp;&nbsp;&nbsp;<input type='checkbox' id='headachestension' name='headachestension'>Tension<br/>
            <input type='checkbox' id='inflammation' name='inflammation'>Inflammation<br/>
            <br/>
            <input type='checkbox' id='bloating' name='bloating'>Bloating<br/>
            <input type='checkbox' id='constipationoccasional' name='constipationoccasional'>Constipation, Occasional<br/>
            <input type='checkbox' id='constipationongoing' name='constipationongoing'>Constipation, Ongoing <br/>
            <input type='checkbox' id='diarrheaoccasional' name='diarrheaoccasional'>Diarrhea, Occasional<br/>
            <input type='checkbox' id='diarrheaongoing' name='diarrheaongoing'>Diarrhea, Ongoing<br/>
            <input type='checkbox' id='gas' name='gas'>Gas, Intestinal  <br/>
            <input type='checkbox' id='stomachpain' name='stomachnpain'>Stomach Pain<br/>

        </div>
        <div class="col-lg-3">
            <input type='checkbox' id='fissuresanal' name='fissuresanal'>Fissures, Anal<br/>
            <input type='checkbox' id='fistulas' name='fistulas'>Fistulas<br/>
            <input type='checkbox' id='gallstones' name='gallstones'>Gall Stones<br/>
            <input type='checkbox' id='ulcer' name='ulcer'>Ulcer<br/>
            <br/>
            <input type='checkbox' id='learningdisability' name='learningdisability'>Learning Disability<br/>
            <input type='checkbox' id='lyme' name='lyme'>Lyme<br/>
            <input type='checkbox' id='mentalretardation' name='mentalretardation'>Mental Retardation<br/>
            <input type='checkbox' id='menieresdisease' name='menieresdisease'>Meniere's Disease<br/>
            <input type='checkbox' id='multiplesclerosis' name='multiplesclerosis'>Multiple Sclerosis<br/>
            <br/>
            <input type='checkbox' id='neuritis' name='neuritis'>Neuritis<br/>
            <input type='checkbox' id='neuropathy' name='neuropathy'>Neuropathy<br/>
            <input type='checkbox' id='parkinsonsdisease' name='parkinsonsdisease'>Parkinson's Disease<br/>
            <input type='checkbox' id='psoriasis' name='psoriasis'>Psoriasis<br/>
            <input type='checkbox' id='schizophrenia' name='schizophrenia'>Schizophrenia<br/>
            <input type='checkbox' id='scleroderma' name='scleroderma'>Scleroderma<br/>
            <input type='checkbox' id='smoking' name='smoking'>Smoking<br/>
            Tumors:<br/>
            &nbsp;&nbsp;&nbsp;<input type='checkbox' id='tumoractive' name='tumoractive'>Active<br/>
            &nbsp;&nbsp;&nbsp;<input type='checkbox' id='tumorbenign' name='tumorbenign'>Benign<br/>
            &nbsp;&nbsp;&nbsp;<input type='checkbox' id='tumorcancer' name='tumorcancer'>Cancer<br/>
            &nbsp;&nbsp;&nbsp;<input type='checkbox' id='tumorfatty' name='tumorfatty'>Fatty (lipomas)<br/>
            <input type='checkbox' id='bursitis' name='bursitis'>Bursitis<br/>
            <input type='checkbox' id='fractures' name='fractures'>Fractures<br/>
            <input type='checkbox' id='jointpain' name='jointpain'>Joint Pain<br/>
            <input type='checkbox' id='jointstiffness' name='jointstiffness'>Joint Stiffness<br/>
            <input type='checkbox' id='osteoporosis' name='osteoporosis'>Osteoporosis<br/>
            <br/>
            <input type='checkbox' id='musclecramps' name='musclecramps'>Muscle Cramps<br/>
            <input type='checkbox' id='musclepain' name='musclepain'>Muscle Pain<br/>
            <input type='checkbox' id='muscleweakness' name='muscleweakness'>Muscle Weakness<br/>
            <br/>
            <input type='checkbox' id='cantskipmeals' name='cantskipmeals'>Can't Skip Meals<br/>
            <input type='checkbox' id='cravefats' name='cravefats'>Crave Fats<br/>
            <input type='checkbox' id='cravesaltyfoods' name='cravesaltyfoods'>Crave Salty Foods<br/>
            <input type='checkbox' id='cravestarches' name='cravestarches'>Crave Starches<br/>
            <input type='checkbox' id='cravesweets' name='cravesweets'>Crave Sweets<br/>
            <br/>
            <input type='checkbox' id='hungerexcessive' name='hungerexcessive'>Hunger , Excessive<br/>
            <input type='checkbox' id='hungernoappetite' name='hungernoappetite'>Hunger, No Appetite<br/>
            <input type='checkbox' id='irritablebeforemeals' name='irritablebeforemeals'>Irritable Before Meals<br/>
            <input type='checkbox' id='sugarreactions' name='sugarreactions'>Sugar Reactions<br/>
            <input type='checkbox' id='tendtogainweight' name='tendtogainweight'>Tend To Gain Weight<br/>
            <input type='checkbox' id='tendtoloseweight' name='tendtoloseweight'>Tend To Lose Weight<br/>
            <br/>
            <input type='checkbox' id='angina' name='angina'>Angina<br/>
            <input type='checkbox' id='arteriosclerosis' name='arteriosclerosis'>Arteriosclerosis<br/>
            <input type='checkbox' id='bloodpressurehigh' name='bloodpressurehigh'>Blood Pressure High<br/>
            <input type='checkbox' id='bloodpressurelow' name='bloodpressurelow'>Blood Pressure Low<br/>
            <input type='checkbox' id='cholesterolhigh' name='cholesterolhigh'>Cholesterol, High<br/>

        </div>
        <div class="col-lg-3">
            Allergies:<br>
            &nbsp;&nbsp;&nbsp;<input type='checkbox' id='allergiesdairy' name='allergiesdairy'>Dairy<br/>
            &nbsp;&nbsp;&nbsp;<input type='checkbox' id='allergieseggs' name='allergieseggs'>Eggs<br/>
            &nbsp;&nbsp;&nbsp;<input type='checkbox' id='allergiesfish' name='allergiesfish'>Fish<br/>
            &nbsp;&nbsp;&nbsp;<input type='checkbox' id='allergieschemical' name='allergieschemical'>Chemical<br/>
            &nbsp;&nbsp;&nbsp;<input type='checkbox' id='allergiesmold' name='allergiesmold'>Mold<br/>
            &nbsp;&nbsp;&nbsp;<input type='checkbox' id='allergiesseasonal' name='allergiesseasonal'>Seasonal<br/>
            <br/>
            <input type='checkbox' id='dizziness' name='dizziness'>Dizziness<br/>
            <input type='checkbox' id='easybruising' name='easybruising'>Easy Bruising<br/>
            <input type='checkbox' id='heartattack' name='heartattack'>Heart Attack<br/>
            <input type='checkbox' id='heartbeatsskip' name='heartbeatsskip'>Heart Beats Skip<br/>
            <input type='checkbox' id='heartpalpitations' name='heartpalpitations'>Heart Palpitations<br/>
            <input type='checkbox' id='heartraterapid' name='heartraterapid'>Heart Rate Rapid<br/>
            <input type='checkbox' id='poorcirculation' name='poorcirculation'>Poor Circulation<br/>
            <input type='checkbox' id='triglycerideshigh' name='triglycerideshigh'>Triglycerides, High<br/>
            <br/>
            <input type='checkbox' id='cough' name='cough'>Cough<br/>
            <input type='checkbox' id='postnasaldrip' name='postnasaldrip'>Post-nasal Drip<br/>
            <input type='checkbox' id='sinuscongestion' name='sinuscongestion'>Sinus Congestion<br/>
            <input type='checkbox' id='tinnitus' name='tinnitus'>Tinnitus<br/>
            <input type='checkbox' id='ringinginears' name='ringinginears'>Ringing in Ears<br/>

            <br/>
            <input type='checkbox' id='bodytemperaturelow' name='bodytemperaturelow'>Body Temperature Low<br/>
            <input type='checkbox' id='bodytemperaturecoldinwinter' name='bodytemperaturecoldinwinter'>Body Temperature Cold in Winter<br/>
            <input type='checkbox' id='dryskin' name='dryskin'>Dry Skin<br/>
            <br/>
            <input type='checkbox' id='acne' name='acne'>Acne<br/>
            Infections:<br/>
            &nbsp;&nbsp;&nbsp;<input type='checkbox' id='infectionsbladder' name='infectionsbladder'>Bladder<br/>
            &nbsp;&nbsp;&nbsp;<input type='checkbox' id='infectionskidney' name='infectionskidney'>Kidney<br/>
            &nbsp;&nbsp;&nbsp;<input type='checkbox' id='infectionsfungalcandida' name='infectionsfungalcandida'>Fungal/Candida<br/>
            &nbsp;&nbsp;&nbsp;<input type='checkbox' id='infectionsfungalyeast' name='infectionsfungalyeast'>Fungal/Yeast<br/>
            &nbsp;&nbsp;&nbsp;<input type='checkbox' id='infectionsviruses' name='infectionsviruses'>Ciruses<br/>
            <br/>
            <input type='checkbox' id='hairloss' name='hairloss'>Hairloss<br/>
            <input type='checkbox' id='hives' name='hives'>Hives<br/>
            <input type='checkbox' id='slowwoundhealing' name='slowwoundhealing'>Slow Wound Healing<br/>
            <br/>
            <input type='checkbox' id='excessiveplaqueonteeth' name='excessiveplaqueonteeth'>Excessive Plaque on Teeth<br/>
            <input type='checkbox' id='gumdisease' name='gumdisease'>Gum Disease<br/>
            <input type='checkbox' id='toothdecayfrequentcavities' name='toothdecayfrequentcavities'>Tooth Decay/Frequent Cavities<br/>
            <br/>

            <input type='checkbox' id='anger' name='anger'>Anger<br/>
            <input type='checkbox' id='brainfog' name='brainfog'>Brain Fog<br/>
            <input type='checkbox' id='confusion' name='confusion'>Confusion<br/>
            <input type='checkbox' id='irritability' name='irritability'>Irritability<br/>
            <input type='checkbox' id='mindraces' name='mindraces'>Mind Races<br/>
            <input type='checkbox' id='moodswings' name='moodswings'>Mood Swings<br/>
            <input type='checkbox' id='obsessivecompulsive' name='obsessivecompulsive'>Obsessive Compulsive<br/>
            <input type='checkbox' id='panicattacks' name='panicattacks'>Panic Attacks<br/>
            <input type='checkbox' id='poormemory' name='poormemory'>Poor Memory<br/>

        </div>
        <div class="col-lg-3">

            <input type='checkbox' id='fatigue' name='fatigue'>Fatigue<br/>
            <input type='checkbox' id='troublesleeping' name='troublesleeping'>Trouble Sleeping<br/>
            <input type='checkbox' id='seizures' name='seizures'>Seizures<br/>
            <br/>
            <input type='checkbox' id='kidneystones' name='kidneystones'>Kidney Stones<br/>
            <input type='checkbox' id='urinationfrequent' name='urinationfrequent'>Urination, Frequent<br/>
            <input type='checkbox' id='urinationpainful' name='urinationpainful'>Urination, Painful<br/>
            <input type='checkbox' id='waterretention' name='waterretention'>Water Retention<br/>

            <br/>

            <?php
            if($gender == 'M')
            {
                echo "For Men Only:<br/>";
                echo "<input type='checkbox' id='infertility' name='infertility'>Infertility<br/>";
                echo "<input type='checkbox' id='impotence' name='impotence'>Impotence<br/>";
                echo "<input type='checkbox' id='prostateproblems' name='prostateproblems'>Prostate Problems<br/>";

            }
            else
            {
                echo "For Women Only:<br/>";
                echo "<input type='checkbox' id='cramps' name='cramps'>Cramps<br/>";
                echo "<input type='checkbox' id='periodsheavy' name='periodsheavy'>Periods, Heavy<br/>";
                echo "<input type='checkbox' id='periodsirregular' name='periodsirregular'>Periods, Irregular<br/>";
                echo "<input type='checkbox' id='periodslight' name='periodslight'>Periods, Light<br/>";
                echo "<input type='checkbox' id='premenstrualsyndrome' name='premenstrualsyndrome'>Premenstrual Syndrome<br/>";
                echo "<br/> ";
                echo "<input type='checkbox' id='menstruationdelayedstopped' name='menstruationdelayedstopped'>Menstruation Delayed/Stopped<br/>";
                echo "<input type='checkbox' id='menopause' name='menopause'>Menopause<br/>";
                echo "<br/>";
                echo "<input type='checkbox' id='cystsovarian' name='cystsovarian'>Ovarian Cysts<br/>";
                echo "<input type='checkbox' id='papsmearabnormal' name='papsmearabnormal'>Abnormal Pap Smear<br/>";
                echo "<input type='checkbox' id='breastsfibrocystic' name='breastsfibrocystic'>Breasts, Fibrocystic<br/>";
                echo "<input type='checkbox' id='breaststumors' name='breaststumors'>Breasts, Tumors<br/>";
                echo "<input type='checkbox' id='infertility' name='infertility'>Infertility<br/>";
                echo "<input type='checkbox' id='vaginalyeastinfections' name='vaginalyeastinfections'>Vaginal Yeast Infections<br/>";
                echo "<br/>";
                echo "<input type='checkbox' id='hotflashes' name='hotflashes'>Hot Flashes<br/>";
                echo "<input type='checkbox' id='sensitivetoheat' name='sensitivetoheat'>Sensitive To Heat<br/>";
                echo "<input type='checkbox' id='sensitivetocaffeine' name='sensitivetocaffeine'>Sensitive To Caffeine<br/>";
    
            }

            ?>



        </div>
    </div>
    <br/>
    <br/>

    <div class="row">
        <div class="col-lg-2">
            <input name="Submit" id="Submit" value="Submit" class="btn btn-lg btn-success btn-block" type="submit">
        </div>
        <div class="col-lg-2">
            <input value="Cancel" class="btn btn-lg btn-primary btn-block" onclick="window.history.go(-1); return false;">
        </div>    

    </div>

</form>