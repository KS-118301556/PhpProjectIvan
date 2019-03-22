<html lang="en" xmlns="http.//www.w3.org/1999/xhtml">
    <center><img src="logo1.png" alt="logo"></center>
<html>
<head>
<style>
body{
        background-image: url("background.jpg")
    }
    ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #F7819F;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
</style>
</head>
<body>

<ul>
  <li><a href="index.html">Home</a></li>
  <li><a href="Sheehanconsulting.html">Our Products</a></li>
  <li><a href="eBusiness2.html">Personal details</a></li>
  <li><a href="eBusiness3.html">Payment</a></li>
</ul>

</body>
    <head>
<style>
div {
  background-color: white;
  width: 300px;
  border: 25px solid pink;
  padding: 25px;
  margin: 25px;
}
</style>
</head>
<body>
    <?php
session_start();
$fullNameValue = "";
$totalValue2 = "";
/*
* Create a session variable for the mobile number
*/
$totalValue = $_POST['txtTotal'];
$_SESSION['txtName'] = $fullNameValue;
$_SESSION['txtTotal'] = $totalValue2
/**
*Allocate the mobile number session variable to a text box
*/
?>
<!DOCTYPE html>
<html>
<head>
    <style>
         body {
                background-color: lightblue;
            }
          
        div {
            background-color: whitesmoke;
            width: 300px;
            border: 25px solid black;
            padding: 25px;
            margin: 25px;
        }
    </style>
<title>eBus2</title>
</head>
<body>
<center>
<div class="form">
<form name="Details" method = "post" action="eBusiness3.php">
<center>
<table cellspacing="10">
<tr>
<td><b></b></td>
<td><b>Enter in your Details below</b></td>
</tr>
<tr>
<td>Name</td>
<td><input type="text" id="txtName" name="txtName" value="" required="" /></td>
</tr>
<tr>
<td>Phone Number</td>
<td><input type="text" id="txtNum" value="" required="" /></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" id="txtPassword" name="txtPassword" value="" required="" max=""/></td>
</tr>
<tr>
 <td><input type="hidden" id="txtTotal" name="txtTotal" value="<?php echo $totalValue;?>"/
 </tr>
 </table>
 
 </center>
 
 <center>
 
 <input type="submit" name="btnContinue" id="btnContinue" onclick="" value="Continue"/>
 
  </div>
                    </form>
</center>
            </body>
    </html>