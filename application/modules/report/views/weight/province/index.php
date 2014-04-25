<div class="titleGroup2">รายงานแบบฟอร์มการบันทึก รอบเอว น้ำหนัก ส่วนสูง (รายองค์กร)</div>
<div id="Breadcrumbs">
<ol id="path-breadcrumb">
  <li><a href="home">หน้าแรก</a></li>
  <li><a href="">ระบบเฝ้าระวังโรคอ้วนลงพุง</a></li>
  <li class="active">รายงานแบบฟอร์มการบันทึก รอบเอว น้ำหนัก ส่วนสูง (รายองค์กร)</li>
</ol>
</div>
<div class="contentBlank">
<div id="search" class="form-search">
	<form action="report/index/province" class="form-search">
		<span>จังหวัด</span>
		<?php echo form_dropdown('province_id',get_option('id','province_name','f_province','','province_name'),@$_GET['province_id'],'class="search-query"','เลือกจังหวัด'); ?>
		<span>องค์กร</span>
		<span id="agency">
			<?php
			if(!empty($_GET['user_id'])){
				echo form_dropdown('user_id',get_option('id','agency_name','f_users','province_id = '.$_GET['province_id'],'agency_name'),@$_GET['user_id'],'class="search-query"','เลือกองค์กร');
			}else{
			?>
				<select name="user_id" class="search-query"><option value="">เลือกองค์กร</option></select>
			<?php }  ?>
		</span>
		<span>ปีงบประมาณ </span>
		<?php echo form_dropdown('year',get_year_option("2556"),@$_GET['year'],'class="search-query"',''); ?>
		<button name="btn_search" class="btn btn-success">ค้นหา</button>
	</form>
