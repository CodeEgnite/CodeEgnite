<?php

require "connection.php";

$fname = $_POST['fname'];
$bname = $_POST['bname'];
$registered = $_POST['registered'];
$Nregistered = $_POST['Nregistered'];
$bnumber = $_POST['bnumber'];
$add1 = $_POST['add1'];
$add2 = $_POST['add2'];
$nic = $_POST['nic'];
$cat = $_POST['cat'];
$Mnumber = $_POST['Mnumber'];
$Lnumber = $_POST['Lnumber'];
$appType = $_POST['appType'];
$otherNotes = $_POST['otherNotes'];
$email = $_POST["email"];



if (empty($fname)) {
    echo "Please Enter Full Name";
} else if (empty($bname)) {
    echo "Please Enter Business Name";
} else if (empty($nic)) {
    echo "Please Enter NIC number";
} else if (empty($add1)) {
    echo "Please Enter Address Line 1";
} else if (empty($add2)) {
    echo "Please Enter Address Line 2";
} else if (empty($Mnumber)) {
    echo "Please Enter Mobile Number";
} else if ($cat == 0) {
    echo "Please Enter a Business Category";
} else if (empty($Lnumber)) {
    echo "Please Enter Lan Number";
} else if (($registered == "true" && $Nregistered == "true") || ($registered == "false" && $Nregistered == "false")) {
    echo "Please Select Registered Or Not";
} else if ($appType == 0) {
    echo "Please Select An App Type";
} else if (!preg_match('/^(?:\+94|0)?(7(?:[0125678]\d{7}|9[0-9]{2}\d{5}))$/', $Mnumber)) {
    echo "Please Enter A valid Phone Number";
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "invalid email address";
} else {

    $rs = Database::search("SELECT * FROM `customer` WHERE `email` = '" . $email . "' OR `nic` = '" . $nic . "' OR `mobile` = '" . $Mnumber . "' OR `lan` = '" . $Lnumber . "' ");
    $rsn = $rs->num_rows;

    if ($rsn == 0) {
        $status = 1;
        if ($registered == "true" && $Nregistered == "false") {
            $status = 1;
        } else if ($registered == "false" && $Nregistered == "true") {
            $status = 2;
        }

        if (empty($bnumber) && empty($otherNotes)) {
        
            $query = "INSERT INTO `customer`(`full_name`,`business_name`,`address1`,`address2`,`nic`,`mobile`,`lan`,`email`,`status_id`,`business_category_id`,`app_type_id`) 
            VALUES ('" . $fname . "','" . $bname . "','" . $add1 . "','" . $add2 . "','" . $nic . "','" . $Mnumber . "','" . $Lnumber . "','" . $email . "','" . $status . "','" . $cat . "','" . $appType . "')  ";

            Database::iud($query);
        } else if (empty($bnumber) && !empty($otherNotes)) {
        
            Database::iud("INSERT INTO `customer`(`full_name`,`business_name`,`address1`,`address2`,`nic`,`mobile`,`lan`,`email`,`status_id`,`business_category_id`,`app_type_id`,`note`) 
    VALUES ('" . $fname . "','" . $bname . "','" . $add1 . "','" . $add2 . "','" . $nic . "','" . $Mnumber . "','" . $Lnumber . "','" . $email . "','" . $status . "','" . $cat . "','" . $appType . "','" . $otherNotes . "')  ");
        } else if (!empty($bnumber) && empty($otherNotes)) {
     
            Database::iud("INSERT INTO `customer`(`full_name`,`business_name`,`address1`,`address2`,`nic`,`mobile`,`lan`,`email`,`status_id`,`business_category_id`,`app_type_id`,`business_number`) 
    VALUES ('" . $fname . "','" . $bname . "','" . $add1 . "','" . $add2 . "','" . $nic . "','" . $Mnumber . "','" . $Lnumber . "','" . $email . "','" . $status . "','" . $cat . "','" . $appType . "','" . $bnumber . "')  ");
        } else if (!empty($bnumber) && !empty($otherNotes)) {
       
            Database::iud("INSERT INTO `customer`(`full_name`,`business_name`,`address1`,`address2`,`nic`,`mobile`,`lan`,`email`,`status_id`,`business_category_id`,`app_type_id`,`business_number`,`note`) 
    VALUES ('" . $fname . "','" . $bname . "','" . $add1 . "','" . $add2 . "','" . $nic . "','" . $Mnumber . "','" . $Lnumber . "','" . $email . "','" . $status . "','" . $cat . "','" . $appType . "','" . $bnumber . "','" . $otherNotes . "')  ");
        }

        echo "Success";
    } else {
        echo "A User Like This Already Exists";
    }
}
