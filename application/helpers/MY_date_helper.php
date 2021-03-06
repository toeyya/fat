<?php
if (!function_exists('mysql_to_th')) {
	function mysql_to_th($datetime = '',$format = 'S' ,$time = FALSE)	{
		if($datetime == '0000-00-00' || $datetime=='')return false;
		if($format == 'F') {
			$month_th = array( 1 =>'มกราคม',2 => 'กุมภาพันธ์',3=>'มีนาคม',4=>'เมษายน',5=>'พฤษภาคม',6=>'มิถุนายน',7=>'กรกฏาคม',8=>'สิงหาคม',9=>'กันยายน',10=>'ตุลาคม',11=>'พฤศจิกายน',12=>'ธันวาคม');
		} else {
			$month_th = array( 1 =>'ม.ค.',2 => 'ก.พ.',3=>'มี.ค.',4=>'เม.ย',5=>'พ.ค.',6=>'มิ.ย',7=>'ก.ค.',8=>'ส.ค.',9=>'ก.ย.',10=>'ต.ค.',11=>'พ.ย.',12=>'ธ.ค.');
		}

		$datetime = mysql_to_unix($datetime);

		$r = date('d', $datetime).' '.$month_th[date('n', $datetime)].' '.(date('Y', $datetime) + 543);

		if($time) {
			$r .= ' - '.date('H', $datetime).':'.date('i', $datetime).' น.';
		}

		return $r;
	}
}

if(!function_exists('get_year_option'))
{
	function get_year_option($start,$plus = 0)
	{
		$year = (date('Y') + 543) + $plus;
		$year_eng = date('Y');
		$data = array();
		for($year;$year >= $start;$year--)
		{
			$data[$year] = $year;
			--$year_eng;
		}
		return $data;
	}
}
	function DB2Date($date)
	{
		if($date!=NULL && $date!="0000-00-00")
		{
			list($y,$m,$d) = explode("-",$date);
			return substr($d,0,2)."/".$m."/".($y+543);
		}else{
			 $date="";
			 return $date; }
	}
	function DB2DateTime($Dt){
		if($Dt!=NULL){
			list($date,$time) = explode(" ",$Dt);
			list($y,$m,$d)   = explode("-",$date);
	                $showtime = ($time)?$time:'';
			$y=($y=="0000")?"0000":$y+543;
			return $d."/".$m."/".($y).' '.$showtime;
		}else{ return $Dt; }
	}



	function DateTH2DB($date){
		list($d,$m,$y) = explode('/', $date);
	    $y-=543;
	    return $y.'-'.$m.'-'.$d;

	}

if ( ! function_exists('Date2DB'))
{
	function Date2DB($date){
		if($date!=NULL && $date!="")
		{
			list($y,$m,$d) = explode('-', $date);
	    	$y-=543;
	    	return $y.'-'.$m.'-'.$d;
		}else{
			$date="";
			return $date;
		}

	}
}

if ( ! function_exists('DateTime2DB'))
{
	function DateTime2DB($Dt){
		if($Dt!=NULL && $Dt!="")
		{
			list($date,$time)=explode(" ",$Dt);
			list($y,$m,$d) = explode('-', $date);
			$showtime = ($time)?$time:'';
	    	$y-=543;
	    	return $y.'-'.$m.'-'.$d.' '.$showtime;
		}else{
			$Dt="";
			return $Dt;
		}

	}
}


	function DBdate($date){
		if($date!=NULL && $date!="0000-00-00")
		{
			list($y,$m,$d) = explode('-', $date);
	    	$y+=543;
	    	return $y.'-'.$m.'-'.$d;
		}else{
			$date="";
			return $date;
		}

	}


if ( ! function_exists('db_to_th'))
{
function db_to_th($datetime = '', $time = FALSE ,$format = 'F',$dayofweek = FALSE)
	{
		if($format == 'F')
		{
			$month_th = array(1 =>'มกราคม',2 => 'กุมภาพันธ์',3=>'มีนาคม',4=>'เมษายน',5=>'พฤษภาคม',6=>'มิถุนายน',7=>'กรกฏาคม',8=>'สิงหาคม',9=>'กันยายน',10=>'ตุลาคม',11=>'พฤศจิกายน',12=>'ธันวาคม');
			$date_th=array(0=>'อาทิตย์',1=>'จันทร์',2=>'อังคาร',3=>'พุธ',4=>'พฤหัสบดี',5=>'ศุกร์',6=>'เสาร์');
		}
		else
		{
			$month_th = array( 1 =>'ม.ค.',2 => 'ก.พ.',3=>'มี.ค.',4=>'เม.ย',5=>'พ.ค.',6=>'มิ.ย',7=>'ก.ค.',8=>'ส.ค.',9=>'ก.ย.',10=>'ต.ค.',11=>'พ.ย.',12=>'ธ.ค.');
		}

		$datetime = mysql_to_unix($datetime);
		if($dayofweek)
		{
			$r =$date_th[date('w',$datetime)].'ที่ '.date('d', $datetime).' '.$month_th[date('n', $datetime)].' '.(date('Y', $datetime) + 543);
		}
		else
		{
			$r =date('d', $datetime).' '.$month_th[date('n', $datetime)].' '.(date('Y', $datetime) + 543);
		}

		if($time)
		{
				$r .= ' - '.date('H', $datetime).':'.date('i', $datetime);
		}

		return $r;
	}
}

