<div>
	<hr>
	<ul class="breadcrumb">
		<li><a href="admin">หน้าแรก</a></li>
		 <li><a href="#">ตั้งค่าองค์กรต้นแบบไร้พุง</a></li>
		<li><a href="setting/admin/province/index">จังหวัด</a></li>
		<li><?php echo $rs['province_name'] ?></li>
	</ul>
	<hr>
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="box">
			<div class="box-header">
				<h2><i class="fa fa-align-justify"></i><span class="break"></span>จังหวัด </h2>
			</div>
			<div class="box-content">
			<form class="form-horizontal" role="form" method="post" action="setting/admin/province/save" id="form1">
			  <div class="form-group">
			    <label for="province_name" class="col-sm-2 control-label"><label class="alertred">*</label>จังหวัด</label>
			    <div class="col-sm-3">
			      <input type="text" class="form-control" name="province_name"  placeholder="จังหวัด" value="<?php echo $rs['province_name'] ?>">
			    </div>
			  </div>
			  <?php foreach($area as $item): ?>
			  <div class="form-group">
			    <label for="organization_type" class="col-sm-2 control-label"><?php echo  $item['name']?></label>
			    <div class="col-sm-3">
					<?php
					echo form_dropdown('detail_id[]',get_option("area_no as id","area_no","f_area_detail","area_id =".$item['area_id']." group by area_no"),$item['area_no'],'class="form-control"',''); ?>
			    </div>
			  </div>
			  <?php endforeach;?>

			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="submit" class="btn btn-primary btn-sm">บันทึก</button>
			      <button type="submit" class="btn btn-default btn-sm" onclick="history.go(-1);">ย้อนกลับ</button>
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
	$('#form1').validate({
		debug:true,
		rules:{province_name:"required"},messages:{province_name:"กรุณาระบุ"}
	});
});
</script>
