<div id="Rform">
	<h1>โครงการ ศูนย์การเรียนรู้องค์กรต้นแบบไร้พุง</h1>
	<h3>ทำเนียบศูนย์การเรียนรู้องค์กรต้นแบบไร้พุง</h3>
	<div style="text-align: center">
	<label class="caption">ศูนย์อนามัย</label><?php echo $area; ?>
	</div>
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
		<td class="title"><?php echo $item['province_name'] ?></td>
		<td class="title"><?php echo $item['agency_name']?></td>
		<td class="title"><?php echo $item['address']?></td>
		<td class="title"><?php echo $item['district_name']?></td>
		<td class="title"><?php echo $item['amphur_name'] ?></td>
		<td class="title"><?php echo $item['province_name'] ?></td>
		<td class="title"><?php echo $item['postcode'] ?></td>
		<td class="title"><?php echo $item['response_man']?></td>
		<td class="title"><?php echo $item['position'] ?></td>
		<td class="title"><?php echo $item['co_agency_man']?></td>
		<td class="title"><?php echo $item['co_province_man']?></td>
		<td class="title"><?php echo $item['phone']?></td>
		<td class="title"><?php echo $item['mobile'] ?></td>
		<td class="title"><?php echo $item['email']?></td>
	</tr>
	<?php endforeach; ?>
</tbody>
</table>
<p class="text-right">ออกรายงาน ณ วันที่ <?php echo db_to_th(date('Y-m-d')) ?></p>
<div class="aligncenter"><button name="btn_print" onclick="window.print();" class="btn btn-default btn-large">พิมพ์งาน</button></div>