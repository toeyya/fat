<div>
	<hr>
	<ul class="breadcrumb">
		<li><a href="admin">หน้าแรก</a></li>
		 <li><a href="content/admin/content/index/<?php echo $category_id ?>"><?php echo $category['name'] ?></a></li>
	</ul>
	<hr>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="box">
			<div class="box-header">
				<h2><i class="fa fa-align-justify"></i><span class="break"></span><?php echo $category['name'] ?></h2>
			</div>
			<div class="box-content">
			<form class="form-horizontal" role="form" method="post" action="content/admin/content/save/<?php echo $category_id ?>" enctype="multipart/form-data">
			  <div class="form-group">
			    <label for="detail" class="col-sm-2 control-label">รายละเอียด</label>
			    <div class="col-sm-5">
			    	 <textarea class="form-control" name="detail" rows="3"><?php echo @$result[0]['detail'] ?></textarea>
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="name" class="col-sm-2 control-label">ไฟล์</label>

			    <div class="col-sm-3">
			     <input type="file" class="form-control" name="files">
			    <p class="showfile">
			    <?php if(!empty($result[0]['files'])): ?>
			    	<a href="content/admin/content/download/<?php echo $result[0]['id'] ?>" class="btn btn-primary btn-sm">ดาวน์โหลด <?php echo $result[0]['files'] ?></a>
			    	<a rel="<?php echo @$result[0]['id'] ?>" class="btn btn-default btn-sm btn_del">ลบ</a>
			    <?php endif; ?>
			    </p>
			    </div>
			  </div>

			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="submit" class="btn btn-primary btn-sm">บันทึก</button>
			      <button type="submit" class="btn btn-default btn-sm">ย้อนกลับ</button>
			      <input type="hidden" name="id" value="<?php echo @$result[0]['id'] ?>">
			      <?php echo (!empty($result[0]['id'])) ? form_hidden('updated',date('Y-m-d H:i:s')) : form_hidden('created',date('Y-m-d H:i:s'))?>
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
		$('.btn_del').click(function(){
			if(confirm('ยืนยันการลย')){
				var id= $(this).attr('rel');
				$.ajax({
					url:'content/admin/content/delete_file',
					type:'post',
					data:'id='+id,
					success:function(){
						$('.showfile').fadeOut('slow');
					}
				});
			}


		});
	});
</script>