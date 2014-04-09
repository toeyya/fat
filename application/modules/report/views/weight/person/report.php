<div id="Rform">
	<h1>โครงกร ศูนย์การเรียนรู้องค์กรต้นแบบไร้พุง</h1>
	<h3>รายงานแบบฟอร์มการบันทึก รอบเอง น้ำหนัก ส่วนสูง ของศูนย์การเรียนรู้องค์กรต้นแบบไร้พุง</h3>
	<div style="text-align: center">
	<p><label class="caption">ชื่อศูนย์การเรียนรู้องค์กรต้นแบบไร้พุง  </label><?php echo $user['agency_name'] ?>
	<label class="caption">ศูนย์อนามัยที่</label> <?php echo $user['hpc'] ?>
	<label class="caption">ปีงบประมาณ</label> <?php echo $yearth; ?></p>
	<label class="caption">ที่ตั้ง</label>.......<label class="caption">ตำบล  </label><?php echo $district ?>
	<label class="caption">อำเภอ  </label><?php echo $amphur; ?>
	<label class="caption">จังหวัด  </label><?php echo $province ?>
	<label class="caption">รหัสไปรษณีย์</label>.........
	</div>
</div>

<table class="table table-bordered table-condensed table-striped">
<tr class="success">
	<th rowspan="2">ที่</th>
	<th rowspan="2">ชื่อ - นามสกุล</th>
	<th rowspan="2">เพศ</th>
	<th rowspan="2">อายุ</th>
	<th colspan="5">ครั้งที่ 1</th>
	<th colspan="5">ครั้งที่ 2</th>
	<th colspan="2">เปรียบเทียบครั้งที่ 1 - 2 </th>
</tr>
<tr>

	<th>รอบเอว</th>
	<th>ผล</th>
	<th>น้ำหนัก</th>
	<th>ส่วนสูง</th>
	<th>BMI</th>
	<th>รอบเอว</th>
	<th>ผล</th>
	<th>น้ำหนัก</th>
	<th>ส่วนสูง</th>
	<th>BMI</th>
	<th>รอบเอว</th>
	<th>น้ำหนัก</th>
</tr>
<?php foreach($res1 as $key=>$item):
	$i= $key;?>
<tr>
	<td><?php echo ++$i; ?></td>
	<td class="title"><?php echo  $item['fullname']?></td>
	<td><?php echo (!empty($item['gender'])) ? $gender[$item['gender']]:''?></td>
	<td><?php echo $item['age']; ?></td>

	<td><?php echo $item['waistline']  ?></td>
	<td><?php echo $item['fat']  ?></td>
	<td><?php echo $item['weight'] ?></td>
	<td><?php echo $item['height'] ?></td>
	<td><?php echo $item['bmi_value']  ?></td>

	<td><?php echo (!empty($res2[$key]['waistline'])) ? $res2[$key]['waistline']:'';  ?></td>
	<td><?php echo (!empty($res2[$key]['fat'])) ? $res2[$key]['fat']:''; ?></td>
	<td><?php echo (!empty($res2[$key]['weight'])) ? $res2[$key]['weight']:'' ?></td>
	<td><?php echo (!empty($res2[$key]['height'])) ? $res2[$key]['height']:''?></td>
	<td><?php echo (!empty($res2[$key]['bmi_value'])) ? $res2[$key]['bmi_value']:''?></td>
	<td><?php echo (!empty($res2[$key]['waistline'])) ? abs($item['waistline'] - $res2[$key]['waistline']):'' ?></td>
	<td><?php echo (!empty($res2[$key]['weight'])) ? abs($item['weight'] - $res2[$key]['weight']):'' ?></td>

</tr>
<?php endforeach; ?>

</table>

<div style="margin:0 auto;width:500px;">
<div class="span6">
<div class="alert alert-info" >
	<span class="label label-info">เกณฑ์พิจารณาภาวะความอ้วนลงพุง</span>
	<div class="span5 offset1 muted" style="margin-top:10px;margin-bottom: 10px;"><strong>BMI = น้ำหนัก (กิโลกรัม) &divide; ส่วนสูง(เมตร)<sup>2</sup></strong></div>
	<table class="table table-bordered table-condensed" style="background-color:white;">
		<tr>
			<th rowspan="2">เพศ</th>
			<th colspan="2">วัดเอว</th>
			<th colspan="5">BMI</th>
		</tr>
		<tr>
			<th class="green">ปกติ</th>
			<th class="red">อ้วนลงพุง</th>
			<th class="yellow">ผอม</th>
			<th class="green">ปกติ</th>
			<th class="orange">ท้วม</th>
			<th class="red">อ้วน</th>
			<th class="grey">อ้วนมาก</th>
		</tr>
		<tr>
			<td>ขาย</td>
			<td>&lt;90</td>
			<td>&gt;90</td>
			<td rowspan="2">&le;18.5</td>
			<td rowspan="2">18.5 - 22.9</td>
			<td rowspan="2">23.0 - 24.9</td>
			<td rowspan="2">25.0 - 29.9</td>
			<td rowspan="2">&ge;30.0</td>
		</tr>
		<tr>
			<td>หญิง</td>
			<td>&lt;80</td>
			<td>&gt;80</td>
		</tr>
	</table>
</div>
</div>
</div>
<div class="clearfix"></div>
<div class="aligncenter"><button name="btn_print" onclick="window.print();" class="btn btn-default btn-large">พิมพ์งาน</button></div>