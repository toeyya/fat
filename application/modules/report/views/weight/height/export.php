<div class="contentBlank">
<?php if(!empty($_GET)){ ?>
<div id="Rform">

	<h1>โครงกร ศูนย์การเรียนรู้องค์กรต้นแบบไร้พุง</h1>
	<h3>รายงานภาวะโรคอ้วนลงพุงของศูนย์การเรียนรู้องค์กรต้นแบบไร้พุง (Ht/2)</h3>
	<div style="text-align: center">
	<label class="caption">หน่วยงาน</label><?php echo $user_name ?><label class="caption">ครั้งที่</label><?php echo $time; ?>
	</div>
</div>
<!--<div class="span20">-->
<table class="table table-bordered table-condensed table-striped" border="1">
<thead>
<tr class="success">
	<th rowspan="3" style="vertical-align: middle">ความสูงหารสอง</th>
</tr>
<tr>
	<th colspan="2">ชาย</th>
	<th colspan="2">หญิง</th>
	<th colspan="2">รวม</th>
</tr>
<tr>
	<th>จำนวน</th>
	<th>%ชาย</th>
	<th>จำนวน</th>
	<th>%หญิง</th>
	<th>จำนวน</th>
	<th>%รวม</th>
</tr>
</thead>
<tbody>
	<tr>
		<td class="title">ปกติ (รอบเอวน้อยกว่า ht/2)</td>
		<td><?php $n=(empty($normal[1])) ? 0 : $normal[1]; echo number_format($n);$male[1]=$n; ?></td>
		<td><?php $ab_m1 = ($n==0 || $total['people_fiveteen_male'.$time]==0) ? 0 :($n*100)/$total['people_fiveteen_male'.$time];echo number_format($ab_m1,1)."%"; ?></td>
		<td><?php $n= (empty($normal[2])) ? 0 : $normal[2];echo number_format($n);$female[1]=$n?></td>
		<td><?php $ab_f1 = ($n==0 || $total['people_fiveteen_female'.$time]==0) ? 0 :($n*100)/$total['people_fiveteen_female'.$time];echo number_format($ab_f1,1)."%" ?></td>
		<td><?php $sum = $male[1] + $female[1]; echo number_format($sum);$s[1]=$sum ?></td>
		<td><?php $total = (empty($abnormal[1])) ? 0 : $abnormal[1];
				  $total+= (empty($abnormal[2])) ? 0 : $abnormal[2];
				  $total+=$male[1]+$female[1];
				  $sum_per1 = ($sum==0 || $total==0) ? 0 : ($sum*100)/$total;
				  echo number_format($sum_per1,1)."%";
		?></td>
	</tr>
	<tr>
		<td class="title">อ้วน (รอบเอวมากกว่า ht/2)</td>
		<td><?php $n =(empty($abnormal[1])) ? 0 : $abnormal[1];echo number_format($n);$male[2]=$n; ?></td>
		<td><?php $ab_m2 = ($n==0 || $total['people_fiveteen_male'.$time]==0) ? 0 :($n*100)/$total['people_fiveteen_male'.$time];echo number_format($ab_m2,1)."%"; ?></td>
		<td><?php $n =(empty($abnormal[2])) ? 0 : $abnormal[2];echo number_format($n);$female[2]=$n; ?></td>
		<td><?php $ab_f2 = ($n==0 || $total['people_fiveteen_female'.$time]==0) ? 0 :($n*100)/$total['people_fiveteen_female'.$time];echo number_format($ab_f2,1)."%" ?></td>
		<td><?php $sum = $male[2] + $female[2]; echo number_format($sum);$s[2]=$sum ?></td>
		<td><?php $sum_per2 = ($sum==0 || $total==0) ? 0 : ($sum*100)/$total;
				  echo number_format($sum_per2,1)."%"; ?></td>
	</tr>
	<tr>
		<td>รวม</td>
		<td><?php echo number_format(array_sum($male)); ?></td>
		<td><?php echo number_format($ab_m1+ $ab_m2,1) ?>%</td>
		<td><?php echo number_format(array_sum($female)); ?></td>
		<td><?php echo number_format($ab_f1+ $ab_f2,1) ?>%</td>
		<td><?php echo number_format(array_sum($s))?></td>
		<td><?php echo number_format($sum_per1 + $sum_per2,1) ?>%</td>
	</tr>
</tbody>
</table>
<div class="aligncenter"><button name="btn_print" onclick="window.print();" class="btn btn-default btn-large">พิมพ์งาน</button></div>
</div>
<?php } ?>