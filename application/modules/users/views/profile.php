<div id="Breadcrumbs">
	<ol id="path-breadcrumb">
	  <li><a href="home">หน้าแรก</a></li>
	  <li class="active">ประวัติส่วนตัว</li>
	</ol>
</div>
<div class="titleBlank">ประวัติส่วนตัว<div class="line5"></div> </div>
<div class="contentBlank">
	<?php if($user['user_type']=="1"){
		include('register_public.php');
	 }else if($user['user_type']=="2"){
	 	include('register_people.php');
	 } ?>
</div>