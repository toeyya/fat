<div id="search">

</div>
<div>
	<hr>
	<ul class="breadcrumb">
		<li><a href="#">หน้าแรก</a></li>
		<li>KM</li>
	</ul>
	<hr>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="box">
			<div class="box-header">
				<h2><i class="fa fa-align-justify"></i><span class="break"></span>KM</h2>
			</div>
			<div class="box-content">
				<table class="table table-striped">
					  <thead>
						  <tr>
							  <th>แสดง</th>
							  <th>ประเภท</th>
							  <th>ลักษณะ</th>
							  <th>โดย</th>
							  <th><a class="btn btn-success btn-sm" href="km/admin/type/form"> <i class="fa fa-plus "></i> เพิ่มรายการ</a> </th>
						  </tr>
						  <?php $i=(@$_GET['page'] > 1)? (((@$_GET['page'])* 20)-20)+1:1;?>
						  <?php foreach($result as $item): ?>
						  <tr>
						  	<td><label class="switch switch-primary">
								      <input type="checkbox"  name ="active" class="switch-input" value="<?php echo $item['id'] ?>" <?php if($item['active']=="1"){echo 'checked="checked"';} ?>>
								      <span class="switch-label"  data-off="Off" data-on="On"></span>
								      <span class="switch-handle"></span>
								</label>
							</td>
						  	<td><?php echo $item['name']?></td>
						  	<td><?php echo $item['structure'] ?></td>
						  	<td><?php echo $item['agency_name']?></td>
						  	<td>
								<a class="btn btn-primary btn-sm" href="km/admin/km/index/<?php echo $item['id'] ?>"><i class="fa fa-plus-circle"></i> เพิ่มรายการย่อย</a>
								<a class="btn btn-info btn-sm" href="km/admin/type/form/<?php echo $item['id']?>"><i class="fa fa-edit "></i></a>
								<a class="btn btn-danger btn-sm" href="km/admin/type/delete/<?php echo $item['id'] ?>"><i class="fa fa-trash-o "></i></a>
							</td>
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