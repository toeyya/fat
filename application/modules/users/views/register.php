<div id="Breadcrumbs">
	<ol id="path-breadcrumb">
	  <li><a href="home">หน้าแรก</a></li>
	  <li class="active">สมัครสมาชิก</li>
	</ol>
</div>
<div class="titleBlank">สมัครสมาชิก<div class="line5"> </div> </div>
<div class="contentBlank">
<div class="alert alert-info"><strong>ประกาศ !! </strong>เมื่อลงทะเบียนแล้ว กรุณายืนยันการลงทะเบียนจากลิงค์ในอีเมล์  จึงจะใช้งานได้</div>
<ul class="nav nav-tabs" id="myTab1">
  <li class="active"><a href="#home">องค์กร/ภาครัฐ/ภาคเอกชน</a></li>
  <li><a href="#profile">บุคคลทั่วไป</a></li>
</ul>

<div class="tab-content">
  <div class="tab-pane active" id="home">
	<?php include_once('register_public.php'); ?>
  </div>
  <div class="tab-pane" id="profile">
	<?php include_once('register_people.php'); ?>
  </div>
  <span class="label label-default">หมายเหตุ</span> <label class="alertred">*</label> หมายถึง ต้องระบุค่าเท่านั้น
</div>
</div>
<script type="text/javascript" src="media/js/validate/jquery.validate.js"></script>
<script type="text/javascript" src="media/js/validate/additional-method.js"></script>
<script type="text/javascript">
  $(function(){
  	$('#myTab1 a').click(function(e){
		e.preventDefault();
		$(this).tab('show');
	});
	$('#form1').validate({
		onkeyup: false,
   		onclick: false,
		rules:{
			email:{required:true,email:true},password:"required",
			repassword:{required:true,equalTo:'#password'},
			firstname:"required",lastname:"required",gender:"required",age:{required:true,number:true},
			captcha:{required:true,remote:{url:'<?php echo base_url();?>users/check_captcha'}}
		},
		messages:{
			email:{required:" กรุณาระบุ",email:" กรุณาระบุรูปแบบให้ถูกต้อง"},
			password:" กรุณาระบุ",repassword:{required:" กรุณาระบุ",equalTo:" กรุณาให้ระบุให้ตรงกัน"},
			firstname:" กรุณาระบุ",lastname:" กรุณาระบุ",gender:" กรุณาระบุ",age:{required:" กรุณาระบุ",number:" กรุณาระบุตัวเลขเท่านั้น"},
			captcha:{required:" กรุณาระบุ",remote:" กรุณาระบุให้ตรงภาพ"}
		}
	});
	$('#form2').validate({
		onkeyup: false,
   		onclick: false,
		rules:{
			email:{required:true,email:true,remote:{url:'users/check_email'}},
			password:"required",repassword:{required:true,equalTo:'#password'},
			response_man:"required",co_agency_man:"required",co_province_man:"required",agency_type:"required",
			agency_name:"required",gender:"required",age:{required:true,},
			phone:{required:true,number:true,minlength:6,maxlength:7},
			province_id:"required",amphur_id:"required",district_id:"required",
			captcha:{required:true,remote:{url:'users/check_captcha'}}
		},
		messages:{
			email:{required:" กรุณาระบุ",email:" กรุณาระบุรูปแบบให้ถูกต้อง",remote:" มีอยู่แล้วในระบบ"},password:" กรุณาระบุ",
			repassword:{required:" กรุณาระบุ",equalTo:" กรุณาให้ระบุให้ตรงกัน"},
			response_man:"กรุณาระบุ",co_agency_man:"กรุณาระบุ",co_province_man:"กรุณาระบุ",agency_type:"กรุณาระบุ",
			agency_name:"กรุณาระบุ",gender:" กรุณาระบุ",age:{required:"กรุณาระบุ",number:"กรุณาระบุตัวเลขเท่านั้น"},
			phone:{required:"กรุณาระบุ",minlength:"ระบุอย่างน้อย 6 หลัก",maxlength:"ระบุเกินกว่า 7 หลัก",number:"กรุณาระบุตัวเลขเท่านั้น"},
			province_id:"กรุณาระบุ",amphur_id:"กรุณาระบุ",district_id:"กรุณาระบุ",
			captcha:{required:" กรุณาระบุ",remote:" กรุณาระบุให้ตรงภาพ"}
		}
	});
  });
</script>



