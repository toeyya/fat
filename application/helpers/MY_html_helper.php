<?php


function cycle($key,$odd = 'odd',$even = '')
{
	return ($key&1) ? 'class="'.$even.'"' : 'class="'.$odd.'"';
}

function get_option($value,$text,$table,$where =FALSE,$order = FALSE)
{
	$CI =& get_instance();
	//$CI->db->debug = TRUE;
	$order = ($order) ? ' order by '.$order : NULL;
	$where = ($where) ? ' where '.$where:NULL;
	return $CI->db->GetAssoc('select '.$value.','.$text.' from '.$table.$where.$order);

}

function fix_file(&$files)
{
    $names = array( 'name' => 1, 'type' => 1, 'tmp_name' => 1, 'error' => 1, 'size' => 1);
	var_dump($files);
    foreach ($files as $key => $part) {
        // only deal with valid keys and multiple files
        $key = (string) $key;
        if (isset($names[$key]) && is_array($part)) {
            foreach ($part as $position => $value) {
                $files[$position][$key] = $value;
            }
            // remove old key reference
            unset($files[$key]);
        }
    }
}
function thumb($imgUrl,$width,$height,$zoom_and_crop,$param = NULL){
	if(strpos($imgUrl, "http://") !== false){
		return "<img ".$param." src=".$imgUrl." width=".$width." height=".$height.">";
	}else{
		return "<img ".$param." src=".site_url("media/timthumb/timthumb.php?src=".site_url($imgUrl)."&zc=".$zoom_and_crop."&w=".$width."&h=".$height)." width=".$width." height=".$height.">";
	}
}



function pagebreak($content){
	$break = '<div style="page-break-after: always;"><span style="display: none;">&nbsp;</span></div>';
	return substr("$content",0,strpos($content,$break)+strlen($break));
	//return    strstr($content, '<div style="page-break-after: always;"><span style="display: none;">&nbsp;</span></div>',TRUE); // for PHP 5.3.0
}




function js_loading()
{
	$CI =& get_instance();
	return '
				<script>
					$(window).load(function() {
						$.colorbox.close();
					});
				</script>';
}
function js_preview(){
	$CI =& get_instance();
	return '<link rel="stylesheet" href="css/print.css" />';
}

function budget_year($date,$year=FALSE)
{
			if(($date!=NULL)&&($date != '0000-00-00')){
				list($y,$m,$d) = explode("-",$date);
				$start_date=mktime(0,0,0,10,1,$y-1);
				$end_date=mktime(0,0,0,9,30,$y);
				$now=mktime(0,0,0,$m,$d,$y);
				if($now >=$start_date && $now <=$end_date){
					$yy=$y+543;
				}else{
					$yy=$y+544;
				}
				return $yy;
			}else{
				return false;
			}
}
function file_extension($val){
	$ext=array('xlsx','pdf', 'xls', 'doc', 'docx', 'ppt', 'pptx', 'rar','zip' );
	return in_array($val, $ext);
}
function image_extension($val){
	$ext=array('gif','jpg', 'jpeg');
	return in_array($val, $ext);
}

function title(){
	$title = array(1=>'1. กินอาหารครบ 5 หมู่ (ข้าว ผัก ผลไม้ เนื้อสัตว์ นม)',2=>'2. กินอาหารหลากหลาย ไม่ซ้ำ',3=>'3. กินผักมากกว่าวันละ 3 ทัพพี',4=>'4. กินผลไม้วันละ 2-3 ส่วน(หนึ่งส่วนเท่ากับ 6-8 คำ)'
						  ,5=>'5. กินปลา อย่างน้อยวันละ 1 มื้อ',6=>'6. กินเนื้อสัตว์ไม่ติดมัน สัปาดห์ละ 2-3 มื้อ',7=>'7. ดื่มนมขาดมันเนย วันละ 1-2 แก้ว',8=>'8. กินอาหารมื้อเย็นห่างจากเวลานอนไม่ร้อยกว่า 4 ชั่วโมง'
						  ,9=>'9. กินอาหารประเภทต้ม นึ่ง ลวก อบ',10=>'10. หลีกเลี่ยงอาหารไขมันสูง',11=>'11. หลีกเลี่ยงของหวาน และขนมที่มีเแป้งและน้ำตาลมาก',12=>'12. กินอาหารรสจืด'
						  ,13=>'13. เลือกดื่มน้ำเปล่าแทนน้ำอัดลมหรือน้ำหวาน',14=>'14. หลีกเลี่ยงเครื่องดื่มที่มีแอลกอฮอล์',15=>'15. อารมณ์ดี ไม่เครียด',16=>'16. นอนหลับไม่น้อยกว่าวันละ 7-8 ชั่วโมง'
						  ,17=>'17. ออกกำลังกายสัปาดห์ละ 5 วัน',18=>'18. ออกกำลังกายวันละ 30 นาที',19=>'19. ขณะออกกำลังกายหายใจเร็วขึ้นกว่าปกติและเหงื่อซึม',20=>'20. ทุกครั้งวัดรอบเอวไม่เกินเกณฑ์อ้วนลงพุง คือเพศหญิงไม่เกิน 80 ซม. และเพศชายไม่เกิน 90 ซม.');
	return $title;
}

function generate_password($length=5) {
      $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
      $password = '';
      for ( $i = 0; $i < $length; $i++ )
         $password .= substr($chars, mt_rand(0, strlen($chars) - 1), 1);

      return $password;
}



















?>