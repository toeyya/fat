  	<div class="span9" style="margin-top:20px;">

		<form class="form-horizontal" method="post" action="users/save" id="form1">
		  <div class="control-group">
		   <label class="control-label" for="inputEmail"><label class="alertred">*</label> อีเมล์</label>
		    <div class="controls">
		      <input type="text" id="inputEmail" placeholder="อีเมล์" name="email" value="<?php echo @$user['email']?>"  class="input-xlarge">
		    </div>
		  </div>
		  <div class="control-group">
		    <label class="control-label" for="inputPassword"><label class="alertred">*</label> รหัสผ่่าน</label>
		    <div class="controls">
		      <input type="password" id="inputPassword" placeholder="รหัสผ่่าน" name="password" id="password">
		    </div>
		  </div>
		  <div class="control-group">
		   <label class="control-label" for="inputRePassword"><label class="alertred">*</label> ยืนยันรหัสผ่าน</label>
		    <div class="controls">
		      <input type="password" id="inputRePassword" placeholder="ยืนยันรหัสผ่าน" name="repassword">
		    </div>
		  </div>
		 <div class="line5" style="margin-top:0px;margin-left:0px;margin-bottom: 20px"> </div>
		   <div class="control-group">
		    <label class="control-label" for="inputFirstname"> <label class="alertred">*</label> ชื่อ-นามสกุล</label>
		    <div class="controls">
		      <input type="text" id="inputFirstname" placeholder=" ชื่อ-นามสกุล" name="response_man" value="<?php echo  @$user['response_man']?>"  class="input-xlarge">
		    </div>
		  </div>


		   <div class="control-group">
		    <label class="control-label" > <label class="alertred">*</label>เพศ</label>
		    <div class="controls">
		     <?php echo form_dropdown('gender',array('1'=>'ชาย','2'=>'หญิง'),@$user['gender'],'','โปรดระบุ') ?>
		    </div>
		  </div>
		    <div class="control-group">
		    <label class="control-label" for="inputAge"> <label class="alertred">*</label>อายุ</label>
		    <div class="controls">
		      <input type="text" id="inputAge" placeholder="อายุ" name="age" value="<?php echo  @$user['age']?>">
		    </div>
		  </div>
                  <input type="hidden"  name="permission_id" value="3">
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
