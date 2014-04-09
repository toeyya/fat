<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<base href="<?php echo base_url(); ?>" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo $template['title'] ?></title>
	<?php include("themes/default/_css.php");?>
		<?php include("_css.php");?>
	<script type="text/javascript" src="media/js/jquery-1.6.4.min.js"></script>
    <?php echo $template['metadata'] ?>
</head>
<body>
<div class="row" id="bg3-theme">
    <div class="container">
	<?php include('themes/default/_header.php'); ?>
	<?php include('themes/default/_menu.php'); ?>
	 <div id="row5">
		<div id="blank">
		<div class="titleGroup"><img src="media/img/title-person.png" width="397" height="96"></div>
		<div id="topmenuPerson">
			<ul>
		    	<li class="topmenuPerson1"><a href="f_weight/index/1">&nbsp;</a></li>
		        <li class="topmenuPerson2"><a href="f_weight/index/2">&nbsp;</a></li>
		        <li class="topmenuPerson7"><a href="#">&nbsp;</a>
		        	<ul class="sub-topmenuPerson7">
		                <li style="width:400px;"><a href="report/index/person/1">รายงานการบันทึกรอบเอว น้ำหนัก ส่วนสูง (รายบุคคล)</a></li>
		                <li style="width:400px;"><a href="report/index/province">รายงานการบันทึกรอบเอว น้ำหนัก ส่วนสูง (รายองค์กร)</a></li>
		                <li style="width:400px;"><a href="report/index/area">รายงานการบันทึกรอบเอว น้ำหนัก ส่วนสูง (รายจังหวัด)</a></li>
		                <li style="width:400px;"><a href="report/index/overview">รายงานการบันทึกรอบเอว น้ำหนัก ส่วนสูง (รายเขต)</a></li>
		                <li style="width:400px;"><a href="report/index/height">รายงานภาวะโรคอ้วนลงพุง (Ht/2)</a></li>
		                <li style="width:400px;"><a href="report/index/waist">รายงานภาวะโรคอ้วนลงพุง (BMI)</a></li>
		            </ul>
		        </li>
		    </ul>
		</div>
		<?php echo $template['body']; ?>
		</div>
	 </div>
	</div>
	<?php include_once('themes/default/_footer.php'); ?>
</div>
</body>
<?php include("_script.php");?>
</html>