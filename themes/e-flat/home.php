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
<!--------------------------------------------------------------------------TopMenu-------------------------------------------------------------->
	<?php include('themes/default/_menu.php'); ?>
	 <div id="row3">
<!---------------------------------------------------------------------Breadcrumbs-------------------------------------------------------------->
     	  <div id="Breadcrumbs">
          	<ol id="path-breadcrumb">
              <li><a href="#">หน้าแรก</a></li>
              <li class="active">ระบบสารสนเทศ e-flat belly</li>
            </ol>
          </div>
<!--------------------------------------------------------------------------BLANK-------------------------------------------------------------->
          <div id="blank">
                <br><br>
                <div class="title-eflat">ระบบสารสนเทศ e-flat belly<div class="line7"> </div> </div><br><br>
                      	<a href="criteria/index"><img src="media/img/banner1.png" width="298" height="229" border="0" style="margin-left:45px;"></a>
                    	<a href="f_weight/index/1"><img src="media/img/banner2.png" width="298" height="229" border="0" style="margin-left:25px;"></a>
                    	<a href="f_behavior/index/1"><img src="media/img/banner3.png" width="298" height="229" border="0" style="margin-left:25px;"></a>
                      <p>&nbsp;</p><p>&nbsp;</p><div style="text-align:center;"><img src="media/img/cartoon.png" width="487" height="250" /></div><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>

     	 </div>
	 </div>
	</div>
<?php include_once('themes/default/_footer.php'); ?>
</div>
</body>
<?php include("_script.php");?>
</html>