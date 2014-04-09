<div id="search">

</div>
<div>
	<hr>
	<ul class="breadcrumb">
		 <li><a href="#">ตั้งค่าองค์กรต้นแบบไร้พุง</a></li>
		<li>ตำบล</li>
	</ul>
	<hr>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="box">
			<div class="box-header">
				<h2><i class="fa fa-align-justify"></i><span class="break"></span>ตำบล</h2>
			</div>
			<div class="box-content">
				<table class="table table-striped">
					  <thead>
						  <tr>
							  <th>ลำดับ</th>
							  <th>ตำบล</th>
							  <th>อำเภอ /เขต</th>
							  <th>จังหวัด</th>
							  <th></th>
						  </tr>
						  <?php $i=(@$_GET['page'] > 1)? (((@$_GET['page'])* 20)-20)+1:1;?>
						  <?php foreach($result as $item): ?>
						  <tr>
						  	<td><?php echo $i;?></td>
						  	<td><?php echo $item['district_name']?></td>
						  	<td><?php echo $item['amphur_name']?></td>
						  	<td><?php echo $item['province_name']?></td>
						  	<td>
								<a class="btn btn-info btn-sm" href="setting/admin/province/form/<?php echo $item['id']?>">
									<i class="fa fa-edit "></i>
								</a>
								<a class="btn btn-danger btn-sm" href="setting/admin/province/delete/<?php echo $item['id'] ?>">
									<i class="fa fa-trash-o "></i>
								</a></td>
						  </tr>
						  <?php $i++; endforeach; ?>
					  </thead>
					  <tbody>
				</table>
				<div class="pagination pagination-centered">
				  <ul class="pagination">
					<?php echo $pagination; ?>
				  </ul>
				</div>
			</div>
</div>
</div>
</div>