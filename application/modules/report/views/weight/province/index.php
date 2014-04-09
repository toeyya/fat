<div class="titleGroup2">รายงานแบบฟอร์มการบันทึก รอบเอง น้ำหนัก ส่วนสูง (รายองค์กร)</div>
<div id="Breadcrumbs">
<ol id="path-breadcrumb">
  <li><a href="home">หน้าแรก</a></li>
  <li><a href="">ระบบเฝ้าระวังโรคอ้วนลงพุง</a></li>
  <li class="active">รายงานแบบฟอร์มการบันทึก รอบเอง น้ำหนัก ส่วนสูง (รายองค์กร)</li>
</ol>
</div>
<div class="contentBlank">
<div id="search" class="form-search">
	<form action="report/index/province" class="form-search">
		<span>จังหวัด</span>
		<?php echo form_dropdown('province_id',get_option('id','province_name','f_province'),@$_GET['province_id'],'class="search-query"','เลือกจังหวัด'); ?>
		<span>องค์กร</span>
		<?php echo form_dropdown('user_id',get_option('id','agency_name','f_users'),@$_GET['user_id'],'class="search-query"','เลือกองค์กร'); ?>
		<span>ปีงบประมาณ </span>
		<?php echo form_dropdown('year',get_year_option("2556"),@$_GET['year'],'class="search-query"',''); ?>
		<button name="btn_search" class="btn btn-success">ค้นหา</button>
	</form>
</div>
<div class="right" style="margin-bottom: 10px;">

	<a href="report/index/province/export<?=GetCurrentUrlGetParameter();?>" class="btn btn-default"><i class="fa fa-arrow-down"></i>ดาวน์โหลด excel</a>
	<a href="report/index/province/preview<?=GetCurrentUrlGetParameter();?>" class="btn btn-default">พิมพ์ข้อมูล</a>
