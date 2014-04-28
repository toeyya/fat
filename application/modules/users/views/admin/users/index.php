<div>
	<hr>
	<ul class="breadcrumb">
		<li><a href="admin">หน้าแรก</a></li>
		<li><a href="users/admin/users/index">สมาชิก</a></li>
	</ul>
	<hr>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="box">
			<div class="box-header">
				<h2><i class="fa fa-search"></i><span class="break"></span>ค้นหา</h2>
			</div>
			<div class="box-content">
			<form class="form-inline" role="form" method="get" action="users/admin/users/index">
			  <div class="form-group">
			    <input type="text" class="form-control" id="exampleInputEmail2" placeholder="องค์กร/ผู้รับผิดชอบ/อีเมล์" name="name" value="<?php echo @$_GET['name'] ?>">

			  </div>
			  <div class="form-group">
			  	<?php echo form_dropdown('province_id',get_option('id','province_name','f_province','','province_name'),@$_GET['province_id'],'class="form-control"','จังหวัด') ?>
			  </div>
			  <div class="form-group">
			  	<span id="amphur">
			  		<?php if(!empty($_GET['amphur_id'])){
			  			echo form_dropdown('amphur_id',get_option('id','amphur_name','f_amphur','id ='.$_GET['amphur_id'],'amphur_name'),$_GET['amphur_id'],'class="form-control"');
			  		 }else{ ?>
			  		 	<select name="amphur_id" class="form-control">
			  		 		<option value="">อำเภอ</option>
			  		 	</select>
			  		<?php } ?>
			  	</span>
			  </div>
			  <div class="form-group">
			  	<span id="district">
			  		<?php if(!empty($_GET['district_id'])){
			  			echo form_dropdown('district_id',get_option('id','district_name','f_district','id='.$_GET['district_id'],'district_name'),$_GET['district_id'],'class="form-control"');
			  		 }else{ ?>
			  		 	<select name="district_id" class="form-control">
			  		 		<option value="">ตำบล</option>
			  		 	</select>
			  		<?php } ?>
			  	</span>
			  </div>
			  <button type="submit" class="btn btn-warning btn-sm"><i class="fa fa-search"> ค้นหา</i></button>

			</form>
			</div>

		</div>
	</div>

	<div class="col-lg-12">
		<div class="box">
			<div class="box-header">
				<h2><i class="fa fa-align-justify"></i><span class="break"></span>สมาชิก</h2>
			</div>
			<div class="box-content">
				<table class="table table-striped">
					  <thead>
						  <tr>
							  <th>ลำดับ</th>
							  <th>ชื่อองค์กร</th>
							  <th>ตำบล</th>
							  <th>อำเภอ</th>
							  <th>จังหวัด</th>
							  <th>เขต-ผู้ตรวจ</th>
							  <th>ผู้รับผิดชอบ</th>
							  <th>อีเมล์</th>
							  <th>เบอร์ติดต่อ</th>
							  <th>
							  	<?php if(permission('user','act_create')): ?>
							  	<a class="btn btn-success btn-sm" href="users/admin/users/form"> <i class="fa fa-plus "></i> เพิ่มรายการ</a>
							  	<?php endif; ?>
							  </th>

						  </tr>
					  </thead>
					  <tbody>
					  	<?php $i=(@$_GET['page'] > 1)? (((@$_GET['page'])* 20)-20)+1:1;?>
					  	<?php foreach($result as $item): ?>
						<tr>
						  	<td><label class="switch switch-primary">
								      <input type="checkbox"  name ="active" class="switch-input" value="<?php echo $item['id'] ?>" <?php if($item['active']=="1"){echo 'checked="checked"';} ?>>
								      <span class="switch-label"  data-off="Off" data-on="On"></span>
								      <span class="switch-handle"></span>
								</label>
							</td>
							<td><?php echo $item['agency_name'] ?></td>
							<td><?php echo $item['district_name'] ?></td>
							<td><?php echo $item['amphur_name']?></td>
							<td><?php echo $item['province_name']?></td>
							<td><?php echo $item['hpc']." - ".$item['e_inspect'] ?></td>
							<td><?php echo $item['response_man']; ?></td>
							<td><?php echo $item['email']?></td>
							<td><?php echo $item['phone']?></td>
							<td>
								<?php if(permission('user','act_update')): ?>
								<a class="btn btn-info btn-sm" href="users/admin/users/form/<?php echo $item['id']?>"><i class="fa fa-edit "></i></a>
								<?php endif; ?>
								<?php if(permission('user','act_delete')): ?>
								<a class="btn btn-danger btn-sm" href="users/admin/users/delete/<?php echo $item['id'] ?>" onclick="return confirm('<?php echo NOTICE_CONFIRM_DELETE ?>')"><i class="fa fa-trash-o "></i></a>
								<?php endif; ?>
							</td>
						</tr>
						<?php $i++; endforeach; ?>
					  </tbody>
				 </table>
				 <div class="text-center">
				 <div class="pagination pagination-centered">
				  <ul class="pagination">
					<?php echo $pagination; ?>
				  </ul>
				</div>
				</div>
			</div>
		</div>
		</div>
	</div><!--/col-->
</div><!--/row-->
<script type="text/javascript">
$(document).ready(function(){
	$('select[name=province_id]').change(function(){
		if($(this).val().length>0){
		$.ajax({url:'setting/getAmphur',data:'province_id='+$(this).val(),success:function(data){$('#amphur').html(data).find('select').addClass('form-control');}});
		}
	});
	$('select[name=amphur_id]').live('change',function(){
		if($(this).val().length>0){
		$.ajax({url:'setting/getDistrict',data:'amphur_id='+$(this).val(),success:function(data){$('#district').html(data).find('select').addClass('form-control');}});
		}
	});
});
</script>
