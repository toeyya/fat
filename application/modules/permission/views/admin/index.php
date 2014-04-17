<div>
	<hr>
	<ul class="breadcrumb">
		 <li><a href="admin">หน้าแรก</a></li>
		<li>สิทธิ์การใช้งาน</li>
	</ul>
	<hr>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="box">
			<div class="box-header">
				<h2><i class="fa fa-align-justify"></i><span class="break"></span>สิทธิ์การใช้งาน</h2>
			</div>
			<div class="box-content">
				<table class="table table-striped">
					  <thead>
						  <tr>
							  <th>ลำดับ</th>
							  <th>ชื่อ</th>
							  <th><a class="btn btn-success btn-sm" href="permission/admin/permission/form"> <i class="fa fa-plus "></i> เพิ่มรายการ</a> </th>
						  </tr>
						  <?php $i=(@$_GET['page'] > 1)? (((@$_GET['page'])* 20)-20)+1:1;?>
						  <?php foreach($result as $item): ?>
						  <tr>
						  	<td><?php echo $i;?></td>
						  	<td><?php echo $item['name']?></td>
						  	<td>
								<a class="btn btn-info btn-sm" href="permission/admin/permission/form/<?php echo $item['id']?>"><i class="fa fa-edit "></i></a>
								<a class="btn btn-danger btn-sm" href="permission/admin/permission/delete/<?php echo $item['id'] ?>" onclick="return confirm('<?php echo NOTICE_CONFIRM_DELETE ?>')"><i class="fa fa-trash-o "></i></a>
								</td>
						  </tr>
						  <?php $i++; endforeach; ?>
					  </thead>
					  <tbody>
				</table>
		 </div>
</div>
</div>
</div>