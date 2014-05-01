<div>
	<hr>
	<ul class="breadcrumb">
		<li><a href="#">ตั้งค่าองค์กรต้นแบบไร้พุง</a></li>
		<li><a href="setting/admin/agency_type/index">ประเภทบุคคล</a></li>

	</ul>
	<hr>
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="box">
			<div class="box-header">
				<h2><i class="fa fa-align-justify"></i><span class="break"></span>ประเภทบุคคล</h2>
			</div>
			<div class="box-content">
			<form class="form-horizontal" method="post" role="form" action="setting/admin/agency_type/save">
			  <div class="form-group">
			    <label for="name" class="col-sm-2 control-label">ประเภทบุคคล</label>
			    <div class="col-sm-3">
			      <input type="text" class="form-control" name="name"  placeholder="ประเภทบุคคล" value="<?php echo $rs['name'] ?>">
			    </div>
			  </div>

			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="submit" class="btn btn-info btn-sm">บันทึก</button>
			      <button type="button" class="btn btn-default btn-sm" onclick="history.go(-1);">ย้อนกลับ</button>
			      <input type="hidden" name="id" value="<?php echo $rs['id']; ?>">
			       <?php echo ($rs['id']) ? form_hidden('updated',date('Y-m-d H:i:s')) : form_hidden('created',date('Y-m-d H:i:s'))?>
			    </div>
			  </div>
			</form>
			</div>
		</div>
	</div>
</div>
