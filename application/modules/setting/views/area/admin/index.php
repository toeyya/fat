<div>
	<hr>
	<ul class="breadcrumb">
		 <li><a href="#">ตั้งค่าองค์กรต้นแบบไร้พุง</a></li>
		<li>เขต</li>
	</ul>
	<hr>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="box">
			<div class="box-header">
				<h2><i class="fa fa-align-justify"></i><span class="break"></span>เขต</h2>
			</div>
			<div class="box-content">
				<table class="table table-striped">
					  <thead>
						  <tr>
							  <th>ลำดับ</th>
							  <th>ชื่อ</th>
							  <th>จำนวนเขต</th>
							  <th>
							  	<?php if(permission('setting','act_create')): ?>
							  	<a class="btn btn-success btn-sm" href="setting/admin/area/form"> <i class="fa fa-plus "></i> เพิ่มรายการ</a>
							  	<?php endif; ?>
							  </th>
						  </tr>
						  <?php $i=(@$_GET['page'] > 1)? (((@$_GET['page'])* 20)-20)+1:1;?>
						  <?php foreach($result as $item): ?>
						  <tr>
						  	<td><?php echo $i;?></td>
						  	<td><?php echo $item['name']?></td>
						  	<td><?php echo $item['total']?></td>
						  	<td>
								<?php if(permission('setting','act_update')): ?>
								<a class="btn btn-info btn-sm" href="setting/admin/area/form/<?php echo $item['id']?>"><i class="fa fa-edit "></i></a>
								<?php endif; ?>
								<?php if(permission('setting','act_delete')): ?>
								<?php if($item['id']!="1" || $item['id']!="2") : ?>
								<a class="btn btn-danger btn-sm" href="setting/admin/area/delete/<?php echo $item['id'] ?>" onclick="return confirm('<?php echo NOTICE_CONFIRM_DELETE ?>')"><i class="fa fa-trash-o "></i></a>
								<?php endif; ?>
								<?php endif; ?>
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