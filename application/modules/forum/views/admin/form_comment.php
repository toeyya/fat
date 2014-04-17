<div>
	<hr>
	<ul class="breadcrumb">
		<li><a href="admin">หน้าแรก</a></li>
		 <li>ถาม - ตอบ</li>
	</ul>
	<hr>
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="box">
			<div class="box-header">
				<h2><i class="fa fa-align-justify"></i><span class="break"></span>ถาม - ตอบ </h2>
			</div>
			<div class="box-content">
			<form class="form-horizontal" role="form" method="post" action="forum/admin/save_comment/<?php echo $value["id"]?>" enctype="multipart/form-data">

			  <div class="form-group">
			    <label for="url" class="col-sm-2 control-label">รายละเอียด</label>
			    <div class="col-sm-4">
			    	<textarea class="form-control" rows="5" name="detail" ><?php echo $value["detail"]?></textarea>
			    </div>
			  </div>

			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="submit" class="btn btn-primary">บันทึก</button>
			      <button type="submit" class="btn btn-default">ย้อนกลับ</button>
			      <input type="hidden" name="id" value="<?php echo $value['id']; ?>">
			       <?php echo ($value['id']) ? form_hidden('updated',date('Y-m-d H:i:s')) : form_hidden('created',date('Y-m-d H:i:s'))?>
			    </div>
			  </div>

			</form>
			</div>
		</div>
	</div>
	
</div>

