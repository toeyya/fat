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
			      <input type="email" class="form-control" id="email" name="email" placeholder="อีเมล์">
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
			    <label for="firstname" class="col-sm-2 control-label">ชื่อ</label>
			    <div class="col-sm-3">
			      <input type="text" class="form-control" name="firstname" id="firstname" placeholder="ชื่อ">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="surname" class="col-sm-2 control-label">นามสกุล</label>
			    <div class="col-sm-3">
			      <input type="text" class="form-control" id="surname" name="surname" placeholder="นามสกุล">
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
			    <label for="address" class="col-sm-2 control-label">ที่อยู่</label>
			    <div class="col-sm-3">
			      <textarea  class="form-control" id="address" name="address" rows="3"></textarea>
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
			      <?php
			       $wh = (!empty($rs['province_id'])) ? " province_id =".$rs['province_id']:'';
			       	if($wh!=''){
			       		echo form_dropdown('amphur_id',get_option('id','amphur_name','f_amphur',$wh,'amphur_name'),@$rs['amphur_id'],'class="form-control"','โปรดเลือก');
			       	}else{ ?>
			       	<select name="amphur_id" class="form-control">
			       		<option value="">โปรดเลือก</option>
			       	</select>
			       <?php
			       	}
			       ?>
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="district_id" class="col-sm-2 control-label">ตำบล</label>
			    <div class="col-sm-3">
			      <?php
			       $wh = (!empty($rs['province_id']) && !empty($rs['amphur_id'])) ? " province_id =".$rs['province_id']." and amphur_id=".$rs['amphur_id']:'';
			       if($wh!=""){
			       	echo form_dropdown('district_id',get_option('id','district_name','f_district',$wh,'district_name'),@$rs['district_id'],'class="form-control"','โปรดเลือก');
			       }else{ ?>
			       <select name="district_id" class="form-control">
			       	<option value="">โปรดเลือก</option>
			       </select>
			       <?php }
			       ?>
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="position" class="col-sm-2 control-label">ตำแหน่ง</label>
			    <div class="col-sm-3">
			      <input type="text" class="form-control" id="position" name="position" placeholder="ตำแหน่ง">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="phone" class="col-sm-2 control-label">เบอร์ติดต่อ</label>
			    <div class="col-sm-3">
			      <input type="text" class="form-control" id="phone" name="phone" placeholder="เบอร์ติดต่อ">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="fax" class="col-sm-2 control-label">เบอร์แฟกซ์</label>
			    <div class="col-sm-3">
			      <input type="text" class="form-control" id="fax"  name="fax" placeholder="เบอร์แฟกซ์">
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
var ref1,ref2,ref3,province_id;
	$("#h_province").change(function(){
		 ref1=$("#h_province option:selected").val();
		$.ajax({
			url:'<?php echo base_url() ?>district/getAmphur',data:'name=h_amphur&ref1='+ref1,
			success:function(data)
			{
				$("#input_amphur").html(data);
				$("#hosptal option[value='']").attr('selected','selected');
			}
		});
	});
	$("#h_amphur").live('change',function(){
	 	ref2=$("#h_amphur option:selected").val();
		$.ajax({url:'<?php echo base_url(); ?>district/getDistrict',type:'get',data:'name=h_district&ref1='+ref1+'&ref2='+ref2,success:function(data){$("#input_district").html(data);}});
	});
	$('#h_district').live('change',function(){
		ref3=$("#h_district option:selected").val();
		$.ajax({url:'<?php echo base_url(); ?>hospital/getHospital',type:'get',data:'name=userhospital&ref1='+ref1+'&ref2='+ref2+'&ref3='+ref3,success:function(data){$("#input_hospital").html(data);}});
	});


	$("#form1").validate({
		 groups: {
    			groupidcard:"cardW0 cardW1 cardW2 cardW3 cardW4"
  		},
		rules:{
				telephone:{required:true,number:true, rangelength: [6, 9]}
				,mobile:{required:true,number:true, rangelength: [9, 10]}
	 			,cardW0:{ required: true, number:true},cardW1:{ required: true, number:true},cardW2:{ required: true, number:true},cardW3:{ required: true, number:true}
		 		,cardW4:{ required: true, number:true,
		 			remote:{
		 				url:'<?php echo base_url(); ?>users/chkidcard',
				        data: {
				          idcard: function() { return $('#cardW0').val()+$('#cardW1').val()+$('#cardW2').val()+$('#cardW3').val()+$('#cardW4').val(); },
				          digit_last:function(){return $('#cardW4').val();},
				          uid:function(){return $('#uid').val();}
				        }
		 			}
		 		}
				,userfirstname:"required",usersurname:"required"
				,userprovince:{ required: {depends: function(element) {return $('select[name=userposition] option:selected').val() =='02' }}}
				,userlevel:{required:{depends:function(element){return $('select[name=userposition] option:selected').val()=="01"}}}
				,useramphur:{required:{depends:function(element){return $('select[name=userposition] option:selected').val()=="03"}}}
				,userdistrict:{required:{depends:function(element){return $('select[name=userposition] option:selected').val()=="04"}}}
				,h_province:{required:{depends:function(element){return $('select[name=userposition] option:selected').val()=="05";}}}
				,h_amphur:{required:{depends:function(element){return $('select[name=userposition] option:selected').val()=="05";}}}
				,h_district:{required:{depends:function(element){return $('select[name=userposition] option:selected').val()=="05";}}}
				,userhospital:{required:{depends:function(element){return $('select[name=userposition] option:selected').val()=="05";}}}
				,usermail:{
					required:true,email:true,
					remote:{url:'<?php echo base_url() ?>users/checkEmail',data:{uid:function(){return $('#uid').val()}}}
				}
				,userpassword:"required"
				,repassword:{required:true, equalTo: "#userpassword"}

		},
		messages:{
			    telephone:{required:"กรุณาระบุค่ะ",number:"กรุณาระบุเฉพาะตัวเลขค่ะ",rangelength:"ระบุความยาวอักษร 6-9 ตัวอักษรเท่านั้นค่ะ"}
			    ,mobile:{required:"กรุณาระบุค่ะ",number:"กรุณาระบุเฉพาะตัวเลขค่ะ",rangelength:"ระบุความยาวอักษร 6-9 ตัวอักษรเท่านั้นค่ะ"}
				,cardW0:{required:" กรุณาระบุค่ะ",number: " กรุณาระบุเป็นตัวเลขค่ะ"}
		 		,cardW1:{required:" กรุณาระบุค่ะ",number: " กรุณาระบุเป็นตัวเลขค่ะ"}
		 		,cardW2:{required:" กรุณาระบุค่ะ",number: " กรุณาระบุเป็นตัวเลขค่ะ"}
		 		,cardW3:{required:" กรุณาระบุค่ะ",number: " กรุณาระบุเป็นตัวเลขค่ะ"}
		 		,cardW4:{required:" กรุณาระบุค่ะ",number: " กรุณาระบุเป็นตัวเลขค่ะ",remote :" มีในระบบแล้วหรือระบุไม่ถูกต้อง"}
				,userfirstname:" กรุณาระบุด้วยค่ะ",usersurname:" กรุณาระบุด้วยค่ะ"
				,userlevel:" กรุณาระบุด้วยค่ะ",userprovince:" กรุณาระบุด้วยค่ะ",useramphur:" กรุณาระบุด้วยค่ะ",userdistrict:" กรุณาระบุด้วยค่ะ"
				,usermail:{required:" กรุณาระบุด้วยค่ะ",email:" ระบุไม่ถูกต้องค่ะ",remote:"มีอีเมล์นี้แล้วในระบบ"}
				,h_province:" กรุณาระบุด้วยค่ะ",h_amphur:" กรุณาระบุด้วยค่ะ",h_district:"กรุณาระบุด้วยค่ะ",userhospital:" กรุณาระบุด้วยค่ะ"
				,userpassword:" กรุณาระบุด้วยค่ะ"
				,repassword:{required:" กรุณาระบุด้วยค่ะ",equalTo: " ระบุ password ไม่ถูกต้องค่ะ"}
		},
		errorPlacement: function(error, element){

        		 error.insertAfter(element);
		}
	});


});// document
</script>