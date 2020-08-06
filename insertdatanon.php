<?php
include("connect.php");
session_start();

$fname = $_SESSION['fname'];
$lname = $_SESSION['lname'];
$gender = $_SESSION['gender'];
$org =$_SESSION['org'];
$eaddress =$_SESSION['eaddress'];
$phone = $_SESSION['phone'];
//$ieeemembership = $_SESSION['ieeemembership'];
$address1 = $_SESSION['address1'];
$city = $_SESSION['city'];
$state = $_SESSION['state'];
$code= $_SESSION['code'];
$price=$_SESSION['price'];
$TXNID=mysqli_real_escape_string($conn, $_REQUEST['TXNID']);
//$imgscreen=mysqli_real_escape_string($conn, $_REQUEST['imgscreen']);

//sql_insert_blob_query = "INSERT INTO details (imgscreen) VALUES ($imgscreen)";

$sql = "INSERT INTO detailsnonieee (first_name,last_name,gender,college,email,mobile,address,city,state,postal_code,price,txn_id) VALUES ('$fname','$lname','$gender','$org','$eaddress','$phone','$address1','$city','$state','$code','$price','$TXNID')";

if(mysqli_query($conn, $sql)){
    echo "Thankyou for Registration .";
   header("refresh: 2; url =index.html");
} else{
      echo "ERROR: Transaction Id and Mobile Number Must be Unqiue Go Back And Write Proper Transaction Id and Mobile Number";
    //   header("refresh: 2; url = http://index.html");

}

// Close connection
mysqli_close($conn);
?>
