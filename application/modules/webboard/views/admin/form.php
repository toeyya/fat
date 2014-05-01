<div>
	<hr>
	<ul class="breadcrumb">
		<li><a href="admin">หน้าแรก</a></li>
		 <li>เว็บบอร์ด</li>
	</ul>
	<hr>
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="box">
			<div class="box-header">
				<h2><i class="fa fa-align-justify"></i><span class="break"></span>เว็บบอร์ด</h2>
			</div>
			<div class="box-content">
			<form class="form-horizontal" role="form" method="post" action="webboard/admin/save/<?php echo $value["id"]?>" enctype="multipart/form-data">
			  <div class="form-group">
			    <label for="title" class="col-sm-2 control-label">หัวข้อ</label>
			    <div class="col-sm-4">
			      <input type="text" class="form-control" name="title"  placeholder="หัวข้อ" value="<?php echo $value['title'] ?>">
			    </div>

			  </div>
			  <div class="form-group">
			    <label for="url" class="col-sm-2 control-label">รายละเอียด</label>
			    <div class="col-sm-4">
			    	<textarea class="form-control" rows="5" name="detail" ><?php echo $value["detail"]?></textarea>
			    </div>
			  </div>

			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="submit" class="btn btn-primary btn-sm">บันทึก</button>
			      <button type="button" class="btn btn-default btn-sm" onclick="history.go(-1);">ย้อนกลับ</button>
			      <input type="hidden" name="id" value="<?php echo $value['id']; ?>">
			       <?php echo ($value['id']) ? form_hidden('updated',date('Y-m-d H:i:s')) : form_hidden('created',date('Y-m-d H:i:s'))?>
			    </div>
			  </div>

			</form>
			</div>
		</div>
	</div>

	<hr>

	<div class="col-lg-12">
		<div class="box"  >

			<?php foreach ($variable as $key => $item):?>
			<div class="box-content" >
				<div class="form-group">
			    <label for="title" class="col-sm-2 control-label">
			    	<?php echo $item["email"]?>
		    	</label>

				    <div class="col-sm-6">
						<?php echo $item["detail"]?>
				    </div>

				    <div class="col-sm-2">
						<?php echo mysql_to_th($item["created"],"F",TRUE)?>
				    </div>

				    <div class="col-sm-2">
						<a href="webboard/admin/form_comment/<?php echo $item["id"]?>" class="btn btn-primary" >แก้ข้อความ</a>
						<a href="webboard/admin/delete_comment/<?php echo $item["id"]?>" class="btn btn-danger" onclick="return confirm('ต้องการลบความคิดเห็น');" >ลบ</a>
				    </div>

				</div>
				<div class="clearfix"></div>
			</div>
			<?php endforeach?>
		</div>
	</div>

</div>

