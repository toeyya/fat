<?php if(!empty($_GET)){ ?>
<div id="Rform">

	<h1>โครงการ ศูนย์การเรียนรู้องค์กรต้นแบบไร้พุง</h1>
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
	<td class="title"><?php echo $item['area_no'] ?></td>
	<td><?php  $t1 = (empty($area[$item['area_no']]['อปท.'])) ? 0 : $area[$item['area_no']]['อปท.'];echo number_format($t1); $type1[$key]=$t1 ?></td>
	<td><?php  $t2 = (empty($area[$item['area_no']]['รร']))   ? 0 : $area[$item['area_no']]['รร'];echo number_format($t2); $type2[$key] = $t2 ?></td>
	<td><?php  $t3 = (empty($area[$item['area_no']]['เอกชน'])) ? 0 : $area[$item['area_no']]['เอกชน'];echo number_format($t3);$type3[$key] = $t3 ?></td>
	<td><?php  $t4 = (empty($area[$item['area_no']]['ภาครัฐ'])) ? 0 : $area[$item['area_no']]['ภาครัฐ'];echo number_format($t4);$type4[$key] = $t4; ?></td>
	<td><?php  $t5 = (empty($area[$item['area_no']]['สธ.']))  ? 0 : $area[$item['area_no']]['สธ.'];echo number_format($t5);$type5[$key] = $t5; ?></td>
	<td><?php  $t6 = (empty($area[$item['area_no']]['ชุมชน'])) ? 0 : $area[$item['area_no']]['ชุมชน'];echo number_format($t6); $type6[$key] = $t6; ?></td>
	<td><?php $type_sum[$key] = $t1+$t2+$t3+$t4+$t5+$t6 ; echo number_format($t1+$t2+$t3+$t4+$t5+$t6); ?></td>
	<td><?php $t = $total[$item['area_no']][1]; echo number_format($t); $total1[] = $t ?></td>
	<td><?php $u = $user_total[$item['area_no']][1]; echo number_format($u);$user_total1[] =$u; ?></td>
	<td><?php echo (empty($t) || empty($u)) ? 0 : number_format(($u*100)/$t,1) ?></td>
	<td><?php $f = (empty($fat[$item['area_no']]['อ้วนลงพุง'][1])) ? 0 : $fat[$item['area_no']]['อ้วนลงพุง'][1]; echo number_format($f); $f1[]=$f; ?></td>
	<td><?php echo $f_percnet[$key] =(empty($f) || empty($u)) ? 0 : number_format(($f*100)/$u,1) ?></td>
	<td><?php $w[$key]  =(empty($waistline[$item['area_no']][1])) ? 0 : $waistline[$item['area_no']][1]; echo number_format($w[$key],1); $waist1[] = $w[$key]; ?></td>
	<td><?php $we1[$key] = (empty($weight[$item['area_no']]['sum'][1])) ? 0 : $weight[$item['area_no']]['sum'][1]; echo number_format($we1[$key],1); $w_sum1[] = $we1[$key]; ?></td>
	<td><?php $we_avg[$key] = (empty($weight[$item['area_no']]['avg'][1])) ? 0 : $weight[$item['area_no']]['avg'][1]; echo number_format($we_avg[$key],1); $w_avg1[] = $we_avg[$key]; ?></td>
	<td><?php $s = (empty($sd[$item['area_no']][1])) ? 0 : $sd[$item['area_no']][1]; echo number_format($s,1);$sd1[] = $s; ?></td>


	<td><?php $t = $total[$item['area_no']][2]; echo number_format($t); $total2[] = $t ?></td>
	<td><?php $u = (empty($user_total[$item['area_no']][2])) ? 0 : $user_total[$item['area_no']][2]; echo number_format($u);$user_total2[] =$u; ?></td>
	<td><?php echo (empty($t) || empty($u)) ? 0 : number_format(($u*100)/$t,1) ?></td>
	<td><?php $f = (empty($fat[$item['area_no']]['อ้วนลงพุง'][2])) ? 0 : $fat[$item['area_no']]['อ้วนลงพุง'][2]; echo number_format($f); $f2[]=$f; ?></td>
	<td><?php echo $f2_percent[$key] = (empty($f) || empty($u)) ? 0 : number_format(($f*100)/$u,1) ?></td>
	<td><?php $w2[$key]  =(empty($waistline[$item['area_no']][2])) ? 0 : $waistline[$item['area_no']][2]; echo number_format($w2[$key],1); $waist2[] = $w2[$key]; ?></td>
	<td><?php $we2[$key] = (empty($weight[$item['area_no']]['sum'][2])) ? 0 : $weight[$item['area_no']]['sum'][2]; echo number_format($we2[$key],1); $w_sum2[] = $we2[$key]; ?></td>
	<td><?php $we_avg2[$key] = (empty($weight[$item['area_no']]['avg'][2])) ? 0 : $weight[$item['area_no']]['avg'][2]; echo number_format($we_avg2[$key],1); $w_avg2[] = $we_avg2[$key]; ?></td>
	<td><?php $s = (empty($sd[$item['area_no']][2])) ? 0 : $sd[$item['area_no']][2]; echo number_format($s,1);$sd2[] = $s; ?></td>
	<!--เปรียบเทียบ 1-2 -->
	<td><?php echo (empty($td13[$key]) && empty($td22[$key])) ? 0 :number_format(abs($td13[$key]-$td22[$key]),1); ?></td>
	<td><?php echo number_format((abs($td13[$key] - $td22[$key])*100)/$td13[$key],1); ?></td>
	<td><?php echo (empty($td15[$key]) && empty($td24[$key])) ? 0.0 :number_format(abs($td15[$key] - $td24[$key]),1);?></td>
	<td><?php echo number_format((abs($td15[$key] - $td24[$key])*100)/$td15[$key],1);?></td>
</tr>
<?php endforeach; ?>
<tr><td colspan="2">รวมทั้งสิ้น ศูนย์ 1+12+กทม.</td>
	<td><?php echo (empty($type1)) ? 0: number_format(array_sum($type1)); ?></td>
	<td><?php echo (empty($type2)) ? 0: number_format(array_sum($type2)); ?></td>
	<td><?php echo (empty($type3)) ? 0: number_format(array_sum($type3)); ?></td>
	<td><?php echo (empty($type4)) ? 0: number_format(array_sum($type4)); ?></td>
	<td><?php echo (empty($type5)) ? 0: number_format(array_sum($type5)); ?></td>
	<td><?php echo (empty($type6)) ? 0: number_format(array_sum($type6)); ?></td>
	<td><?php echo (empty($type_sum)) ? 0 :number_format(array_sum($type_sum));?></td>
	<td><?php $sum8 = (empty($t8)) ? 0 :array_sum($t8); echo number_format(array_sum($t8)); ?></td>
	<td><?php $sum9 = (empty($t9)) ? 0 :array_sum($t9); echo number_format(array_sum($t9));?></td>
	<td><?php echo (empty($sum8) || empty($sum9))? 0.0 :number_format(($sum9*100)/$sum8,1);?></td>
	<td><?php $sum11 = (empty($t11)) ? 0 :array_sum($t11); echo number_format(array_sum($t11));?></td>
	<td><?php echo (empty($sum11) || empty($sum9)) ? 0.0 :number_format(($sum11*100/$sum9),1);?></td>
	<td><?php $sum13 = (empty($t13)) ? 0.0 : array_sum($t13); echo number_format($sum13,1);?></td>
	<td><?php echo (empty($t14)) ? 0 : number_format(array_sum($t14)) ?></td>
	<td><?php $sum15= (empty($t15)) ? 0.0 :array_sum($t15); echo number_format($sum15,1);?></td>
	<td><?php echo (empty($t16)) ? 0.0 : number_format(array_sum($t16),1);?></td>
	<td><?php $sum17 = (empty($t17)) ? 0 :array_sum($t17); echo number_format(array_sum($t17))?></td>
	<td><?php $sum18 = (empty($t18)) ? 0 :array_sum($t18); echo number_format(array_sum($t18));?></td>
	<td><?php echo (empty($sum17) || empty($sum18)) ? 0.0 :number_format(($sum18*100)/$sum17,1); ?></td>
	<td><?php $sum20 = (empty($t20)) ? 0 : array_sum($t20); echo number_format(array_sum($t20));?></td>
	<td><?php echo (empty($sum20) || empty($sum18)) ? 0 :number_format(($sum20*100)/$sum18,1); ?></td>
	<td><?php $sum22 = (empty($t22)) ? 0.0 :array_sum($t22); echo number_format($sum22,1);?></td>
	<td><?php echo (empty($t23)) ? 0 :number_format(array_sum($t23));?></td>
	<td><?php $sum24 = (empty($t24)) ? 0.0 :array_sum($t24); echo number_format($sum24,1); ?></td>
	<td><?php echo (empty($t25))   ? 0.0 :number_format(array_sum($t25),1);?></td>
	<!--เปรียบเทียบ 1-2 -->
	<td><?php echo (empty($sum13) && empty($sum22)) ? 0: number_format(abs($sum13-$sum22),1); ?></td>
	<td><?php echo number_format((abs($sum13-$sum22)*100)/$sum13,1);?></td>
	<td><?php echo (empty($sum15) && empty($sum24)) ? 0 :number_format(abs($sum15-$sum24),1) ?></td>
	<td><?php echo number_format((abs($sum15-$sum24)*100)/$sum15,1);?></td>
</tr>
</table>
<p class="text-right">ออกรายงาน ณ วันที่ <?php echo db_to_th(date('Y-m-d')); ?></p>
<div class="aligncenter"><button name="btn_print" onclick="window.print();" class="btn btn-default btn-large">พิมพ์งาน</button></div>
<?php  } //$_GET ?>
