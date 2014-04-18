
          <div id="logo">&nbsp;</div>

          <div id="name">&nbsp;</div>

          <!--<div id="fb"><a href="#"><img src="img/icon-facebook.png" width="22" height="22" /></a></div>-->

          <div id="register"><a href="users/register" style="width:109px;height:29px;display:inline-block"></a></div>
          <?php
           $class="show";
          if(login_data('confirm_email') && $this->session->userdata('id')){
          	$class="hide";
          } ?>
          <div id="login" class="<?php echo $class ?>"><a href="users/index" style="width:86px;height:32px;display:inline-block"></a></div>

          <div id="logo_">
          	<img src="media/img/logo-thaihealth.png" width="97" height="58" />&nbsp;
            <img src="media/img/logo-anamai.png" width="70" height="69" style="margin-left:30px;">
          </div>

          <!--<div id="searchbox">
          	<input name="searchbox" id="searchbox" maxlength="50" value="" type="text" />
          </div>-->
          <div class="clearfix"></div>
	          <?php if(login_data('confirm_email') && $this->session->userdata('id')){ ?>
			  <div id="user_login" style="position:relative;width:300px;float:right;">
			  	 ยืนดีต้อนรับ : <span style="padding-right:20px;"><?php echo $this->session->userdata('name'); ?></span>
			  	<?php if($this->session->userdata('permission_id')==2): ?>
			  		<br/>
			  		<a href="users/profile/<?php echo  $this->session->userdata('id')?>" class="label label-primary">ประวัติส่วนตัว</a>
			  	<?php endif; ?>
			  	<a href="users/logout" class="label label-danger" onclick="return confirm('ยืนยันการออกจากระบบ ')">ออกจากระบบ</a>
			  </div>
			  <?php } ?>
          <div class="clearfix" style="clear:both;"></div>