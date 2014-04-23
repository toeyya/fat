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
     	  <div id="Breadcrumbs">
          	<ol id="path-breadcrumb">
              <li><a href="#">หน้าแรก</a></li>
              <li class="active">ระบบสารสนเทศ e-flat belly</li>
            </ol>
          </div>
	 <div id="row1">
          <div id="blank">

              	<div style="margin-top:27px;padding-top:31px;">
              		<div class="title-eflat" style="padding:20px;">ระบบสารสนเทศ e-flat belly<div class="line7"></div></div>
              		<a href="criteria/index/1" 		class="banner banner1"></a>
              		<a href="criteria/index/1"><span class="title-news" style="display:inline-block;float:right;position:absolute;top:139px;left:400px;font-size:40px;">ขั้นตอนที่ 1</span></a>
              	</div>
              	<div style="height:229px;">
	            	<a href="f_weight/index/1" 		class="banner banner2"></a>
	            	<a href="f_weight/index/1"><span class="title-news" style="display:inline-block;float:right;position:absolute;top:293px;right:120px;font-size:40px;">ขั้นตอนที่ 2</span></a>
            	</div>
            	<div style="height:229px;width:298px;margin-top:-109px;">
            		<a href="f_behavior/index/1"   class="banner banner3"></a>
            		<a href="f_behavior/index/1"><span class="title-news" style="display:inline-block;float:right;position:absolute;top:471px;right:-177px;font-size:40px;">ขั้นตอนที่ 3</span></a>
            	</div>

     	 </div>
		<div style="text-align:left;position:relative;margin-top:-295px;margin-left:-38px;width:224px;">
					<img src="media/img/cartoon1.png" width="216" height="224" style="opacity:0.3">
				</div>
		<div style="position:relative;margin-top:-55px;margin-left:381px;height:240px;"><img src="media/img/cartoon2.png" width="88" height="145" style="opacity:0.3"></div>
	 </div>
	</div>
<?php include_once('themes/default/_footer.php'); ?>
</div>
</body>
<?php include("_script.php");?>
</html>