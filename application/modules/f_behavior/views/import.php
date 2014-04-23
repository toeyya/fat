<div id="Breadcrumbs">
  	<ol id="path-breadcrumb">
      <li><a href="home">หน้าแรก</a></li>
      <li><a href="f_weight/ebelly">ระบบสารสนเทศ e-flat belly</a></li>
      <li class="active">ประเมินพฤติกรรม  ครั้งที่ <?php echo $time ?></li>
    </ol>
</div>
<div class="titleGroup2">นำเข้าไฟล์ excel ประเมินพฤติกรรม</div>
<div class="contentBlank">

	<form action="f_behavior/upload" enctype="multipart/form-data" class="form-horizontal" method="post">
	<?php if($permission=="1"): ?>
	<div class="control-group">
	    <label class="control-label" for="inputYear">จังหวัด</label>
	    <div class="controls">
	    <?php echo form_dropdown('province_id',get_option('id','province_name','f_province'),@$_GET['province_id'],'c','เลือกจังหวัด'); ?>
	    </div>
	 </div>
	<div class="control-group">
	    <label class="control-label" for="inputYear">องค์กร</label>
	    <div class="controls">
	    <span id="agency">
			<?php
			if(!empty($_GET['user_id'])){
				echo form_dropdown('user_id',get_option('id','agency_name','f_users','province_id = '.$_GET['province_id'],'agency_name'),@$_GET['user_id'],'','เลือกองค์กร');
			}else{
			?>
				<select name="user_id" ><option value="">เลือกองค์กร</option></select>
			<?php }  ?>
		</span>
	    </div>
	  </div>
	 <?php endif; ?>
	<div class="control-group">
	    <label class="control-label" for="inputYear">ปีงบประมาณ</label>
	    <div class="controls">
	     <?php echo form_dropdown('year',get_year_option("2556"),'class="search-query"','',''); ?>
	    </div>
	  </div>
	<div class="control-group">
	    <label class="control-label" for="inputYear">ครั้งที่ </label>
	    <div class="controls">
	    	<label class="radio-inline">
	    		<input type="radio" name="time" value="1" <?php if($time=="1"){echo 'checked="checked"';}  ?>>1</label>
	    	<label class="radio-inline">
	    		<input type="radio" name="time" value="2" <?php if($time=="2"){echo 'checked="checked"';}  ?>>2</label>
	    </div>
	  </div>
	<div class="control-group">
	    <label class="control-label" for="inputYear">ไฟล์ </label>
	    <div class="controls">
	    	<input type="file" name="files">
	 		<small>excel เท่านั้น</small>
	    </div>

	  </div>
	<div class="control-group">
	    <label class="control-label" for="inputYear"> </label>
	    <div class="controls">
			<button type="submit" name="btn_save" class="btn btn-primary">บันทึก</button>
	    </div>
	  </div>
	</form>
