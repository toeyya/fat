<h1 style="margin:20px 0px" class="text-left"><small>แก้ไข /กรอก รอบเอวและน้ำหนักตัวของประชาชนในหน่วยงาน/องค์กรต้นแบบ ครั้งที่ <?php echo $time ?> ปีงบประมาณ <?php echo $year; ?></small></h1>
	<table class="table table-bordered table-condensed">
		<tr class="success">
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
		if($time=="1"){
			$i = 0;
			foreach($result as $key=>$item): ?>
		<tr>
			<td class="title"><?php echo $item['fullname'] ?></td>
			<td><?php echo (!empty($item['gender'])) ? $gender[$item['gender']]:''; ?></td>
			<td><?php echo $item['age'] ?></td>
			<td><?php echo $item['weight'] ?></td>
			<td><?php echo $item['height'] ?></td>
			<td><?php echo $item['waistline'] ?></td>
			<td><input type="text" name="fat[]" class="noborder aligncenter w100 <?php if(!empty($fat_mean[$item['fat']])){ echo $fat_mean[$item['fat']];} ?>" value="<?php echo $item['fat'] ?>"></td>
			<td><?php echo $item['bmi_value'] ?></td>
			<td><input type="text" name="bmi_mean[]" value="<?php echo $item['bmi_mean'] ?>" class="bmi-mean noborder aligncenter w100 <?php if(!empty($bmi_mean[$item['bmi_mean']])){ echo $bmi_mean[$item['bmi_mean']];} ?>" value=""  readonly="readonly"></td>
		</tr>
		<?php $i = $key;endforeach;?>
		<?php }else if($time=="2"){  ?>
			<?php require('index2.php') ?>
		<?php } ?>

	</table>
	<div class="alert alert-warning"><span class="label label-warning">หมายเหตุ</span> หากไม่ระบุชื่อ-นามสกุล ข้อมูลแถวดังกล่าวจะไม่ถูกบันทึก</div>
	<div class="aligncenter"><button name="btn_print" onclick="window.print();" class="btn btn-default btn-large">พิมพ์งาน</button></div>

