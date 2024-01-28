<?php


if($_SERVER["REQUEST_METHOD" == "POST"]){
    if(isset($_POST["pastHistoryBtn"])){
        $maritalStatus = $_POST["marital-status"];
        $reasonVisit = $_POST["reason-for-visit"];
        $refPhy = $_POST["ref-physician"];
        $occupation = $_POST["occupation"];
        $phone = $_POST["phone-no"];
        //partners details
        $partnerName = $_POST["partner-name"];
        $partnerNone = $_POST["partner-none"];
        $agePartner = $_POST["age-partner"];
        $partOccup = $_POST["part-occupation"];
        ///////////////////////////////////PART B//////////////////////////
        $age1Period = $_POST["age-first-period"];
        $perStartdy = $_POST["period-start-days"];
        $irrPerStrtDy = $_POST["irreg-period-strt-dy"];
        $durationBps = $_POST["duration-bleeding"];
        $bleedingBps = $_POST["bleeding-btwn-periods"];
        $bleedingAps = $_POST["bleeding-after-periods"];
        $lastMp = $_POST["last-menstrual-period"];
        $painPs = $_POST["pain-period"];
        $menses = $_POST["menses"];
        ///////////////////////////////////////////////PART C
        $neverPreg = $_POST["never-been-preg"];
        //table data below
        //table cell below
        $stObHist = $_POST["1st-ob-hist"];
        $placeOfDel = $_POST["place-of-del"];
        $durationPreg = $_POST["duration-preg"];
        $hrsLabour = $_POST["hrs-labour"];
        $typeDelivery = $_POST["type-delivery"];
        $complications = $_POST["complications"];
        $sex = $_POST["sex"];
        $birthWeight = $_POST["birth-weight"];
        $presentHealth = $_POST["present-health"];
        //table cell
        //table cell below
        $twoBHist = $_POST["2nd-ob-hist"];
        $placeDel2 = $_POST["place-of-del-2"];
        $durationPreg2 = $_POST["duration-preg-2"];
        $hrsLabour2 = $_POST["hrs-labour-2"];
        $typeDelivery2 = $_POST["type-delivery-2"];
        $complications2 = $_POST["complications-2"];
        $sex2 = $_POST["sex-2"];
        $birthWeight2 = $_POST["birth-weight-2"];
        $presentHealth2 = $_POST["present-health-2"];
        //table cell below
        $thirdrdHist = $_POST["3rd-ob-hist"];
        $placeOfDel3 = $_POST["place-of-del-3"];
        $durationPreg3 = $_POST["duration-preg-3"];
        $hrsLabour3 = $_POST["hrs-labour-3"];
        $typeDelivery3 = $_POST["type-delivery-3"];
        $complications3 = $_POST["complications-3"];
        $sex3 = $_POST["sex-3"];
        $birthWeight3 = $_POST["birth-weight-3"];
        $presentHealth3 = $_POST["present-health-3"];
        //table cell below
        $ObHist4 = $_POST["4-ob-hist"];
        $place4 = $_POST["place-of-del-4"];
        $duration4 = $_POST["duration-preg-4"];
        $hrs4 = $_POST["hrs-labour-4"];
        $type4 = $_POST["type-delivery-4"];
        $complications4 = $_POST["complications-4"];
        $sex4 = $_POST["sex-4"];
        $birth4 = $_POST["birth-weight-4"];
        $present4 = $_POST["present-health-4"];
        //table cell below
        $hist5 = $_POST["5-ob-hist"];
        $place5 = $_POST["place-of-del-5"];
        $duration5 = $_POST["duration-preg-5"];
        $hrs5 = $_POST["hrs-labour-5"];
        $type5 = $_POST["type-delivery-5"];
        $complications5 = $_POST["complications-5"];
        $sex5 = $_POST["sex-5"];
        $birth5 = $_POST["birth-weight-5"];
        $present5 = $_POST["present-health-5"];
        /////////////////////////////////////////////////////D PART D
        $birthControl = $_POST["birth-control"];
        /////////////////////////////////////////////////////E PART E
        $sexPartner = $_POST["sex-partner"];//this is a no or yes
        $sexPartnerMale = $_POST["sex-partner-male"];//this is after you answer yes if male or female
        $sexConcerns = $_POST["sex-concerns"];
        //F
        $dC = $_POST["D&C"];
        $dCDate = $_POST["D&C-date"];
        $hysteroscopy = $_POST["Hysteroscopy"];
        $hysteroscopyDate = $_POST["Hysteroscopy-date"];
        $infertilitySurgery = $_POST["infertility-surgery"];
        $infertilitySurgery-date = $_POST["infertility-surgery-date"];
        $tuboplasty = $_POST["tuboplasty"];
        $tuboplastyDate = $_POST["tuboplasty-date"];
        $tubalLigation = $_POST["tubal-ligation"];
        $tubalLigation-date = $_POST["tubal-ligation-date"];
        $hysterectomyV = $_POST["hysterectomy-(vaginal)"];
        $hysterectomyVDate = $_POST["hysterectomy-(vaginal)-date"];
        $hysterectomy = $_POST["hysterectomy-(abdominal)"];
        $hysterectomyDate = $_POST["hysterectomy-(abdominal)-date"];
        $myomectomy = $_POST["myomectomy"];
        $myomectomDate = $_POST["myomectomy-date"];
        $ovarian = $_POST["ovarian"];
        $ovariandate = $_POST["ovarian-date"];
        $L = $_POST["L-cyst(s)"];
        $LDate = $_POST["L-cyst(s)-date"];
        $R = $_POST["R-ovary"];
        $RDate = $_POST["R-ovary-date"];
        $LOvary = $_POST["L-ovary"];
        $LOvaryDate = $_POST["L-ovary-date"];
        $vaginalRepair = $_POST["vaginal-or-bladder-repair"];
        $vaginalRepairDate = $_POST["vaginal-or-bladder-repair-date"];
        $cesarean = $_POST["cesarean"];
        $cesareanDate = $_POST["cesarean-date"];
        $otherSpec = $_POST["other-(specify)"];
        $otherSpecDate = $_POST["other-(specify)-date"];
        //////////////////////////////////////////////////////GGGG
        $surgeriesNo = $_POST["surgeries-no"];
        $surg1 = $_POST["surg-1"];
        $surg1Date = $_POST["surg-1-date"];
        $surg2 = $_POST["surg-2"];
        $surg2Date = $_POST["surg-2-date"];
        $surg3 = $_POST["surg-3"];
        $surg3Date = $_POST["surg-3-date"];
        $surg4 = $_POST["surg-4"];
        $surg4Date = $_POST["surg-4-date"];
        ////////////////////////////////////////////////////////HHHH
        $datePapCheck = $_POST["date-of-pap-check"];
        $datePap = $_POST["date-of-pap"];
        $abnormalCheck = $_POST["abnormal-pap-smears-check"];
        $abnormalSmears = $_POST["abnormal-pap-smears"];//yes or no
        //if yes then the below options
        $cryotherapy = $_POST["cryotherapy"];
        $laser = $_POST["laser"];
        $coneBiopsy = $_POST["cone-biopsy"];
        $loopExcision = $_POST["loop-excision"];
        $lastMammogram = $_POST["last-mammogram"];//this is a date
        $abMamo = $_POST["ab-mamo-no"];//this is a yes or no
        //other past gyno history//check any that apply
        $gynNone = $_POST["gyn-hist-None"];
        $gynVenereal = $_POST["gyn-hist-Venereal"];
        $gynHerpes = $_POST["gyn-hist-Herpes"];
        $gynSyphilis = $_POST["gyn-hist-Syphilis"];
        $gynPelvic = $_POST["gyn-hist-Pelvic"];
        $gynEndometriosis = $_POST["gyn-hist-Endometriosis"];
        $gynChlamydia = $_POST["gyn-hist-Chlamydia"];
        $gynGonorrhea = $_POST["gyn-hist-Gonorrhea"];
        $gynVaginal = $_POST["gyn-hist-Vaginal"];
        $gynOther = $_POST["gyn-other"];

        ///////////////////////////////////////////////////I
        ///PAST MED HIST
        $past-med-hist = $_POST["past-med-hist"];//none
        $Arthritis = $_POST["Arthritis"];
        $Diabetes = $_POST["Diabetes"];
        $Diet = $_POST["Diet"];
        $Pill = $_POST["Pill"];
        $Insulin = $_POST["Insulin"];
        $hbp = $_POST["hbp"];
        $heartDisease = $_POST["heart-disease"];
        $KidneyDisease = $_POST["Kidney-disease"];
        $gallstones = $_POST["Gallstones"];
        $liver = $_POST["Liver"];
        $epilepsy = $_POST["Epilepsy"];
        $blood = $_POST["Blood"];
        $thyroid = $_POST["Thyroid"];
        $asthma = $_POST["Asthma"];
        $emphysema = $_POST["Emphysema"];
        $bronchitis = $_POST["Bronchitis"];
        $hIV+ = $_POST["HIV+"];
        $eatingDisorder = $_POST["Eating-Disorder"];
        $Other7 = $_POST["Other7"];
        $Other-input = $_POST["Other7-input"];
        //J/////////////////////////////////////////////////////// J
        $Medication = $_POST["Medication"];
        $Dose = $_POST["Dose"];
        $Frequency = $_POST["Frequency"];
        $Medication1 = $_POST["Medication1"];
        $Dose1 = $_POST["Dose1"];
        $Frequency1 = $_POST["Frequency1"];
        $Medication2 = $_POST["Medication2"];
        $Dose2 = $_POST["Dose2"];
        $Frequency2 = $_POST["Frequency2"];
        $Medication3 = $_POST["Medication3"];
        $Dose3 = $_POST["Dose3"];
        $Frequency3 = $_POST["Frequency3"];
        $Medication4 = $_POST["Medication4"];
        $Dose4 = $_POST["Dose4"];
        $Frequency4 = $_POST["Frequency4"];
        ////////////////////////////////////////////////////////k
        $smoke = $_POST["smoke"];//no //yes
        $smokePacks = $_POST["smoke-packs"]; //no.
        $alcohol = $_POST["alcohol"];//yes //no
        //if yes
        $wineGlass = $_POST["wine-glass"];//no.
        $beerBot = $_POST["beer-bot"];//no.
        $hardLiq = $_POST["hard-liq"];//no.
        //use illicit
        $illDrugs = $_POST["ill-drugs"];//no //yes
        $typeIllicit = $_POST["type-illicit"];
        $amountIllicit = $_POST["amount-illicit"];
        //exercise
        $exerciseType = $_POST["exercise-type"];
        $exerciseOften = $_POST["exercise-often"];
        //L //////////////////////////////L//////////////////////L//////L//L
        $drugALLERGIES = $_POST["DRUG-ALLERGIES"];//no //yes
        //list
        $drugALLERGIESList = $_POST["DRUG-ALLERGIES-list"];
        $drugALLERGIESList1 = $_POST["DRUG-ALLERGIES-list1"];
        $drugALLERGIESList2 = $_POST["DRUG-ALLERGIES-list2"];
        $drugALLERGIESList3 = $_POST["DRUG-ALLERGIES-list3"];
        $drugALLERGIESList4 = $_POST["DRUG-ALLERGIES-list4"];
        //////////////////////////////////////////////////////////////////////M
        $diabetes = $_POST["diabetes"];
        $heartDis = $_POST["heart-dis"];
        $breastCanc = $_POST["breast-canc"];
        $other5 = $_POST["other5"];
        $ovarianCanc = $_POST["ovarian-canc"];
        $endoCanc = $_POST["endo-canc"];
        $colonCanc = $_POST["colon-canc"];
        //IF yes, list teh relatives
        $relative = $_POST["relative"];
        $relative1 = $_POST["relative1"];
        $relative2 = $_POST["relative2"];
        $noneAbove = $_POST["none-of-above"]; //none of the above
        /////////////////////////////////////////////////////////////////N
        //have you had any recent?
        $weightLoss = $_POST["weight-loss"];
        $weightGain = $_POST["weight-gain"];
        $changeEnergy = $_POST["change-in-energy"];
        $changeExercise-tolerance = $_POST["change-in-exercise-tolerance"];
        $hairGrowth = $_POST["hair-growth"];
        $hairLoss = $_POST["hair-loss"];
        $changeUrinary-function = $_POST["change-in-urinary-function"];
        $hotFlushes = $_POST["hot-flushes"];
        $breastDischarge = $_POST["breast-discharge"];
        $noneAbove = $_POST["none-of-the-above"];
        $Other6 = $_POST["Other6"];

        ///////////////////////////////////////////////////////O ////////////////////////// O  ////////////////// O
        //planning to be prego only
        $downSyndro = $_POST["down-syndro"];
        $chromosomal = $_POST["Chromosomal"];
        $neural = $_POST["Neural"];
        $hemophilia = $_POST["Hemophilia"];
        $dystrophy = $_POST["Dystrophy"];
        $cystic = $_POST["Cystic"];
        $taySachs = $_POST["Tay-Sachs"];
        $taySachsInput = $_POST["Tay-Sachs-input"];
        $otherFather = $_POST["Other-father"];
        $resultFather = $_POST["result-father"];
        $otherMother = $_POST["Other-mother"];
        $resultMother = $_POST["result-mother"];
        $taySachsChild = $_POST["Tay-Sachs-child"];
        $taySachsChildInput = $_POST["Tay-Sachs-child-input"];
        $other1 = $_POST["Other1"];
        $other2 = $_POST["Other2"];
        $otherFatherChild = $_POST["Other-father-child"];
        $otherMotherChild = $_POST["Other-mother-child"];
        $sickleCell = $_POST["Sickle-cell"];
        $sickleCellInput = $_POST["Sickle-cell-input"];
        $otherSickleCellF = $_POST["Other-Sickle-cell-f"];
        $otherSicklECellResultFather = $_POST["Other-Sickle-cell-result-father"];
        $otherSickleCellM = $_POST["Other-Sickle cell-m"];
        $otherSickleCellMother = $_POST["Other-Sickle-cell-result-mother"];
    }
}
