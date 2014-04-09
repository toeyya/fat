<div>
	<hr>
	<ul class="breadcrumb">
		<li><a href="admin">หน้าแรก</a></li>
		 <li><a href="#">ตั้งค่าองค์กรต้นแบบไร้พุง</a></li>
		<li><a href="setting/admin/agency/index">ศูนย์องค์กรต้นแบบไร้พุง</a></li>
		<li><?php echo $rs['name'] ?></li>
	</ul>
	<hr>
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="box">
			<div class="box-header">
				<h2><i class="fa fa-align-justify"></i><span class="break"></span>ศูนย์องค์กรต้นแบบไร้พุง </h2>
			</div>
			<div class="box-content">
			<form class="form-horizontal" role="form">
			  <div class="form-group">
			    <label for="name" class="col-sm-2 control-label">ชื่อองค์กร</label>
			    <div class="col-sm-3">
			      <input type="text" class="form-control" name="name"  placeholder="ชื่อองค์กร" value="<?php echo $rs['name'] ?>">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="organization_type" class="col-sm-2 control-label">ประเภทองค์กร</label>
			    <div class="col-sm-3">
			     	<?php echo form_dropdown('organization_type',get_option('id','name','f_organizations'),$rs['organization_type'],'class="form-control"','') ?>
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="province" class="col-sm-2 control-label">จังหวัด</label>
			    <div class="col-sm-3">
			      <?php echo form_dropdown('province_id',get_option('id','province_name','f_province','','province_name'),$rs['province_id'],'class="form-control"','โปรดเลือก') ?>
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="amphur_id" class="col-sm-2 control-label">อำเภอ</label>
			    <div class="col-sm-3">
			      <?php
			       $wh = (!empty($rs['province_id'])) ? " province_id =".$rs['province_id']:'';
			       echo form_dropdown('amphur_id',get_option('id','amphur_name','f_amphur',$wh,'amphur_name'),$rs['amphur_id'],'class="form-control"','โปรดเลือก') ?>
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="district_id" class="col-sm-2 control-label">ตำบล</label>
			    <div class="col-sm-3">
			      <?php
			       $wh = (!empty($rs['province_id']) && !empty($rs['amphur_id'])) ? " province_id =".$rs['province_id']." and amphur_id=".$rs['amphur_id']:'';
			      echo form_dropdown('district_id',get_option('id','district_name','f_district',$wh,'district_name'),$rs['district_id'],'class="form-control"','โปรดเลือก') ?>
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="e_inspect" class="col-sm-2 control-label">เครือข่ายบริการ<br/>(ผู้ตรวจ)</label>
			    <div class="col-sm-3">
			       <?php echo form_dropdown('e_inspect',get_option('id','district_name','f_district'),'','class="form-control"','') ?>
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="hpc" class="col-sm-2 control-label">ศูนย์อนามัย<br/>(เขต)</label>
			    <div class="col-sm-3">
			       <?php echo form_dropdown('hpc',get_option('id','district_name','f_district'),'','class="form-control"','') ?>
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="submit" class="btn btn-info">บันทึก</button>
			      <button type="submit" class="btn btn-default">ย้อนกลับ</button>
			    </div>
			  </div>
			</form>
			</div>
		</div>
	</div>
</div>
