<?php 
$date = date("m.Y");
include("connect.php");
$sql2 = "SELECT count(*) FROM `attendance_tbl` WHERE `emp_id` = 6 AND `att_date` LIKE '%$date' " ;
$result2 = $connect->query($sql2);
$row2 = $result2->fetch_array();
								
								$days = $row2['0'];
								$salary = 508;
								$total = $days * $salary ;
								
								echo  $total ;
								
								?>