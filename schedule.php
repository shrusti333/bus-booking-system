<?php
session_start();
$_SESSION['sname']=$_POST['sname'];
$_SESSION['dname']=$_POST['dname'];
$_SESSION['time1']=$_POST['time1'];


?>

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
<form method="POST" action="passengerinfo.php">
<div class="schedule-table">
    <table> <tr>
        <td> select</td>
        <td>sid</td>
        <td>bid</td>
        <td>starting name</td>
        <td>via</td>
        <td>destination name</td>
        <td>fareamount</td>
        <td>timing</td>
        <td>seats</td>
    </tr><?php

  
   include ("dbconnect.php");


if( isset($_POST['searchbus']) && !empty($_POST['searchbus'])){
    

        $sname=$_SESSION['sname'];
        $dname=$_SESSION['dname'];
        $time=$_SESSION['time1'];
      
        $sql = " SELECT * FROM schedule where sname='$sname' and dname='$dname' and timing='$time' ";
      
        $query_run=mysqli_query($conn,$sql) or die("bad query: $sql");
      $r=mysqli_num_rows($query_run);
           if($r>0){
        while( $row= mysqli_fetch_assoc( $query_run)){
           
    ?>



     <tr>
         <td><input type="radio"  name="check" id="check" value="<?php echo "".$row['sid']; ?>"></td><?php
         
          ?>
         <td><?php echo"". $row['sid'] ;?></td>
         <td><?php echo"".$row['bid'] ;?></td>
         <td> <?php echo "". $row['sname'] ;?></td>
         <td><?php echo"".$row['via'] ;?></td>
         <td><?php echo"".$row['dname'];?></td>
         <td><?php echo"".$row['fare'];?></td>
         <td><?php echo"".$row['timing'];?></td>
         <td><?php $q=" SELECT capacity FROM bus AS b, schedule AS s WHERE b.bid=s.bid";
                 $run=mysqli_query($conn,$q) or die("bad query: $sql");  
                 $rows= mysqli_fetch_assoc( $run);
                 echo"".$rows['capacity'];
                  ?> </td>
    </tr>
    <?php
    }}
else{ ?>

   <tr><td colspan="8" >no bus available</td></tr><?php 
}
?>
  
</tables >
<?php
} 
?></div>
<div class="button2">
<table><tr><td><a href="passengerinfo.php">
<input type="submit"  value="Next" name="check2"></a> </td><td> <a href="index.php">
<input type="button" value="cancel"></td></tr></table>
</div>
</form>

</header>
</html>