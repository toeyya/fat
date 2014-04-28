<div>
	<hr>
	<ul class="breadcrumb">
		<li><a href="admin">หน้าแรก</a></li>
		 <li><a href="content/admin/content/index/<?php echo $category_id ?>"><?php echo $category_name ?></a></li>
	</ul>
	<hr>
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="box">
			<div class="box-header">
				<h2><i class="fa fa-align-justify"></i><span class="break"></span><?php echo $category_name ?></h2>
			</div>
			<div class="box-content">
			<form class="form-horizontal" id="form1" role="form" method="post" action="content/admin/content/save/<?php echo $category_id ?>" enctype="multipart/form-data">
			 <div class="form-group">
			    <label for="title" class="col-sm-2 control-label">รูปภาพ</label>
			    <div class="col-sm-3">
				<?php if(is_file('uploads/content/thumbnail/'.$rs['image'])): ?>
					<span>
						<img class="img" src="<?php echo 'uploads/content/thumbnail/'.$rs['image'] ?>"  />
						<button name="btn_del" type="button" rel="image" class="btn btn-danger btn-sm">ลบ</button>
					</span>
				<?php endif ?>
				<input type="file" name="image" />
 				<small>อนุญาติเฉพาะ .gif .jpg .jpeg .png</small>
			    </div>

			  </div>

			  <div class="form-group">
			    <label for="title" class="col-sm-2 control-label"><label class="alertred">*</label>หัวข้อ</label>
			    <div class="col-sm-5">
			     	 <input type="text" class="form-control" name="title" value="<?php echo $rs['title'] ?>">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="title" class="col-sm-2 control-label">บทคัดย่อ</label>
			    <div class="col-sm-5">
			     	 <textarea class="form-control" name="intro" rows="4"><?php echo $rs['intro'] ?></textarea>
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="detail" class="col-sm-2 control-label">รายละเอียด</label>
			    <div class="col-sm-5">
			    	 <textarea class="form-control" name="detail" rows="3"><?php echo $rs['detail'] ?></textarea>
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="name" class="col-sm-2 control-label">ไฟล์</label>
			    <div class="col-sm-3">
			      <input type="file" class="form-control" name="files">
				  <small>อนุญาติเฉพาะ .xlsx .pdf .xls .doc .docx .ppt .pptx .rar .zip</small>
			    </div>

			    	<?php if(!empty($rs['files'])): ?>
			    	<span style="float: left">
			    		<a href="uploads/content/<?php echo $rs['files'] ?>" class="btn btn-default btn-sm">ดาวน์โหลด <?php echo $rs['files'] ?></a>
			    		<button type="button" name="btn_del" rel="files" class="btn btn-danger btn-sm">ลบ</button>
			    	</span>
					<?php endif;?>
			  </div>

			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="submit" class="btn btn-primary btn-sm">บันทึก</button>
			      <button type="submit" class="btn btn-default btn-sm" onclick="history.go(-1);">ย้อนกลับ</button>
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
		$('[name=btn_del]').click(function(){
			var field = $(this).attr('rel');
			var id = $('[name=id]').val();
			var span = $(this).closest('span');
			if(confirm('ยืนยันการลบข้อมูล'))
			{
				$.ajax({
					type:'post',
					url:'content/admin/content/delete_file',
					data:'field='+field+'&id='+id,
					success:function(){
						span.fadeOut('slow');
					}
				});
			}
		});
	$('#form1').validate({rules:{title:"required"},messages:{title:"กรุณาระบุ"}});
	});
</script>