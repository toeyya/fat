<div id="Breadcrumbs">
	<ol id="path-breadcrumb">
	  <li><a href="home">หน้าแรก</a></li>
	  <li class="active">สมัครสมาชิก</li>
	</ol>
</div>
<div class="titleBlank">สมัครสมาชิก<div class="line5"> </div> </div>
<div class="contentBlank">
<ul class="nav nav-tabs" id="myTab">
  <li class="active"><a href="#home">องค์กร/ภาครัฐ/ภาคเอกชน</a></li>
  <li><a href="#profile">บุคคลทั่วไป</a></li>
</ul>

<div class="tab-content">
  <div class="tab-pane active" id="home">
		<form class="form-horizontal" method="post" action="users/save">
		  <div class="control-group">
		    <label class="control-label" for="inputEmail">Email</label>
		    <div class="controls">
		      <input type="text" id="inputEmail" placeholder="Email" name="email">
		    </div>
		  </div>
		  <div class="control-group">
		    <label class="control-label" for="inputPassword">Password</label>
		    <div class="controls">
		      <input type="password" id="inputPassword" placeholder="Password" name="password">
		    </div>
		  </div>
		 <div class="line5"> </div>
		   <div class="control-group">
		    <label class="control-label" for="inputPassword">ชื่อ ผู้ประสานงาน</label>
		    <div class="controls">
		      <input type="password" id="inputPassword" placeholder="ชื่อ" name="firstname">
		    </div>
		  </div>

		   <div class="control-group">
		    <label class="control-label" for="inputPassword">นามสกุล ผู้ประสานงาน</label>
		    <div class="controls">
		      <input type="password" id="inputPassword" placeholder="นามสกุล" name="lastname">
		    </div>
		  </div>

		   <div class="control-group">
		    <label class="control-label" for="inputPassword">เพศ</label>
		    <div class="controls">
		      <input type="password" id="inputPassword" placeholder="เพศ" name="gender">
		    </div>
		  </div>
		    <div class="control-group">
		    <label class="control-label" for="inputPassword">อายุ</label>
		    <div class="controls">
		      <input type="password" id="inputPassword" placeholder="อายุ" name="age">
		    </div>
		  </div>
		     <div class="control-group">
		    <label class="control-label" for="inputPassword">เบอร์โทรศัพท์</label>
		    <div class="controls">
		      <input type="password" id="inputPassword" placeholder="เบอร์โทรศัพท์" name="phone">
		      <span class="label label-default">ตัวอย่าง </span> 0123456789
		    </div>
		  </div>
		   <div class="control-group">
		    <label class="control-label" for="inputPassword">ตำแหน่ง</label>
		    <div class="controls">
		      <input type="password" id="inputPassword" placeholder="ตำแหน่ง" name="position">
		    </div>
		  </div>
		   <div class="control-group">
		    <label class="control-label" for="inputPassword">หน่วยงาน</label>
		    <div class="controls">
		      <input type="password" id="inputPassword" placeholder="หน่วยงาน" name="agency_name">
		    </div>
		  </div>
		     <div class="control-group">
		    <label class="control-label" for="inputPassword">ที่อยู่</label>
		    <div class="controls">
		      <input type="password" id="inputPassword" placeholder="ที่อยู่" name="address">
		    </div>
		  </div>
		   <div class="control-group">
		    <label class="control-label" for="inputPassword">จังหวัด</label>
		    <div class="controls">
		     <?php echo form_dropdown('province_id',get_option('id','province_name','f_province'),'','','โปรดระบุ'); ?>
		    </div>
		  </div>
		   <div class="control-group">
		    <label class="control-label" for="inputPassword">อำเภอ</label>
		    <div class="controls">
		     	<select name="amphur_id">
		     		<option value="">โปรดระบุ</option>
		     	</select>
		    </div>
		  </div>
		   <div class="control-group">
		    <label class="control-label" for="inputPassword">ตำบล</label>
		    <div class="controls">
		     	<select name="district_id">
		     		<option value="">โปรดระบุ</option>
		     	</select>
		    </div>
		  </div>
		   <div class="control-group">
		    <label class="control-label" for="inputPassword">รหัสไปรษณีย์</label>
		    <div class="controls">
		      <input type="password" id="inputPassword" placeholder="รหัสไปรษณีย์" name="postcode">
		    </div>
		  </div>

		<div><button type="submit" class="btn btn-primary btn-large">ตกลง</button></div>
		</form>
  </div>
  <div class="tab-pane" id="profile">


  </div>
</div>
</div>


<script type="text/javascript">
  $(function () {
    $('#myTab a:last').tab('show');
  })
</script>



