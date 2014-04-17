
	<div class="span9" style="margin-top:20px;">
		<form  method="post" action="users/save" class="form-horizontal">
		  <div class="control-group">
		    <label class="control-label"  for="inputEmail">อีเมล์</label>
		    <div class="controls">
		      <input type="text" id="inputEmail" placeholder="อีเมล์" name="email" class="xlarge">
		    </div>
		  </div>
		  <div class="control-group">
		    <label class="control-label" for="inputPassword">รหัสผ่่าน</label>
		    <div class="controls" >
		      <input type="password" id="inputPassword" placeholder="รหัสผ่่าน" name="password"  class="xlarge">
		    </div>
		  </div>
		  <div class="control-group">
		    <label class="control-label" for="inputReassword">ยืนยันรหัสผ่่าน</label>
		    <div class="controls" >
		      <input type="password" id="inputReassword" placeholder="ยืนยันรหัสผ่่าน" name="repassword"  class="xlarge">
		    </div>
		  </div>
		 <div class="line5" style="margin-top:0px;margin-left:0px;margin-bottom: 20px"> </div>
		   <div class="control-group">
		    <label class="control-label" for="inputFirstname">ชื่อ ผู้ประสานงาน</label>
		    <div class="controls" >
		      <input type="text" id="inputFirstname" placeholder="ชื่อ" name="firstname"  class="xlarge">
		    </div>
		  </div>

		   <div class="control-group">
		    <label class="control-label" for="inputLastname">นามสกุล ผู้ประสานงาน</label>
		    <div class="controls" >
		      <input type="text" id="inputLastname" placeholder="นามสกุล" name="lastname"  class="xlarge">
		    </div>
		  </div>

		   <div class="control-group">
		    <label class="control-label" >เพศ</label>
		    <div class="controls">
		        <?php echo form_dropdown('gender',array('1'=>'ชาย','2'=>'หญิง'),'','','โปรดระบุ') ?>
		    </div>
		  </div>
		    <div class="control-group">
		    <label class="control-label" for="inputAge">อายุ</label>
		    <div class="controls">
		      <input type="text" id="inputAge" placeholder="อายุ" name="age"  class="input-mini">
		    </div>
		  </div>
		     <div class="control-group">
		    <label class="control-label" for="inputPhone">เบอร์ติดต่อ</label>
		    <div class="controls">
		      <input type="text" id="inputPhone" placeholder="เบอร์โทรศัพท์" name="phone">
		      <span class="label label-default">ตัวอย่าง  </span> 0123456789
		    </div>
		  </div>
		   <div class="control-group">
		    <label class="control-label" for="inputPosition">ตำแหน่ง</label>
		    <div class="controls">
		      <input type="text" id="inputPosition" placeholder="ตำแหน่ง" name="position">
		    </div>
		  </div>
		   <div class="control-group">
		    <label class="control-label" for="inputAgency">ประเภทหน่วยงาน</label>
		    <div class="controls">
		      	<?php echo form_dropdown('agency_type',get_option('id','name','f_agency_type','active=1','queue asc'),'','','โปรดระบุ') ?>
		    </div>
		  </div>
		   <div class="control-group">
		    <label class="control-label" for="inputAgency">หน่วยงาน</label>
		    <div class="controls">
		      <input type="text" id="inputAgency" placeholder="หน่วยงาน" name="agency_name">
		    </div>
		  </div>
		     <div class="control-group">
		    <label class="control-label" for="inputAddress">ที่อยู่</label>
		    <div class="controls">
		      <input type="text" id="inputAddress" placeholder="ที่อยู่" name="address">
		    </div>
		  </div>
		   <div class="control-group">
		    <label class="control-label" >จังหวัด</label>
		    <div class="controls" >
		     <?php echo form_dropdown('province_id',get_option('id','province_name','f_province'),'','','โปรดระบุ'); ?>
		    </div>
		  </div>
		   <div class="control-group">
		    <label class="control-label">อำเภอ</label>
		    <div class="controls" id="amphur">
		     	<select name="amphur_id">
		     		<option value="">โปรดระบุ</option>
		     	</select>
		    </div>
		  </div>
		   <div class="control-group">
		    <label class="control-label" >ตำบล</label>
		    <div class="controls" id="district">
		     	<select name="district_id">
		     		<option value="">โปรดระบุ</option>
		     	</select>
		    </div>
		  </div>
		   <div class="control-group">
		    <label class="control-label" for="inputPostcode" >รหัสไปรษณีย์</label>
		    <div class="controls">
		      <input type="text" id="inputPostcode" placeholder="รหัสไปรษณีย์" name="postcode">
		    </div>
		  </div>
		  <input type="hidden" name="user_type" value="1">
		   <input type="hidden" name="permission_id" value="2">
  		  <?php echo (!empty($rs['id'])) ? form_hidden('updated',date('Y-m-d H:i:s')) : form_hidden('created',date('Y-m-d H:i:s'))?>
		 <input type="hidden" name="id" value="<?php echo @$rs['id'] ?>">

          <?php if(empty($profile)): ?>
          <div class="control-group">
            <label class="control-label" for="inputCaptcha"><label class="alertred">*</label>รหัสลับ</label>
                <div class="controls" >
                  <img src="users/captcha"></br/>
                  <input class="input-small" type="text" name="captcha" id="inputCaptcha" placeholder="รหัสลับ">
                </div>
            </div>
            <div class="control-group">
             <label class="control-label" for="inputCaptcha"></label>
                <div class="controls" >
			</div>
			</div>
			<?php endif; ?>
			<div class="text-center"><button class="btn btn-primary" type="submit"><?php echo (empty($profile))? 'ลงทะเบียน':'บันทึก'   ?></button></div>
		</form>
</div>