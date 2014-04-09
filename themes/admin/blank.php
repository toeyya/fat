<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<base href="<?php echo base_url(); ?>" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title><?php echo $template['title']; ?></title>
				<?php include_once('_css.php'); ?>
				<?php echo $template['metadata']; ?>
	<style>
	body {
	  margin: 80px 0;
	  background-image: none;
	  background-color: #333;
	}
	</style>
	</head>
	<body>
		<?php echo $template['body']; ?>
		<?php include_once('_script.php'); ?>
	</body>
</html>