</div>
<div class="clearfix"></div>
<?php if(!empty($_GET)){ ?>
<div id="Rform">
	<h1>โครงกร ศูนย์การเรียนรู้องค์กรต้นแบบไร้พุง</h1>
	<h3>รายงานสรุปผลการประเมินรอบเอวในศูนย์การเรียนรู้องค์กรต้นแบบไร้พุง</h3>
	<div style="text-align: center">
	<label class="caption">ปีงบประมาณ</label> <?php echo $yearth; ?>
	<label class="caption">จังหวัด</label> <?php echo $province ?><label class="caption">ศูนย์อนามัยที่</label> <?php echo $hpc; ?>
	</div>
</div>
<!--<div class="span20">-->
<table class="table table-bordered table-condensed table-striped">
<tr class="success">
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
	<td class="title"><?php echo $item['agency_name'] ?></td>
	<td class="title"><?php echo $item['agency_type_name'] ?></td>
	<td><?php echo $user_total[] = $item['user_total'] ?></td>
	<td><?php $t = $item['total']; echo number_format($t); $total[$key] = $t; ?></td>
	<td><?php echo round(($item['total']*100)/$item['user_total'],2) ?>%</td>
	<?php /*<td class="<?php echo $fat_mean[$fatmean[$item['user_id']][1]] ?>"><?php echo $fatmean[$item['user_id']][1];
				   $f[$key] = (empty($fat[$item['user_id']]['อ้วนลงพุง'][1])) ? 0 :$fat[$item['user_id']]['อ้วนลงพุง'][1] ?></td>*/ ?>
	<td><?php echo $f[$key] = (empty($fat[$item['user_id']]['อ้วนลงพุง'][1])) ? 0 :$fat[$item['user_id']]['อ้วนลงพุง'][1] ?></td>
	<td><?php echo $f_percent =(empty($f) || empty($total[$key])) ? 0 :round(($f[$key]*100)/$item['total'],2)."%"?></td>
	<td><?php echo $w = (empty($waistline[$item['user_id']][1])) ? 0 :$waistline[$item['user_id']][1] ?></td>
	<td><?php echo $b[$key] = (empty($weight[$item['user_id']]['sum'][1])) ? 0:$weight[$item['user_id']]['sum'][1]?></td>
	<td><?php echo $b_percent = (empty($weight[$item['user_id']]['avg'][1])) ? 0 :round($weight[$item['user_id']]['avg'][1],2)?></td>
	<td><?php echo (empty($sd[$item['user_id']][1])) ? 0 : round($sd[$item['user_id']][1],2)?></td>
	<td><?php echo $user_total2[$key] = (empty($user_total[$item['user_id']][2])) ? 0 :$user_total[$item['user_id']][2] ?></td>
	<td><?php echo $total2[$key] = (empty($total[$item['user_id']][2])) ? 0 : $total[$item['user_id']][2]?></td>
	<td><?php echo ($user_total2[$key]==0 || $total2[$key]==0) ? 0 : round(($total2[$key]*100)/$user_total2[$key],2)."%"?></td>
	<?php /*<td class="<?php echo $fat_mean[$fatmean[$item['user_id']][2]] ?>"><?php echo (empty($fatmean[$item['user_id']][2])) ? 0 :$fatmean[$item['user_id']][2];
			  	   $f2[$key] = (empty($fat[$item['user_id']]['อ้วนลงพุง'][2])) ? 0 :$fat[$item['user_id']]['อ้วนลงพุง'][2] ?></td>*/ ?>
	<td><?php echo $f2[$key] = (empty($fat[$item['user_id']]['อ้วนลงพุง'][2])) ? 0 :$fat[$item['user_id']]['อ้วนลงพุง'][2] ?></td>
	<td><?php echo $f_percent2 = ($f2[$key]==0 || $total2[$key]==0) ? 0 :round(($f2[$key]*100)/ $total2[$key],2)."%"?></td>
	<td><?php echo $w2 = (empty($waistline[$item['user_id']][2])) ? 0 :$waistline[$item['user_id']][2] ?></td>
	<td><?php echo $b2[$key] = (empty($weight[$item['user_id']]['sum'][2])) ? 0:$weight[$item['user_id']]['sum'][2]?></td>
	<td><?php echo $b_percent2 = (empty($weight[$item['user_id']]['avg'][2])) ? 0 :round($weight[$item['user_id']]['avg'][2],2)?></td>
	<td><?php echo (empty($sd[$item['user_id']][2])) ? 0 :round($sd[$item['user_id']][2],2)?></td>
	<td><?php echo $fat_avg[] =abs($f[$key]-$f2[$key]);?></td>
	<td><?php echo ($f_percent-$f_percent2==0) ? 0 :abs($f_percent-$f_percent2)."%"?></td>
	<td><?php echo $bmi_avg[] = abs($b[$key]-$b2[$key]);?></td>
	<td><?php echo ($b_percent-$b_percent2==0) ? 0 :abs($b_percent-$b_percent2)."%"?></td>
</tr>
<?php $i++; endforeach; ?>
<tr><td colspan="3">รวม</td>
	<td><?php echo number_format(array_sum($user_total)); ?></td>
	<td><?php echo number_format(array_sum($total)) ?></td>
	<td></td>
	<td><?php echo number_format(array_sum($f));?></td>
	<td></td>
	<td></td>
	<td><?php echo number_format(array_sum($b)) ?></td>
	<td></td>
	<td></td>
	<td><?php echo number_format(array_sum($user_total2)) ?></td>
	<td><?php echo number_format(array_sum($total2)) ?></td>
	<td></td>
	<td><?php echo number_format(array_sum($f2)) ?></td>
	<td></td>
	<td></td>
	<td><?php echo number_format(array_sum($b2))?></td>
	<td></td>
	<td></td>
	<td><?php echo number_format(array_sum($fat_avg)) ?></td>
	<td></td>
	<td><?php echo number_format(array_sum($bmi_avg)) ?></td>
	<td></td>

</tr>
</table>
<div class="span3 pull-right">ออกรายงาน ณ วันที่ <?php echo db_to_th(date('Y-m-d')) ?></div>
</div>
<!--</div>-->
<?php }  // $_GET?>




