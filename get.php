<?php

$server = "localhost";
$user = "root";
$password = "mysql";
$dbname = "form";

$conn = mysqli_connect($server,$user,$password,$dbname);

if(!$conn)
{
  die("Connection failed: ".mysqli_connect_error());
}

$sql = "SELECT * FROM details";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0)
{
  while($row = mysqli_fetch_assoc($result))
  {
      echo " Name: ".$row["Fname"]." ".$row["Lname"]."<br>";
      echo "Address: ".$row["Street_Address"].", ".$row['Street_Address_2'].", ";
      echo $row['City'].", ".$row['State'].", ".$row['Zip'].", ".$row['Country']."<br>";
      echo "Phone : ".$row['Phone_Number']."<br>Email : ".$row['Email'];
  }
} else{
    echo "0 result";
}
mysqli_close($conn);

?>