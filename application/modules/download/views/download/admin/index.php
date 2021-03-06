<div id="search">

</div>
<div>
	<hr>
	<ul class="breadcrumb">
		 <li><a href="#">หน้าแรก</a></li>
		<li><a href="download/admin/type/index">ประเภทสื่อสิ่งพิมพ์</a></li>
		<li><a href="download/admin/type/form/<?php echo  $type_id;?>"><?php echo $type_name; ?></a></li>
		<li>สื่อสิ่งพิมพ์</li>
	</ul>
	<hr>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="box">
			<div class="box-header">
				<h2><i class="fa fa-align-justify"></i><span class="break"></span>สื่อสิ่งพิมพ์</h2>
			</div>
			<div class="box-content">
				<table class="table table-striped">
					  <thead>
						  <tr>
							  <th>แสดง</th>
							  <th>หัวข้อ</th>
							  <th>โดย</th>
							  <th>
							  	<?php if(permission('download','act_create')): ?>
							  	<a class="btn btn-success btn-sm" href="download/admin/download/form?type_id=<?php echo $type_id ?>"> <i class="fa fa-plus "></i> เพิ่มรายการ</a>
							  	<?php endif; ?>
							  </th>
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
						  	<td><?php echo $item['title']?></td>
						  	<td><?php echo $item['agency_name']?></td>
						  	<td>
						  		<?php if(permission('download','act_update')): ?>
								<a class="btn btn-info btn-sm" href="download/admin/download/form/<?php echo $item['id']?>?type_id=<?php echo $type_id ?>"><i class="fa fa-edit "></i></a>
								<?php endif; ?>
								<?php if(permission('download','act_delete')): ?>
								<a class="btn btn-danger btn-sm" href="download/admin/download/delete/<?php echo $item['id'] ?>?type_id=<?php echo $type_id ?>" onclick="return confirm('<?php echo NOTICE_CONFIRM_DELETE ?>')"><i class="fa fa-trash-o "></i></a>
								<?php endif; ?>
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