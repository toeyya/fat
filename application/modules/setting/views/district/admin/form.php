<div>
	<hr>
	<ul class="breadcrumb">
		<li><a href="admin">หน้าแรก</a></li>
		 <li><a href="#">ตั้งค่าองค์กรต้นแบบไร้พุง</a></li>
		<li><a href="setting/admin/district/index">ตำบล</a></li>
		<li><?php echo $rs['district_name'] ?></li>
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
			<form class="form-horizontal" role="form" method="post" action="setting/admin/district/save">
			  <div class="form-group">
			    <label for="province_name" class="col-sm-2 control-label">จังหวัด</label>
			    <div class="col-sm-3">
			      <?php echo form_dropdown('province_id',get_option('id','province_name','f_province','','province_name'),@$rs['province_id'],'class="form-control"','เลือกจังหวัด'); ?>
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="province_name" class="col-sm-2 control-label">อำเภอ</label>
			    <div class="col-sm-3">
			    	<span class="amphur"><?php echo form_dropdown('amphur_id',get_option('id','amphur_name','f_amphur','','amphur_name'),@$rs['amphur_id'],'class="form-control"','เลือกอำเภอ'); ?></span>
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="district_name" class="col-sm-2 control-label">ตำบล</label>
			    <div class="col-sm-3">
			      <input type="text" class="form-control" name="district_name"  placeholder="ตำบล" value="<?php echo $rs['district_name'] ?>">
			    </div>
			  </div>

			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="submit" class="btn btn-primary btn-sm">บันทึก</button>
			      <button type="submit" class="btn btn-default btn-sm" onclick="history.go(-1);">ย้อนกลับ</button>
			      <input type="hidden" name="id" value="<?php echo @$rs['id']; ?>">
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
	$('select[name=province_id]').change(function(){
		$.ajax({
			url:'setting/getAmphur',
			data:'province_id='+$(this).val(),
			success:function(data){
				$('.amphur').html(data);
				$('.amphur').find('select').attr('class','form-control');
			}
		});
	});
});
</script>
