<div>
	<hr>
	<ul class="breadcrumb">
		<li>
			<a href="admin">หน้าแรก</a>
		</li>
		<li class="active"><?php echo $title ?></li>
	</ul>
	<hr>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="box">
			<div class="box-header">
				<h2><i class="fa fa-align-justify"></i><span class="break"></span><?php echo $title; ?></h2>
			</div>
			<div class="box-content">
			<form class="form-horizontal" role="form" method="post" action="users/admin/users/save">

			  <div class="form-group">
			    <label for="email" class="col-sm-2 control-label">อีเมล์</label>
			    <div class="col-sm-3">

			      <input type="email" class="form-control" id="email" name="email" placeholder="อีเมล์" value="<?php echo $rs['email'] ?>">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="password" class="col-sm-2 control-label">รหัสผ่าน</label>
			    <div class="col-sm-3">
			      <input type="password" class="form-control" id="password" name="password" placeholder="รหัสผ่าน">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="repassword" class="col-sm-2 control-label">ยืนยันรหัสผ่าน</label>
			    <div class="col-sm-3">
			      <input type="password" class="form-control" id="repassword" name="repassword" placeholder="ยืนยันรหัสผ่าน">
			    </div>
			  </div>
			  <hr>

			  <div class="form-group">
			    <label for="firstname" class="col-sm-2 control-label">สิทธิ์การใช้งาน</label>
			    <div class="col-sm-3 controls">
			    	<?php echo form_dropdown('permission_id',get_option('id','name','f_permission'),@$rs['permission_id'],'class="form-control"','กรุณาระบุสิทธิ์การใช้งาน'); ?>
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="respone_name" class="col-sm-2 control-label">ชื่อ-นามสกุลผู้รับผิดชอบ</label>

			    <div class="col-sm-3 controls">
			      <input type="text" class="form-control" name="respone_name" id="response_man" placeholder="ชื่อ" value="<?php echo $rs['firstname'] ?>">
			    </div>

			  </div>
			  <div class="form-group">
			    <label for="co_province_name" class="col-sm-2 control-label">ชื่อ-นามสกุลผู้ประสานงานระดับจังหวัด</label>
			    <div class="col-sm-3">
			      <input type="text" class="form-control" name="co_province_name" id="co_province_man" placeholder="ชื่อ" value="<?php echo $rs['firstname'] ?>">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="co_agency_name" class="col-sm-2 control-label">ชื่อ-นามสกุลผู้ประสานงานระดับองค์กร</label>
			    <div class="col-sm-3">
			      <input type="text" class="form-control" name="co_agency_name" id="co_agency_man" placeholder="ชื่อ" value="<?php echo $rs['firstname'] ?>">

			    </div>
			  </div>
			  <div class="form-group">
			    <label for="organization_type" class="col-sm-2 control-label">ประเภหน่วยงาน</label>
			    <div class="col-sm-3">
			     	<?php echo form_dropdown('agency_type',get_option('id','name','f_agency_type','','queue'),$rs['agency_type'],'class="form-control"','') ?>
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="agency_name" class="col-sm-2 control-label">องค์กร</label>
			    <div class="col-sm-5">
			      <input type="text" class="form-control" id="agency_name" placeholder="องค์กร" value="<?php echo $rs['agency_name'] ?>">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="address" class="col-sm-2 control-label">สถานที่(หมู่บ้าน)</label>
			    <div class="col-sm-3">
			      <textarea  class="form-control" id="address" name="address" rows="3"><?php echo $rs['address'] ?></textarea>
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="province" class="col-sm-2 control-label">จังหวัด</label>
			    <div class="col-sm-3">
			      <?php echo form_dropdown('province_id',get_option('id','province_name','f_province','','province_name'),@$rs['province_id'],'class="form-control"','โปรดเลือก') ?>
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="amphur_id" class="col-sm-2 control-label">อำเภอ</label>
			    <div class="col-sm-3">
			    	<span class="amphur">
			      <?php echo form_dropdown('amphur_id',get_option('id','amphur_name','f_amphur','','amphur_name'),@$rs['amphur_id'],'class="form-control"','โปรดเลือก');?>
			    	</span>
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="district_id" class="col-sm-2 control-label">ตำบล</label>
			    <div class="col-sm-3">
					<span class="district">
					<?php echo form_dropdown('district_id',get_option('id','district_name','f_district','','district_name'),@$rs['district_id'],'class="form-control"','โปรดเลือก');?>
			    	</span>
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="position" class="col-sm-2 control-label">ตำแหน่ง</label>
			    <div class="col-sm-3">
			      <input type="text" class="form-control" id="position" name="position" placeholder="ตำแหน่ง" value="<?php echo $rs['position'] ?>">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="phone" class="col-sm-2 control-label">เบอร์ติดต่อ</label>
			    <div class="col-sm-3">
			      <input type="text" class="form-control" id="phone" name="phone" placeholder="เบอร์ติดต่อ" value="<?php echo $rs['phone'] ?>">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="fax" class="col-sm-2 control-label">เบอร์แฟกซ์</label>
			    <div class="col-sm-3">
			      <input type="text" class="form-control" id="fax"  name="fax" placeholder="เบอร์แฟกซ์" value="<?php echo $rs['fax'] ?>">
			    </div>
			  </div>


			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="submit" class="btn btn-primary btn-sm">บันทึก</button>
			      <button type="button" class="btn btn-default btn-sm">ย้อนกลับ</button>
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
	$('select[name=province_id]').change(function(){
		$.ajax({
			url:'setting/getAmphur',
			data:'province_id='+$(this).val(),
			success:function(data){
				$('.amphur').html(data).find('select').attr('class','form-control');
			}
		});
	});
	$('select[name=amphur_id]').live('change',function(){
		$.ajax({
			url:'setting/getDistrict',
			data:'amphur_id='+$(this).val(),
			success:function(data){
				$('.district').html(data).find('select').attr('class','form-control');
			}
		});
	});
});
</script>