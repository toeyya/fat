<div id="blank">
<div class="titleGroup2">รายงานความก้าวหน้าประจำเดือน</div>
<div id="Breadcrumbs">
<ol id="path-breadcrumb">
  <li><a href="home">หน้าแรก</a></li>
  <li><a href="f_weight/ebelly">ระบบสารสนเทศ e-flat belly</a></li>
  <li><a href="criteria/index/1">องค์กรต้นแบบไร้พุง </a></li>
  <li class="active">รายงานความก้าวหน้าประจำเดือน</li>
</ol>
</div>
<div class="contentGroup">
<div id="search">
	<form action="criteria/index2" class="form-search">
		<span>จังหวัด</span>
		<?php echo form_dropdown('province_id',get_option('id','province_name','f_province'),@$_GET['province_id'],'class="search-query span2"','เลือกจังหวัด'); ?>
		<span>องค์กร</span>
		<?php echo form_dropdown('user_id',get_option('id','agency_name','f_users'),@$_GET['user_id'],'class="search-query"','เลือกองค์กร'); ?>
		<span>ปีงบประมาณ </span>
		<?php echo form_dropdown('year',get_year_option("2556"),@$_GET['year'],'class="search-query span1"','เลือกปี'); ?>
		<span>เดือน</span>
		<?php echo form_dropdown('month',get_month(),@$_GET['month'],'class="search-query span2"','เลือกเดือน')?>
		<button name="btn_search" class="btn btn-success">ค้นหา</button>
	</form>
</div>

<div class="pull-right" style="margin-bottom: 10px">
	<a href="criteria/form" class="btn btn-primary">เพิ่มรายการ</a>
</div>
	<table class="table table-condensed table-striped table-bordered">
		<thead>
			<tr class="success">
				<th>ลำดับ</th>
				<th class="text-center">ปีงบประมาณ</th>
				<th class="text-center">เดือน</th>
				<th class="text-center">ผู้รายงาน</th>
				<th class="text-center">วันที่</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
		<?php foreach($result as $key=>$item): ?>
		<tr>
			<td><?php echo ++$key; ?></td>
			<td><?php echo $item['year'] ?></td>
			<td><?php $month=(int)$item['month']; echo month_th($month); ?></td>
			<td><?php echo $item['response_man'] ?></td>
			<td><?php echo DB2date($item['created']) ?></td>
			<td>

				<a class="btn btn-info " href="criteria/form/<?php echo $item['user_id'] ?>?month=<?php echo $month ?>"><i class="fa  fa-pencil"></i></a>
				<a class="btn btn-danger" href="criteria/delete_row/<?php echo $item['id']?>" onclick="return confirm('ยืนยันการลบ ?')"><i class="fa fa-times"></i></a>
			</td>
		</tr>
		<?php endforeach;?>
		</tbody>
	</table>
</div>
</div>
