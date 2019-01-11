<?php
    class SymptomSheet
    {

        public static function getById($sid)
        {
            return R::load('symptomsheet',$sid);
        }

        public static function getByClientId($client_id)
        {
            return R::getAssoc( "SELECT id, id as recordid, createddate, client_id FROM `symptomsheet` where client_id = ?  order by createddate DESC",[$client_id] );
        }


        public static function delete($sid)
        {
            R::hunt('symptomsheet','id = ?',[$sid]);
        }

        public static function insert( $cid, $createddate, $acne, $adhd, $alcoholism, $allergieschemical, $allergiesdairy, $allergieseggs, $allergiesfish, $allergiesmold, $allergiesseasonal, $anemia, $anger, $angina, $anxiety, $arteriosclerosis, $asthma, $autism, $bipolar, $bloating, $bloodpressurehigh, $bloodpressurelow, $bodytemperaturecoldinwinter, $bodytemperaturelow, $brainfog, $breastsfibrocystic, $breaststumors, $bronchitis, $bursitis, $cantskipmeals, $cataracts, $cholesterolhigh, $chronicfatigue, $cirrhosis, $colitis, $confusion, $constipationoccasional, $constipationongoing, $cough, $cramps, $cravefats, $cravesaltyfoods, $cravestarches, $cravesweets, $cystsovarian, $delayeddevelopment, $depression, $diabetes1, $diabetes2, $diabetes3, $diarrheaoccasional, $diarrheaongoing, $diverticulitis, $dizziness, $drugaddiction, $dryskin, $dyslexia, $easybruising, $eczema, $emphysema, $excessiveplaqueonteeth, $fatigue, $fibromyalgia, $fissuresanal, $fistulas, $fractures, $gallstones, $gas, $glaucoma, $gout, $graves, $gumdisease, $hairloss, $headachesmigraine, $headachessinus, $headachestension, $heartattack, $heartbeatsskip, $heartpalpitations, $heartraterapid, $hemorrhoids, $hives, $hotflashes, $hungerexcessive, $hungernoappetite, $hyperkinesis, $hyperthyroidism, $hypoglycemia, $hypothyroidism, $impotence, $infectionsbladder, $infectionsfungalcandida, $infectionsfungalyeast, $infectionskidney, $infectionsviruses, $infertility, $inflammation, $irritability, $irritablebeforemeals, $jointpain, $jointstiffness, $kidneystones, $learningdisability, $lyme, $menieresdisease, $menopause, $menstruationdelayedstopped, $mentalretardation, $mindraces, $moodswings, $multiplesclerosis, $musclecramps, $musclepain, $muscleweakness, $neuritis, $neuropathy, $obsessivecompulsive, $osteoarthritis, $osteoporosis, $panicattacks, $papsmearabnormal, $parkinsonsdisease, $periodsheavy, $periodsirregular, $periodslight, $poorcirculation, $poormemory, $postnasaldrip, $premenstrualsyndrome, $prostateproblems, $psoriasis, $rheumatoidarthritis, $schizophrenia, $scleroderma, $seizures, $sensitivetocaffeine, $sensitivetoheat, $sinuscongestion, $slowwoundhealing, $smoking, $stomachpain, $sugarreactions, $tendtogainweight, $tendtoloseweight, $toothdecayfrequentcavities, $triglycerideshigh, $troublesleeping, $tumoractive, $tumorbenign, $tumorcancer, $tumorfatty, $ulcer, $urinationfrequent, $urinationpainful, $vaginalyeastinfections, $waterretention, $tinnitus,$ringinginears)
        {
            $client = R::load('client',$cid);
            $symptomsheet = R::dispense('symptomsheet');
            $symptomsheet->client = $client;
            $symptomsheet->createddate = $createddate;

            $symptomsheet->acne = $acne;
            $symptomsheet->adhd = $adhd;
            $symptomsheet->alcoholism = $alcoholism;
            $symptomsheet->allergieschemical = $allergieschemical;
            $symptomsheet->allergiesdairy = $allergiesdairy;
            $symptomsheet->allergieseggs = $allergieseggs;
            $symptomsheet->allergiesfish = $allergiesfish;
            $symptomsheet->allergiesmold = $allergiesmold;
            $symptomsheet->allergiesseasonal = $allergiesseasonal;
            $symptomsheet->anemia = $anemia;
            $symptomsheet->anger = $anger;
            $symptomsheet->angina = $angina;
            $symptomsheet->anxiety = $anxiety;
            $symptomsheet->arteriosclerosis = $arteriosclerosis;
            $symptomsheet->asthma = $asthma;
            $symptomsheet->autism = $autism;
            $symptomsheet->bipolar = $bipolar;
            $symptomsheet->bloating = $bloating;
            $symptomsheet->bloodpressurehigh = $bloodpressurehigh;
            $symptomsheet->bloodpressurelow = $bloodpressurelow;
            $symptomsheet->bodytemperaturecoldinwinter = $bodytemperaturecoldinwinter;
            $symptomsheet->bodytemperaturelow = $bodytemperaturelow;
            $symptomsheet->brainfog = $brainfog;
            $symptomsheet->breastsfibrocystic = $breastsfibrocystic;
            $symptomsheet->breaststumors = $breaststumors;
            $symptomsheet->bronchitis = $bronchitis;
            $symptomsheet->bursitis = $bursitis;
            $symptomsheet->cantskipmeals = $cantskipmeals;
            $symptomsheet->cataracts = $cataracts;
            $symptomsheet->cholesterolhigh = $cholesterolhigh;
            $symptomsheet->chronicfatigue = $chronicfatigue;
            $symptomsheet->cirrhosis = $cirrhosis;
            $symptomsheet->colitis = $colitis;
            $symptomsheet->confusion = $confusion;
            $symptomsheet->constipationoccasional = $constipationoccasional;
            $symptomsheet->constipationongoing = $constipationongoing;
            $symptomsheet->cough = $cough;
            $symptomsheet->cramps = $cramps;
            $symptomsheet->cravefats = $cravefats;
            $symptomsheet->cravesaltyfoods = $cravesaltyfoods;
            $symptomsheet->cravestarches = $cravestarches;
            $symptomsheet->cravesweets = $cravesweets;
            $symptomsheet->cystsovarian = $cystsovarian;
            $symptomsheet->delayeddevelopment = $delayeddevelopment;
            $symptomsheet->depression = $depression;
            $symptomsheet->diabetes1 = $diabetes1;
            $symptomsheet->diabetes2 = $diabetes2;
            $symptomsheet->diabetes3 = $diabetes3;
            $symptomsheet->diarrheaoccasional = $diarrheaoccasional;
            $symptomsheet->diarrheaongoing = $diarrheaongoing;
            $symptomsheet->diverticulitis = $diverticulitis;
            $symptomsheet->dizziness = $dizziness;
            $symptomsheet->drugaddiction = $drugaddiction;
            $symptomsheet->dryskin = $dryskin;
            $symptomsheet->dyslexia = $dyslexia;
            $symptomsheet->easybruising = $easybruising;
            $symptomsheet->eczema = $eczema;
            $symptomsheet->emphysema = $emphysema;
            $symptomsheet->excessiveplaqueonteeth = $excessiveplaqueonteeth;
            $symptomsheet->fatigue = $fatigue;
            $symptomsheet->fibromyalgia = $fibromyalgia;
            $symptomsheet->fissuresanal = $fissuresanal;
            $symptomsheet->fistulas = $fistulas;
            $symptomsheet->fractures = $fractures;
            $symptomsheet->gallstones = $gallstones;
            $symptomsheet->gas = $gas;
            $symptomsheet->glaucoma = $glaucoma;
            $symptomsheet->gout = $gout;
            $symptomsheet->graves = $graves;
            $symptomsheet->gumdisease = $gumdisease;
            $symptomsheet->hairloss = $hairloss;
            $symptomsheet->headachesmigraine = $headachesmigraine;
            $symptomsheet->headachessinus = $headachessinus;
            $symptomsheet->headachestension = $headachestension;
            $symptomsheet->heartattack = $heartattack;
            $symptomsheet->heartbeatsskip = $heartbeatsskip;
            $symptomsheet->heartpalpitations = $heartpalpitations;
            $symptomsheet->heartraterapid = $heartraterapid;
            $symptomsheet->hemorrhoids = $hemorrhoids;
            $symptomsheet->hives = $hives;
            $symptomsheet->hotflashes = $hotflashes;
            $symptomsheet->hungerexcessive = $hungerexcessive;
            $symptomsheet->hungernoappetite = $hungernoappetite;
            $symptomsheet->hyperkinesis = $hyperkinesis;
            $symptomsheet->hyperthyroidism = $hyperthyroidism;
            $symptomsheet->hypoglycemia = $hypoglycemia;
            $symptomsheet->hypothyroidism = $hypothyroidism;
            $symptomsheet->impotence = $impotence;
            $symptomsheet->infectionsbladder = $infectionsbladder;
            $symptomsheet->infectionsfungalcandida = $infectionsfungalcandida;
            $symptomsheet->infectionsfungalyeast = $infectionsfungalyeast;
            $symptomsheet->infectionskidney = $infectionskidney;
            $symptomsheet->infectionsviruses = $infectionsviruses;
            $symptomsheet->infertility = $infertility;
            $symptomsheet->inflammation = $inflammation;
            $symptomsheet->irritability = $irritability;
            $symptomsheet->irritablebeforemeals = $irritablebeforemeals;
            $symptomsheet->jointpain = $jointpain;
            $symptomsheet->jointstiffness = $jointstiffness;
            $symptomsheet->kidneystones = $kidneystones;
            $symptomsheet->learningdisability = $learningdisability;
            $symptomsheet->lyme = $lyme;
            $symptomsheet->menieresdisease = $menieresdisease;
            $symptomsheet->menopause = $menopause;
            $symptomsheet->menstruationdelayedstopped = $menstruationdelayedstopped;
            $symptomsheet->mentalretardation = $mentalretardation;
            $symptomsheet->mindraces = $mindraces;
            $symptomsheet->moodswings = $moodswings;
            $symptomsheet->multiplesclerosis = $multiplesclerosis;
            $symptomsheet->musclecramps = $musclecramps;
            $symptomsheet->musclepain = $musclepain;
            $symptomsheet->muscleweakness = $muscleweakness;
            $symptomsheet->neuritis = $neuritis;
            $symptomsheet->neuropathy = $neuropathy;
            $symptomsheet->obsessivecompulsive = $obsessivecompulsive;
            $symptomsheet->osteoarthritis = $osteoarthritis;
            $symptomsheet->osteoporosis = $osteoporosis;
            $symptomsheet->panicattacks = $panicattacks;
            $symptomsheet->papsmearabnormal = $papsmearabnormal;
            $symptomsheet->parkinsonsdisease = $parkinsonsdisease;
            $symptomsheet->periodsheavy = $periodsheavy;
            $symptomsheet->periodsirregular = $periodsirregular;
            $symptomsheet->periodslight = $periodslight;
            $symptomsheet->poorcirculation = $poorcirculation;
            $symptomsheet->poormemory = $poormemory;
            $symptomsheet->postnasaldrip = $postnasaldrip;
            $symptomsheet->premenstrualsyndrome = $premenstrualsyndrome;
            $symptomsheet->prostateproblems = $prostateproblems;
            $symptomsheet->psoriasis = $psoriasis;
            $symptomsheet->rheumatoidarthritis = $rheumatoidarthritis;
            $symptomsheet->schizophrenia = $schizophrenia;
            $symptomsheet->scleroderma = $scleroderma;
            $symptomsheet->seizures = $seizures;
            $symptomsheet->sensitivetocaffeine = $sensitivetocaffeine;
            $symptomsheet->sensitivetoheat = $sensitivetoheat;
            $symptomsheet->sinuscongestion = $sinuscongestion;
            $symptomsheet->slowwoundhealing = $slowwoundhealing;
            $symptomsheet->smoking = $smoking;
            $symptomsheet->stomachpain = $stomachpain;
            $symptomsheet->sugarreactions = $sugarreactions;
            $symptomsheet->tendtogainweight = $tendtogainweight;
            $symptomsheet->tendtoloseweight = $tendtoloseweight;
            $symptomsheet->toothdecayfrequentcavities = $toothdecayfrequentcavities;
            $symptomsheet->triglycerideshigh = $triglycerideshigh;
            $symptomsheet->troublesleeping = $troublesleeping;
            $symptomsheet->tumoractive = $tumoractive;
            $symptomsheet->tumorbenign = $tumorbenign;
            $symptomsheet->tumorcancer = $tumorcancer;
            $symptomsheet->tumorfatty = $tumorfatty;
            $symptomsheet->ulcer = $ulcer;
            $symptomsheet->urinationfrequent = $urinationfrequent;
            $symptomsheet->urinationpainful = $urinationpainful;
            $symptomsheet->vaginalyeastinfections = $vaginalyeastinfections;
            $symptomsheet->waterretention = $waterretention;            
            $symptomsheet->tinnitus = $tinnitus;
            $symptomsheet->ringinginears = $ringinginears;            
            $retval =  R::store($symptomsheet);
            return $retval;

        }


        public static function update( $sid, $acne, $adhd, $alcoholism, $allergieschemical, $allergiesdairy, $allergieseggs, $allergiesfish, $allergiesmold, $allergiesseasonal, $anemia, $anger, $angina, $anxiety, $arteriosclerosis, $asthma, $autism, $bipolar, $bloating, $bloodpressurehigh, $bloodpressurelow, $bodytemperaturecoldinwinter, $bodytemperaturelow, $brainfog, $breastsfibrocystic, $breaststumors, $bronchitis, $bursitis, $cantskipmeals, $cataracts, $cholesterolhigh, $chronicfatigue, $cirrhosis, $colitis, $confusion, $constipationoccasional, $constipationongoing, $cough, $cramps, $cravefats, $cravesaltyfoods, $cravestarches, $cravesweets, $cystsovarian, $delayeddevelopment, $depression, $diabetes1, $diabetes2, $diabetes3, $diarrheaoccasional, $diarrheaongoing, $diverticulitis, $dizziness, $drugaddiction, $dryskin, $dyslexia, $easybruising, $eczema, $emphysema, $excessiveplaqueonteeth, $fatigue, $fibromyalgia, $fissuresanal, $fistulas, $fractures, $gallstones, $gas, $glaucoma, $gout, $graves, $gumdisease, $hairloss, $headachesmigraine, $headachessinus, $headachestension, $heartattack, $heartbeatsskip, $heartpalpitations, $heartraterapid, $hemorrhoids, $hives, $hotflashes, $hungerexcessive, $hungernoappetite, $hyperkinesis, $hyperthyroidism, $hypoglycemia, $hypothyroidism, $impotence, $infectionsbladder, $infectionsfungalcandida, $infectionsfungalyeast, $infectionskidney, $infectionsviruses, $infertility, $inflammation, $irritability, $irritablebeforemeals, $jointpain, $jointstiffness, $kidneystones, $learningdisability, $lyme, $menieresdisease, $menopause, $menstruationdelayedstopped, $mentalretardation, $mindraces, $moodswings, $multiplesclerosis, $musclecramps, $musclepain, $muscleweakness, $neuritis, $neuropathy, $obsessivecompulsive, $osteoarthritis, $osteoporosis, $panicattacks, $papsmearabnormal, $parkinsonsdisease, $periodsheavy, $periodsirregular, $periodslight, $poorcirculation, $poormemory, $postnasaldrip, $premenstrualsyndrome, $prostateproblems, $psoriasis, $rheumatoidarthritis, $schizophrenia, $scleroderma, $seizures, $sensitivetocaffeine, $sensitivetoheat, $sinuscongestion, $slowwoundhealing, $smoking, $stomachpain, $sugarreactions, $tendtogainweight, $tendtoloseweight, $toothdecayfrequentcavities, $triglycerideshigh, $troublesleeping, $tumoractive, $tumorbenign, $tumorcancer, $tumorfatty, $ulcer, $urinationfrequent, $urinationpainful, $vaginalyeastinfections, $waterretention, $tinnitus,$ringinginears)
        {
            $symptomsheet = R::load('symptomsheet',$sid);
            $symptomsheet->acne = $acne;
            $symptomsheet->adhd = $adhd;
            $symptomsheet->alcoholism = $alcoholism;
            $symptomsheet->allergieschemical = $allergieschemical;
            $symptomsheet->allergiesdairy = $allergiesdairy;
            $symptomsheet->allergieseggs = $allergieseggs;
            $symptomsheet->allergiesfish = $allergiesfish;
            $symptomsheet->allergiesmold = $allergiesmold;
            $symptomsheet->allergiesseasonal = $allergiesseasonal;
            $symptomsheet->anemia = $anemia;
            $symptomsheet->anger = $anger;
            $symptomsheet->angina = $angina;
            $symptomsheet->anxiety = $anxiety;
            $symptomsheet->arteriosclerosis = $arteriosclerosis;
            $symptomsheet->asthma = $asthma;
            $symptomsheet->autism = $autism;
            $symptomsheet->bipolar = $bipolar;
            $symptomsheet->bloating = $bloating;
            $symptomsheet->bloodpressurehigh = $bloodpressurehigh;
            $symptomsheet->bloodpressurelow = $bloodpressurelow;
            $symptomsheet->bodytemperaturecoldinwinter = $bodytemperaturecoldinwinter;
            $symptomsheet->bodytemperaturelow = $bodytemperaturelow;
            $symptomsheet->brainfog = $brainfog;
            $symptomsheet->breastsfibrocystic = $breastsfibrocystic;
            $symptomsheet->breaststumors = $breaststumors;
            $symptomsheet->bronchitis = $bronchitis;
            $symptomsheet->bursitis = $bursitis;
            $symptomsheet->cantskipmeals = $cantskipmeals;
            $symptomsheet->cataracts = $cataracts;
            $symptomsheet->cholesterolhigh = $cholesterolhigh;
            $symptomsheet->chronicfatigue = $chronicfatigue;
            $symptomsheet->cirrhosis = $cirrhosis;
            $symptomsheet->colitis = $colitis;
            $symptomsheet->confusion = $confusion;
            $symptomsheet->constipationoccasional = $constipationoccasional;
            $symptomsheet->constipationongoing = $constipationongoing;
            $symptomsheet->cough = $cough;
            $symptomsheet->cramps = $cramps;
            $symptomsheet->cravefats = $cravefats;
            $symptomsheet->cravesaltyfoods = $cravesaltyfoods;
            $symptomsheet->cravestarches = $cravestarches;
            $symptomsheet->cravesweets = $cravesweets;
            $symptomsheet->cystsovarian = $cystsovarian;
            $symptomsheet->delayeddevelopment = $delayeddevelopment;
            $symptomsheet->depression = $depression;
            $symptomsheet->diabetes1 = $diabetes1;
            $symptomsheet->diabetes2 = $diabetes2;
            $symptomsheet->diabetes3 = $diabetes3;
            $symptomsheet->diarrheaoccasional = $diarrheaoccasional;
            $symptomsheet->diarrheaongoing = $diarrheaongoing;
            $symptomsheet->diverticulitis = $diverticulitis;
            $symptomsheet->dizziness = $dizziness;
            $symptomsheet->drugaddiction = $drugaddiction;
            $symptomsheet->dryskin = $dryskin;
            $symptomsheet->dyslexia = $dyslexia;
            $symptomsheet->easybruising = $easybruising;
            $symptomsheet->eczema = $eczema;
            $symptomsheet->emphysema = $emphysema;
            $symptomsheet->excessiveplaqueonteeth = $excessiveplaqueonteeth;
            $symptomsheet->fatigue = $fatigue;
            $symptomsheet->fibromyalgia = $fibromyalgia;
            $symptomsheet->fissuresanal = $fissuresanal;
            $symptomsheet->fistulas = $fistulas;
            $symptomsheet->fractures = $fractures;
            $symptomsheet->gallstones = $gallstones;
            $symptomsheet->gas = $gas;
            $symptomsheet->glaucoma = $glaucoma;
            $symptomsheet->gout = $gout;
            $symptomsheet->graves = $graves;
            $symptomsheet->gumdisease = $gumdisease;
            $symptomsheet->hairloss = $hairloss;
            $symptomsheet->headachesmigraine = $headachesmigraine;
            $symptomsheet->headachessinus = $headachessinus;
            $symptomsheet->headachestension = $headachestension;
            $symptomsheet->heartattack = $heartattack;
            $symptomsheet->heartbeatsskip = $heartbeatsskip;
            $symptomsheet->heartpalpitations = $heartpalpitations;
            $symptomsheet->heartraterapid = $heartraterapid;
            $symptomsheet->hemorrhoids = $hemorrhoids;
            $symptomsheet->hives = $hives;
            $symptomsheet->hotflashes = $hotflashes;
            $symptomsheet->hungerexcessive = $hungerexcessive;
            $symptomsheet->hungernoappetite = $hungernoappetite;
            $symptomsheet->hyperkinesis = $hyperkinesis;
            $symptomsheet->hyperthyroidism = $hyperthyroidism;
            $symptomsheet->hypoglycemia = $hypoglycemia;
            $symptomsheet->hypothyroidism = $hypothyroidism;
            $symptomsheet->impotence = $impotence;
            $symptomsheet->infectionsbladder = $infectionsbladder;
            $symptomsheet->infectionsfungalcandida = $infectionsfungalcandida;
            $symptomsheet->infectionsfungalyeast = $infectionsfungalyeast;
            $symptomsheet->infectionskidney = $infectionskidney;
            $symptomsheet->infectionsviruses = $infectionsviruses;
            $symptomsheet->infertility = $infertility;
            $symptomsheet->inflammation = $inflammation;
            $symptomsheet->irritability = $irritability;
            $symptomsheet->irritablebeforemeals = $irritablebeforemeals;
            $symptomsheet->jointpain = $jointpain;
            $symptomsheet->jointstiffness = $jointstiffness;
            $symptomsheet->kidneystones = $kidneystones;
            $symptomsheet->learningdisability = $learningdisability;
            $symptomsheet->lyme = $lyme;
            $symptomsheet->menieresdisease = $menieresdisease;
            $symptomsheet->menopause = $menopause;
            $symptomsheet->menstruationdelayedstopped = $menstruationdelayedstopped;
            $symptomsheet->mentalretardation = $mentalretardation;
            $symptomsheet->mindraces = $mindraces;
            $symptomsheet->moodswings = $moodswings;
            $symptomsheet->multiplesclerosis = $multiplesclerosis;
            $symptomsheet->musclecramps = $musclecramps;
            $symptomsheet->musclepain = $musclepain;
            $symptomsheet->muscleweakness = $muscleweakness;
            $symptomsheet->neuritis = $neuritis;
            $symptomsheet->neuropathy = $neuropathy;
            $symptomsheet->obsessivecompulsive = $obsessivecompulsive;
            $symptomsheet->osteoarthritis = $osteoarthritis;
            $symptomsheet->osteoporosis = $osteoporosis;
            $symptomsheet->panicattacks = $panicattacks;
            $symptomsheet->papsmearabnormal = $papsmearabnormal;
            $symptomsheet->parkinsonsdisease = $parkinsonsdisease;
            $symptomsheet->periodsheavy = $periodsheavy;
            $symptomsheet->periodsirregular = $periodsirregular;
            $symptomsheet->periodslight = $periodslight;
            $symptomsheet->poorcirculation = $poorcirculation;
            $symptomsheet->poormemory = $poormemory;
            $symptomsheet->postnasaldrip = $postnasaldrip;
            $symptomsheet->premenstrualsyndrome = $premenstrualsyndrome;
            $symptomsheet->prostateproblems = $prostateproblems;
            $symptomsheet->psoriasis = $psoriasis;
            $symptomsheet->rheumatoidarthritis = $rheumatoidarthritis;
            $symptomsheet->schizophrenia = $schizophrenia;
            $symptomsheet->scleroderma = $scleroderma;
            $symptomsheet->seizures = $seizures;
            $symptomsheet->sensitivetocaffeine = $sensitivetocaffeine;
            $symptomsheet->sensitivetoheat = $sensitivetoheat;
            $symptomsheet->sinuscongestion = $sinuscongestion;
            $symptomsheet->slowwoundhealing = $slowwoundhealing;
            $symptomsheet->smoking = $smoking;
            $symptomsheet->stomachpain = $stomachpain;
            $symptomsheet->sugarreactions = $sugarreactions;
            $symptomsheet->tendtogainweight = $tendtogainweight;
            $symptomsheet->tendtoloseweight = $tendtoloseweight;
            $symptomsheet->toothdecayfrequentcavities = $toothdecayfrequentcavities;
            $symptomsheet->triglycerideshigh = $triglycerideshigh;
            $symptomsheet->troublesleeping = $troublesleeping;
            $symptomsheet->tumoractive = $tumoractive;
            $symptomsheet->tumorbenign = $tumorbenign;
            $symptomsheet->tumorcancer = $tumorcancer;
            $symptomsheet->tumorfatty = $tumorfatty;
            $symptomsheet->ulcer = $ulcer;
            $symptomsheet->urinationfrequent = $urinationfrequent;
            $symptomsheet->urinationpainful = $urinationpainful;
            $symptomsheet->vaginalyeastinfections = $vaginalyeastinfections;
            $symptomsheet->waterretention = $waterretention;
            $symptomsheet->tinnitus = $tinnitus;
            $symptomsheet->ringinginears = $ringinginears;            
            
            $retval =  R::store($symptomsheet);
            return $retval;
        }




    }


?>