<div id="Rform">
	<h1>โครงการ ศูนย์การเรียนรู้องค์กรต้นแบบไร้พุง</h1>
	<h3>รายงานภาวะโรคอ้วนลงพุงของศูนย์การเรียนรู้องค์กรต้นแบบไร้พุง (BMI)</h3>
	<div style="text-align: center">
	<span style="margin-left:5px;">หน่วยงาน : </span>  <?php echo $user_name ?>  <span style="margin:0px 5px;">ครั้งที่  : </span> <?php echo $time; ?>
	</div>
</div>
<table border="1" style="width:1000px">
<tr>
	<th rowspan="2">วัดรอบเอว</th>
</tr>
<tr>
	<th colspan="2" >ชาย</th>
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

	<tr>
		<td>ผอม ( BMI &lt; 18.50)</td>
		<td><?php $n =(empty($waist[1]['ผอม'])) ? 0 : $waist[1]['ผอม']; echo number_format($n); $male1[1] = $n; ?></td>
		<td><?php $percent1[1] = ($n==0 || $total[1][$time]==0) ? 0 :number_format(($n*100)/$total[1][$time],1);echo number_format($percent1[1],1)."%"; ?></td>
		<td><?php $n =(empty($waist[2]['ผอม'])) ? 0 : $waist[2]['ผอม']; echo number_format($n); $female1[1] = $n; ?></td>
		<td><?php $percent1[2] = ($n==0 || $total[2][$time]==0) ? 0 :number_format(($n*100)/$total[2][$time],1);echo number_format($percent1[2],1)."%"; ?></td>
		<td><?php $sum_horizontal[1] = $male1[1] + $female1[1];echo number_format($male1[1] + $female1[1]) ?></td>
		<td><?php  $waist1 = (empty($waist[1])) ? 0 : array_sum($waist[1]);
				   $waist2 = (empty($waist[2])) ? 0 : array_sum($waist[2]);
			 	   $user_total = $waist1 + $waist2;
			 	   $sum_percent[1] = ($sum_horizontal[1]==0) ? 0: number_format(($sum_horizontal[1]*100)/$user_total,1);echo number_format($sum_percent[1],1)."%";
			?></td>
	</tr>
	<tr>
		<td>ปกติ (18.51 &le; BMI &le; 22.99)</td>
		<td><?php $n =(empty($waist[1]['ปกติ'])) ? 0 : $waist[1]['ปกติ']; echo number_format($n); $male1[2] = $n; ?></td>
		<td><?php $percent2[1] = ($n==0 || $total[1][$time]==0) ? 0 :number_format(($n*100)/$total[1][$time],1);echo number_format($percent2[1],1)."%"; ?></td>
		<td><?php $n =(empty($waist[2]['ปกติ'])) ? 0 : $waist[2]['ปกติ']; echo number_format($n); $female1[2] = $n; ?></td>
		<td><?php $percent2[2] = ($n==0 || $total[2][$time]==0) ? 0 :number_format(($n*100)/$total[2][$time],1);echo number_format($percent2[2],1)."%"; ?></td>
		<td><?php $sum_horizontal[2] = $male1[2] + $female1[2];echo number_format($male1[2] + $female1[2]) ?></td>
		<td><?php $sum_percent[2] = ($sum_horizontal[2]==0) ? 0: number_format(($sum_horizontal[2]*100)/$user_total,1);echo number_format($sum_percent[2],1)."%"; ?></td>
	</tr>
	<tr>
		<td>ท้วม (23.00 &le; BMI &le; 24.99)</td>
		<td><?php $n =(empty($waist[1]['ท้วม'])) ? 0 : $waist[1]['ท้วม']; echo number_format($n); $male1[3] = $n; ?></td>
		<td><?php $percent3[1] = ($n==0 || $total[1][$time]==0) ? 0 :number_format(($n*100)/$total[1][$time],1);echo number_format($percent3[1],1)."%"; ?></td>
		<td><?php $n =(empty($waist[2]['ท้วม'])) ? 0 : $waist[2]['ท้วม']; echo number_format($n); $female1[3] = $n; ?></td>
		<td><?php $percent3[2] = ($n==0 || $total[2][$time]==0) ? 0 :number_format(($n*100)/$total[2][$time],1);echo number_format($percent3[2],1)."%"; ?></td>
		<td><?php $sum_horizontal[3] = $male1[3] + $female1[3];echo number_format($male1[3] + $female1[3]) ?></td>
		<td><?php $sum_percent[3] = ($sum_horizontal[3]==0) ? 0: number_format(($sum_horizontal[3]*100)/$user_total,1);echo number_format($sum_percent[3],1)."%"; ?></td>
	</tr>
	<tr>
		<td>อ้วน ( 25.0 &le; BMI &le; 29.9 )</td>
		<td><?php $n =(empty($waist[1]['อ้วน'])) ? 0 : $waist[1]['อ้วน']; echo number_format($n); $male1[4] = $n; ?></td>
		<td><?php $percent4[1] = ($n==0 || $total[1][$time]==0) ? 0 :number_format(($n*100)/$total[1][$time],1);echo number_format($percent4[1],1)."%"; ?></td>
		<td><?php $n =(empty($waist[2]['อ้วน'])) ? 0 : $waist[2]['อ้วน']; echo number_format($n); $female1[4] = $n; ?></td>
		<td><?php $percent4[2] = ($n==0 || $total[2][$time]==0) ? 0 :number_format(($n*100)/$total[2][$time],1);echo number_format($percent4[2],1)."%"; ?></td>
		<td><?php $sum_horizontal[4] = $male1[4] + $female1[4];echo number_format($male1[4] + $female1[4]) ?></td>
		<td><?php $sum_percent[4] = ($sum_horizontal[4]==0) ? 0: number_format(($sum_horizontal[4]*100)/$user_total,1);echo number_format($sum_percent[4],1)."%"; ?></td>
	</tr>
	<tr>
		<td>อ้วนมาก ( BMI &ge; 30.0)</td>
		<td><?php $n =(empty($waist[1]['อ้วนมาก'])) ? 0 : $waist[1]['อ้วนมาก']; echo number_format($n); $male1[5] = $n; ?></td>
		<td><?php $percent5[1] = ($n==0 || $total[1][$time]==0) ? 0 :number_format(($n*100)/$total[1][$time],1);echo number_format($percent5[1],1)."%"; ?></td>
		<td><?php $n =(empty($waist[2]['อ้วนมาก'])) ? 0 : $waist[2]['อ้วนมาก']; echo number_format($n); $female1[5] = $n; ?></td>
	    <td><?php $percent5[2] = ($n==0 || $total[2][$time]==0) ? 0 :number_format(($n*100)/$total[2][$time],1);echo number_format($percent5[2],1)."%"; ?></td>
		<td><?php $sum_horizontal[5] = $male1[5] + $female1[5]; echo number_format($male1[5] + $female1[5]) ?></td>
		<td><?php $sum_percent[5] = ($sum_horizontal[5]==0) ? 0: number_format(($sum_horizontal[5]*100)/$user_total,1);echo number_format($sum_percent[5],1)."%"; ?></td>
	</tr>
	<tr>
		<td>รวม</td>
		<td><?php echo number_format(array_sum($male1)) ?></td>
		<td><?php echo number_format($percent1[1]+$percent2[1]+$percent3[1]+$percent4[1]+$percent5[1],1)?>%</td>
		<td><?php echo number_format(array_sum($female1)) ?></td>
		<td><?php echo number_format($percent1[2]+$percent2[2]+$percent3[2]+$percent4[2]+$percent5[2],1)?>%</td>
		<td><?php echo number_format(array_sum($sum_horizontal));?></td>
		<td><?php echo number_format(array_sum($sum_percent),1)?>%</td>
	</tr>
</table>