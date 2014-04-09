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
	 <div id="row4>
		<div id="blank">
			<div class="titleGroup"><img src="media/img/title-poll.png" width="393" height="79" /></div>
			<div id="menuPoll">
				<ul>
			    <li class="btn-poll1"><a href="f_behavior/index/1"  style="display:inline-block;width:212px;">&nbsp;</a></li>
				<li class="btn-poll2"><a href="f_behavior/index/2"  style="display:inline-block;width:212px;">&nbsp;</a></li>
			    <li class="menuPoll1"><a href="#">&nbsp;</a>
			        <ul class="ReportPoll">
			            <li style="width:400px;"><a href="report/index/behavior">รายงานผลการประเมินพฤติกรรม</a></li>
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