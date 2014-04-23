
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
	<td><?php  $t1 = (empty($agency[$item['province_id']]['อปท.'])) ? 0 : $agency[$item['province_id']]['อปท.'];echo number_format($t1); $type1[$key]=$t1 ?></td>
	<td><?php  $t2 = (empty($agency[$item['province_id']]['รร']))   ? 0 : $agency[$item['province_id']]['รร'];echo number_format($t2); $type2[$key] = $t2 ?></td>
	<td><?php  $t3 = (empty($agency[$item['province_id']]['เอกชน'])) ? 0 : $agency[$item['province_id']]['เอกชน'];echo number_format($t3);$type3[$key] = $t3 ?></td>
	<td><?php  $t4 = (empty($agency[$item['province_id']]['ภาครัฐ'])) ? 0 : $agency[$item['province_id']]['ภาครัฐ'];echo number_format($t4);$type4[$key] = $t4; ?></td>
	<td><?php  $t5 = (empty($agency[$item['province_id']]['สธ.']))  ? 0 : $agency[$item['province_id']]['สธ.'];echo number_format($t5);$type5[$key] = $t5; ?></td>
	<td><?php  $t6 = (empty($agency[$item['province_id']]['ชุมชน'])) ? 0 : $agency[$item['province_id']]['ชุมชน'];echo number_format($t6); $type6[$key] = $t6; ?></td>
	<td><?php $type_sum[$key] = $t1+$t2+$t3+$t4+$t5+$t6 ; echo number_format($t1+$t2+$t3+$t4+$t5+$t6); ?></td>
	<td><?php $t = $total[$item['province_id']][1]; echo number_format($t); $total1[] = $t ?></td>
	<td><?php $u = $user_total[$item['province_id']][1]; echo number_format($u);$user_total1[] =$u; ?></td>
	<td><?php echo (empty($t) || empty($u)) ? 0 : round(($u*100)/$t) ?></td>
	<td><?php $f = (empty($fat[$item['province_id']]['อ้วนลงพุง'][1])) ? 0 : $fat[$item['province_id']]['อ้วนลงพุง'][1]; echo number_format($f); $f1[]=$f; ?></td>
	<td><?php echo $f_percnet[$key] =(empty($f) || empty($u)) ? 0 : round(($f*100)/$u) ?></td>
	<td><?php $w[$key]  =(empty($waistline[$item['province_id']][1])) ? 0 : $waistline[$item['province_id']][1]; echo number_format($w[$key],1); $waist1[] = $w[$key]; ?></td>
	<td><?php $we1[$key] = (empty($weight[$item['province_id']]['sum'][1])) ? 0 : $weight[$item['province_id']]['sum'][1]; echo number_format($we1[$key],1); $w_sum1[] = $we1[$key]; ?></td>
	<td><?php $we_avg[$key] = (empty($weight[$item['province_id']]['avg'][1])) ? 0 : $weight[$item['province_id']]['avg'][1]; echo number_format($we_avg[$key],1); $w_avg1[] = $we_avg[$key]; ?></td>
	<td><?php $s = (empty($sd[$item['province_id']][1])) ? 0 : $sd[$item['province_id']][1]; echo number_format($s,1);$sd1[] = $s; ?></td>

	<td><?php $t = $total[$item['province_id']][2]; echo number_format($t); $total2[] = $t ?></td>
	<td><?php $u = (empty($user_total[$item['province_id']][2])) ? 0 : $user_total[$item['province_id']][2]; echo number_format($u);$user_total2[] =$u; ?></td>
	<td><?php echo (empty($t) || empty($u)) ? 0 : round(($u*100)/$t) ?></td>
	<td><?php $f = (empty($fat[$item['province_id']]['อ้วนลงพุง'][2])) ? 0 : $fat[$item['province_id']]['อ้วนลงพุง'][2]; echo number_format($f); $f2[]=$f; ?></td>
	<td><?php echo $f2_percent[$key] = (empty($f) || empty($u)) ? 0 : round(($f*100)/$u) ?></td>
	<td><?php $w2[$key]  =(empty($waistline[$item['province_id']][2])) ? 0 : $waistline[$item['province_id']][2]; echo number_format($w2[$key],1); $waist2[] = $w2[$key]; ?></td>
	<td><?php $we2[$key] = (empty($weight[$item['province_id']]['sum'][2])) ? 0 : $weight[$item['province_id']]['sum'][2]; echo number_format($we2[$key],1); $w_sum2[] = $we2[$key]; ?></td>
	<td><?php $we_avg2[$key] = (empty($weight[$item['province_id']]['avg'][2])) ? 0 : $weight[$item['province_id']]['avg'][2]; echo number_format($we_avg2[$key],1); $w_avg2[] = $we_avg2[$key]; ?></td>
	<td><?php $s = (empty($sd[$item['province_id']][2])) ? 0 : $sd[$item['province_id']][2]; echo number_format($s,1);$sd2[] = $s; ?></td>
	<td><?php echo $diff1[$key] = abs($w[$key]-$w2[$key]); ?></td>
	<td><?php echo $diff2[$key] = abs($f_percnet[$key] - $f2_percent[$key]) ?></td>
	<td><?php echo $diff3[$key] = abs($we1[$key] - $we2[$key]);?></td>
	<td><?php echo $diff4[$key] = abs($we_avg[$key] - $we_avg2[$key]);?></td>

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
	<td><?php echo $sum1 =(empty($total1)) ? 0 :number_format(array_sum($total1));?></td>
	<td><?php echo $sum2 =(empty($user_total1)) ? 0 :number_format(array_sum($user_total1));?></td>
	<td><?php echo (empty($sum1) || empty($sum2)) ? 0.0 : number_format(($sum2*100)/$sum1,1);?></td>
	<td><?php echo $sum3 = (empty($f1)) ? 0 :number_format(array_sum($f1));?></td>
	<td><?php echo (empty($sum2) || empty($sum3)) ? 0.0 : number_format(($sum3*100)/$sum2,1);?></td>
	<td><?php echo (empty($waist1)) ? 0 :number_format(array_sum($waist1),1);?></td>
	<td><?php echo (empty($w_sum1)) ? 0 :number_format(array_sum($w_sum1),1);?></td>
	<td><?php echo (empty($w_avg1)) ? 0 :number_format(array_sum($w_avg1),1) ?></td>
	<td><?php echo (empty($sd1)) ? 0 :number_format(array_sum($sd1),1);?></td>
	<td><?php echo $sum4 = (empty($total2)) ? 0 :number_format(array_sum($total2));?></td>
	<td><?php echo $sum5 = (empty($user_total2)) ? 0 :number_format(array_sum($user_total2));?></td>
	<td><?php echo (empty($sum4) || empty($sum5)) ? 0.0 :number_format(($sum4*100)/$sum5,1);?></td>
	<td><?php echo $sum6 = (empty($f)) ? 0 :number_format(array_sum($f2));?></td>
	<td><?php echo (empty($sum5) || empty($sum6))? 0.0 :number_format(($sum5*100)/$sum6,1);?></td>
	<td><?php echo (empty($waist2)) ? 0 :number_format(array_sum($waist2),1);?></td>
	<td><?php echo (empty($w_sum2)) ? 0 :number_format(array_sum($w_sum2),1);?></td>
	<td><?php echo (empty($w_avg2)) ? 0 :number_format(array_sum($w_avg2),1) ?></td>
	<td><?php echo (empty($sd2)) ? 0 :number_format(array_sum($sd2),1);?></td>
	<td><?php echo (empty($diff1)) ? 0 :number_format(array_sum($diff1),1);?></td>
	<td><?php echo (empty($diff2)) ? 0 :number_format(array_sum($diff2),1);?></td>
	<td><?php echo (empty($diff3)) ? 0 :number_format(array_sum($diff3),1) ?></td>
	<td><?php echo (empty($diff4)) ? 0 :number_format(array_sum($diff4),1);?></td>
</tr>
</table>
<p class="text-right">ออกรายงาน ณ วันที่ <?php echo db_to_th(date('Y-m-d')) ?></p>

<!--</div>-->
<?php } // $_GET ?>




