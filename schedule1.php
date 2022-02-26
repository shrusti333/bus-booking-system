<?php session_start();?>

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

    $conn=$conn = new mysqli('localhost','root','#S@v1ND33') ;
    //if( isset($_Post['searchbus'])){
        //$sname=$_POST['sname'];
        //$dname=$_POST['dname'];
       // $time=$_POST['time1'];
       // $mydb=mysqli_select_dp($conn,'');
        //$sname=$_SESSION['sname'];
       // $dname=$_SESSION['dname'];
        //$time=$_SESSION['time1'];
        
        $sql = " SELECT * FROM busticketbooking.schedule WHERE sname='vasco' AND dname='canacona ' AND timing ='170000' ";
        $query_run= mysqli_query($conn,$sql);
		
        $i=mysqli_num_rows($query_run );
        if($i>0){
            while($row =mysqli_fetch_row($query_run)){
    
    ?>


     <tr>
         <td>check</td>
         <td><?php $row['sid'];?></td>
         <td><?php$row['bid'];?></td>
         <td> <?php$row['sname'];?></td>
         <td><?php$row['via'];?></td>
         <td><?php$row['dname'];?></td>
         <td><?php$row['fare_amount'];?></td>
         <td><?php$row['timing'];?></td>
         <td>seats</td>
    </tr>
    <?php
    }}
else{ ?>

   <tr><td> colspan="8"> no bus available</td></tr><?php 
//}
?>
  
</tables >
<?php
} 
?></div>
<div class="button2">
<table><tr><td><a href="passengerinfo.php">
<input type="button" value="Next"></a> </td><td> <a href="index.php">
<input type="button" value="cancel"></td></tr></table>
</div>


</header>
</html>