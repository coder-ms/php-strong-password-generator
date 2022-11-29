
<?php
session_start();

function passwordGenerator(){
    $lowerCase= 'abcdefghijklmnopqrstuvwxyz';
    $upperCase = strtoupper($lowerCase);
    $numbers = '1234567890';
    $specialChar = '.!?_;:,#@$';
    $mainSource = $lowerCase. $upperCase . $numbers . $specialChar;
    $pswLen = $_SESSION['pswlen'];

    for ($i = 0; $i < $pswLen; $i++) {
        $psw = substr($mainSource, rand(1, strlen($mainSource)), 1);
        echo $psw;
    }
    if (!empty($psw)) {
        header("location: ./pswShow.php");
    }
}