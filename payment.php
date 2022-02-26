<?php
session_start();
include ("dbconnect.php");
if( isset($_POST['next']) && !empty($_POST['next'])){
    $_SESSION['pname']=$_POST['pname'];
    $_SESSION['contact']=$_POST['contact'];
    $_SESSION['email']=$_POST['email'];
   $_SESSION['noofseat']=$_POST['noofseat'];
    $_session['check3']=$_POST['check3'];
   
    $sid=$_POST['check3'];
    $pname= $_SESSION['pname'];
    $contact=$_SESSION['contact'];
    $email= $_SESSION['email'];
    $noofseat=$_SESSION['noofseat'];
        $sql=" INSERT INTO customer  VALUES ('','$sid','$pname', '$contact', '$email', '$noofseat')";
    $query_run= mysqli_query($conn,$sql) or die("bad query : $sql");
    $s2=" UPDATE bus SET capacity=capacity-$noofseat where bid=(select bid from schedule where sid='$sid' )";
    $run1= mysqli_query($conn,$s2) or die("bad query : $s2");
    
    
    $s4="SELECT fare FROM project.schedule where sid='$sid'  ";
     
$run4=mysqli_query($conn,$s4) or die("bad query : $s4");
$r2=mysqli_num_rows($run4);
$row2= mysqli_fetch_assoc( $run4);
$fare= $row2['fare'];

$amount=$noofseat * $fare;


    }?>
<html>
<head>
<title>onlineBusBooking</title>
<link rel="stylesheet" href="styles.css">

</head>
<body >
<header>
<div class="wrapper">
<div class="logo">
<img src="back.jpg" >

</div>

<ul class="nav-area">
 <li><a href="index.php">HOME</a></li>
 <li><a href="$">ABOUT</a></li>
 <li><a href="$">CONTACT</a></li>
 </ul>
</div>
<div class="main">
<div class="register">
<form method="POST" action="receipt.php">
<table ><tr><td colspan=2><h2> Payment</h2></td></tr>

<tr><td><label> passenger name:    </label></td><td><input type="text" name="pname" value="
<?php 
    echo "".$pname;
    ?>" readonly >
     </td></tr>
<tr><td><label> total amount:     </label></td>
<td> <input type="type" name="amount" value="<?php
echo "".$amount;

?>"readonly>


</td></tr>
</table>
<ul class="paymentoption">
 <li><input type="radio" class="radio" id="credit" name="option" value="credit"/><label for="credit" >credit </label> </li>
 <li><input type="radio" class="radio" id="cash" name="option" value="cash"/><label for="cash" >cash </label></li>
 <li><input type="radio" class="radio" id="debit" name="option" value="debit";/><label for="debit" >debit </label></li>
  <li><input type="radio" class="radio" id="online-payment" name="option" value="online-payment"/><label for="online-payment" >online-payment </label></li>
 </ul>

<div class="button2">
<table><tr><td><a href="receipt.php">
<input type="submit" name="pay"></a> </td><td> <a href="passengerinfo.php">
<input type="button" value="cancel"></td></tr></table>
</div>


</form>
</div>

</div></header>
</html>