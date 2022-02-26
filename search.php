<?php 
session_start();
$_session['sname']=$_post['sname']
if( isset($_post['searchbus']) && !empty($_post['searchbus'])){
header(  'location:index.php');
}
?>