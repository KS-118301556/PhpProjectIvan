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
    <!DOCTYPE html>
<html>
<body>
    
<center>
    
    <p>
    <h1><b><u>Purchase Receipt</u></b></h1>
    <br />
    <br />
    <style>
            body {
                background-color: lightblue;
            }
            p {
            background-color: whitesmoke;
            width: 800px;
            border: 25px solid black;
            padding: 25px;
            margin: 25px;
        }
           body {margin:0;}
               
    </style>
<!--    //Starting session to get the variable from the last page -->
<?php
session_start();
$totalValue = $_POST['txtTotal'];     
$fullNameValue = $_POST['txtName'];

echo "The Name is: ".$fullNameValue.".";
echo "<br></br>";
echo "The Total Value Is $".$totalValue.".";
echo "Thanking You! Please come again!";

?>
</p>
</center>
</body>
</html>




Reply