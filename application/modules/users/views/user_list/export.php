<div id="Rform">
	<h1>โครงการ ศูนย์การเรียนรู้องค์กรต้นแบบไร้พุง</h1>
	<h3>ทำเนียบศูนย์การเรียนรู้องค์กรต้นแบบไร้พุง</h3>
	<div style="text-align: center">
	<label>ศูนย์อนามัย </label><?php echo $area; ?>
	</div>
</div>
<table border="1" width="1000">
<thead>
<tr class="success">
	<th rowspan="2">จังหวัด</th>
	<th rowspan="2">ชื่อองค์กร</th>
	<th colspan="5" align="center">พื้นที่ดำเนินการ</th>
	<th colspan="7" align="center">ผู้รับผิดชอบโครงการ</th>
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
<p style="text-align: right;margin-top:10px;">ออกรายงาน ณ วันที่ <?php echo db_to_th(date('Y-m-d')) ?></p>