<?php

$server = "localhost";
$user = "root";
$password = "mysql";
$dbname = "form";

$conn = mysqli_connect($server,$user,$password,$dbname);

$fname = $_POST['First_Name'];
$lname = $_POST['Last_Name'];
$saddr = $_POST['Street_Address'];
$sl2 = $_POST['Street_Address_Line_2']; #sl2 = street-line-2 adddress
$city = $_POST['City'];
$sp = $_POST['State_Province']; #sp state-province
$pzc = $_POST['Postal_Zip_Code'];
$country = $_POST['country'];
$phone = $_POST['Phone_Number'];
$email = $_POST['E-mail'];

$sql = "INSERT INTO details VALUES ('2','$fname', '$lname', '$saddr', '$sl2', '$city', '$sp', '$pzc', '$country', '$phone', '$email')";

$result = mysqli_query($conn,$sql);

if(!$conn)
{
  die("Connection failed: ".mysqli_connect_error());
}
else{
  echo "Connection Successfully stablish.<br>";
}
if($result)
{
echo "Data Inserted into Database.";
}

?>