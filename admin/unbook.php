<?php 
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"pi_hotel");
    if($_GET['rt'] == 'a'){
    	$query = "update deluxe_non_ac set holder_name = null, holder_id = null,holder_mobile = null,holder_address = null,child = null,adult = null,in_date = null,out_date = null,status = 0 where room_no = $_GET[rn]";
    }
    if($_GET['rt'] == 'b'){
    	$query = "update superior_ac set holder_name = null, holder_id = null,holder_mobile = null,holder_address = null,child = null,adult = null,in_date = null,out_date = null,status = 0 where room_no = $_GET[rn]";	
    }
    if($_GET['rt'] == 'c'){
    	$query = "update executive_suite set holder_name = null, holder_id = null,holder_mobile = null,holder_address = null,child = null,adult = null,in_date = null,out_date = null,status = 0 where room_no = $_GET[rn]";
    }
    if($_GET['rt'] == 'd'){
    	$query = "update luxury_suite set holder_name = null, holder_id = null,holder_mobile = null,holder_address = null,child = null,adult = null,in_date = null,out_date = null,status = 0 where room_no = $_GET[rn]";
    }
    $query_run = mysqli_query($connection,$query);
    header("location:redirect.php");   
?>