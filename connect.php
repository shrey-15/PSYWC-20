<?php
$servername = "localhost";
$username = "u937149304_root";
$password = "root1234";
$database = "u937149304_registration";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    echo "Connection Unsuccessfull";
    die(header("refresh: 2;url = /index.php"));

}

$sql="SELECT P_ID FROM successful_transaction";

if ($result=mysqli_query($conn,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
//  printf("Result set has %d rows.\n",$rowcount);
  // Free result set
  mysqli_free_result($result);
  }

if($rowcount > 500)
{
 //echo "Registration Closed";
 header("refresh: 2; url = /indexfull.php");
}

?>
