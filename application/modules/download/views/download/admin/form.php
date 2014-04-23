<div>
	<hr>
	<ul class="breadcrumb">
		<li><a href="admin">หน้าแรก</a></li>
		 <li><a href="download/admin/type/index">สื่อสิ่งพิมพ์</a></li>
		 <li class="active"><?php echo $type['name'] ?></li>
	</ul>
	<hr>
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="box">
			<div class="box-header">
				<h2><i class="fa fa-align-justify"></i><span class="break"></span>สื่อสิ่งพิมพ์ </h2>
			</div>
			<div class="box-content">
			<form class="form-horizontal" role="form" method="post" action="download/admin/download/save/<?php echo $type_id ?>" enctype="multipart/form-data">
			  <div class="form-group">
			    <label for="name" class="col-sm-2 control-label">ประเภท</label>
			    <div class="col-sm-3">
			     	<?php echo form_dropdown('type_id',get_option('id','name','f_download'),@$_GET['type_id'],'class="form-control"'); ?>
			    </div>
			  </div>
			 <?php if(!empty($rs['image'])): ?>
 			<div class="form-group">
 				<label for="name" class="col-sm-2 control-label">รูป</label>
 				 <div class="col-sm-3">

			    	<a href="uploads/download/<?php echo $rs['type_id'] ?>/<?php echo $rs['image'] ?>" rel="gal">
						<img style="width:71px;height:100px; vertical-align:middle;" src="uploads/download/<?php echo $rs['type_id'] ?>/thumbnail/<?php echo $rs['image'] ?>">
					</a>
			 </div>
			</div>
			<?php endif;?>
			  <div class="form-group">
			    <label for="name" class="col-sm-2 control-label">รูปภาพ</label>
			    <div class="col-sm-3">
			     	<input type="file" class="form-control"  name="image">
			     	<small>อนุญาติเฉพาะ .gif .jpg .jpeg .png</small>
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="name" class="col-sm-2 control-label">คำอธิบาย</label>
			    <div class="col-sm-3">
			     	<input type="text" class="form-control"  name="title" value="<?php echo $rs['title'] ?>">
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
			    		<a href="download/download_file/<?php echo $rs['type_id'] ?>/<?php echo $rs['id'] ?>" class="btn btn-default btn-sm">ดาวน์โหลด</a>
			    		<a href="#" rel="<?php echo $rs['type_id'] ?>" class="btn btn-danger btn-sm btn_del" >ลบ</a>
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
<script type="text/javascript">
$(document).ready(function(){
	$('[rel=gal]').colorbox();
	$('.btn_del').click(function(){
		var span = $(this).closest('span');
		if(confirm('ยืนยันการลบ ?')){
			var type_id = $(this).attr('rel');
			var id = $('input[name=id]').val();
			$.ajax({
				url:'download/admin/download/delete_file',
				type:'get',
				data:'field=files&type_id='+type_id+'&id='+id,
				success:function(){
					span.fadeOut('slow');
				}
			})
		}
	});
});
</script>

