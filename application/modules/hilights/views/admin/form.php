<div>
	<hr>
	<ul class="breadcrumb">
		<li><a href="admin">หน้าแรก</a></li>
		 <li>ไฮไลท์</li>
	</ul>
	<hr>
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="box">
			<div class="box-header">
				<h2><i class="fa fa-align-justify"></i><span class="break"></span>ไฮไลท์ </h2>
			</div>
			<div class="box-content">
			<form class="form-horizontal" role="form" method="post" action="hilights/admin/hilights/save" enctype="multipart/form-data">

			  <div class="form-group pic">
				    <label for="name" class="col-sm-2 control-label">รูปภาพ</label>
				    <div class="col-sm-3">
			  <?php if(!empty($rs['image'])): ?>
				<p><?php echo thumb("uploads/hilight/".$rs['image'],300,false,1)?></p>
			  <?php endif;?>
				      <input type="file" class="form-control" name="image">
				      <span>ขนาด   418x246 พิกเซล</span>
				    </div>
			  </div>
			  <div class="form-group">
			    <label for="title" class="col-sm-2 control-label">หัวข้อ</label>
			    <div class="col-sm-4">
			      <input type="text" class="form-control" name="title"  placeholder="หัวข้อ" value="<?php echo $rs['title'] ?>">
			    </div>

			  </div>
			  <div class="form-group">
			    <label for="url" class="col-sm-2 control-label">ลิงค์ไปยัง</label>
			    <div class="col-sm-4">
			      <input type="text" class="form-control" name="url"  placeholder="ลิงค์ไปยัง" value="<?php echo $rs['url'] ?>">
			    </div>
			  </div>

			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="submit" class="btn btn-primary">บันทึก</button>
			      <button type="button" class="btn btn-default" onclick="history.go(-1);">ย้อนกลับ</button>
			      <input type="hidden" name="id" value="<?php echo $rs['id']; ?>">
			       <?php echo ($rs['id']) ? form_hidden('updated',date('Y-m-d H:i:s')) : form_hidden('created',date('Y-m-d H:i:s'))?>
			    </div>
			  </div>

			</form>
			</div>
		</div>
	</div>
</div>

