<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<base href="<?php echo base_url(); ?>" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo $template['title'] ?></title>
	<?php include_once("_css.php");?>
	<script type="text/javascript" src="media/js/jquery-1.8.2.min.js"></script>
    <?php echo $template['metadata'] ?>
</head>
<body>
<div class="row" id="bg1-theme">
    <div class="container">
	<?php include('_header.php'); ?>
	<?php include('_menu.php'); ?>
<!-----------------------Start row1-------------------------------->
           <div id="row1">
<!--------------------------------------------------------------------------highlight-------------------------------------------------------------->
				<?php echo modules::run('hilights/index'); ?>
<!--------------------------------------------------------------------------BMI-------------------------------------------------------------->
				<?php echo modules::run('f_weight/bmi/index'); ?>
           </div>
<!-----------------------End row1-------------------------------->
           <div class="clearfix"> </div>
<!--------------------------------------------------------------------------ข่าวประชาสัมพันธ์-------------------------------------------------------------->
		<div id="news">
			<span class="title-news">ข่าวประชาสัมพันธ์</span>
			<?php echo modules::run('content/inc_information',4); ?>
			<div class="clearfix"></div><div class="line2"></div>
		</div>
 <!--------------------------------------------------------------------------สื่อ-------------------------------------------------------------->
		<?php echo modules::run('download/index'); ?>

<!-----------------------Start row2-------------------------------->
           <br>
           <div id="row2">
 <!--------------------------------------------------------------------------การวางแผนการกิน-------------------------------------------------------------->
          <div id="plan">
          	<span class="title-news">การวางแผนการกิน</span>
			<?php echo modules::run('content/inc_information',7); ?>
		  <div class="clearfix"> </div> <div class="line3"> </div>
          </div>
 <!--------------------------------------------------------------------------ลดน้ำหนัก ลดรอบเอว-------------------------------------------------------------->

           <div id="weight">
              <span class="title-news">ลดน้ำหนัก ลดรอบเอว</span>
					<?php echo modules::run('content/inc_information',8); ?>
		  		<div class="clearfix"> </div>  <div class="line3"> </div>
         	 </div>
 <!--------------------------------------------------------------------------การออกกำลังกาย-------------------------------------------------------------->

          <div id="weight">
              <span class="title-news">การออกกำลังกาย</span>
 					<?php echo modules::run('content/inc_information',9); ?>
     	  		<div class="clearfix"> </div><div class="line3"> </div>
             </div>
 <!--------------------------------------------------------------------------Webboard-------------------------------------------------------------->
          <div id="banner-webboard"><a href="#"><img src="media/img/banner-webboard2.png" width="956" height="122" /></a></div><div class="clearfix"> </div>
 <!--------------------------------------------------------------------------Gallery------------------------------------------------------------->
		<?php echo modules::run('albums/index'); ?>
    </div>
<!-----------------------End row2-------------------------------->
	<div class="clearfix"> </div>

    </div>
<!-------End container----------->

<?php include_once('_footer.php'); ?>
</div>
</body>
<?php include("_script.php");?>
</html>