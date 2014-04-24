	<div id="Breadcrumbs">
  	<ol id="path-breadcrumb">
      <li><a href="home">หน้าแรก</a></li>
      <li><a href="f_weight/ebelly">ระบบสารสนเทศ e-flat belly</a></li>
       <li><a href="criteria/index/1">องค์กรต้นแบบไร้พุง</a></li>
      <li class="active">รายงานตามตัวชี้วัด  กพร.</li>
    </ol>
	</div>
<div class="titleGroup2">รายงานตามตัวชี้วัด  กพร.</div>
<div class="contentGroup">
<div id="search" class="form-search">
	<form action="criteria/report" class="form-search">
		<span>ศูนย์อนามัย</span>
		<?php echo form_dropdown('area',get_option('area_no as id','area_no','f_area_detail where area_id=2 group by area_no'),@$_GET['area'],'class="search-query span1"','เลือกศูนย์อนามัย'); ?>
		<span>จังหวัด</span>
		<span id="province">
		<?php echo form_dropdown('province_id',get_option('id','province_name','f_province'),@$_GET['province_id'],'class="search-query"','เลือกจังหวัด'); ?>
		</span>
		<span>องค์กร</span>
		<span id="agency">
		<?php echo form_dropdown('user_id',get_option('id','agency_name','f_users'),@$_GET['user_id'],'class="search-query"','เลือกองค์กร'); ?>
		</span>
		<span>ปีงบประมาณ </span>
		<?php echo form_dropdown('year',get_year_option("2557"),@$_GET['year'],'class="search-query w100"',''); ?>
		<button name="btn_search" class="btn btn-success">ค้นหา</button>
	</form>
</div>

<?php if(!empty($_GET)){ ?>
<div class="right" style="margin-bottom: 10px;">
	<a href="criteria/report/export<?=GetCurrentUrlGetParameter();?>" class="btn btn-default"><i class="fa fa-arrow-down"></i>ดาวน์โหลด excel</a>
	<a href="criteria/report/preview<?=GetCurrentUrlGetParameter();?>" class="btn btn-default" target="_blank">พิมพ์ข้อมูล</a>
</div>

	<table class="table table-bordered  table-condensed table-striped">
	<thead>
	<tr class"success">
		<th>#</th>
		<th>ศูนย์อนามัย</th>
		<th>จังหวัด</th>
		<th>ชื่อองค์กรต้นแบบ</th>
		<th>จน.ประชากรทั้งหมด<br/>(คน)</th>
		<th>จน.วัดรอบเอว<br/>(คน)</th>
		<th>จน.วัดรอบเอวปกติ<br/>(คน)</th>
		<th>ร้อยละ 60 วัดรอบเอวปกติ<br/>(%)</th>
		<th>ข้อ<br/>1</th>
		<th>ข้อ <br/>2</th>
		<th>ข้อ <br/>3</th>
		<th>ข้อ <br/>4</th>
		<th>ข้อ <br/>5</th>
		<th>ข้อ <br/>6</th>
		<th>ข้อ <br/>7.1</th>
		<th>ข้อ <br/>7.2</th>
		<th>ข้อ <br/>7.2.1</th>
		<th>ข้อ <br/>7.2.2</th>
		<th>ข้อ <br/>7.3</th>
		<th>ข้อ <br/>8</th>
		<th>ข้อ <br/>9</th>
		<th>ข้อ <br/>10</th>
	</tr>
	</thead>
	<tbody>
		<?php $i=(@$_GET['page'] > 1)? (((@$_GET['page'])* 20)-20)+1:1;?>
		<?php foreach($result as $item): ?>
		<tr>
			<td><?php echo $i; ?></td>
			<td style="text-align: center"><?php echo $item['area_no']?></td>
			<td class="title"><?php echo $item['province_name']?></td>
			<td class="title"><?php echo $item['agency_name'] ?></td>
			<td><?php echo (empty($item['cnt'])) ? 0 : number_format($item['cnt'])?></td>
			<td><?php echo (empty($user[$item['user_id']])) ? 0 :number_format($user[$item['user_id']]);?></td>
			<td><?php echo (empty($fat[$item['user_id']])) ?  0 :number_format($fat[$item['user_id']])?></td>
			<td><?php echo (empty($user[$item['user_id']]) || empty($fat[$item['user_id']])) ? 0 : number_format(($fat[$item['user_id']]*100)/$user[$item['user_id']],1)?></td>
			<?php for($j=1;$j<15;$j++): ?>
			<td class="title"><?php echo $res[@$criteria[$item['user_id']][$j]] ?></td>
			<?php endfor; ?>
		</tr>
		<?php $i++;endforeach; ?>
	</tbody>
	</table>

<?php echo $pagination; ?>
</div>

<?php } ?>
<script type="text/javascript">
$(document).ready(function(){
	$('select[name=area]').change(function(){
		if($(this).val().length>0){
			$.ajax({
				url:'setting/getProvince',
				data:'area_no='+$(this).val(),
				success:function(data){
					$('#province').html(data);
				}
			});
		}
	});
	$('select[name=province_id]').live('change',function(){
		if($(this).val().length>0){
			$.ajax({
				url:'setting/getAgency',
				data:'province_id='+$(this).val(),
				success:function(data){
					$('#agency').html(data);
				}
			});
		}
	});
});
</script>