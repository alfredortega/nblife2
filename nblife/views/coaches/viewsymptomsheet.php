<form method="POST" action="">
    <div class="row">
        <div class="col-lg-4">
                Edit Symptoms for: <?php echo $fullname; ?>   
        </div>
    </div>
    <br/>
    <div class="row">
        <div class="col-lg-3">
            <input disabled type='checkbox' id='alchoholism' name='alcoholism' <?php echo ($symptomsheet->alcoholism == 1) ? "checked='checked'" : "" ;  ?>>Alcoholism<br/>
            <input disabled type='checkbox' id='anemia' name='anemia' <?php echo ($symptomsheet->anemia == 1) ? "checked='checked'" : "" ;  ?>>Anemia<br/>
            <input disabled type='checkbox' id='anxiety' name='anxiety' <?php echo ($symptomsheet->anxiety == 1) ? "checked='checked'" : "" ;  ?>>Anxiety<br/>
            Arthritis:<br/>
            &nbsp;&nbsp;&nbsp;<input disabled type='checkbox' id='osteoarthritis' name='osteoarthritis' <?php echo ($symptomsheet->osteoarthritis == 1) ? "checked='checked'" : "" ;  ?>>Osteo<br/>
            &nbsp;&nbsp;&nbsp;<input disabled type='checkbox' id='rheumatoidarthritis' name='rheumatoidarthritis' <?php echo ($symptomsheet->rheumatoidarthritis == 1) ? "checked='checked'" : "" ;  ?>>Rheumatoid<br/>
            <input disabled type='checkbox' id='asthma' name='asthma' <?php echo ($symptomsheet->asthma == 1) ? "checked='checked'" : "" ;  ?>>Asthma<br/>
            <input disabled type='checkbox' id='autism' name='autism' <?php echo ($symptomsheet->autism == 1) ? "checked='checked'" : "" ;  ?>>Autism<br/>
            <input disabled type='checkbox' id='adhd' name='adhd' <?php echo ($symptomsheet->adhd == 1) ? "checked='checked'" : "" ;  ?>>Attention Deficit ADD/ADHD<br/>
            <input disabled type='checkbox' id='bipolar' name='bipolar' <?php echo ($symptomsheet->bipolar == 1) ? "checked='checked'" : "" ;  ?>>Bipolar Disorder<br/>
            <input disabled type='checkbox' id='bronchitis' name='bronchitis' <?php echo ($symptomsheet->bronchitis == 1) ? "checked='checked'" : "" ;  ?>>Bronchitis<br/>
            <input disabled type='checkbox' id='chronicfatigue' name='chronicfatigue' <?php echo ($symptomsheet->chronicfatigue == 1) ? "checked='checked'" : "" ;  ?>>Chronic Fatigue<br/>
            <input disabled type='checkbox' id='cirrhosis' name='cirrhosis' <?php echo ($symptomsheet->cirrhosis == 1) ? "checked='checked'" : "" ;  ?>>Cirrhosis<br/>
            <input disabled type='checkbox' id='colitis' name='colitis' <?php echo ($symptomsheet->colitis == 1) ? "checked='checked'" : "" ;  ?>>Colitis<br/>
            <br/>
            <input disabled type='checkbox' id='delayeddevelopment' name='delayeddevelopment' <?php echo ($symptomsheet->delayeddevelopment == 1) ? "checked='checked'" : "" ;  ?>>Delayed Development<br/>
            <input disabled type='checkbox' id='depression' name='depression' <?php echo ($symptomsheet->depression == 1) ? "checked='checked'" : "" ;  ?>>Depression<br/>
            <input disabled type='checkbox' id='diabetes1' name='diabetes1' <?php echo ($symptomsheet->diabetes1 == 1) ? "checked='checked'" : "" ;  ?>>Diabetes Type 1<br/>
            <input disabled type='checkbox' id='diabetes2' name='diabetes2' <?php echo ($symptomsheet->diabetes2 == 1) ? "checked='checked'" : "" ;  ?>>Diabetes Type 2<br/>
            <input disabled type='checkbox' id='diabetes3' name='diabetes3' <?php echo ($symptomsheet->diabetes3 == 1) ? "checked='checked'" : "" ;  ?>>Diabetes Type 3<br/>
            <input disabled type='checkbox' id='diverticulitis' name='diverticulitis' <?php echo ($symptomsheet->diverticulitis == 1) ? "checked='checked'" : "" ;  ?>>Diverticulitis<br/>
            <input disabled type='checkbox' id='drugaddiction' name='drugaddiction' <?php echo ($symptomsheet->drugaddiction == 1) ? "checked='checked'" : "" ;  ?>>Drug Addiction<br/>
            <input disabled type='checkbox' id='dyslexia' name='dyslexia' <?php echo ($symptomsheet->dyslexia == 1) ? "checked='checked'" : "" ;  ?>>Dyslexia<br/>
            <input disabled type='checkbox' id='eczema' name='eczema' <?php echo ($symptomsheet->eczema == 1) ? "checked='checked'" : "" ;  ?>>Eczema<br/>
            <input disabled type='checkbox' id='emphysema' name='emphysema' <?php echo ($symptomsheet->emphysema == 1) ? "checked='checked'" : "" ;  ?>>Emphysema<br/>
            Eye Disease:<br/>
            &nbsp;&nbsp;&nbsp;<input disabled type='checkbox' id='cataracts' name='cataracts' <?php echo ($symptomsheet->cataracts == 1) ? "checked='checked'" : "" ;  ?>>Cataracts<br/>
            &nbsp;&nbsp;&nbsp;<input disabled type='checkbox' id='glaucoma' name='glaucoma' <?php echo ($symptomsheet->glaucoma == 1) ? "checked='checked'" : "" ;  ?>>Glaucoma<br/>
            <br/>
            <input disabled type='checkbox' id='fibromyalgia' name='fibromyalgia' <?php echo ($symptomsheet->fibromyalgia == 1) ? "checked='checked'" : "" ;  ?>>Fibromyalgia<br/>
            <input disabled type='checkbox' id='gout' name='gout' <?php echo ($symptomsheet->gout == 1) ? "checked='checked'" : "" ;  ?>>Gout<br/>
            <input disabled type='checkbox' id='graves' name='graves' <?php echo ($symptomsheet->graves == 1) ? "checked='checked'" : "" ;  ?>>Graves<br/>
            <input disabled type='checkbox' id='hemorrhoids' name='hemorrhoids' <?php echo ($symptomsheet->hemorrhoids == 1) ? "checked='checked'" : "" ;  ?>>Hemorrhoids<br/>
            <input disabled type='checkbox' id='hyperkinesis' name='hyperkinesis' <?php echo ($symptomsheet->hyperkinesis == 1) ? "checked='checked'" : "" ;  ?>>Hyperkinesis<br/>
            <input disabled type='checkbox' id='hyperthyroidism' name='hyperthyroidism' <?php echo ($symptomsheet->hyperthyroidism == 1) ? "checked='checked'" : "" ;  ?>>Hyperthyroidism<br/>
            <input disabled type='checkbox' id='hypoglycemia' name='hypoglycemia' <?php echo ($symptomsheet->hypoglycemia == 1) ? "checked='checked'" : "" ;  ?>>Hypoglycemia<br/>
            <input disabled type='checkbox' id='hypothyroidism' name='hypothyroidism' <?php echo ($symptomsheet->hypothyroidism == 1) ? "checked='checked'" : "" ;  ?>>Hypothyroidism<br/>
            Headaches:<br/>
            &nbsp;&nbsp;&nbsp;<input disabled type='checkbox' id='headachesmigraine' name='headachesmigraine' <?php echo ($symptomsheet->headachesmigraine == 1) ? "checked='checked'" : "" ;  ?>>Migraine<br/>
            &nbsp;&nbsp;&nbsp;<input disabled type='checkbox' id='headachessinus' name='headachessinus' <?php echo ($symptomsheet->headachessinus == 1) ? "checked='checked'" : "" ;  ?>>Sinus<br/>
            &nbsp;&nbsp;&nbsp;<input disabled type='checkbox' id='headachestension' name='headachestension' <?php echo ($symptomsheet->headachestension == 1) ? "checked='checked'" : "" ;  ?>>Tension<br/>
            <input disabled type='checkbox' id='inflammation' name='inflammation' <?php echo ($symptomsheet->inflammation == 1) ? "checked='checked'" : "" ;  ?>>Inflammation<br/>
            <br/>
            <input disabled type='checkbox' id='bloating' name='bloating' <?php echo ($symptomsheet->bloating == 1) ? "checked='checked'" : "" ;  ?>>Bloating<br/>
            <input disabled type='checkbox' id='constipationoccasional' name='constipationoccasional' <?php echo ($symptomsheet->constipationoccasional == 1) ? "checked='checked'" : "" ;  ?>>Constipation, Occasional<br/>
            <input disabled type='checkbox' id='constipationongoing' name='constipationongoing' <?php echo ($symptomsheet->constipationongoing == 1) ? "checked='checked'" : "" ;  ?>>Constipation, Ongoing <br/>
            <input disabled type='checkbox' id='diarrheaoccasional' name='diarrheaoccasional' <?php echo ($symptomsheet->diarrheaoccasional == 1) ? "checked='checked'" : "" ;  ?>>Diarrhea, Occasional<br/>
            <input disabled type='checkbox' id='diarrheaongoing' name='diarrheaongoing' <?php echo ($symptomsheet->diarrheaongoing == 1) ? "checked='checked'" : "" ;  ?>>Diarrhea, Ongoing<br/>
            <input disabled type='checkbox' id='gas' name='gas' <?php echo ($symptomsheet->gas == 1) ? "checked='checked'" : "" ;  ?>>Gas, Intestinal  <br/>
            <input disabled type='checkbox' id='stomachpain' name='stomachnpain' <?php echo ($symptomsheet->stomachnpain == 1) ? "checked='checked'" : "" ;  ?>>Stomach Pain<br/>

        </div>
        <div class="col-lg-3">
            <input disabled type='checkbox' id='fissuresanal' name='fissuresanal' <?php echo ($symptomsheet->fissuresanal == 1) ? "checked='checked'" : "" ;  ?>>Fissures, Anal<br/>
            <input disabled type='checkbox' id='fistulas' name='fistulas' <?php echo ($symptomsheet->fistulas == 1) ? "checked='checked'" : "" ;  ?>>Fistulas<br/>
            <input disabled type='checkbox' id='gallstones' name='gallstones' <?php echo ($symptomsheet->gallstones == 1) ? "checked='checked'" : "" ;  ?>>Gall Stones<br/>
            <input disabled type='checkbox' id='ulcer' name='ulcer' <?php echo ($symptomsheet->ulcer == 1) ? "checked='checked'" : "" ;  ?>>Ulcer<br/>
            <br/>
            <input disabled type='checkbox' id='learningdisability' name='learningdisability' <?php echo ($symptomsheet->learningdisability == 1) ? "checked='checked'" : "" ;  ?>>Learning Disability<br/>
            <input disabled type='checkbox' id='lyme' name='lyme' <?php echo ($symptomsheet->lyme == 1) ? "checked='checked'" : "" ;  ?>>Lyme<br/>
            <input disabled type='checkbox' id='mentalretardation' name='mentalretardation' <?php echo ($symptomsheet->mentalretardation == 1) ? "checked='checked'" : "" ;  ?>>Mental Retardation<br/>
            <input disabled type='checkbox' id='menieresdisease' name='menieresdisease' <?php echo ($symptomsheet->menieresdisease == 1) ? "checked='checked'" : "" ;  ?>>Meniere's Disease<br/>
            <input disabled type='checkbox' id='multiplesclerosis' name='multiplesclerosis' <?php echo ($symptomsheet->multiplesclerosis == 1) ? "checked='checked'" : "" ;  ?>>Multiple Sclerosis<br/>
            <br/>
            <input disabled type='checkbox' id='neuritis' name='neuritis' <?php echo ($symptomsheet->neuritis == 1) ? "checked='checked'" : "" ;  ?>>Neuritis<br/>
            <input disabled type='checkbox' id='neuropathy' name='neuropathy' <?php echo ($symptomsheet->neuropathy == 1) ? "checked='checked'" : "" ;  ?>>Neuropathy<br/>
            <input disabled type='checkbox' id='parkinsonsdisease' name='parkinsonsdisease' <?php echo ($symptomsheet->parkinsonsdisease == 1) ? "checked='checked'" : "" ;  ?>>Parkinson's Disease<br/>
            <input disabled type='checkbox' id='psoriasis' name='psoriasis' <?php echo ($symptomsheet->psoriasis == 1) ? "checked='checked'" : "" ;  ?>>Psoriasis<br/>
            <input disabled type='checkbox' id='schizophrenia' name='schizophrenia' <?php echo ($symptomsheet->schizophrenia == 1) ? "checked='checked'" : "" ;  ?>>Schizophrenia<br/>
            <input disabled type='checkbox' id='scleroderma' name='scleroderma' <?php echo ($symptomsheet->scleroderma == 1) ? "checked='checked'" : "" ;  ?>>Scleroderma<br/>
            <input disabled type='checkbox' id='smoking' name='smoking' <?php echo ($symptomsheet->smoking == 1) ? "checked='checked'" : "" ;  ?>>Smoking<br/>
            Tumors:<br/>
            &nbsp;&nbsp;&nbsp;<input disabled type='checkbox' id='tumoractive' name='tumoractive' <?php echo ($symptomsheet->tumoractive == 1) ? "checked='checked'" : "" ;  ?>>Active<br/>
            &nbsp;&nbsp;&nbsp;<input disabled type='checkbox' id='tumorbenign' name='tumorbenign' <?php echo ($symptomsheet->tumorbenign == 1) ? "checked='checked'" : "" ;  ?>>Benign<br/>
            &nbsp;&nbsp;&nbsp;<input disabled type='checkbox' id='tumorcancer' name='tumorcancer' <?php echo ($symptomsheet->tumorcancer == 1) ? "checked='checked'" : "" ;  ?>>Cancer<br/>
            &nbsp;&nbsp;&nbsp;<input disabled type='checkbox' id='tumorfatty' name='tumorfatty' <?php echo ($symptomsheet->tumorfatty == 1) ? "checked='checked'" : "" ;  ?>>Fatty (lipomas)<br/>
            <input disabled type='checkbox' id='bursitis' name='bursitis' <?php echo ($symptomsheet->bursitis == 1) ? "checked='checked'" : "" ;  ?>>Bursitis<br/>
            <input disabled type='checkbox' id='fractures' name='fractures' <?php echo ($symptomsheet->fractures == 1) ? "checked='checked'" : "" ;  ?>>Fractures<br/>
            <input disabled type='checkbox' id='jointpain' name='jointpain' <?php echo ($symptomsheet->jointpain == 1) ? "checked='checked'" : "" ;  ?>>Joint Pain<br/>
            <input disabled type='checkbox' id='jointstiffness' name='jointstiffness' <?php echo ($symptomsheet->jointstiffness == 1) ? "checked='checked'" : "" ;  ?>>Joint Stiffness<br/>
            <input disabled type='checkbox' id='osteoporosis' name='osteoporosis' <?php echo ($symptomsheet->osteoporosis == 1) ? "checked='checked'" : "" ;  ?>>Osteoporosis<br/>
            <br/>
            <input disabled type='checkbox' id='musclecramps' name='musclecramps' <?php echo ($symptomsheet->musclecramps == 1) ? "checked='checked'" : "" ;  ?>>Muscle Cramps<br/>
            <input disabled type='checkbox' id='musclepain' name='musclepain' <?php echo ($symptomsheet->musclepain == 1) ? "checked='checked'" : "" ;  ?>>Muscle Pain<br/>
            <input disabled type='checkbox' id='muscleweakness' name='muscleweakness' <?php echo ($symptomsheet->muscleweakness == 1) ? "checked='checked'" : "" ;  ?>>Muscle Weakness<br/>
            <br/>
            <input disabled type='checkbox' id='cantskipmeals' name='cantskipmeals' <?php echo ($symptomsheet->cantskipmeals == 1) ? "checked='checked'" : "" ;  ?>>Can't Skip Meals<br/>
            <input disabled type='checkbox' id='cravefats' name='cravefats' <?php echo ($symptomsheet->cravefats == 1) ? "checked='checked'" : "" ;  ?>>Crave Fats<br/>
            <input disabled type='checkbox' id='cravesaltyfoods' name='cravesaltyfoods' <?php echo ($symptomsheet->cravesaltyfoods == 1) ? "checked='checked'" : "" ;  ?>>Crave Salty Foods<br/>
            <input disabled type='checkbox' id='cravestarches' name='cravestarches' <?php echo ($symptomsheet->cravestarches == 1) ? "checked='checked'" : "" ;  ?>>Crave Starches<br/>
            <input disabled type='checkbox' id='cravesweets' name='cravesweets' <?php echo ($symptomsheet->cravesweets == 1) ? "checked='checked'" : "" ;  ?>>Crave Sweets<br/>
            <br/>
            <input disabled type='checkbox' id='hungerexcessive' name='hungerexcessive' <?php echo ($symptomsheet->hungerexcessive == 1) ? "checked='checked'" : "" ;  ?>>Hunger , Excessive<br/>
            <input disabled type='checkbox' id='hungernoappetite' name='hungernoappetite' <?php echo ($symptomsheet->hungernoappetite == 1) ? "checked='checked'" : "" ;  ?>>Hunger, No Appetite<br/>
            <input disabled type='checkbox' id='irritablebeforemeals' name='irritablebeforemeals' <?php echo ($symptomsheet->irritablebeforemeals == 1) ? "checked='checked'" : "" ;  ?>>Irritable Before Meals<br/>
            <input disabled type='checkbox' id='sugarreactions' name='sugarreactions' <?php echo ($symptomsheet->sugarreactions == 1) ? "checked='checked'" : "" ;  ?>>Sugar Ractions<br/>
            <input disabled type='checkbox' id='tendtogainweight' name='tendtogainweight' <?php echo ($symptomsheet->tendtogainweight == 1) ? "checked='checked'" : "" ;  ?>>Tend To Gain Weight<br/>
            <input disabled type='checkbox' id='tendtoloseweight' name='tendtoloseweight' <?php echo ($symptomsheet->tendtoloseweight == 1) ? "checked='checked'" : "" ;  ?>>Tend To Lose Weight<br/>
            <br/>
            <input disabled type='checkbox' id='angina' name='angina' <?php echo ($symptomsheet->angina == 1) ? "checked='checked'" : "" ;  ?>>Angina<br/>
            <input disabled type='checkbox' id='arteriosclerosis' name='arteriosclerosis' <?php echo ($symptomsheet->arteriosclerosis == 1) ? "checked='checked'" : "" ;  ?>>Arteriosclerosis<br/>
            <input disabled type='checkbox' id='bloodpressurehigh' name='bloodpressurehigh' <?php echo ($symptomsheet->bloodpressurehigh == 1) ? "checked='checked'" : "" ;  ?>>Blood Pressure High<br/>
            <input disabled type='checkbox' id='bloodpressurelow' name='bloodpressurelow' <?php echo ($symptomsheet->bloodpressurelow == 1) ? "checked='checked'" : "" ;  ?>>Blood Pressure Low<br/>
            <input disabled type='checkbox' id='cholesterolhigh' name='cholesterolhigh' <?php echo ($symptomsheet->cholesterolhigh == 1) ? "checked='checked'" : "" ;  ?>>Cholesterol, High<br/>

        </div>
        <div class="col-lg-3">
            Allergies:<br>
            &nbsp;&nbsp;&nbsp;<input disabled type='checkbox' id='allergiesdairy' name='allergiesdairy' <?php echo ($symptomsheet->allergiesdairy == 1) ? "checked='checked'" : "" ;  ?>>Dairy<br/>
            &nbsp;&nbsp;&nbsp;<input disabled type='checkbox' id='allergieseggs' name='allergieseggs' <?php echo ($symptomsheet->allergieseggs == 1) ? "checked='checked'" : "" ;  ?>>Eggs<br/>
            &nbsp;&nbsp;&nbsp;<input disabled type='checkbox' id='allergiesfish' name='allergiesfish' <?php echo ($symptomsheet->allergiesfish == 1) ? "checked='checked'" : "" ;  ?>>Fish<br/>
            &nbsp;&nbsp;&nbsp;<input disabled type='checkbox' id='allergieschemical' name='allergieschemical' <?php echo ($symptomsheet->allergieschemical == 1) ? "checked='checked'" : "" ;  ?>>Chemical<br/>
            &nbsp;&nbsp;&nbsp;<input disabled type='checkbox' id='allergiesmold' name='allergiesmold' <?php echo ($symptomsheet->allergiesmold == 1) ? "checked='checked'" : "" ;  ?>>Mold<br/>
            &nbsp;&nbsp;&nbsp;<input disabled type='checkbox' id='allergiesseasonal' name='allergiesseasonal' <?php echo ($symptomsheet->allergiesseasonal == 1) ? "checked='checked'" : "" ;  ?>>Seasonal<br/>
            <br/>
            <input disabled type='checkbox' id='dizziness' name='dizziness' <?php echo ($symptomsheet->dizziness == 1) ? "checked='checked'" : "" ;  ?>>Dizziness<br/>
            <input disabled type='checkbox' id='easybruising' name='easybruising' <?php echo ($symptomsheet->easybruising == 1) ? "checked='checked'" : "" ;  ?>>Easy Bruising<br/>
            <input disabled type='checkbox' id='heartattack' name='heartattack' <?php echo ($symptomsheet->heartattack == 1) ? "checked='checked'" : "" ;  ?>>Heart Attack<br/>
            <input disabled type='checkbox' id='heartbeatsskip' name='heartbeatsskip' <?php echo ($symptomsheet->heartbeatsskip == 1) ? "checked='checked'" : "" ;  ?>>Heart Beats Skip<br/>
            <input disabled type='checkbox' id='heartpalpitations' name='heartpalpitations' <?php echo ($symptomsheet->heartpalpitations == 1) ? "checked='checked'" : "" ;  ?>>Heart Palpitations<br/>
            <input disabled type='checkbox' id='heartraterapid' name='heartraterapid' <?php echo ($symptomsheet->heartraterapid == 1) ? "checked='checked'" : "" ;  ?>>Heart Rate Rapid<br/>
            <input disabled type='checkbox' id='poorcirculation' name='poorcirculation' <?php echo ($symptomsheet->poorcirculation == 1) ? "checked='checked'" : "" ;  ?>>Poor Circulation<br/>
            <input disabled type='checkbox' id='triglycerideshigh' name='triglycerideshigh' <?php echo ($symptomsheet->triglycerideshigh == 1) ? "checked='checked'" : "" ;  ?>>Triglycerides, High<br/>
            <br/>
            <input disabled type='checkbox' id='cough' name='cough' <?php echo ($symptomsheet->cough == 1) ? "checked='checked'" : "" ;  ?>>Cough<br/>
            <input disabled type='checkbox' id='postnasaldrip' name='postnasaldrip' <?php echo ($symptomsheet->postnasaldrip == 1) ? "checked='checked'" : "" ;  ?>>Post-nasal Drip<br/>
            <input disabled type='checkbox' id='sinuscongestion' name='sinuscongestion' <?php echo ($symptomsheet->sinuscongestion == 1) ? "checked='checked'" : "" ;  ?>>Sinus Congestion<br/>
            <br/>
            <input disabled type='checkbox' id='bodytemperaturelow' name='bodytemperaturelow' <?php echo ($symptomsheet->bodytemperaturelow == 1) ? "checked='checked'" : "" ;  ?>>Body Temperature Low<br/>
            <input disabled type='checkbox' id='bodytemperaturecoldinwinter' name='bodytemperaturecoldinwinter' <?php echo ($symptomsheet->bodytemperaturecoldinwinter == 1) ? "checked='checked'" : "" ;  ?>>Body Temperature Cold in Winter<br/>
            <input disabled type='checkbox' id='dryskin' name='dryskin' <?php echo ($symptomsheet->dryskin == 1) ? "checked='checked'" : "" ;  ?>>Dry Skin<br/>
            <br/>
            <input disabled type='checkbox' id='acne' name='acne' <?php echo ($symptomsheet->acne == 1) ? "checked='checked'" : "" ;  ?>>Acne<br/>
            Infections:<br/>
            &nbsp;&nbsp;&nbsp;<input disabled type='checkbox' id='infectionsbladder' name='infectionsbladder' <?php echo ($symptomsheet->infectionsbladder == 1) ? "checked='checked'" : "" ;  ?>>Bladder<br/>
            &nbsp;&nbsp;&nbsp;<input disabled type='checkbox' id='infectionskidney' name='infectionskidney' <?php echo ($symptomsheet->infectionskidney == 1) ? "checked='checked'" : "" ;  ?>>Kidney<br/>
            &nbsp;&nbsp;&nbsp;<input disabled type='checkbox' id='infectionsfungalcandida' name='infectionsfungalcandida' <?php echo ($symptomsheet->infectionsfungalcandida == 1) ? "checked='checked'" : "" ;  ?>>Fungal/Candida<br/>
            &nbsp;&nbsp;&nbsp;<input disabled type='checkbox' id='infectionsfungalyeast' name='infectionsfungalyeast' <?php echo ($symptomsheet->infectionsfungalyeast == 1) ? "checked='checked'" : "" ;  ?>>Fungal/Yeast<br/>
            &nbsp;&nbsp;&nbsp;<input disabled type='checkbox' id='infectionsviruses' name='infectionsviruses' <?php echo ($symptomsheet->infectionsviruses == 1) ? "checked='checked'" : "" ;  ?>>Ciruses<br/>
            <br/>
            <input disabled type='checkbox' id='hairloss' name='hairloss' <?php echo ($symptomsheet->hairloss == 1) ? "checked='checked'" : "" ;  ?>>Hairloss<br/>
            <input disabled type='checkbox' id='hives' name='hives' <?php echo ($symptomsheet->hives == 1) ? "checked='checked'" : "" ;  ?>>Hives<br/>
            <input disabled type='checkbox' id='slowwoundhealing' name='slowwoundhealing' <?php echo ($symptomsheet->slowwoundhealing == 1) ? "checked='checked'" : "" ;  ?>>Slow Wound Healing<br/>
            <br/>
            <input disabled type='checkbox' id='excessiveplaqueonteeth' name='excessiveplaqueonteeth' <?php echo ($symptomsheet->excessiveplaqueonteeth == 1) ? "checked='checked'" : "" ;  ?>>Excessive Plaque on Teeth<br/>
            <input disabled type='checkbox' id='gumdisease' name='gumdisease' <?php echo ($symptomsheet->gumdisease == 1) ? "checked='checked'" : "" ;  ?>>Gum Disease<br/>
            <input disabled type='checkbox' id='toothdecayfrequentcavities' name='toothdecayfrequentcavities' <?php echo ($symptomsheet->toothdecayfrequentcavities == 1) ? "checked='checked'" : "" ;  ?>>Tooth Decay/Frequent Cavities<br/>
            <br/>

            <input disabled type='checkbox' id='anger' name='anger' <?php echo ($symptomsheet->anger == 1) ? "checked='checked'" : "" ;  ?>>Anger<br/>
            <input disabled type='checkbox' id='brainfog' name='brainfog' <?php echo ($symptomsheet->brainfog == 1) ? "checked='checked'" : "" ;  ?>>Brain Fog<br/>
            <input disabled type='checkbox' id='confusion' name='confusion' <?php echo ($symptomsheet->confusion == 1) ? "checked='checked'" : "" ;  ?>>Confusion<br/>
            <input disabled type='checkbox' id='irritability' name='irritability' <?php echo ($symptomsheet->irritability == 1) ? "checked='checked'" : "" ;  ?>>Irritability<br/>
            <input disabled type='checkbox' id='mindraces' name='mindraces' <?php echo ($symptomsheet->mindraces == 1) ? "checked='checked'" : "" ;  ?>>Mind Races<br/>
            <input disabled type='checkbox' id='moodswings' name='moodswings' <?php echo ($symptomsheet->moodswings == 1) ? "checked='checked'" : "" ;  ?>>Mood Swings<br/>
            <input disabled type='checkbox' id='obsessivecompulsive' name='obsessivecompulsive' <?php echo ($symptomsheet->obsessivecompulsive == 1) ? "checked='checked'" : "" ;  ?>>Obsessive Compulsive<br/>
            <input disabled type='checkbox' id='panicattacks' name='panicattacks' <?php echo ($symptomsheet->panicattacks == 1) ? "checked='checked'" : "" ;  ?>>Panic Attacks<br/>
            <input disabled type='checkbox' id='poormemory' name='poormemory' <?php echo ($symptomsheet->poormemory == 1) ? "checked='checked'" : "" ;  ?>>Poor Memory<br/>

        </div>
        <div class="col-lg-3">

            <input disabled type='checkbox' id='fatigue' name='fatigue' <?php echo ($symptomsheet->fatigue == 1) ? "checked='checked'" : "" ;  ?>>Fatigue<br/>
            <input disabled type='checkbox' id='troublesleeping' name='troublesleeping' <?php echo ($symptomsheet->troublesleeping == 1) ? "checked='checked'" : "" ;  ?>>Trouble Sleeping<br/>
            <input disabled type='checkbox' id='seizures' name='seizures' <?php echo ($symptomsheet->seizures == 1) ? "checked='checked'" : "" ;  ?>>Seizures<br/>
            <br/>
            <input disabled type='checkbox' id='kidneystones' name='kidneystones' <?php echo ($symptomsheet->kidneystones == 1) ? "checked='checked'" : "" ;  ?>>Kidney Stones<br/>
            <input disabled type='checkbox' id='urinationfrequent' name='urinationfrequent' <?php echo ($symptomsheet->urinationfrequent == 1) ? "checked='checked'" : "" ;  ?>>Urination, Frequent<br/>
            <input disabled type='checkbox' id='urinationpainful' name='urinationpainful' <?php echo ($symptomsheet->urinationpainful == 1) ? "checked='checked'" : "" ;  ?>>Urination, Painful<br/>
            <br/>

            <?php
            if($gender == 'M')
            {
                echo "For Men Only:<br/>";
                if($symptomsheet->infertility == 1)
                {
                    echo " <input disabled  type='checkbox' id='infertility' name='infertility' checked='checked'>Infertility<br/>";
                }
                else
                {
                    echo " <input disabled  type='checkbox' id='infertility' name='infertility'>Infertility<br/>";
                }
                
                if($symptomsheet->impotence == 1)
                {
                    echo " <input disabled  type='checkbox' id='impotence' name='impotence' checked='checked'>Impotence<br/>";
                }
                else
                {
                    echo " <input disabled  type='checkbox' id='impotence' name='impotence'>Impotence<br/>";
                }
                
                if($symptomsheet->prostateproblems == 1)
                {
                    echo " <input disabled  type='checkbox' id='prostateproblems' name='prostateproblems' checked='checked'>Prostate Problems<br/>";
                }
                else
                {
                    echo " <input disabled  type='checkbox' id='prostateproblems' name='prostateproblems'>Prostate problems<br/>";
                }
            }
            else
            {
                echo "For Women Only:<br/>";
                if($symptomsheet->cramps == 1)
                {
                    echo " <input disabled type='checkbox' id='cramps' name='cramps' checked='checked'>Cramps<br/>";
                }
                else
                {
                    echo " <input disabled type='checkbox' id='cramps' name='cramps'>Cramps<br/>";
                }
                
                if($symptomsheet->periodsheavy == 1)
                {
                    echo " <input disabled type='checkbox' id='periodsheavy' name='periodsheavy' checked='checked'>Periods, Heavy<br/>";
                }
                else
                {
                    echo " <input disabled type='checkbox' id='periodsheavy' name='periodsheavy'>Periods, Heavy<br/>";
                }
                
                if($symptomsheet->periodsirregular == 1)
                {
                    echo " <input disabled type='checkbox' id='periodsirregular' name='periodsirregular' checked='checked'>Periods, Irregular<br/>";
                }
                else
                {
                    echo " <input disabled type='checkbox' id='periodsirregular' name='periodsirregular'>Periods, Irregular<br/>";
                }
                
                if($symptomsheet->periodslight == 1)
                {
                    echo " <input disabled type='checkbox' id='periodslight' name='periodslight' checked='checked'>Periods, Light<br/>";
                }
                else
                {
                    echo " <input disabled type='checkbox' id='periodslight' name='periodslight'>Periods, Light<br/>";
                }
                
                if($symptomsheet->premenstrualsyndrome == 1)
                {
                    echo " <input disabled type='checkbox' id='premenstrualsyndrome' name='premenstrualsyndrome' checked='checked'>Premenstrual Syndrome<br/>";
                }
                else
                {
                    echo " <input disabled type='checkbox' id='premenstrualsyndrome' name='premenstrualsyndrome'>Premenstrual Syndrome<br/>";
                }
                
                if($symptomsheet->waterretention == 1)
                {
                    echo " <input disabled type='checkbox' id='waterretention' name='waterretention' checked='checked'>Water Retention<br/>";
                }
                else
                {
                    echo " <input disabled type='checkbox' id='waterretention' name='waterretention'>Water Retention<br/>";
                }
                
                if($symptomsheet->menstruationdelayedstopped == 1)
                {
                    echo " <input disabled type='checkbox' id='menstruationdelayedstopped' name='menstruationdelayedstopped' checked='checked'>Menstruation Delayed/Stopped<br/>";
                }
                else
                {
                    echo " <input disabled type='checkbox' id='menstruationdelayedstopped' name='menstruationdelayedstopped'>Menstruation Delayed/Stopped<br/>";
                }
              
                if($symptomsheet->menopause == 1)
                {
                    echo " <input disabled type='checkbox' id='menopause' name='menopause' checked='checked'>Menopause<br/>";
                }
                else
                {
                    echo " <input disabled type='checkbox' id='menopause' name='menopause'>Menopause<br/>";
                }
                
                if($symptomsheet->cystsovarian == 1)
                {
                    echo " <input disabled type='checkbox' id='cystsovarian' name='cystsovarian' checked='checked'>Ovarian Cysts<br/>";
                }
                else
                {
                    echo " <input disabled type='checkbox' id='cystsovarian' name='cystsovarian'>Ovarian Cysts<br/>";
                }
                
                if($symptomsheet->papsmearabnormal == 1)
                {
                    echo " <input disabled type='checkbox' id='papsmearabnormal' name='papsmearabnormal' checked='checked'>Abnormal Papsmear<br/>";
                }
                else
                {
                    echo " <input disabled type='checkbox' id='papsmearabnormal' name='papsmearabnormal'>Abnormal Papsmear<br/>";
                }
                
                if($symptomsheet->breastsfibrocystic == 1)
                {
                    echo " <input disabled type='checkbox' id='breastsfibrocystic' name='breastsfibrocystic' checked='checked'>Breasts, Fibrocystic<br/>";
                }
                else
                {
                    echo " <input disabled type='checkbox' id='breastsfibrocystic' name='breastsfibrocystic'>Breasts, Fibrocystic<br/>";
                }
                
                if($symptomsheet->breaststumors == 1)
                {
                    echo " <input disabled type='checkbox' id='breaststumors' name='breaststumors' checked='checked'>Breasts, Tumors<br/>";
                }
                else
                {
                    echo " <input disabled type='checkbox' id='breaststumors' name='breaststumors'>Breasts, Tumors<br/>";
                }
                
                if($symptomsheet->infertility == 1)
                {
                    echo " <input disabled type='checkbox' id='infertility' name='infertility' checked='checked'>Infertility<br/>";
                }
                else
                {
                    echo " <input disabled type='checkbox' id='infertility' name='infertility'>Infertility<br/>";
                }
                
                if($symptomsheet->vaginalyeastinfections == 1)
                {
                    echo " <input disabled type='checkbox' id='vaginalyeastinfections' name='vaginalyeastinfections' checked='checked'>Vaginal Yeast Infections<br/>";
                }
                else
                {
                    echo " <input disabled type='checkbox' id='vaginalyeastinfections' name='vaginalyeastinfections'>Vaginal Yeast Infections<br/>";
                }
                
                if($symptomsheet->hotflashes == 1)
                {
                    echo " <input disabled type='checkbox' id='hotflashes' name='hotflashes' checked='checked'>Hot Flashes<br/>";
                }
                else
                {
                    echo " <input disabled type='checkbox' id='hotflashes' name='hotflashes'>Hot Flashes<br/>";
                }
                
                if($symptomsheet->sensitivetoheat == 1)
                {
                    echo " <input disabled type='checkbox' id='sensitivetoheat' name='sensitivetoheat' checked='checked'>Sensitive to Heat<br/>";
                }
                else
                {
                    echo " <input disabled type='checkbox' id='sensitivetoheat' name='sensitivetoheat'>Sensitive to Heat<br/>";
                }
                
                if($symptomsheet->sensitivetocaffeine == 1)
                {
                    echo " <input disabled type='checkbox' id='sensitivetocaffeine' name='sensitivetocaffeine' checked='checked'>Sensitive to Caffeine<br/>";
                }
                else
                {
                    echo " <input disabled type='checkbox' id='sensitivetocaffeine' name='sensitivetocaffeine'>Sensitive to Caffeine<br/>";
                }
                
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
    </div>

</form>
