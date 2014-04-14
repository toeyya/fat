<div class="titleGroup2">นำเข้าไฟล์ excel รอบเอวและน้ำหนักตัวของประชาชนในหน่วยงาน/องค์กรต้นแบบ</div>
<div class="contentBlank">

	<form action="f_weight/upload" enctype="multipart/form-data" class="form-horizontal">
	<div class="control-group">
	    <label class="control-label" for="inputYear">ปีลงบประมาณ</label>
	    <div class="controls">
	     <?php echo form_dropdown('year',get_year_option("2556"),'class="search-query"','',''); ?>
	    </div>
	  </div>
	<div class="control-group">
	    <label class="control-label" for="inputYear">ครั้งที่ </label>
	    <div class="controls">
	    	<label>
	    	<input type="radio" name="time" value="1" class="inline">1</label>
	    	<label>
	    	<input type="radio" name="time" value="2" class="inline">2</label>

	    </div>
	  </div>
	<div class="control-group">
	    <label class="control-label" for="inputYear">ไฟล์ </label>
	    <div class="controls">
	    	<input type="file" name="file1">
	 		<small>excel เท่านั้น</small>
	    </div>
	  </div>
	</form>
