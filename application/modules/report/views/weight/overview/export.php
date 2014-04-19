<?php if(!empty($_GET)){ ?>
<div id="Rform">

	<h1>โครงกร ศูนย์การเรียนรู้องค์กรต้นแบบไร้พุง</h1>
	<h3>รายงานสรุปผลการประเมินรอบเอวในศูนย์การเรียนรู้องค์กรต้นแบบไร้พุง (รายเขต)</h3>
	<div style="text-align: center">
	<span style="margin-left:5px;">ปีงบประมาณ</span> <?php echo $yearth; ?>
	</div>
</div>
<table border="1" style="width:1000px">
<tr>
	<th rowspan="3">ที่</th>
	<th rowspan="3" rowspan="2">ศูนย์อนามัยที่</th>
	<th colspan="7" rowspan="2">จำนวนองค์กรเข้าร่วม</th>
	<th colspan="22">จำนวนประชากรวัดรอบเอว</th>
</tr>
<tr>
	<th colspan="9">ครั้งที่ 1</th>
	<th colspan="9">ครั้งที่ 2</th>
	<th colspan="4">เปรียบเทียบครั้งที่ 1 - 2 </th>
</tr>
<tr>
	<th>อปท.</th>
	<th>รร</th>
	<th>เอกชน</th>
	<th>ภาครัฐ</th>
	<th>สธ.</th>
	<th>ชุม<br/>ชน</th>
	<th>รวม</th>
	<th>ทั้ง<br/>หมด</th>
	<th>วัด<br/>เอว</th>
	<th>%<br/>เข้า<br/>ร่วม</th>
	<th>อ้วน</th>
	<th>%<br/>อ้วน</th>
	<th>ค่า<br/>เฉลี่ย</th>
	<th>นน.</th>
	<th>ค่าเฉลี่ย</th>
	<th>SD</th>
	<th>ทั้ง<br/>หมด</th>
	<th>วัด<br/>เอว</th>
	<th>%<br/>เข้า<br/>ร่วม</th>
	<th>อ้วน</th>
	<th>%<br/>อ้วน</th>
	<th>ค่า<br/>เฉลี่ย</th>
	<th>นน.</th>
	<th>ค่าเฉลี่ย</th>
	<th>SD</th>
	<th>ค่า<br/>เฉลี่ย</th>
	<th>%<br/>อ้วน</th>
	<th>ค่า<br/>เฉลี่ย<br/>นน.</th>
	<th>%<br/>นน.</th>
</tr>
<?php foreach($result as $key=>$item): ?>
<tr>
	<td><?php echo ++$key; ?></td>
	<td><?php echo $item['area_no'] ?></td>
	<td><?php  $t1 = (empty($area[$item['area_no']]['อปท.'])) ? 0 : $area[$item['area_no']]['อปท.'];echo number_format($t1); $type1[$key]=$t1 ?></td>
	<td><?php  $t2 = (empty($area[$item['area_no']]['รร']))   ? 0 : $area[$item['area_no']]['รร'];echo number_format($t2); $type2[$key] = $t2 ?></td>
	<td><?php  $t3 = (empty($area[$item['area_no']]['เอกชน'])) ? 0 : $area[$item['area_no']]['เอกชน'];echo number_format($t3);$type3[$key] = $t3 ?></td>
	<td><?php  $t4 = (empty($area[$item['area_no']]['ภาครัฐ'])) ? 0 : $area[$item['area_no']]['ภาครัฐ'];echo number_format($t4);$type4[$key] = $t4; ?></td>
	<td><?php  $t5 = (empty($area[$item['area_no']]['สธ.']))  ? 0 : $area[$item['area_no']]['สธ.'];echo number_format($t5);$type5[$key] = $t5; ?></td>
	<td><?php  $t6 = (empty($area[$item['area_no']]['ชุมชน'])) ? 0 : $area[$item['area_no']]['ชุมชน'];echo number_format($t6); $type6[$key] = $t6; ?></td>
	<td><?php $type_sum[$key] = $t1+$t2+$t3+$t4+$t5+$t6 ; echo number_format($t1+$t2+$t3+$t4+$t5+$t6); ?></td>s
	<td><?php $t = $total[$item['area_no']][1]; echo number_format($t); $total1[] = $t ?></td>
	<td><?php $u = $user_total[$item['area_no']][1]; echo number_format($u);$user_total1[] =$u; ?></td>
	<td><?php echo (empty($t) || empty($u)) ? 0 : round(($u*100)/$t) ?></td>
	<td><?php $f = (empty($fat[$item['area_no']]['อ้วนลงพุง'][1])) ? 0 : $fat[$item['area_no']]['อ้วนลงพุง'][1]; echo number_format($f); $f1[]=$f; ?></td>
	<td><?php echo $f_percnet[$key] =(empty($f) || empty($u)) ? 0 : number_format(($f*100)/$u,1) ?></td>
	<td><?php $w[$key]  =(empty($waistline[$item['area_no']][1])) ? 0 : $waistline[$item['area_no']][1]; echo number_format($w[$key],1); $waist1[] = $w[$key]; ?></td>
	<td><?php $we1[$key] = (empty($weight[$item['area_no']]['sum'][1])) ? 0 : $weight[$item['area_no']]['sum'][1]; echo number_format($we1[$key],1); $w_sum1[] = $we1[$key]; ?></td>
	<td><?php $we_avg[$key] = (empty($weight[$item['area_no']]['avg'][1])) ? 0 : $weight[$item['area_no']]['avg'][1]; echo number_format($we_avg[$key],1); $w_avg1[] = $we_avg[$key]; ?></td>
	<td><?php $s = (empty($sd[$item['area_no']][1])) ? 0 : $sd[$item['area_no']][1]; echo number_format($s,1);$sd1[] = $s; ?></td>


	<td><?php $t = $total[$item['area_no']][2]; echo number_format($t); $total2[] = $t ?></td>
	<td><?php $u = (empty($user_total[$item['area_no']][2])) ? 0 : $user_total[$item['area_no']][2]; echo number_format($u);$user_total2[] =$u; ?></td>
	<td><?php echo (empty($t) || empty($u)) ? 0 : round(($u*100)/$t) ?></td>
	<td><?php $f = (empty($fat[$item['area_no']]['อ้วนลงพุง'][2])) ? 0 : $fat[$item['area_no']]['อ้วนลงพุง'][2]; echo number_format($f); $f2[]=$f; ?></td>
	<td><?php echo $f2_percent[$key] = (empty($f) || empty($u)) ? 0 : round(($f*100)/$u) ?></td>
	<td><?php $w2[$key]  =(empty($waistline[$item['area_no']][2])) ? 0 : $waistline[$item['area_no']][2]; echo number_format($w2[$key],1); $waist2[] = $w2[$key]; ?></td>
	<td><?php $we2[$key] = (empty($weight[$item['area_no']]['sum'][2])) ? 0 : $weight[$item['area_no']]['sum'][2]; echo number_format($we2[$key],1); $w_sum2[] = $we2[$key]; ?></td>
	<td><?php $we_avg2[$key] = (empty($weight[$item['area_no']]['avg'][2])) ? 0 : $weight[$item['area_no']]['avg'][2]; echo number_format($we_avg2[$key],1); $w_avg2[] = $we_avg2[$key]; ?></td>
	<td><?php $s = (empty($sd[$item['area_no']][2])) ? 0 : $sd[$item['area_no']][2]; echo number_format($s,1);$sd2[] = $s; ?></td>
	<td><?php echo $diff1[$key] = number_format(abs($w[$key]-$w2[$key]),1); ?></td>
	<td><?php echo $diff2[$key] = number_format(abs($f_percnet[$key] - $f2_percent[$key]),1) ?></td>
	<td><?php echo $diff3[$key] = number_format(abs($we1[$key] - $we2[$key]),1);?></td>
	<td><?php echo $diff4[$key] = number_format(abs($we_avg[$key] - $we_avg2[$key]),1);?></td>
</tr>
<?php endforeach; ?>
<tr><td colspan="2">รวมทั้งสิ้น ศูนย์ 1+12+กทม.</td>
	<td><?php echo number_format(array_sum($type1)); ?></td>
	<td><?php echo number_format(array_sum($type2)); ?></td>
	<td><?php echo number_format(array_sum($type3)); ?></td>
	<td><?php echo number_format(array_sum($type4)); ?></td>
	<td><?php echo number_format(array_sum($type5)); ?></td>
	<td><?php echo number_format(array_sum($type6)); ?></td>
	<td><?php echo number_format(array_sum($type_sum));?></td>
	<td><?php echo number_format(array_sum($total1));?></td>
	<td><?php echo number_format(array_sum($user_total1));?></td>
	<td></td>
	<td><?php echo number_format(array_sum($f1));?></td>
	<td></td>
	<td><?php echo number_format(array_sum($waist1),1);?></td>
	<td><?php echo number_format(array_sum($w_sum1),1);?></td>
	<td><?php echo number_format(array_sum($w_avg1),1) ?></td>
	<td><?php echo number_format(array_sum($sd1),1);?></td>
	<td><?php echo number_format(array_sum($total2));?></td>
	<td><?php echo number_format(array_sum($user_total2));?></td>
	<td></td>
	<td><?php echo number_format(array_sum($f2));?></td>
	<td></td>
	<td><?php echo number_format(array_sum($waist2),1);?></td>
	<td><?php echo number_format(array_sum($w_sum2),1);?></td>
	<td><?php echo number_format(array_sum($w_avg2),1) ?></td>
	<td><?php echo number_format(array_sum($sd2),1);?></td>
	<td><?php echo number_format(array_sum($diff1),1);?></td>
	<td><?php echo number_format(array_sum($diff2),1);?></td>
	<td><?php echo number_format(array_sum($diff3),1) ?></td>
	<td><?php echo number_format(array_sum($diff4),1);?></td>
</tr>
</table>
<p class="text-right">ออกรายงาน ณ วันที่ <?php echo db_to_th(date('Y-m-d')); ?></p>
<div class="aligncenter"><button name="btn_print" onclick="window.print();" class="btn btn-default btn-large">พิมพ์งาน</button></div>
<?php  } //$_GET ?>
