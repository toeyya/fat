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
	 <div id="row4">
		<div id="blank">
			<div class="titleGroup"><img src="media/img/title-group.png" width="394" height="92" /></div>
			 <div id="topmenuGroup">
                	<ul>
                    	<li class="topmenuGroup1"><a href="criteria/index/1"></a></li>
                        <li class="topmenuGroup2"><a href="criteria/index2"></a></li>
                        <?php if($this->session->userdata('permission_id')=="1"):  ?>
                        <li class="topmenuGroup3"><a href="javascript:void"></a>
                        	<ul class="sub-topmenuGroup3">
                                <li><a href="criteria/report">รายงานตามตัวชี้วัด กพร.</a></li>
                            </ul>
                        </li>
                        <?php endif; ?>
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