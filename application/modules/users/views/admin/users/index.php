<div>
	<hr>
	<ul class="breadcrumb">
		<li>
			<a href="admin">หน้าแรก</a>
		</li>
		<li>
			<a href="users/admin/users/index">สมาชิก</a>
		</li>
	</ul>
	<hr>
</div>

<div class="row">
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
							  <th>ผู้ประสานงาน</th>
							  <th>อีเมล์</th>
							  <th>เบอร์ติดต่อ</th>
							  <th><a class="btn btn-success btn-sm" href="users/admin/users/form"> <i class="fa fa-plus "></i> เพิ่มรายการ</a> </th>

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
							<td><?php echo $item['firstname']." ".$item['lastname']; ?></td>
							<td><?php echo $item['email']?></td>
							<td><?php echo $item['phone']?></td>
							<td>

								<a class="btn btn-info btn-sm" href="users/admin/users/form/<?php echo $item['id']?>">
									<i class="fa fa-edit "></i>
								</a>
								<a class="btn btn-danger btn-sm" href="users/admin/users/delete/<?php echo $item['id'] ?>">
									<i class="fa fa-trash-o "></i>
								</a>
							</td>
						</tr>
						<?php $i++; endforeach; ?>
					  </tbody>
				 </table>
				 <div class="pagination pagination-centered">
				  <ul class="pagination">
					<?php echo $pagination; ?>
				  </ul>
				</div>
			</div>
		</div>
		</div>
	</div><!--/col-->
</div><!--/row-->
