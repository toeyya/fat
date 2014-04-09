
<div>
	<hr>
	<ul class="breadcrumb">
		<li><a href="admin">หน้าแรก</a></li>
		 <li><a href="km/admin/type/index">หมวดหมู่ KM</a></li>
		 <li>KM</li>
	</ul>
	<hr>
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="box">
			<div class="box-header">
				<h2><i class="fa fa-align-justify"></i><span class="break"></span>KM </h2>
			</div>
			<div class="box-content">
			<form class="form-horizontal" role="form" method="post" action="download/admin/download/save" enctype="multipart/form-data">
			  <div class="form-group">
			    <label for="name" class="col-sm-2 control-label">หมวดหมู่</label>
			    <div class="col-sm-3">
			     	<?php echo form_dropdown('type_id',get_option('id','name','f_km'),$rs['type_id'],'class="form-control"'); ?>
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="title" class="col-sm-2 control-label">หัวข้อ</label>
			    <div class="col-sm-3">
			     	 <input type="text" class="form-control" name="title">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="title" class="col-sm-2 control-label">แท็ก</label>
			    <div class="col-sm-3">
			     	 <input type="text" class="form-control" name="tag">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="name" class="col-sm-2 control-label">ไฟล์</label>
			    <div class="col-sm-3">
			      <input type="file" class="form-control" name="files">
			    </div>
			    	<?php if(!empty($rs['files'])): ?>
			    	<span style="float: left"><a href="uploads/download/<?php echo $rs['id'] ?>/file/<?php echo $rs['files'] ?>" class="btn btn-default btn-sm">ดาวน์โหลด</a></span>
					<?php endif;?>
			  </div>

			  <div class="form-group">
			    <label for="name" class="col-sm-2 control-label">รายละเอียด</label>
			    <div class="col-sm-3">
			     	<textarea class="form-control detail"  name="detail" rows="3"></textarea>
			    </div>
			  </div>




			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="submit" class="btn btn-primary btn-sm">บันทึก</button>
			      <button type="button" class="btn btn-default btn-sm">ย้อนกลับ</button>
			      <input type="hidden" name="id" value="<?php echo $rs['id'] ?>">
			      <?php echo ($rs['id']) ? form_hidden('updated',date('Y-m-d H:i:s')) : form_hidden('created',date('Y-m-d H:i:s'))?>
			    </div>
			  </div>
			</form>
			</div>
		</div>
	</div>
</div>
<!-- Load TinyMCE -->
<script type="text/javascript" src="media/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript" src="media/tiny_mce/config.js"></script>
<script type="text/javascript">
	tiny('detail');
	$(function(){
		$('.preview').click(function(){
			tinyMCE.triggerSave();
		});
		$('[name=btn_add]').click(function(){

		});
	});
</script>