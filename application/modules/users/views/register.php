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
</div>
</div>

<script type="text/javascript">
  $(function(){
  	$('#myTab1 a').click(function(e){
		e.preventDefault();
		$(this).tab('show');
	});

  });
</script>



