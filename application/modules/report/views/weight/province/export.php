<div class="contentBlank">
<div id="Rform">
	<h1>โครงการ ศูนย์การเรียนรู้องค์กรต้นแบบไร้พุง</h1>
	<h3>รายงานแบบฟอร์มการบันทึก รอบเอว น้ำหนัก ส่วนสูง (รายองค์กร)</h3>
	<div style="text-align: center">
	<span style="margin-left:5px;">ปีงบประมาณ</span> <?php echo $yearth; ?>
	<span style="margin-left:5px;">จังหวัด</span> <?php echo $province ?><span style="margin-left:5px;">ศูนย์อนามัยที่</span> <?php echo $hpc; ?>
	</div>
</div>
<table  border="1" style="width:1000px">
<tr>
	<th rowspan="3" style="vertical-align: middle">ที่</th>
	<th rowspan="3" style="vertical-align: middle">ศูนย์การเรียนรู้</th>
	<th rowspan="3" style="vertical-align: middle">ประเภทองค์กร</th>
	<th colspan="22">จำนวนประชากรวัดรอบเอว</th>
</tr>
<tr>
	<th colspan="9">ครั้งที่ 1</th>
	<th colspan="9">ครั้งที่ 2</th>
	<th colspan="4">เปรียบเทียบครั้งที่ 1 - 2 </th>
</tr>
<tr>
	<th>ทั้ง<br/>หมด</th>
	<th>วัดเอว</th>
	<th>%เข้าร่วม</th>
	<th>อ้วน</th>
	<th>%<br/>อ้วน</th>
	<th>ค่าเฉลี่ย</th>
	<th>น้ำหนัก</th>
	<th>ค่าเฉลี่ย</th>
	<th>SD</th>
	<th>ทั้ง<br/>หมด</th>
	<th>วัดเอว</th>
	<th>%เข้าร่วม</th>
	<th>อ้วน</th>
	<th>%<br/>อ้วน</th>
	<th>ค่าเฉลี่ย</th>
	<th>น้ำหนัก</th>
	<th>ค่าเฉลี่ย</th>
	<th>SD</th>
	<th>ค่าเฉลี่ย<br/>อ้วน</th>
	<th>%<br/>อ้วน</th>
	<th>ค่าเฉลี่ย<br/>นน.</th>
	<th>%นน.</th>
</tr>
<?php $i=(@$_GET['page'] > 1)? (((@$_GET['page'])* 20)-20)+1:1;?>
<?php foreach($result as $key=>$item): ?>
<tr>
	<td><?php echo $i ?></td>
	<td><?php echo $item['agency_name'] ?></td>
	<td><?php echo $item['agency_type_name'] ?></td>
	<td><?php echo $user_total[] = $item['user_total'] ?></td>
	<td><?php $t = $item['total']; echo number_format($t); $total[$key] = $t; ?></td>
	<td><?php echo number_format(($item['total']*100)/$item['user_total'],1) ?></td>
	<td><?php echo $f[$key] = (empty($fat[$item['user_id']]['อ้วนลงพุง'][1])) ? 0 :$fat[$item['user_id']]['อ้วนลงพุง'][1] ?></td>
	<td><?php echo $f_percent =(empty($f) || empty($total[$key])) ? 0 :number_format(($f[$key]*100)/$item['total'],1) ?></td>
	<td><?php echo $w[$key] = (empty($waistline[$item['user_id']][1])) ? 0 :$waistline[$item['user_id']][1] ?></td>
	<td><?php echo $b[$key] = (empty($weight[$item['user_id']]['sum'][1])) ? 0:$weight[$item['user_id']]['sum'][1]?></td>
	<td><?php echo $b_percent[$key] = (empty($weight[$item['user_id']]['avg'][1])) ? 0 :number_format($weight[$item['user_id']]['avg'][1],1)?></td>
	<td><?php echo $sd1[$key]=(empty($sd[$item['user_id']][1])) ? 0 : number_format($sd[$item['user_id']][1],1)?></td>

	<td><?php echo $user_total2[$key] = (empty($user_total[$item['user_id']][2])) ? 0 :$user_total[$item['user_id']][2] ?></td>
	<td><?php echo $total2[$key] = (empty($total[$item['user_id']][2])) ? 0 : $total[$item['user_id']][2]?></td>
	<td><?php echo ($user_total2[$key]==0 || $total2[$key]==0) ? 0 : number_format(($total2[$key]*100)/$user_total2[$key],1)?></td>
	<td><?php echo $f2[$key] = (empty($fat[$item['user_id']]['อ้วนลงพุง'][2])) ? 0 :$fat[$item['user_id']]['อ้วนลงพุง'][2] ?></td>
	<td><?php echo $f_percent2 = ($f2[$key]==0 || $total2[$key]==0) ? 0 :number_format(($f2[$key]*100)/ $total2[$key],1)?></td>
	<td><?php echo $w2[$key] = (empty($waistline[$item['user_id']][2])) ? 0 :$waistline[$item['user_id']][2] ?></td>
	<td><?php echo $b2[$key] = (empty($weight[$item['user_id']]['sum'][2])) ? 0:$weight[$item['user_id']]['sum'][2]?></td>
	<td><?php echo $b_percent2[$key] = (empty($weight[$item['user_id']]['avg'][2])) ? 0 :number_format($weight[$item['user_id']]['avg'][2],1)?></td>
	<td><?php echo $sd2[$key]=(empty($sd[$item['user_id']][2])) ? 0 :number_format($sd[$item['user_id']][2],1)?></td>

	<td><?php echo $fat_avg[] =abs($f[$key]-$f2[$key]);?></td>
	<td><?php echo ($f_percent-$f_percent2==0) ? 0 :abs($f_percent-$f_percent2)?></td>
	<td><?php echo $bmi_avg[] = number_format(abs($b[$key]-$b2[$key]),1);?></td>
	<td><?php echo ($b_percent[$key]-$b_percent2[$key]==0) ? 0 :number_format(abs($b_percent[$key]-$b_percent2[$key]),1)?></td>
