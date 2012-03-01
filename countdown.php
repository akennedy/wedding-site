<?php
// LI-Countdown by LI-Scripts
// Version: 1.0
// Date: 12 Aug 2006
// All rights reserved 2006 LI-Scripts
// DO NOT COPY OR DISTRIBUTE THIS SCRIPT UNDER YOUR OWN NAME
// VISIT OUR WEBSITE FOR UPDATED VERSIONS
// REPORT ANY BUGS, SUGGESTIONS OR QUESTIONS TO:
// http://www.liscripts.net/support.php


// DO NOT CHANGE ANYTHING BELOW
function countdown($year,$month,$day,$hour,$min,$sec,$setup) {
require("$setup.php");
$future_time = mktime($hour,$min,$sec,$month,$day,$year);

$curr_time = time();
$utcdiff = date('Z', $curr_time);
$user_time = $curr_time - $utcdiff + ($utc_diff * 3600);
$time_diff = $future_time - $user_time;

switch($style) {
	// Style 1
	case 1:
$n_years = intval($time_diff/31536000);
$sec_rem = $time_diff%31536000;
$n_days = intval($sec_rem/86400);
$sec_rem = $sec_rem%86400;
$n_hours = intval($sec_rem/3600);
$sec_rem = $sec_rem%3600;
$n_mins = intval($sec_rem/60);
$n_secs = $sec_rem%60;

	switch($n_years) {
		case 0:
		$layout = "";
		$prev_empty = 1;
		break;
		case 1:
		$layout = $n_years . " $year_text ";
		$prev_empty = 0;
		break;
		default:
		$layout = $n_years . " $years_text ";
		$prev_empty = 0;
		break;
	}
	switch($n_days) {
		case 0:
			 if($prev_empty == 1) {
			 $layout = "";
			 $prev_empty = 1;
			 }
			 else {
			 $layout .= $n_days . " $days_text ";
			 $prev_empty = 0;
			 }
		break;
		case 1:
		$layout .= $n_days . " $day_text ";
		$prev_empty = 0;
		break;
		default:
		$layout .= $n_days . " $days_text ";
		$prev_empty = 0;
		break;
	}
	switch($n_hours) {
		case 0:
			 if($prev_empty == 1) {
			 $layout = "";
			 $prev_empty = 1;
			 }
			 else {
			 $layout .= $n_hours . " $hours_text ";
			 $prev_empty = 0;
			 }
		break;
		case 1:
		$layout .= $n_hours . " $hour_text ";
		break;
		default:
		$layout .= $n_hours . " $hours_text ";
		break;
	}
	switch($n_mins) {
		case 0:
			 if($prev_empty == 1) {
			 $layout = "";
			 $prev_empty = 1;
			 }
			 else {
			 $layout .= $n_mins . " $mins_text ";
			 $prev_empty = 0;
			 }
		break;
		case 1:
		$layout .= $n_mins . " $min_text ";
		break;
		default:
		$layout .= $n_mins . " $mins_text ";
		break;
	}
	switch($n_secs) {
		case 0:
			 if($prev_empty == 1) {
			 $layout = "";
			 $prev_empty = 1;
			 }
			 else {
			 $layout .= $n_secs . " $secs_text ";
			 $prev_empty = 0;
			 }
		break;
		case 1:
		$layout .= $n_secs . " $sec_text ";
		break;
		default:
		$layout .= $n_secs . " $secs_text ";
		break;
	}
	
	if($layout == "" || $n_secs < 0) {
	echo "$msg_complete";
	}
	else {
	echo $layout;
	}
	break;
	
	// Style 2
	case 2:
$n_days = intval($time_diff/86400);
		switch($n_days) {
			 case 0:
			 echo "$msg_complete";
			 break;
			 case 1:
			 echo $n_days . " $day_text";
			 break;
			 default:
			 echo $n_days . " $days_text";
			 break;
		}
	break;
	
	// Style 3
	case 3:
$n_hours = intval($time_diff/3600);
		switch($n_hours) {
			 case 0:
			 echo "$msg_complete";
			 break;
			 case 1:
			 echo $n_hours . " $hour_text";
			 break;
			 default:
			 echo $n_hours . " $hours_text";
			 break;
		}
	break;
	
	// Style 4
	case 4:
$n_mins = intval($time_diff/60);
		switch($n_mins) {
			 case 0:
			 echo "$msg_complete";
			 break;
			 case 1:
			 echo $n_mins . " $min_text";
			 break;
			 default:
			 echo $n_mins . " $mins_text";
			 break;
		}
	break;
	
	// Style 5
	case 5:
$n_secs = $time_diff;
		switch($n_secs) {
			 case 0:
			 echo "$msg_complete";
			 break;
			 case 1:
			 echo $n_secs . " $sec_text";
			 break;
			 default:
			 echo $n_secs . " $secs_text";
			 break;
		}		
}

// End function
}

?>