
<?php if(!empty($_GET)){ ?>
<div id="Rform">
	<h1>โครงการ ศูนย์การเรียนรู้องค์กรต้นแบบไร้พุง</h1>
	<h3>รายงานแบบฟอร์มการบันทึก รอบเอว น้ำหนัก ส่วนสูง (รายจังหวัด)</h3>
	<div style="text-align: center">
	<span style="margin-left:5px;">ปีงบประมาณ</span> <?php echo $yearth ?><span style="margin-left:5px;">ศูนย์อนามัยที่</span><?php echo $hpc; ?>
	</div>
</div>
<!--<div class="span20">-->
<table border="1" style="width:1000px">
<tr>

	<th rowspan="3" style="vertical-align: middle">จังหวัด</th>
	<th colspan="7" rowspan="2" style="vertical-align: middle">จำนวนองค์กร์เข้าร่วม</th>
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
	<th>เอก<br/>ชน</th>
	<th>ภาครัฐ</th>
	<th>สธ.</th>
	<th>ชุม<br/>ชน</th>
	<th>รวม</th>
	<th>ทั้ง<br/>หมด</th>
	<th>วัดเอว</th>
	<th>%<br/>เข้าร่วม<br/>(%)</th>
	<th>อ้วน</th>
	<th>%<br/>อ้วน<br/>(%)</th>
	<th>ค่าเฉลี่ย</th>
	<th>นน.</th>
	<th>ค่าเฉลี่ย</th>
	<th>SD</th>
	<th>ทั้ง<br/>หมด</th>
	<th>วัดเอว</th>
	<th>%<br/>เข้าร่วม<br/>(%)</th>
	<th>อ้วน</th>
	<th>%<br/>อ้วน<br/>(%)</th>
	<th>ค่าเฉลี่ย</th>
	<th>นน.</th>
	<th>ค่าเฉลี่ย</th>
	<th>SD</th>
	<th>ค่าเฉลี่ย</th>
	<th>%<br/>อ้วน</th>
	<th>ค่า<br/>เฉลี่ย<br/>นน.</th>
	<th>%<br/>นน.</th>
</tr>
<?php $i=(@$_GET['page'] > 1)? (((@$_GET['page'])* 20)-20)+1:1;?>
<?php foreach($result as $key=>$item): ?>
<tr>

	<td><?php echo $item['province_name']?></td>
	<td><?php  $t1 = (empty($agency[$item['province_id']]['อปท.'])) ? 0 : $agency[$item['province_id']]['อปท.'];	echo number_format($t1); 	$type1[$key]=$t1 ?></td>
	<td><?php  $t2 = (empty($agency[$item['province_id']]['รร']))   ? 0 : $agency[$item['province_id']]['รร'];	echo number_format($t2); 	$type2[$key] = $t2 ?></td>
	<td><?php  $t3 = (empty($agency[$item['province_id']]['เอกชน'])) ? 0 : $agency[$item['province_id']]['เอกชน'];	echo number_format($t3);	$type3[$key] = $t3 ?></td>
	<td><?php  $t4 = (empty($agency[$item['province_id']]['ภาครัฐ'])) ? 0 : $agency[$item['province_id']]['ภาครัฐ'];	echo number_format($t4);	$type4[$key] = $t4; ?></td>
	<td><?php  $t5 = (empty($agency[$item['province_id']]['สธ.']))  ? 0 : $agency[$item['province_id']]['สธ.'];	echo number_format($t5);	$type5[$key] = $t5; ?></td>
	<td><?php  $t6 = (empty($agency[$item['province_id']]['ชุมชน'])) ? 0 : $agency[$item['province_id']]['ชุมชน'];	echo number_format($t6); 	$type6[$key] = $t6; ?></td>
	<td><?php $type_sum[$key] = $t1+$t2+$t3+$t4+$t5+$t6 ; echo number_format($t1+$t2+$t3+$t4+$t5+$t6); ?></td>
	<td><?php $td8 = $total[$item['province_id']][1]; echo number_format($td8); 			$t8[] = $td8 ?></td>
	<td><?php $td9 = $user_total[$item['province_id']][1]; echo number_format($td9);		$t9[] = $td9; ?></td>
	<td><?php echo (empty($td8) || empty($td9)) ? 0 : number_format(($td9*100)/$td8,1) ?></td>
	<td><?php $td11 = (empty($fat[$item['province_id']]['อ้วนลงพุง'][1])) ? 0 : $fat[$item['province_id']]['อ้วนลงพุง'][1]; echo number_format($td11); $t11[]=$td11; ?></td>
	<td><?php echo $td12[$key] =(empty($td11) || empty($td9)) ? 0 : number_format(($td11*100)/$td9,1) ?></td>
	<td><?php $td13[$key]  =(empty($waistline[$item['province_id']][1])) ? 0 : $waistline[$item['province_id']][1]; echo number_format($td13[$key],1); $t13[] = $td13[$key]; ?></td>
	<td><?php $td14[$key] = (empty($weight[$item['province_id']]['sum'][1])) ? 0 : $weight[$item['province_id']]['sum'][1]; echo number_format($td14[$key]); $t14[] = $td14[$key]; ?></td>
	<td><?php $td15[$key] = (empty($weight[$item['province_id']]['avg'][1])) ? 0 : $weight[$item['province_id']]['avg'][1]; echo number_format($td15[$key],1); $t15[] = $td15[$key]; ?></td>
	<td><?php $td16 = (empty($sd[$item['province_id']][1])) ? 0 : $sd[$item['province_id']][1]; echo number_format($td16,1);$t16[] = $td16; ?></td>

	<td><?php $td17 = $total[$item['province_id']][2]; echo number_format($td17); $t17[] = $td17 ?></td>
	<td><?php $td18 = (empty($user_total[$item['province_id']][2])) ? 0 : $user_total[$item['province_id']][2]; echo number_format($td18);$t18[] =$td18; ?></td>
	<td><?php echo (empty($td17) || empty($td18)) ? 0 : number_format(($td18*100)/$td17,1) ?></td>
	<td><?php $td20 = (empty($fat[$item['province_id']]['อ้วนลงพุง'][2])) ? 0 : $fat[$item['province_id']]['อ้วนลงพุง'][2]; echo number_format($td20); $t20[]=$td20; ?></td>
	<td><?php echo $td21[$key] = (empty($td20) || empty($td18)) ? 0 : number_format(($td20*100)/$td18,1) ?></td>
	<td><?php $td22[$key]  =(empty($waistline[$item['province_id']][2])) ? 0 : $waistline[$item['province_id']][2]; echo number_format($td22[$key],1); $t22[] = $td22[$key]; ?></td>
	<td><?php $td23[$key] = (empty($weight[$item['province_id']]['sum'][2])) ? 0 : $weight[$item['province_id']]['sum'][2]; echo number_format($td23[$key]); $t23[] = $td23[$key]; ?></td>
	<td><?php $td24[$key] = (empty($weight[$item['province_id']]['avg'][2])) ? 0 : $weight[$item['province_id']]['avg'][2]; echo number_format($td24[$key],1); $t24[] = $td24[$key]; ?></td>
	<td><?php $td25 = (empty($sd[$item['province_id']][2])) ? 0 : $sd[$item['province_id']][2]; echo number_format($td25,1);$t25[] = $td25; ?></td>
	<!--เปรียบเทียบ 1-2 -->
	<td><?php echo (empty($td13[$key]) && empty($td22[$key])) ? 0 : number_format(abs($td13[$key]-$td22[$key]),1); ?></td>
	<td><?php echo number_format((abs($td13[$key] - $td22[$key])*100)/$td13[$key],1); ?></td>
	<td><?php echo (empty($td15[$key]) && empty($td24[$key])) ? 0.0 :number_format(abs($td15[$key] - $td24[$key]),1);?></td>
	<td><?php echo number_format((abs($td15[$key] - $td24[$key])*100)/$td15[$key],1);?></td>

</tr>
<?php $i++; endforeach; ?>
<tr><td>รวม</td>
	<td><?php echo (empty($type1)) ? 0 :number_format(array_sum($type1)); ?></td>
	<td><?php echo (empty($type2)) ? 0 :number_format(array_sum($type2)); ?></td>
	<td><?php echo (empty($type3)) ? 0 :number_format(array_sum($type3)); ?></td>
	<td><?php echo (empty($type4)) ? 0 :number_format(array_sum($type4)); ?></td>
	<td><?php echo (empty($type5)) ? 0 :number_format(array_sum($type5)); ?></td>
	<td><?php echo (empty($type6)) ? 0 :number_format(array_sum($type6)); ?></td>
	<td><?php echo (empty($type_sum)) ? 0 :number_format(array_sum($type_sum));?></td>
	<td><?php $sum8 =(empty($t8)) ? 0 :array_sum($t8); 	 echo number_format(array_sum($t8));?></td>
	<td><?php $sum9 =(empty($t9)) ? 0 :array_sum($t9); 	echo number_format(array_sum($t9))?></td>
	<td><?php echo (empty($sum8) || empty($sum9)) ? 0.0 : number_format(($sum9*100)/$sum8,1);?></td>
	<td><?php echo $sum11 = (empty($t11)) ? 0 :number_format(array_sum($t11));?></td>
	<td><?php echo (empty($sum9) || empty($sum11)) ? 0.0 : number_format(($sum11*100)/$sum9,1);?></td>
	<td><?php $sum13 = (empty($t13)) ? 0 :array_sum($t13); echo number_format($sum13,1);?></td>
	<td><?php echo (empty($t14)) ? 0 :number_format(array_sum($t14));?></td>
	<td><?php $sum15 = (empty($t15)) ? 0 :array_sum($t15); echo number_format($sum15,1); ?></td>
	<td><?php echo (empty($t16)) ? 0 :number_format(array_sum($t16),1);?></td>
	<td><?php $sum17 = (empty($t17)) ? 0 :array_sum($t17); 		    echo number_format(array_sum($t17));?></td>
	<td><?php $sum18 = (empty($t18)) ? 0 :array_sum($t18); 			echo number_format(array_sum($t18))?></td>
	<td><?php echo (empty($sum17) || empty($sum18)) ? 0.0 :number_format(($sum18*100)/$sum17,1);?></td>
	<td><?php $sum20 = (empty($t20)) ? 0 :number_format(array_sum($t20)); echo number_format(array_sum($t20));?></td>
	<td><?php echo (empty($sum20) || empty($sum18))? 0.0 :number_format(($sum20*100)/$sum18,1);?></td>
	<td><?php $sum22= (empty($t22)) ? 0 :array_sum($t22); echo number_format($sum22,1);?></td>
	<td><?php echo (empty($t23)) ? 0 :number_format(array_sum($t23));?></td>
	<td><?php $sum24 = (empty($t24)) ? 0 :array_sum($t24); echo number_format($sum24,1); ?></td>
	<td><?php echo (empty($t25)) ? 0 :number_format(array_sum($t25),1);?></td>
	<!--เปรียบเทียบ 1-2 -->
	<td><?php echo (empty($sum13) && empty($sum22)) ? 0: number_format(abs($sum13-$sum22),1); ?></td>
	<td><?php echo number_format((abs($sum13-$sum22)*100)/$sum13,1);?></td>
	<td><?php echo (empty($sum15) && empty($sum24)) ? 0 :number_format(abs($sum15-$sum24),1) ?></td>
	<td><?php echo number_format((abs($sum15-$sum24)*100)/$sum15,1);?></td>
</tr>
</table>
<p class="text-right">ออกรายงาน ณ วันที่ <?php echo db_to_th(date('Y-m-d')) ?></p>

<!--</div>-->
<?php } // $_GET ?>




