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
<?php echo $template['body']; ?>

<!-----------------------End row2-------------------------------->
	<div class="clearfix"> </div>

    </div>
<!-------End container----------->

 <?php include_once('_footer.php'); ?>
</div>
</body>
<?php include("_script.php");?>
</html>