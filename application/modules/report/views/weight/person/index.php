<div class="titleGroup2">รายงานแบบฟอร์มการบันทึก รอบเอว น้ำหนัก ส่วนสูง (รายบุคคล)</div>
<div id="Breadcrumbs">
<ol id="path-breadcrumb">
  <li><a href="home">หน้าแรก</a></li>
  <li><a href="">ระบบเฝ้าระวังโรคอ้วนลงพุง</a></li>
  <li class="active">รายงานแบบฟอร์มการบันทึก รอบเอว น้ำหนัก ส่วนสูง (รายบุคคล)</li>
</ol>
</div>
<div class="contentBlank">
<div id="search" class="form-search">
	<form action="report/index/person" class="form-search">
		<span>ชื่อ - นามสกุล</span>
		<input type="text" name="fullname" value="<?php echo @$_GET['fullname'] ?>" class="input-medium search-query">
		<?php if($permission=="1"): ?>
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
		</span>		<?php endif; ?>
		<span>ปีงบประมาณ </span>
		<?php echo form_dropdown('year',get_year_option("2556"),@$_GET['year'],'class="search-query"',''); ?>
		<button name="btn_search" class="btn btn-success">ค้นหา</button>
	</form>
</div>
<?php if(!empty($_GET)){ ?>
<div class="right" style="margin-bottom: 10px;">
	<a href="report/index/person/export<?=GetCurrentUrlGetParameter();?>"  class="btn btn-default"><i class="fa fa-arrow-down"></i>ดาวน์โหลด excel</a>
	<a href="report/index/person/preview<?=GetCurrentUrlGetParameter();?>" class="btn btn-default" target="_blank">พิมพ์ข้อมูล</a>
</div>
<div class="clearfix"></div>

<div id="Rform">
	<h1>โครงการ ศูนย์การเรียนรู้องค์กรต้นแบบไร้พุง</h1>
	<h3>รายงานแบบฟอร์มการบันทึก รอบเอว น้ำหนัก ส่วนสูง (รายบุคคล)</h3>
	<div style="text-align: center">
	<p><label class="caption">ชื่อศูนย์การเรียนรู้องค์กรต้นแบบไร้พุง  </label><?php echo $user['agency_name'] ?>
	<label class="caption">ศูนย์อนามัยที่</label> <?php echo $user['hpc'] ?>
	<label class="caption">ปีงบประมาณ</label> <?php echo $yearth; ?></p>
	<label class="caption">ที่ตั้ง</label>.......<label class="caption">ตำบล  </label><?php echo $district ?>
	<label class="caption">อำเภอ  </label><?php echo $amphur; ?>
	<label class="caption">จังหวัด  </label><?php echo $province ?>
	<label class="caption">รหัสไปรษณีย์</label>.........
	</div>
</div>

<table class="table table-bordered table-condensed table-striped">
<tr class="success">
	<th rowspan="2">ที่</th>
	<th rowspan="2">ชื่อ - นามสกุล</th>
	<th rowspan="2">เพศ</th>
	<th rowspan="2">อายุ</th>
	<th colspan="5">ครั้งที่ 1</th>
	<th colspan="5">ครั้งที่ 2</th>
	<th colspan="2">เปรียบเทียบครั้งที่ 1 - 2 </th>
</tr>
<tr>

	<th>รอบเอว</th>
	<th>ผล</th>
	<th>น้ำหนัก</th>
	<th>ส่วนสูง</th>
	<th>BMI</th>
	<th>รอบเอว</th>
	<th>ผล</th>
	<th>น้ำหนัก</th>
	<th>ส่วนสูง</th>
	<th>BMI</th>
	<th>รอบเอว</th>
	<th>น้ำหนัก</th>
</tr>
<?php $j=(@$_GET['page'] > 1)? (((@$_GET['page'])* 20)-20)+1:1;?>
<?php foreach($res1 as $key=>$item):
	$i= $key;?>
<tr>
	<td><?php echo $j; ?></td>
	<td class="title"><?php echo  $item['fullname']?></td>
	<td><?php echo (!empty($item['gender'])) ? $gender[$item['gender']]:''?></td>
	<td><?php echo $item['age']; ?></td>
	<td><?php echo $item['waistline']  ?></td>
	<td class="<?php echo $color[@trim($item['fat'])] ?>"><?php echo $item['fat']  ?></td>
	<td><?php echo $item['weight'] ?></td>
	<td><?php echo $item['height'] ?></td>
	<td><?php echo $item['bmi_value']  ?></td>

	<td><?php echo (!empty($res2[$key]['waistline'])) ? $res2[$key]['waistline']:'';  ?></td>
	<td class="<?php echo $color[@$res2[$key]['fat']] ?>"><?php echo (!empty($res2[$key]['fat'])) ? $res2[$key]['fat']:''; ?></td>
	<td><?php echo (!empty($res2[$key]['weight'])) ? $res2[$key]['weight']:'' ?></td>
	<td><?php echo (!empty($res2[$key]['height'])) ? $res2[$key]['height']:''?></td>
	<td><?php echo (!empty($res2[$key]['bmi_value'])) ? $res2[$key]['bmi_value']:''?></td>
	<td><?php echo (!empty($res2[$key]['waistline'])) ? abs($item['waistline'] - $res2[$key]['waistline']):'' ?></td>
	<td><?php echo (!empty($res2[$key]['weight'])) ? abs($item['weight'] - $res2[$key]['weight']):'' ?></td>

</tr>
<?php $j++;endforeach; ?>
</table>
<div class="text-center"><?php echo $pagination; ?></div>

<div style="margin:0 auto;width:500px;">
<div class="span6">
<div class="alert alert-info" >
	<span class="label label-info">เกณฑ์พิจารณาภาวะความอ้วนลงพุง</span>
	<div class="span5 offset1 muted" style="margin-top:10px;margin-bottom: 10px;"><strong>BMI = น้ำหนัก (กิโลกรัม) &divide; ส่วนสูง(เมตร)<sup>2</sup></strong></div>
	<table class="table table-bordered table-condensed" style="background-color:white;">
		<tr>
			<th rowspan="2">เพศ</th>
			<th colspan="2">วัดเอว</th>
			<th colspan="5">BMI</th>
		</tr>
		<tr>
			<th class="green">ปกติ</th>
			<th class="red">อ้วนลงพุง</th>
			<th class="yellow">ผอม</th>
			<th class="green">ปกติ</th>
			<th class="orange">ท้วม</th>
			<th class="red">อ้วน</th>
			<th class="grey">อ้วนมาก</th>
		</tr>
		<tr>
			<td>ขาย</td>
			<td>&lt;90</td>
			<td>&gt;90</td>
			<td rowspan="2">&le;18.5</td>
			<td rowspan="2">18.5 - 22.9</td>
			<td rowspan="2">23.0 - 24.9</td>
			<td rowspan="2">25.0 - 29.9</td>
			<td rowspan="2">&ge;30.0</td>
		</tr>
		<tr>
			<td>หญิง</td>
			<td>&lt;80</td>
			<td>&gt;80</td>
		</tr>
	</table>

</div>
</div>
</div>
<div class="clearfix"></div>

<?} //$_GET?>
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