<?php
//Variables for AT
$sessionId = $_POST["sessionId"]; //Unique value from mobile user
$serviceCode = $_POST["serviceCode"]; //Unique short number dialed by user
$phoneNumber = $_POST["phoneNumber"] //Users number
$text = $_POST["text"] 
    
    
    
//////////////////////////////////////////////////////////////////////////////////////////////
 if ($text == "") {
     
     $response = "CON What would you like to check \n";
     $response .= "1. My Account No \n";
     $response .= "2. My phone number \n";   
       
 }  else if ($text == "1"){
     
     $response = "CON Choose account information you want to view \n";
     $response .= "1. Account No \n";
     $response .= "2. Account Balance \n";
          
 }  else if ($text == "2"){
     
     $response = "END Your phone number is" .$phoneNumber;
    
 }  else if ($text == "1*1"){
     $accountNumber = "ACC11001";
     
     $response = "END Your account Number is" .$accountNumber;
     
     
 }  else if ($text -- "1*2"){
     $balance = "R 10 000";
     
     $response = "END Your balance is" .$balance;
 }

header('Content-type: text/plain');
echo $response;

?>
////////////////////////////////////////////////////////////////////////////////////////////////