if ( ! function_exists('unix_to_human_date'))
{
	function unix_to_human_date($time = '')
	{
		return date('Y', $time).'-'.date('m', $time).'-'.date('d', $time);
	}
}

if(! function_exists('DateDiff'))
{
	function DateDiff($strDate1,$strDate2)
	{
		return (strtotime($strDate2) - strtotime($strDate1))/(60 * 60 * 24 ); // 1 day = 60*60*24
	}
}

if(! function_exists('timespan'))
{
	function timespan($rightside = 1, $leftside = '',$module = FALSE)
	{
		if ( ! is_numeric($rightside))
		{
			$rightside = 1;
		}

		if ( ! is_numeric($leftside))
		{
			$leftside = time();
		}

		if ($leftside <= $rightside)
		{
			$rightside = 1;
			if($module=="asset_list"){return "หมดเวลารับประกัน";	}
		}
		else
		{
			$rightside = $leftside - $rightside;
		}

		$str = '';
		$asset_list='';
		$years = bcdiv($rightside,31536000);

		if ($years > 0)
		{
			$str .= $years.' ปี, ';

		}

		$rightside -= $years * 31536000;
		$months = bcdiv($rightside,2628000);

		if ($years > 0 || $months > 0)
		{
			if ($months > 0)
			{
				$str .= $months.' เดือน, ';

			}

			$rightside -= $months * 2628000;
		}
		$weeks = bcdiv($rightside,604800);

		if ($years > 0 || $months > 0 || $weeks > 0)
		{
			if ($weeks > 0)
			{
				$str .= $weeks.' สัปดาห์, ';

			}

			$rightside -= $weeks * 604800;
		}
		$days = bcdiv($rightside,86400);

		if ($months > 0 || $weeks > 0 || $days > 0)
		{
			if ($days > 0)
			{
				$str .= $days.' วัน, ';

			}

			$rightside -= $days * 86400;
		}

		/*$hours = floor($rightside / 3600);

		if ($days > 0 || $hours > 0)
		{
			if ($hours > 0)
			{
				$str .= $hours.' ชั่วโมง, ';
			}

			$rightside -= $hours * 3600;
			//$rightside =$rightside-($hours * 3600);
		}

		$minutes = floor($rightside / 60);

		if ($days > 0 || $hours > 0 || $minutes > 0)
		{
			if ($minutes > 0)
			{
				$str .= $minutes.' นาที, ';
			}

			$rightside -= $minutes * 60;
			//$rightside =$rightside-($minutes * 60);
		}

		if ($str == '')
		{
			$str .= $rightside.' วินาที';
		}*/

			return substr(trim($str), 0, -1);

	}
	function isWeekend($date) {
    	$weekDay = date('w', strtotime($date));
		echo $weekDay;
    	return ($weekDay == 0 || $weekDay == 6);
	}
	function month_th($id){
		$month_th = array(1 =>'มกราคม',2 => 'กุมภาพันธ์',3=>'มีนาคม',4=>'เมษายน',5=>'พฤษภาคม',6=>'มิถุนายน',7=>'กรกฏาคม',8=>'สิงหาคม',9=>'กันยายน',10=>'ตุลาคม',11=>'พฤศจิกายน',12=>'ธันวาคม');
		return($month_th[$id]);
	}
	if(!function_exists('get_month'))
	{
		function get_month()
		{
			return array('1'=>'มกราคม','2'=>'กุมภาพันธ์','3'=>'มีนาคม','4'=>'เมษายน','5'=>'พฤษภาคม','6'=>'มิถุนายน','7'=>'กรกฏาคม','8'=>'สิงหาคม','9'=>'กันยายน','10'=>'ตุลาคม','11'=>'พฤศจิกายน','12'=>'ธันวาคม');
		}
	}

}
?>