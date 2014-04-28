<div>
	<hr>
	<ul class="breadcrumb">
		<li><a href="admin">หน้าแรก</a></li>
		 <li><a href="km/admin/type/index">หมวดหมู่ KM</a></li>
	</ul>
	<hr>
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="box">
			<div class="box-header">
				<h2><i class="fa fa-align-justify"></i><span class="break"></span>หมวดหมู่ KM </h2>
			</div>
			<div class="box-content">
			<form class="form-horizontal" role="form" method="post" action="km/admin/type/save" id="form1">

			  <div class="form-group">
			    <label for="name" class="col-sm-2 control-label"><label class="alertred">*</label>หมวดหมู่</label>
			    <div class="col-sm-3">
			     	<input type="text" class="form-control"  name="name" value="<?php echo $rs['name'] ?>">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="name" class="col-sm-2 control-label">ลักษณะ</label>
			    <div class="col-sm-3">
			     	<?php echo form_dropdown('structure',array('list'=>'list','page'=>'page'),$rs['structure'],'class="form-control"');  ?>
			    </div>
			  </div>

			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="submit" class="btn btn-primary btn-sm">บันทึก</button>
			      <button type="button" class="btn btn-default btn-sm" onclick="history.go(-1);">ย้อนกลับ</button>
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
	$('#form1').validate({rules:{name:"required"},messages:{name:"กรุณาระบุ"}});
});
</script>
