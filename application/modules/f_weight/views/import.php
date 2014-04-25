<div id="Breadcrumbs">
  	<ol id="path-breadcrumb">
      <li><a href="home">หน้าแรก</a></li>
      <li><a href="f_weight/ebelly">ระบบสารสนเทศ e-flat belly</a></li>
      <li class="active">รอบเอวและน้ำหนักตัว  ครั้งที่ <?php echo $time ?></li>
    </ol>
</div>
<div class="titleGroup2">นำเข้าไฟล์ excel รอบเอวและน้ำหนักตัวของประชาชนในหน่วยงาน/องค์กรต้นแบบ</div>
<div class="contentBlank">

	<form action="f_weight/upload" enctype="multipart/form-data" class="form-horizontal" method="post">
	<?php if($permission=="1"): ?>
	<div class="control-group">
	    <label class="control-label" for="inputYear"><label class="alertred">*</label>จังหวัด</label>
	    <div class="controls">
	    <?php echo form_dropdown('province_id',get_option('id','province_name','f_province','','province_name'),'','','เลือกจังหวัด'); ?>
	    </div>
	 </div>
	<div class="control-group">
	    <label class="control-label" for="inputYear"><label class="alertred">*</label>องค์กร</label>
	    <div class="controls">
	    <span id="agency">
			<?php echo form_dropdown('user_id',get_option('id','agency_name','f_users','','agency_name'),'','','เลือกองค์กร'); ?>
		</span>
	    </div>
	  </div>
	 <?php endif; ?>

	<div class="control-group">
	   <label class="control-label" for="inputYear">ปีงบประมาณ</label>
	    <div class="controls">
	     <?php echo form_dropdown('year',get_year_option("2556"),'','',''); ?>
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
	    <label class="control-label" for="inputYear"><label class="alertred">*</label>ไฟล์ </label>
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
	<div style="display: none;">
		<div id="load" style="padding-left:85px;padding-top:40px;"><img src="media/img/loadingmove.gif" width="78px" height="20px"></div>
	</div>
<script type="text/javascript">
$(document).ready(function(){
	$('select[name=province_id]').change(function(){
		if($(this).val().length>0){
			$.ajax({
				url:'setting/getAgency',
				data:'province_id='+$(this).val(),
				success:function(data){
					$('#agency').html(data).find('select').removeClass('search-query');
				}
			});
		}
	});
	$('[name=btn_save]').click(function(){
		$.colorbox({href:'#load',inline:true,innerWidth:'150px',innerHight:'150px',height:'150px',width:'300px',closeButton:false});
	});
});
</script>
