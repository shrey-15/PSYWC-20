<?php 
$servername = "127.0.0.1:3306";
$username = "u937149304_root";
$password = "root1234";
$database = "u937149304_registration";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

if($conn){
   // echo "Connection Successfull";
}
else{
    //echo "Connection Failed";
}
 if(isset($_POST["submit"])){
     $first_name=isset($_POST["firstName"])?$_POST["firstName"]:"";
     $last_name=isset($_POST["lastName"])?$_POST["lastName"]:"";
     $email=isset($_POST["email"])?$_POST["email"]:"";
     $phone=isset($_POST["phoneNumber"])?$_POST["phoneNumber"]:"";
     $college=isset($_POST["college"])?$_POST["college"]:"";
     $ieee="No";
     $ieee_interest="No";
     $mba_interest="No";
     $startup_interest="No";
     $utilities_interest="No";
     $isro_interest="No";
     $disastermng_interest="No";


     if(isset($_POST["ieee_member_true"])){
         $ieee="Yes";
     }

     if(isset($_POST["IEEE"])){
        $ieee_interest="Yes";
    }
     if(isset($_POST["MBA"])){
        $mba_interest="Yes";
    }
    if(isset($_POST["Start-Ups"])){
        $startup_interest="Yes";
    }
    if(isset($_POST["Utilities"])){
        $utilities_interest="Yes";
    }
    if(isset($_POST["ISRO"])){
        $isro_interest="Yes";
    }
    if(isset($_POST["disasterManagement"])){
        $disastermng_interest="Yes";
    }


     /*echo "first name: ".$first_name."<br>";
     echo "last name: ".$last_name."<br>";
     echo "email: ".$email."<br>";
     echo "phone: ".$phone."<br>";
     echo "college: ".$college."<br>";
     echo "IEEE Member: ".$ieee."<br>";
     echo "<br>Interested in:<br>";
     echo "IEEE: ".$ieee_interest."<br>";
     echo "MBA: ".$mba_interest."<br>";
     echo "Startups: ".$startup_interest."<br>";
     echo "utilties: ".$utilities_interest."<br>";
     echo "isro: ".$isro_interest."<br>";
     echo "disaster management: ".$disastermng_interest."<br>";*/
     
     $sql="INSERT INTO registration_details (firstName,lastName,email,phoneNumber,college,ieeeMember,ieeeInterest,mbaInterest,startupsInterest,utilitiesInterest,isroInterest,disasterManagementInterest) VALUES ('".$first_name."','".$last_name."','".$email."',".$phone.",'".$college."','".$ieee."','".$ieee_interest."','".$mba_interest."','".$startup_interest."','".$utilities_interest."','".$isro_interest."','".$disastermng_interest."');";
     
     if ($conn->query($sql) === TRUE) {
         //echo "<br>Data recorded successfully<br>";
         	$emailto = $email;
        	$subject = "Confirmation Email";
        	$message="Hi ".$firstName."! Your registraion was successful.";
        	ini_set( 'display_errors', 1 );
            error_reporting( E_ALL );
            $from = "contact@psywc.in";
            $headers = "From:" . $from;
            mail($emailto,$subject,$message, $headers);
         ?>
         <script>
             if(confirm("Registered Successfully")){
                 window.location.href="index.html"
             }
         </script>
         <?php
     }
     else{
         //echo "<br>Process Failed<br>";
         //echo $conn->error;
                  ?>
         <script>
             if(confirm("Registeration Failed Please Try Again!")){
                 window.location.href="test_form.html"
             }
         </script>
         <?php
     }
 }
 


 
?>