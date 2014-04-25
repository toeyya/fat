<style>
	.form-horizontal .control-label{width:250px;padding-right:5px;text-align:right}
	.line5{margin-top:0px;margin-left:0px;margin-bottom: 20px;}
</style>
	<div class="span9" style="margin-top:20px;">
		<form  method="post" action="users/save" class="form-horizontal" id="form2">
		  <div class="control-group">
		    <label class="control-label"  for="inputEmail"><label class="alertred">*</label>อีเมล์</label>
		    <div class="controls">
		      <input type="text" id="inputEmail" placeholder="อีเมล์" name="email" class="input-xlarge">
		    </div>
		  </div>
		  <div class="control-group">
		    <label class="control-label" for="inputPassword"><label class="alertred">*</label>รหัสผ่่าน</label>
		    <div class="controls" >
		      <input type="password" id="inputPassword" placeholder="รหัสผ่่าน" name="password"  class="xlarge">
		    </div>
		  </div>
		  <div class="control-group">
		    <label class="control-label" for="inputReassword"><label class="alertred">*</label>ยืนยันรหัสผ่่าน</label>
		    <div class="controls" >
		      <input type="password" id="inputReassword" placeholder="ยืนยันรหัสผ่่าน" name="repassword"  class="xlarge">
		    </div>
		  </div>
		 <div class="line5"> </div>
		   <div class="control-group">
		    <label class="control-label" for="inputFullname3"><label class="alertred">*</label>ชื่อ - นามสกุล ผู้รับผิดชอบ</label>
		    <div class="controls" >
		      <input type="text" id="inputFullname3" placeholder="ชื่อ - นามสกุล ผู้รับผิดชอบ" name="response_man"  class="input-xlarge">
		    </div>
		  </div>
		   <div class="control-group">
		    <label class="control-label" for="inputFullname1"><label class="alertred">*</label>ชื่อ - นามสกุล ผู้ประสานงาน(องค์กร)</label>
		    <div class="controls" >
		      <input type="text" id="inputFullname1" placeholder="ชื่อ - นามสกุล ผู้ประสานงาน(องค์กร)" name="co_agency_man"  class="input-xlarge">
		    </div>
		  </div>

		   <div class="control-group">
		    <label class="control-label" for="inputFullname2"><label class="alertred">*</label>ชื่อ - นามสกุล ผู้ประสานงาน(จังหวัด)</label>
		    <div class="controls" >
		      <input type="text" id="inputFullname2" placeholder="ชื่อ - นามสกุล ผู้ประสานงาน(จังหวัด)" name="co_province_man"  class="input-xlarge">
		    </div>
		  </div>

		   <div class="control-group">
		    <label class="control-label" for="inputPosition">ตำแหน่ง</label>
		    <div class="controls">
		      <input type="text" id="inputPosition" placeholder="ตำแหน่ง" name="position">
		    </div>
		  </div>
		  <div class="control-group">
		    <label class="control-label" for="inputPhone"><label class="alertred">*</label>โทรศัพท์สำนักงาน</label>
		    <div class="controls">
		      <input type="text" id="inputPhone" placeholder="โทรศัพท์สำนักงาน" name="phone">
		      <span class="label label-default">ตัวอย่าง</span> 0221234567
		    </div>
		  </div>
		  <div class="control-group">
		    <label class="control-label" for="inputMobile">มือถือ</label>
		    <div class="controls">
		      <input type="text" id="inputMobile" placeholder="มือถือ" name="mobile">
		      <span class="label label-default">ตัวอย่าง</span> 08123456789
		    </div>
		  </div>
		   <div class="line5"> </div>
		   <div class="control-group">
		    <label class="control-label" for="inputAgency"><label class="alertred">*</label>ประเภทหน่วยงาน</label>
		    <div class="controls">
		      	<?php echo form_dropdown('agency_type',get_option('id','name','f_agency_type','active=1','queue asc'),'','','โปรดระบุ') ?>
		    </div>
		  </div>
		   <div class="control-group">
		    <label class="control-label" for="inputAgency"><label class="alertred">*</label>องค์กร</label>
		    <div class="controls">
		      <input type="text" id="inputAgency" placeholder="องค์กร" name="agency_name"  class="input-xlarge">
		    </div>
		  </div>
		     <div class="control-group">
		    <label class="control-label" for="inputAddress">ที่อยู่</label>
		    <div class="controls">
		      <input type="text" id="inputAddress" placeholder="ที่อยู่" name="address"  class="input-xlarge">
		    </div>
		  </div>
		   <div class="control-group">
		    <label class="control-label" ><label class="alertred">*</label>จังหวัด</label>
		    <div class="controls" >
		     <?php echo form_dropdown('province_id',get_option('id','province_name','f_province'),'','','โปรดระบุ'); ?>
		    </div>
		  </div>
		   <div class="control-group">
		    <label class="control-label"><label class="alertred">*</label>อำเภอ</label>
		    <div class="controls" id="amphur">
		     	<select name="amphur_id">
		     		<option value="">โปรดระบุ</option>
		     	</select>
		    </div>
		  </div>
		   <div class="control-group">
		    <label class="control-label" ><label class="alertred">*</label>ตำบล</label>
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
		   <input type="hidden" name="permission_id" value="2">
  		  <?php echo (!empty($rs['id'])) ? form_hidden('updated',date('Y-m-d H:i:s')) : form_hidden('created',date('Y-m-d H:i:s'))?>
		 <input type="hidden" name="id" value="<?php echo @$rs['id'] ?>">

          <?php if(empty($profile)): ?>
          <div class="control-group">
            <label class="control-label" for="inputCaptcha"><label class="alertred">*</label>รหัสลับ</label>
                <div class="controls" >
                   <img src="img.php" />
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