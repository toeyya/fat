<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<base href="<?php echo base_url(); ?>" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo $template['title'] ?></title>
	<?php include_once("_css.php");?>
	 <script type="text/javascript" src="themes/admin/media/js/jquery-2.0.3.min.js"></script>

    <?php echo $template['metadata'] ?>

</head>
<body>
<?php include_once("_header.php");?>
<div class="container">
		<div class="row">
					<!-- start: Main Menu -->
			<?php include('_menu.php'); ?>

			<noscript>
				&lt;div class="alert alert-block col-sm-10"&gt;
					&lt;h4 class="alert-heading"&gt;Warning!&lt;/h4&gt;
					&lt;p&gt;You need to have &lt;a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank"&gt;JavaScript&lt;/a&gt; enabled to use this site.&lt;/p&gt;
				&lt;/div&gt;
			</noscript>

			<div id="content" class="col-sm-10" style="min-height: 464px;">
			<!-- start: Content -->

				<?php echo $template['body']; ?>
					<!-- end: Content -->
			</div><!--/#content.span10-->
		 </div><!--/fluid-row-->

			<div class="modal fade" id="myModal">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							<h4 class="modal-title">Modal title</h4>
						</div>
						<div class="modal-body">
							<p>Here settings can be configured...</p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<button type="button" class="btn btn-primary">Save changes</button>
						</div>
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div><!-- /.modal -->

		<div class="clearfix"></div>


</div><!-- container-->
<?php include "_script.php";?>
</body>
</html>