</tr>
<?php $i++; endforeach; ?>
<tr><td colspan="3">รวม</td>
	<td><?php echo $sum1 = (empty($user_total)) ? 0 : number_format(array_sum($user_total)); ?></td>
	<td><?php echo $sum2 = (empty($total)) ? 0 : number_format(array_sum($total)) ?></td>
	<td><?php echo (empty($sum1) || empty($sum2)) ? 0.0: number_format(($sum2*100)/$sum1,1); ?></td>
	<td><?php echo $sum3 = (empty($f)) ? 0 :number_format(array_sum($f));?></td>
	<td><?php echo $per_f1= (empty($sum2) && empty($sum3)) ? 0.0 :number_format(($sum3*100)/$sum2,1); ?></td>
	<td><?php echo (empty($w))? 0 : number_format(array_sum($w))?></td>
	<td><?php echo (empty($b))? 0 : number_format(array_sum($b)) ?></td>
	<td><?php echo $diff1 = (empty($b_percent))? 0.0 :number_format(array_sum($b_percent),1) ?></td>
	<td><?php echo (empty($sd1))? 0.0 :number_format(array_sum($sd1),1) ?></td>
	<td><?php echo $sum4 = (empty($user_total2)) ? 0: number_format(array_sum($user_total2)) ?></td>
	<td><?php echo $sum5 = (empty($total2))? 0 :number_format(array_sum($total2)) ?></td>
	<td><?php echo (empty($sum5) || empty($sum4)) ? 0.0: number_format(($sum5*100)/$sum4,1); ?></td>
	<td><?php echo $sum6 = (empty($f2)) ? 0 :number_format(array_sum($f2)) ?></td>
	<td><?php echo $per_f2= (empty($sum5) || empty($sum6)) ? 0.0 :number_format(($sum6*100)/$sum5,1); ?></td>
	<td><?php echo (empty($w2)) ? 0 : number_format(array_sum($w2))?></td>
	<td><?php echo (empty($b2)) ? 0 : number_format(array_sum($b2))?></td>
	<td><?php echo $diff2 = (empty($b_percent2)) ? 0 :number_format(array_sum($b_percent2),1) ?></td>
	<td><?php echo (empty($sd2)) ? 0 : number_format(array_sum($sd2),1) ?></td>
	<td><?php echo (empty($fat_avg)) ? 0 : number_format(array_sum($fat_avg)) ?></td>
	<td><?php echo (empty($per_f1) && empty($per_f2)) ? 0.0 :number_format(abs($per_f1 - $per_f2),1); ?></td>
	<td><?php echo (empty($diff1) && empty($diff2))? 0.0 :number_format(abs($diff1-$diff2),1);?></td>
	<td></td>
</tr>
</table>
<div style="text-align: right">ออกรายงาน ณ วันที่ <?php echo db_to_th(date('Y-m-d')) ?></div>
