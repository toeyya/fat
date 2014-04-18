<h1 style="margin:20px 0px" class="text-left"><small>แก้ไข /กรอก รอบเอวและน้ำหนักตัวของประชาชนในหน่วยงาน/องค์กรต้นแบบ ครั้งที่ <?php echo $time ?> ปีงบประมาณ <?php echo $year; ?></small></h1>
	<table  width="500px" border="1">
		<tr>
			<th>ชื่อ-นามสกุล</th>
			<th>เพศ</th>
			<th>อายุ</th>
			<th>น้ำหนัก<br/>(กก.) </th>
			<th>ส่วนสูง <br/>(ซม.)</th>
			<th>รอบเอว<br/> (ซม.)</th>
			<th>โรคอ้วนลงพุง</th>
			<th>BMI<br/> (ค่าคำนวน)</th>
			<th>BMI<br/>(ความหมาย)</th>
		</tr>
		<?php
			foreach($result as $key=>$item): ?>
		<tr>
			<td><?php echo $item['fullname'] ?></td>
			<td><?php echo (!empty($item['gender'])) ? $gender[$item['gender']]:''; ?></td>
			<td><?php echo $item['age'] ?></td>
			<td><?php echo $item['weight'] ?></td>
			<td><?php echo $item['height'] ?></td>
			<td><?php echo $item['waistline'] ?></td>
			<td style="<?php echo $fat_mean_export[$item['fat']] ?>"><?php echo $item['fat'] ?></td>
			<td><?php echo $item['bmi_value'] ?></td>
			<td style="<?php echo $bmi_mean_export[$item['bmi_mean']] ?>"><?php echo $item['bmi_mean'] ?></td>
		</tr>
		<?php endforeach;?>
	</table>
	<div class="alert alert-warning"><span class="label label-warning">หมายเหตุ</span> หากไม่ระบุชื่อ-นามสกุล ข้อมูลแถวดังกล่าวจะไม่ถูกบันทึก</div>
