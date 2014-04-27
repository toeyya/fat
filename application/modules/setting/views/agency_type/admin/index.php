<div>
	<hr>
	<ul class="breadcrumb">
		 <li><a href="#">ตั้งค่าองค์กรต้นแบบไร้พุง</a></li>
		<li>ประเภทบุคคล</li>
	</ul>
	<hr>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="box">
			<div class="box-header">
				<h2><i class="fa fa-align-justify"></i><span class="break"></span>ประเภทบุคคล</h2>
			</div>
			<div class="box-content">
				<table class="table table-striped">
					  <thead>
						  <tr>
							  <th>แสดง</th>
							  <th>ประเภทบุคคล</th>
							  <th>
							  	<?php if(permission('setting','act_create')): ?>
							  	<a class="btn btn-success btn-sm" href="setting/admin/agency_type/form"> <i class="fa fa-plus "></i> เพิ่มรายการ</a>
							  	<?php endif; ?>
							  </th>
						  </tr>

						  <?php foreach($result as $item): ?>
						  <tr>
						  	<td><label class="switch switch-primary">
								      <input type="checkbox"  name ="active" class="switch-input" value="<?php echo $item['id'] ?>" <?php if($item['active']=="1"){echo 'checked="checked"';} ?>>
								      <span class="switch-label"  data-off="Off" data-on="On"></span>
								      <span class="switch-handle"></span>
								</label>
							</td>
						  	<td><?php echo $item['name']?></td>
						  	<td>
						  		<?php if(permission('setting','act_update')): ?>
								<a class="btn btn-info btn-sm" href="setting/admin/agency_type/form/<?php echo $item['id']?>"><i class="fa fa-edit "></i></a>
								<?php endif; ?>
								<?php if(permission('setting','act_delete')): ?>
								<a class="btn btn-danger btn-sm" href="setting/admin/agency_type/delete/<?php echo $item['id'] ?>"><i class="fa fa-trash-o "></i></a>
								<?php endif; ?>
								</td>
						  </tr>
						  <?php endforeach; ?>
					  </thead>
					  <tbody>
				</table>
		 </div>
</div>
</div>
</div>