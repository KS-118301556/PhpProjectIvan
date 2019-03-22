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
$totalValue="";
$_Session['txtTotal']= $totalValue;
?>
<!DOCTYPE html>
<html lang="en" xmlns="http.//www.w3.org/1999/xhtml">
    <head>
        <style>
            body {
                background-color: lightblue;
            }
             div {
            background-color: whitesmoke;
            width: 450px;
            border: 25px solid black;
            padding: 25px;
            margin: 25px;
        }
           body {margin:0;}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  position: fixed;
  top: 0;
  width: 100%;
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
li a:hover:not(.active) {
  background-color: #111;
}
.active {
  background-color: #4CAF50;
}
input {
    background-color: lightblue;
    
}
button {
                background-color: black;
                    
                     
                    
            }
          
            
            .button{
                font-size: 24px;}
        </style>
        <meta charset="utf-8"/>
        <title>EBus1</title>
        <link rel="stylesheet" href="style.css" type="text/css"/>       
    </head>
        <head>
    <body>
    <center>
        <br></br>
        <br></br>
        <div class="form">
            <form name="intCalc" method="post" action="eBusiness2.php">
                
                <h1 style="color: darkblue;" align="center">Shop Calculator</h1>
                
                
            <hr/>
            <center>
                
                
                        <table cellspacing="10">
                        <tr>
                            <td><b><h3><center>Consultancy Services</center></h3></b></td>
                        </tr>
                        <tr>
                            <td><b>Blockchain @ $1000</b></td>
                            <td><input type="radio" id="blockchain" name="rdoGroup" value="1000" required></td>
                        </tr>
                        <tr>
                            <td><b>Autonomous Things (Robotics) @ $5000</b></td>
                            <td><input type="radio" id="autonomousthings" name="rdoGroup" value="2000" required></td>
                        </tr>
                        <tr>
                            <td><b>Immersive Experience @ $10000</b></td>
                            <td><input type="radio" id="immersiveexperience" name="rdoGroup" value="3000" required></td>
                        </tr>
                        
                        </table>
            </center>
            <br />
            <center>
                <table cellspacing="10">
                    <tr>
                        <td><b></b></td>
                        <td><b>Amount</b></td>
                    </tr>
                    <tr>
                        <td>Sub Total</td>
                        <td><input type="text" id="txtSubTot" name="txtSub" readonly/></td>
                    </tr>
                    <tr>
                        <td>-Discount @10%</td>
                        <td><input type="text" id="txtDisc" name="txtDisc" readonly/></td>
                    </tr>
                    <tr>
                        <td>+VAT @20%</td>
                        <td><input type="text" id="txtVAT" name="txtVAT" readonly/></td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td><input type="text" id="txtTotal" name="txtTotal" value="" readonly/></td>
                    </tr>
                </table>
            </center>
            <br/>
            <center>
                <input type="button" name="btnCalc" id="btnCalc" onclick="calcSub()" value="Calculate Amount"/>
                <input type="button" name="btnClear" id="btnClear" onclick="AmountClear()" value="Clear"/>
                <input type="submit" name="btnProceed" id="btnProceed" onclick="" value="Proceed"/>
            </center>
            </form>
        </div>
        <script type="text/javascript">
            function calcSub(){
                //Assigning variables to the values
                var subAmount= parseFloat(document.getElementById('txtSubTot').value);
                var blockchain = parseFloat(document.getElementById('blockchain').value);
                var autonomousthings = parseFloat(document.getElementById('autonomousthings').value);
                var immersiveexperience = parseFloat(document.getElementById('immersiveexperience').value);
            
            //If radio buttons are clicked values are assigned
           if (document.getElementById('blockchain').checked){
               document.intCalc.txtSubTot.value = blockchain;
               subAmount= blockchain;
               calculation(subAmount);
           }
           else if (document.getElementById('autonomousthings').checked){
               document.intCalc.txtSubTot.value = autonomousthings;
               subAmount= autonomousthings;
               calculation(subAmount);
           }
            else if (document.getElementById('immersiveexperience').checked){
               document.intCalc.txtSubTot.value = immersiveexperience;
               subAmount= immersiveexperience;
               calculation(subAmount);
           }
       }
        //Function for calculating values 
        function calculation(parmSTotal){
            var subTotal = parseFloat(parmSTotal);
            var discCalc = parseFloat(subTotal*.10);
            var vatCalc = parseFloat(subTotal*.20);
            var total = parseFloat(subTotal - discCalc + vatCalc);
            
            //Instering them into the correct fields
            document.intCalc.txtDisc.value = discCalc;
             document.intCalc.txtVAT.value = vatCalc;
              document.intCalc.txtTotal.value = total;
          }
          function AmountClear(){
              document.getElementById("txtSubTot").value = "";
               document.getElementById("txtDisc").value = "";
                document.getElementById("txtVAT").value = "";
                 document.getElementById("txtTotal").value = "";
                        
          }
          
            
     </script>   
    </center>
    
    <br></br>
        
        <br></br>
        <br></br>
    </body>
    
</html>