</div>
<?php if(!empty($_GET)){ ?>
<div class="right" style="margin-bottom: 10px;">
	<a href="report/index/province/export<?=GetCurrentUrlGetParameter();?>" class="btn btn-default"><i class="fa fa-arrow-down"></i>ดาวน์โหลด excel</a>
	<a href="report/index/province/preview<?=GetCurrentUrlGetParameter();?>" class="btn btn-default" target="_blank">พิมพ์ข้อมูล</a>
</div>
<div class="clearfix"></div>
<div id="Rform">
	<h1>โครงกร ศูนย์การเรียนรู้องค์กรต้นแบบไร้พุง</h1>
	<h3>รายงานแบบฟอร์มการบันทึก รอบเอว น้ำหนัก ส่วนสูง (รายองค์กร)</h3>
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
	<td><?php $td4 = $item['user_total']; echo number_format($td4); $t4[$key] = $td4; ?></td>
	<td><?php $td5 = $item['total']; 	  echo number_format($td5); $t5[$key] = $td5; ?></td>
	<td><?php echo number_format(($item['total']*100)/$item['user_total'],1) ?></td>
	<td><?php echo $td7[$key] = (empty($fat[$item['user_id']]['อ้วนลงพุง'][1])) ? 0 :$fat[$item['user_id']]['อ้วนลงพุง'][1] ?></td>
	<td><?php echo $td8 =(empty($td7) || empty($td5)) ? 0 :number_format(($td7[$key]*100)/$td5,1) ?></td>
	<td><?php echo $td9[$key] = (empty($waistline[$item['user_id']][1])) ? 0 :$waistline[$item['user_id']][1];  ?></td>
	<td><?php $td10 = (empty($weight[$item['user_id']]['sum'][1])) ? 0:$weight[$item['user_id']]['sum'][1]; echo number_format($td10); $t10[$key] = $td10;?></td>
	<td><?php $td11 = (empty($weight[$item['user_id']]['avg'][1])) ? 0 :$weight[$item['user_id']]['avg'][1]; echo number_format($td11,1); $t11[$key]=$td11;?></td>
	<td><?php echo $td12[$key]=(empty($sd[$item['user_id']][1])) ? 0 : number_format($sd[$item['user_id']][1],1)?></td>

	<td><?php $td13 = (empty($user_total[$item['user_id']][2])) ? 0 :$user_total[$item['user_id']][2]; echo number_format($td13); $t13[$key] = $td13; ?></td>
	<td><?php $td14 = (empty($total[$item['user_id']][2])) ? 0 : $total[$item['user_id']][2];          echo number_format($td14); $t14[$key] = $td14;?></td>
	<td><?php echo ($td13==0 || $td14==0) ? 0 : number_format(($td14*100)/$td13,1)?></td>
	<td><?php echo $td16[$key] = (empty($fat[$item['user_id']]['อ้วนลงพุง'][2])) ? 0 :$fat[$item['user_id']]['อ้วนลงพุง'][2] ?></td>
	<td><?php echo $td17 = ($td16[$key]==0 || $td14[$key]==0) ? 0 :number_format(($td16[$key]*100)/ $td14,1)?></td>
	<td><?php echo $td18[$key] = (empty($waistline[$item['user_id']][2])) ? 0 :$waistline[$item['user_id']][2] ?></td>
	<td><?php echo $td19[$key] = (empty($weight[$item['user_id']]['sum'][2])) ? 0:$weight[$item['user_id']]['sum'][2]?></td>
	<td><?php $td20 = (empty($weight[$item['user_id']]['avg'][2])) ? 0 : $weight[$item['user_id']]['avg'][2]; echo number_format($td20,1); $t20[$key] = $td20;?></td>
	<td><?php echo $td21[$key]=(empty($sd[$item['user_id']][2])) ? 0 :number_format($sd[$item['user_id']][2],1)?></td>
	<!-- เปรียบเทียบ 1-2 -->
	<td><?php echo (empty($td9[$key]) && empty($td18[$key])) ? 0 : number_format(abs($td9[$key]-$td18[$key]),1);?></td>
	<td><?php echo number_format((abs($td9[$key]-$td18[$key])*100)/$td9[$key],1);?></td>
	<td><?php echo (empty($td11) && empty($td20)) ? 0 : number_format(abs($td11-$td20),1);?></td>
	<td><?php echo number_format((abs($td11-$td20)*100)/$td11,1)?></td>
</tr>
<?php $i++; endforeach; ?>
<tr><td colspan="3">รวม</td>
	<td><?php $sum4 = (empty($t4)) ? 0 : array_sum($t4); echo number_format(array_sum($t4)); ?></td>
	<td><?php $sum5 = (empty($t5)) ? 0 : array_sum($t5); echo number_format(array_sum($t5))  ?></td>
	<td><?php echo (empty($sum4) || empty($sum5)) ? 0.0: number_format(($sum5*100)/$sum4,1); ?></td>
	<td><?php echo $sum7 = (empty($td7)) ? 0 :number_format(array_sum($td7));?></td>
	<td><?php echo $sum8= (empty($sum5) && empty($sum7)) ? 0.0 :number_format(($sum7*100)/$sum5,1); ?></td>
	<td><?php echo $sum9 = (empty($td9))? 0 : number_format(array_sum($td9))?></td>
	<td><?php echo (empty($t10))? 0 : number_format(array_sum($t10)) ?></td>
	<td><?php echo $sum11= (empty($t11))? 0.0 :number_format(array_sum($t11),1) ?></td>
	<td><?php echo (empty($td12))? 0.0 :number_format(array_sum($td12),1) ?></td>

	<td><?php $sum13 = (empty($t13)) ? 0: array_sum($t13);  echo number_format($sum13); ?></td>
	<td><?php $sum14 = (empty($t14)) ? 0 :array_sum($t14);  echo number_format($sum14); ?></td>
	<td><?php echo (empty($sum13) || empty($sum14)) ? 0.0: number_format(($sum14*100)/$sum13,1); ?></td>
	<td><?php echo $sum16 = (empty($td16)) ? 0 :number_format(array_sum($td16)) ?></td>
	<td><?php echo $sum17= (empty($sum16) || empty($sum14)) ? 0.0 :number_format(($sum16*100)/$sum14,1); ?></td>
	<td><?php echo $sum18 = (empty($td18)) ? 0 : number_format(array_sum($td18))?></td>
	<td><?php echo (empty($td19)) ? 0 : number_format(array_sum($td19))?></td>
	<td><?php echo $sum20 = (empty($t20)) ? 0 :number_format(array_sum($t20),1) ?></td>
	<td><?php echo (empty($td21)) ? 0 : number_format(array_sum($td21),1) ?></td>
	<!-- เปรียบเทียบ 1-2 -->
	<td><?php echo (empty($sum9)  && empty($sum18)) ? 0.0 :number_format(abs($sum9 - $sum18),1); ?></td>
	<td><?php echo number_format((abs($sum9 - $sum18)*100)/$sum9,1); ?></td>
	<td><?php echo (empty($sum11) && empty($sum20)) ? 0.0 :number_format(abs($sum11- $sum20),1); ?></td>
	<td><?php echo number_format((abs($sum11- $sum20)*100)/$sum11,1); ?></td>


</tr>
</table>
<div class="span3 pull-right text-right">ออกรายงาน ณ วันที่ <?php echo db_to_th(date('Y-m-d')) ?></div>
<div class="text-center"><?php echo $pagination; ?></div>
</div>
<!--</div>-->
<?php }  // $_GET?>
<script type="text/javascript">
$(document).ready(function(){
	$('select[name=province_id]').change(function(){
		var province_id = $(this).val();
		if(province_id.length>0){
			$.ajax({
				url:'setting/getAgency',
				data:'province_id='+province_id,
				success:function(data){
					$('#agency').html(data);
				}
			});
		}else{
			$('#agency').html('<select name="user_id" class="search-query"><option value="">เลือกองค์กร</option></select>');
		}
	});
});
</script>



