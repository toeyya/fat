<div id="search">

</div>
<div>
	<hr>
	<ul class="breadcrumb">
		 <li><a href="#">หน้าแรก</a></li>
		<li>เว็บบอร์ด</li>
	</ul>
	<hr>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="box">
			<div class="box-header">
				<h2><i class="fa fa-align-justify"></i><span class="break"></span>เว็บบอร์ด</h2>
			</div>
			<div class="box-content">
				<table class="table table-striped">
					  <thead>
						  <tr>
							  <th style="text-align: center; width: 80px;" >#</th>
							  <th style="text-align: center;" >หัวข้อ</th>
							  <th style="text-align: center; width: 250px;" >สร้างโดย</th>
							  <th style="text-align: center; width: 180px;" >จำนวนคนดู/คนตอบ</th>
							  <th style="width: 110px;" ></th>
						  </tr>
						  <?php foreach ($variable as $key => $value):?>
						  <tr>
						  	<td>
						  		<label class="switch switch-primary">
								      <input type="checkbox"  name ="active" class="switch-input" value="<?php echo $value['id'] ?>" <?php if($value['status']=="1"){echo 'checked="checked"';} ?>>
								      <span class="switch-label"  data-off="Off" data-on="On"></span>
								      <span class="switch-handle"></span>
								</label>
							</td>
						  	<td><?php echo $value['title']?></td>
						  	<td><?php echo $value['email']?></td>
						  	<td><?php echo $value["view"]."/".$value["comment"]?></td>
						  	<td>
								<a class="btn btn-info btn-sm" href="webboard/admin/form/<?php echo $value['id']?>">
									<i class="fa fa-edit "></i>
								</a>
								<a class="btn btn-danger btn-sm" href="webboard/admin/delete/<?php echo $value['id'] ?>">
									<i class="fa fa-trash-o "></i>
								</a></td>
						  </tr>
						  <?php endforeach; ?>
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