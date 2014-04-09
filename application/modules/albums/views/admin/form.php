<div>
	<hr>
	<ul class="breadcrumb">
		<li><a href="admin">หน้าแรก</a></li>
		 <li><a href="albums/admin/albums/index">อัลบั้ม</a></li>
	</ul>
	<hr>
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="box">
			<div class="box-header">
				<h2><i class="fa fa-align-justify"></i><span class="break"></span>อัลบั้ม </h2>
			</div>
			<div class="box-content">
			<form class="form-horizontal" role="form" method="post" action="albums/admin/albums/save" enctype="multipart/form-data">
			  <div class="form-group">
			    <label for="name" class="col-sm-2 control-label">อัลบั้ม</label>
			    <div class="col-sm-4">
			      <input type="text" class="form-control" name="name"  placeholder="อัลบั้ม" value="<?php echo $rs['name'] ?>">
			    </div>
			    <button class="btn btn-sm btn-info btn-sm" name="btn_add" type="button">เพิ่มรูปภาพ</button>
			  </div>
			  <?php foreach($picture as $pic): ?>
			  <div class="form-group pic">
				    <label for="name" class="col-sm-2 control-label">รูปภาพ</label>
				    <span style='float:left;margin-left:17px;'>
				    	<?php if(!empty($pic['image'])): ?>
				    	<a href="uploads/albums/<?php echo $rs['id'] ?>/<?php echo $pic['image'] ?>" rel="lightbox">
							<img style="width:50px; vertical-align:middle;" src="uploads/albums/<?php echo $rs['id'] ?>/thumbnail/<?php echo $pic['image'] ?>">
						</a>
						<?php endif;?>
				    </span>
				    <div class="col-sm-3">
				      <input type="file" class="form-control" name="image[]">
				      <input type="text" class="form-control" name="title[]"  placeholder="คำอธิบายใต้ภาพ" value="<?php echo $pic['title'] ?>">
				      <input type="hidden" name="picture_id[]" value="<?php echo $pic['id'] ?>">
				    </div>
				    <button name="del" rel="<?php echo $pic['id'] ?>" class="btn btn-sm btn-default del" type="button">ลบ</button>
			  </div>
			  <?php endforeach; ?>
			  <div class="form-group pic">
				    <label for="name" class="col-sm-2 control-label">รูปภาพ</label>
				    <div class="col-sm-3">
				      <input type="file" class="form-control" name="image[]">
				      <input type="text" class="form-control" name="title[]"  placeholder="คำอธิบายใต้ภาพ" value="">
				    </div>
			  </div>
			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="submit" class="btn btn-primary btn-sm">บันทึก</button>
			      <button type="submit" class="btn btn-default btn-sm">ย้อนกลับ</button>
			      <input type="hidden" name="id" value="<?php echo $rs['id']; ?>">
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
	$('button[name=btn_add]').click(function(){
		var div =' <div class="form-group pic">';
			div +='<label for="name" class="col-sm-2 control-label">รูปภาพ</label>';
			div +='<div class="col-sm-3">';
			div +='<input type="file" class="form-control" name="image[]"><input type="text" class="form-control" name="title[]"  placeholder="คำอธิบายใต้ภาพ" value="">';
			div +='</div>';
			div +='</div>';
		$('.pic:last').after(div);
	});
	$('.del').click(function(){
		var id = $(this).attr('rel');
		var del = $(this).closest('div');
		if(confirm('ยืนยันการลบ ')){
			$.ajax({
				url:'<?php echo base_url(); ?>/albums/admin/albums/delete_pic',
				data:'id='+id,
				success:function(){
					del.fadeOut('slow');
				}
			});
		}
	});

});
</script>
