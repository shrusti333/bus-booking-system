<?php
session_start();
include ("dbconnect.php");
if( isset($_POST['pay']) && !empty($_POST['pay'])){
 $_session['pname']=$_POST['pname'];
$_session['amount']=$_POST['amount'];
$_session['option']=$_POST['option'];
$pname= $_session['pname'];
$amount=$_POST['amount'];
$method=$_session['option'];



$s=" SELECT *  from customer  where cname='$pname'";
    $run= mysqli_query($conn,$s) or die("bad query : $s");
    $row=mysqli_fetch_assoc($run);
$cid=$row['cid'];
$sid=$row['sid'];
$sql=" INSERT INTO payment  VALUES ('','$cid','$method', '$amount')";
    $query_run= mysqli_query($conn,$sql) or die("bad query : $sql");
$s1=" SELECT *  from schedule as s,bus as b  where s.bid=b.bid and sid='$sid'";
    $run1= mysqli_query($conn,$s1) or die("bad query : $s1");
    $row1=mysqli_fetch_assoc($run1);
    //$bid=$row1['bid'];
   // $s2=" SELECT *  from bus where bid='$bid'";
   // $run2= mysqli_query($conn,$s2) or die("bad query : $s2");
   // $row2=mysqli_fetch_assoc($run2);
        
    $s3=" SELECT *  from payment where cid='$cid'";
    $run3= mysqli_query($conn,$s3) or die("bad query : $s3");
    $row3=mysqli_fetch_assoc($run3);  
    
    }?>

<html>
<head>
<title>onlineBusBooking</title>
<link rel="stylesheet" href="style3.css">

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

 <form>
<div class="schedule-table">
 <table> <tr><td colspan=6> 
<h1> Thank you!!</h1></td></tr>

<tr><td colspan=6> schedule info</td></tr>
    <tr><td>schedule id : </td><td> <?php echo "".$row1['sid']?></td><td>bus id: </td><td> <?php echo "".$row1['bid']?></td><td> bus type:</td><td><?php echo "".$row1['bustype']?> </td></tr>
<tr><td>from: </td><td><?php echo "".$row1['sname']?>  </td><td>via: </td><td> <?php echo "".$row1['via']?></td><td> to :</td><td><?php echo "".$row1['dname']?> </td></tr>
<tr><td > timing :</td><td> <?php echo "".$row1['timing']?></td><td> fare amount:</td><td><?php echo "".$row1['fare']?> </td></tr>
<tr><td colspan=6> passenger info</td></tr>
<tr><td>paseenger id :</td><td colspan=2><?php echo "".$row['cid']?></td>
<td>passenger name:</td><td colspan=2><?php echo "".$row['cname']?></td></tr>
<tr><td>contact:</td><td colspan=2><?php echo "".$row['ccontact']?></td><td>email:</td><td colspan=2><?php echo "".$row['cemail']?></td></tr>
<tr><td colspan=6> payment info</td></tr>
<tr><td>payment id :</td><td colspan=2><?php echo "".$row3['pid']?></td>
<td>method:</td><td colspan=2><?php echo "".$row3['method']?></td></tr>
<tr><td>total amount :</td><td colspan=2><?php echo "".$row3['amount']?></td>
<td>status:</td><td colspan=2> paid </td></tr>

<div class="button2">
<table><tr><td><a href="index.php">
<input type="button" value="done"></a> </td></tr></table>
</div>
</div></form>
</header>

</html>