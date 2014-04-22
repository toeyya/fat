<div id="Breadcrumbs">
	<ol id="path-breadcrumb">
	  <li><a href="home">หน้าแรก</a></li>
	  <li class="active">ทำเนียบ</li>
	</ol>
</div>

<div class="titleBlank">ทำเนียบ<div class="line5"></div> </div>
<div class="contentBlank">
<div id="search" class="text-center">
	<form action="users/user_list" class="form-search">
		<span>ศูนย์อนามัย</span>
		<?php echo form_dropdown('area',get_option('area_no as id','area_no','f_area_detail where area_id=2 group by area_no'),@$_GET['area'],'class="search-query"','ทั้งหมด'); ?>
		<button name="btn_search" type="submit" class="btn btn-success btn-sm">ค้นหา</button>
	</form>
</div>
<table class="table table-bordered table-condensed table-striped">
<thead>
<tr class="success">
	<th rowspan="2">จังหวัด</th>
	<th rowspan="2">ชื่อองค์กร</th>
	<th colspan="5" class="text-center">พื้นที่ดำเนินการ</th>
	<th colspan="7" class="text-center">ผู้รับผิดชอบโครงการ</th>
</tr>
<tr class="success">
	<th>สถานที่ (หมู่บ้าน)</th>
	<th>ตำบล</th>
	<th>อำเภอ</th>
	<th>จังหวัด</th>
	<th>รหัสไปรษณีย์</th>
	<th>ผู้รับผิดชอบ</th>
	<th>ตำแหน่ง</th>
	<th>ผู้ประสานงาน(องค์กร)</th>
	<th>ผู้ประสานงาน(จังหวัด)</th>
	<th>โทร ที่</th>
	<th>มือถือ</th>
	<th>อีเมล์</th>
</tr>

</thead>
<tbody>
	<?php foreach($result as $item): ?>
	<tr>
		<td><?php echo $item['province_name'] ?></td>
		<td><?php echo $item['agency_name']?></td>
		<td><?php echo $item['address']?></td>
		<td><?php echo $item['district_name']?></td>
		<td><?php echo $item['amphur_name'] ?></td>
		<td><?php echo $item['province_name'] ?></td>
		<td><?php echo $item['postcode'] ?></td>
		<td><?php echo $item['response_man']?></td>
		<td><?php echo $item['position'] ?></td>
		<td><?php echo $item['co_agency_man']?></td>
		<td><?php echo $item['co_province_man']?></td>
		<td><?php echo $item['phone']?></td>
		<td><?php echo $item['mobile'] ?></td>
		<td><?php echo $item['email']?></td>
	</tr>
	<?php endforeach; ?>
</tbody>
</table>
<div class="text-center"><?php echo $pagination; ?></div>

</div>