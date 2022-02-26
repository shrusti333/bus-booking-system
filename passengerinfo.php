<?php

 session_start();
 $_session['check']=$_POST['check'];

   
?>
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
<form method='POST' action='payment.php'>
<table ><tr><td colspan=2><h2> Passenger information</h2></td></tr><tr>
<?php
include ('dbconnect.php');
 if( isset($_POST['check2']) && !empty($_POST['check2'])){
    $sid=$_session['check'];
    $s2=" SELECT capacity from bus where bid=(select bid from schedule where sid='$sid') ";
    $run1= mysqli_query($conn,$s2) or die("bad query : $s2");
    $row4= mysqli_fetch_assoc( $run1);
    if ( $row4['capacity'] > 0) {
   
 ?>
<td> <label>     schedule id:     </label></td><td><input type="text"  name="check3"  value="<?php echo "".$_session['check']; ?>" readonly></td></tr>

<tr><td><label> Name:     </label></td>
<td> <input type="text" name="pname" placeholder="enter your full name"></td></tr>
<tr><td><label> contact:     </label> </td>
<td> <input type="text" name="contact" placeholder="enter the contact"></td></tr>
<tr><td><label> email:     </label> </td>
<td> <input type="email" name="email" placeholder="enter "></td></tr>
<tr><td><label> no of seats:     </label> </td>
<td> <input type="text" name="noofseat" placeholder="enter the no of seats"></td></tr>
<?php 

 }else {?><tr><td colspan="2" >bus full sorry !!</td></tr>
<?php 
      }}
 
 else{?><tr><td colspan="2" >select the schedule first</td></tr><?php }
   ?>


</table>

<div class="button2">
<table><tr><td><a href="payment.php">
<input type="submit" value="Next" name='next'></a> </td><td> <a href="index.php">
<input type="button" value="cancel"></td></tr></table>
</div>



</form>


</div>

</div>


</header>
</html>