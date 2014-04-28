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
			<form class="form-horizontal" role="form" method="post" action="users/admin/users/save" id="form1">

			  <div class="form-group">
			    <label for="email" class="col-sm-2 control-label"><label class="alertred">*</label>อีเมล์</label>
			    <div class="col-sm-3">

			      <input type="email" class="form-control" id="email" name="email" placeholder="อีเมล์" value="<?php echo $rs['email'] ?>">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="password" class="col-sm-2 control-label"><label class="alertred">*</label>รหัสผ่าน</label>
			    <div class="col-sm-3">
			      <input type="password" class="form-control" id="password" name="password" placeholder="รหัสผ่าน" value="<?php echo $rs['password'] ?>">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="repassword" class="col-sm-2 control-label"><label class="alertred">*</label>ยืนยันรหัสผ่าน</label>
			    <div class="col-sm-3">
			      <input type="password" class="form-control" id="repassword" name="repassword" placeholder="ยืนยันรหัสผ่าน" value="<?php echo $rs['password'] ?>">
			    </div>
			  </div>
			  <hr>

			  <div class="form-group">
			    <label for="firstname" class="col-sm-2 control-label"><label class="alertred">*</label>สิทธิ์การใช้งาน</label>
			    <div class="col-sm-3 controls">
			    	<?php echo form_dropdown('permission_id',get_option('id','name','f_permission'),@$rs['permission_id'],'class="form-control"','เลือกสิทธิ์การใช้งาน'); ?>
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="response_man" class="col-sm-2 control-label"><label class="alertred">*</label>ชื่อ-นามสกุลผู้รับผิดชอบ</label>
			    <div class="col-sm-3 controls">
			      <input type="text" class="form-control" name="response_man" id="response_man" placeholder="ชื่อ-นามสกุลผู้รับผิดชอบ" value="<?php echo $rs['response_man'] ?>">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="co_province_man" class="col-sm-2 control-label"><label class="alertred">*</label>ชื่อ-นามสกุลผู้ประสานงานระดับจังหวัด</label>
			    <div class="col-sm-3">
			      <input type="text" class="form-control" name="co_province_man" id="co_province_man" placeholder="ชื่อ-นามสกุลผู้ประสานงานระดับจังหวัด" value="<?php echo $rs['co_province_man'] ?>">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="co_agency_man" class="col-sm-2 control-label"><label class="alertred">*</label>ชื่อ-นามสกุลผู้ประสานงานระดับองค์กร</label>
			    <div class="col-sm-3">
			      <input type="text" class="form-control" name="co_agency_man" id="co_agency_man" placeholder="ชื่อ-นามสกุลผู้ประสานงานระดับองค์กร" value="<?php echo $rs['co_agency_man'] ?>">

			    </div>
			  </div>
			  <div class="form-group">
			    <label for="organization_type" class="col-sm-2 control-label"><label class="alertred">*</label>ประเภทหน่วยงาน</label>
			    <div class="col-sm-3">
			     	<?php echo form_dropdown('agency_type',get_option('id','name','f_agency_type','','queue'),$rs['agency_type'],'class="form-control"','เลือกประเภทหน่วยงาน') ?>
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="agency_name" class="col-sm-2 control-label"><label class="alertred">*</label>องค์กร</label>
			    <div class="col-sm-5">
			      <input type="text" class="form-control" id="agency_name" placeholder="องค์กร" name="agency_name" value="<?php echo $rs['agency_name'] ?>">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="address" class="col-sm-2 control-label">สถานที่(หมู่บ้าน)</label>
			    <div class="col-sm-3">
			      <textarea  class="form-control" id="address" name="address" rows="3"><?php echo $rs['address'] ?></textarea>
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="province" class="col-sm-2 control-label"><label class="alertred">*</label>จังหวัด</label>
			    <div class="col-sm-3">
			      <?php echo form_dropdown('province_id',get_option('id','province_name','f_province','','province_name'),@$rs['province_id'],'class="form-control"','โปรดเลือก') ?>
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="amphur_id" class="col-sm-2 control-label"><label class="alertred">*</label>อำเภอ</label>
			    <div class="col-sm-3">
			    	<span class="amphur">
			      <?php echo form_dropdown('amphur_id',get_option('id','amphur_name','f_amphur','','amphur_name'),@$rs['amphur_id'],'class="form-control"','โปรดเลือก');?>
			    	</span>
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="district_id" class="col-sm-2 control-label"><label class="alertred">*</label>ตำบล</label>
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
			    <label for="phone" class="col-sm-2 control-label"><label class="alertred">*</label>เบอร์สำนักงาน</label>
			    <div class="col-sm-3">
			      <input type="text" class="form-control" id="phone" name="phone" placeholder="เบอร์สำนักงาน" value="<?php echo $rs['phone'] ?>">
			      <span class="label label-default">ตัวอย่าง</span> 0221234567
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="fax" class="col-sm-2 control-label">เบอร์แฟกซ์</label>
			    <div class="col-sm-3">
			      <input type="text" class="form-control" id="fax"  name="fax" placeholder="เบอร์แฟกซ์" value="<?php echo $rs['fax'] ?>">
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="col-sm-2 control-label" for="inputMobile">เบอร์มือถือ</label>
			    <div class="col-sm-3">
			      <input type="text" id="inputMobile" placeholder="เบอร์มือถือ" name="mobile" class="form-control">
			      <span class="label label-default">ตัวอย่าง</span> 08123456789
			    </div>
			  </div>
			  <div class="form-group">
			    <label  class="col-sm-2 control-label">สถานะการยืนยันอีเมล์</label>
			    <div class="col-sm-3">
					<div class="confirm<?php echo $rs['confirm_email'] ?>"></div>
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="fax" class="col-sm-2 control-label">ระบบยืนยันอีเมล์ให้อัตโนมัติ</label>
			    <div class="col-sm-3">
					<input type="checkbox" name="confirm_email" value="1" <?php if($rs['confirm_email']=="1"){echo 'checked="checked"';} ?>>
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
	$('#form1').validate({
		rules:{
			email:{required:true,email:true},password:{required:true,minlength:6},
			repassword:{equalTo:'#password'},permission_id:"required",
			response_man:{required:{depends:function(element){return $('select[name=permission_id] option:selected').val() == '2' }}},
			co_province_man:{required:{depends:function(element){return $('select[name=permission_id] option:selected').val() == '2' }}},
			co_agency_man:{required:{depends:function(element){return $('select[name=permission_id] option:selected').val() == '2' }}},
			agency_name:{required:{depends:function(element){return $('select[name=permission_id] option:selected').val() == '2' }}},
			agency_type:"required",province_id:"required",amphur_id:"required",district_id:"required",
			phone:{required:true,number:true,minlenght:6,maxlenght:10}
		},
		messages:{
			email:{required:"กรุณาระบุ",email:"กรุณาระบุให้ถูกต้อง"},password:{required:"กรุณาระบุ",minlength:"กรุณาระบุอย่างน้อย 6 ตัวอักษร"},
			repassword:{equalTo:'กรุณาระบุให้ตรงกัน'},permission_id:"กรุณาระบุ",
			response_man:"กรุณาระบุ",co_province_man:"กรุณาระบุ",co_agency_man:"กรุณาระบุ",agency_name:"กรุณาระบุ",
			agency_type:"กรุณาระบุ",province_id:"กรุณาระบุ",amphur_id:"กรุณาระบุ",district_id:"กรุณาระบุ",
			phone:{required:"กรุณาระบุ",number:"กรุณาระบุเฉพาะตัวเลขเท่านั้น",minlenght:"กรุณาระบุอย่างน้อย 6 ตัวอักษร",maxlenght:"กรุณาระบุให้ถูกต้อง"}
		}
	});
});
</script>