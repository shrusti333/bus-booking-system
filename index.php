<?php session_start();?>
<html>
<head>
<title>onlineBusBooking</title>
<link rel="stylesheet" href="style4.css">
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
<form method="POST" action="schedule.php">
<div class="passengerform"  >
<div class="passengerfrom" >
    <table><tr><td>
<label> Ride from</label></td><td>
<select name='sname'>
 <option value="starting-name" name="sname">starting name</option>
 <option value="margao" name="sname">Margao</option>
 <option value="panji" name="sname">Panaji</option>
 <option value="ponda" name="sname">Ponda</option>
 <option value="vasco " name="sname">vasco Da Gama</option>
 <option value="canacona" name="sname">Canacona</option>

 </select></div>
<tr><td>
 <div class="passengerto">
 
 <label> Ride to</label></td><td>
<select id="destination" name="dname">
 <option value="destination-name" name="dname">destination name</option>
 <option value="margao" name="dname">Margao</option>
 <option value="panaji" name="dname">Panaji</option>
 <option value="ponda" name="dname">Ponda</option>
 <option value="vasco" name="dname">vasco Da Gama</option>
 <option value="canacona" name="dname">Canacona</option>

 </select></div>
 <div class="time"></td></tr>
 <tr><td>
 
 
 <label> Time</label></td><td>
<select id="time" name="time1">
 <option type='text'value="time">time</option>
 
 <option type='time' value="10000">1:00</option>
 <option type='time' value="20000">2:00</option>
 <option type='time' value="30000">3:00</option>
 <option type='time' value="40000">4:00</option>
 <option type='time' value="50000">5:00</option>
 <option type='time' value="60000">6:00</option>
 <option type='time' value="70000">7:00</option>
 <option type='time' value="80000">8:00</option>
 <option  type='time' value="90000">9:00</option>
 <option type='time' value="100000">10:00</option>
 <option type='time' value="110000">11:00</option>
 <option type='time' value="120000">12:00</option>
 <option type='time' value="130000">13:00</option>
 <option type='time' value="140000">14:00</option>
 <option type='time' value="150000">15:00</option>
 <option type='time' value="160000">16:00</option>
 <option type='time'  value="170000">17:00</option>
 <option type='time' value="180000">18:00</option>
 <option type='time' value="190000">19:00</option>
 <option type='time' value="200000">20:00</option>
 <option type='time' value="210000">21:00</option>
 <option type='time' value="220000">22:00</option>
 <option type='time' value="230000">23:00</option>
 <option type='time' value="240000">24:00</option></select></td></tr>
     </tr><tr><td colspan=2>
 </div>
</div>
<div class="button2">
   
<a href="schedule.php">
<input type="submit" name="searchbus" placeholder="search" >

</a></div></td></tr></table>
</form>

</header>
</body>
</html>
