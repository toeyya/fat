<div>
	<hr>
	<ul class="breadcrumb">
		 <li><a href="#">ตั้งค่าองค์กรต้นแบบไร้พุง</a></li>
		<li>จังหวัด</li>
	</ul>
	<hr>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="box">
			<div class="box-header">
				<h2><i class="fa fa-align-justify"></i><span class="break"></span>ศูนย์องค์กรต้นแบบไร้พุง</h2>
			</div>
			<div class="box-content">
				<table class="table table-striped">
					  <thead>
						  <tr>
							  <th>ลำดับ</th>
							  <th>จังหวัด</th>
							  <th>เขต / ผู้ตรวจ</th>
							  <th></th>
						  </tr>
						  <?php $i=(@$_GET['page'] > 1)? (((@$_GET['page'])* 20)-20)+1:1;?>
						  <?php foreach($result as $item): ?>
						  <tr>
						  	<td><?php echo $i;?></td>
						  	<td><?php echo $item['province_name']?></td>
						  	<td>
						  	<?php $rs = $this->db->GetArray("SELECT area_no,name FROM f_area_detail INNER JOIN f_area ON f_area.id = area_id
						  		  							 WHERE province_id = ? order by area_id",$item['id']);
						  		  foreach($rs as $area){
						  	?>
						  	<?php echo $area['name'] ?>ที่ <?php echo $area['area_no'] ?><br/>
						  	<?php } ?>
						  	</td>
						  	<td>
								<?php if(permission('setting','act_update')): ?>
									<a class="btn btn-info btn-sm" href="setting/admin/province/form/<?php echo $item['id']?>"><i class="fa fa-edit "></i></a>
								<?php endif; ?>
								<?php if(permission('setting','act_delete')): ?>
									<a class="btn btn-danger btn-sm" href="setting/admin/province/delete/<?php echo $item['id'] ?>"><i class="fa fa-trash-o "></i></a>
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