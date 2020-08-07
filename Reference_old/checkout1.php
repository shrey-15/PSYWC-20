<?php
include("connect.php");
session_start();
$_SESSION['fname'] =$_POST['fname'];
$_SESSION['lname'] = mysqli_real_escape_string($conn, $_REQUEST['lname']);
$_SESSION['gender'] = mysqli_real_escape_string($conn, $_REQUEST['gender']);
$_SESSION['org'] = mysqli_real_escape_string($conn, $_REQUEST['org']);
$_SESSION['eaddress'] = mysqli_real_escape_string($conn, $_REQUEST['eaddress']);
$_SESSION['phone'] = mysqli_real_escape_string($conn, $_REQUEST['phone']);
$_SESSION['ieeemembership'] = mysqli_real_escape_string($conn, $_REQUEST['ieeemembership']);
$_SESSION['address1'] = mysqli_real_escape_string($conn, $_REQUEST['address1']);
$_SESSION['city'] = mysqli_real_escape_string($conn, $_REQUEST['city']);
$_SESSION['state'] = mysqli_real_escape_string($conn, $_REQUEST['state']);
$_SESSION['code']= mysqli_real_escape_string($conn, $_REQUEST['code']);
$_SESSION['price']=mysqli_real_escape_string($conn, $_REQUEST['price']);

?>

<!DOCTYPE html>
<html>
  <head>
    <title>PSYWC'20 Congress Reservation</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, textarea, label, p {
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      }
      h1 {
      position: absolute;
      margin: 0;
      font-size: 40px;
      color: #fff;
      z-index: 2;
      line-height: 83px;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      }
      form {
      width: 100%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 8px  #669999;
      }
      .banner {
      position: relative;
      height: 400px;
      background-image: url("img/logos/pune.jpg");
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .banner::after {
      content: "";
      background-color: rgba(0, 0, 0, 0.2);
      position: absolute;
      width: 100%;
      height: 100%;
      }
      input, select, textarea {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      input[type="date"] {
      padding: 4px 5px;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
      color:  #669999;
      }
      .item input:hover, .item select:hover, .item textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 3px 0  #669999;
      color: #669999;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      .item span {
      color: red;
      }
      .week {
      display:flex;
      justfiy-content:space-between;
      }
      .colums {
      display:flex;
      justify-content:space-between;
      flex-direction:row;
      flex-wrap:wrap;
      }
      .colums div {
      width:48%;
      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      .item i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 20px;
      color:  #a3c2c2;
      }
      .item i {
      right: 1%;
      top: 30px;
      z-index: 1;
      }
      input[type=radio]  {
      display: none;
      }
      label.radio {
      position: relative;
      display: inline-block;
      margin: 5px 20px 15px 0;
      cursor: pointer;
      }
      .question span {
      margin-left: 30px;
      }
      .question-answer label {
      display: block;
      }
      label.radio:before {
      content: "";
      position: absolute;
      left: 0;
      width: 17px;
      height: 17px;
      border-radius: 50%;
      border: 2px solid #ccc;
      }
      input[type=radio]:checked + label:before, label.radio:hover:before {
      border: 2px solid  #669999;
      }
      label.radio:after {
      content: "";
      position: absolute;
      top: 6px;
      left: 5px;
      width: 8px;
      height: 4px;
      border: 3px solid  #669999;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after {
      opacity: 1;
      }
      .flax {
      display:flex;
      justify-content:space-around;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px;
      background:  #669999;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background:  #a3c2c2;
      }
      @media (min-width: 568px) {
      .name-item, .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .name-item input, .name-item div {
      width: calc(50% - 20px);
      }
      .name-item div input {
      width:97%;}
      .name-item div label {
      display:block;
      padding-bottom:5px;
      }
      }
    </style>
  </head>
  <body>
    
    <div class="testbox">
      <form method="POST" action="insertdata.php">
        <div class="banner">
          <h1>PSYWC'20 Congress</h1>
        </div>
        <br/>
        <p>
        <center> <b>CheckOut Page</b> <br>
          <i style="color: red">please check your details before check out</i>
          <h2>Payment Should be done Either by GooglePay or PhonePay </h2>
          <h2>Successful Payment Transcation Id should be filled below and Also Mail the ScreenShot of payment to gauravsonawane@ieee.org</h2>
          <h2>For any Query contact Registration Head Aditya Kumar. Contact NO-8416868611</h2>
        </center>
        </p>
        <br/>
        <form method="POST" action="insertdata.php">
          <img src="img/payment/googlepay.jpeg" height="500" align="center" alt="">
          <img src="img/payment/phonepay.jpeg" align="right" height="500" alt="">


        <table style="height: 166px; margin-left: auto; margin-right: auto;" width="606">
          
<tbody>
<tr>
<td style="width: 295px;">Name</td>
<td style="width: 295px;"><?php echo mysqli_real_escape_string($conn, $_REQUEST['fname'])?><?php echo mysqli_real_escape_string($conn, $_REQUEST['lname'])?></td>
</tr>
<tr>
<td style="width: 295px;">Email</td>
<td style="width: 295px;"><?php echo mysqli_real_escape_string($conn, $_REQUEST['eaddress'])?></td>
</tr>
<tr>
<td style="width: 295px;">Contact</td>
<td style="width: 295px;"><?php echo mysqli_real_escape_string($conn, $_REQUEST['phone'])?></td>
</tr>
<tr>
<td style="width: 295px;">Transaction Amount</td>

<td style="width: 295px;"><?php echo mysqli_real_escape_string($conn, $_REQUEST['price'])?></td>
</tr>

<tr>
<td style="width: 295px;">Please Enter Transaction ID</td>

<td style="width: 295px;"> <input id="TXNID" type="text"   name="TXNID" required/></td>
</tr>
<!--<tr>
<td style="width: 295px;">Upload ScreenShot of Transaction/Payment</td>

<td style="width: 295px;">   <input type="file" id="imgscreen" name="imgscreen" accept="image/*" required/></td>
</tr>-->
<tr>
  <td> <input type="checkbox" id="agree1" name="agree1"  required></td>
<td>Mail will be send to your email-id after validating your transaction details within 2-3 working days..</td>
</tr>
<tr>
<td></td>
<td style="width: 295px;"> <button type="submit" name="button">Check Out</button></td>
</tr>

</tbody>
</table>
</form>
  </body>
</html>