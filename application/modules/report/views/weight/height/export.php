<div id="Rform">

	<h1>โครงกร ศูนย์การเรียนรู้องค์กรต้นแบบไร้พุง</h1>
	<h3>รายงานภาวะโรคอ้วนลงพุงของศูนย์การเรียนรู้องค์กรต้นแบบไร้พุง (Ht/2)</h3>
	<div style="text-align: center">
	<span style="margin-left:5px;">หน่วยงาน : </span>  <?php echo $user_name ?>  <span style="margin:0px 5px;">ครั้งที่  : </span> <?php echo $time; ?>
	</div>
</div>
<!--<div class="span20">-->
<table border="1" style="width:1000px">
<thead>
<tr>
	<th rowspan="2">ความสูงหารสอง</th>
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
		<td>ปกติ (รอบเอวน้อยกว่า ht/2)</td>
		<td><?php $n=(empty($normal[1])) ? 0 : $normal[1]; echo number_format($n);$male[1]=$n; ?></td>
		<td><?php $ab_m1 = ($n==0 || $total[1][$time]==0) ? 0 :($n*100)/$total[1][$time];echo number_format($ab_m1,1)."%"; ?></td>
		<td><?php $n= (empty($normal[2])) ? 0 : $normal[2];echo number_format($n);$female[1]=$n?></td>
		<td><?php $ab_f1 = ($n==0 || $total[2][$time]==0) ? 0 :($n*100)/$total[2][$time];echo number_format($ab_f1,1)."%" ?></td>
		<td><?php $sum = $male[1] + $female[1]; echo number_format($sum);$s[1]=$sum ?></td>
		<td><?php $total1 = (empty($normal))  ? 0 : array_sum($normal);
				  $total2 = (empty($abnormal)) ? 0 : array_sum($abnormal);
				  $user_total = $total1 + $total2;
				  $sum_per1 = ($sum==0) ? 0 : ($sum*100)/$user_total;echo number_format($sum_per1,1)."%";
		?></td>
	</tr>
	<tr>
		<td>อ้วน (รอบเอวมากกว่า ht/2)</td>
		<td><?php $n =(empty($abnormal[1])) ? 0 : $abnormal[1];echo number_format($n);$male[2]=$n; ?></td>
		<td><?php $ab_m2 = ($n==0 || $total[1][$time]==0) ? 0 :($n*100)/$total[1][$time];echo number_format($ab_m2,1)."%"; ?></td>
		<td><?php $n =(empty($abnormal[2])) ? 0 : $abnormal[2];echo number_format($n);$female[2]=$n; ?></td>
		<td><?php $ab_f2 = ($n==0 || $total[2][$time]==0) ? 0 :($n*100)/$total[2][$time];echo number_format($ab_f2,1)."%" ?></td>
		<td><?php $sum = $male[2] + $female[2]; echo number_format($sum);$s[2]=$sum ?></td>
		<td><?php $sum_per2 = ($sum==0) ? 0 : ($sum*100)/$user_total;
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
