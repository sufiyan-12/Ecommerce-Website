<?php

$fname = $_REQUEST['First_Name'];
$lname = $_REQUEST['Last_Name'];
$saddr = $_REQUEST['Street_Address'];
$sl2 = $_REQUEST['Street_Address_Line_2']; #sl2 = street-line-2 adddress
$city = $_REQUEST['City'];
$sp = $_REQUEST['State_Province']; #sp state-province
$pzc = $_REQUEST['Postal_Zip_Code'];
$country = $_REQUEST['country'];
$phone = $_REQUEST['Phone_Number'];
$email = $_REQUEST['E-mail'];
$chk1 = $_REQUEST['Data Analyzer'];
$chk2 = $_REQUEST['Coding'];
$chk3 = $_REQUEST['Software_Testing'];
$chk4 = $_REQUEST['Human_Resources'];
$chk5 = $_REQUEST['Account_Manager'];
$chk6 = $_REQUEST['Sales'];
$skill = $_REQUEST['skill-level'];
$imgr = $_REQUEST['resume'];

echo "Name : $fname $lname<br>";
echo "Address: $saddr, $sl2, $city, $sp, $pzc- $country<br>";
echo "Phone Number: $phone<br>";
echo "E-mail: $email<br><br>";

?>