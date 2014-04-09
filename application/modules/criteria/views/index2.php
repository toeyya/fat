<h1>ตัวชี้วัดองค์กรไร้พุง</h1>

<div id="search">
	<form action="criteria/index2" class="form-search">
		<span>องค์กร</span>
		<?php echo form_dropdown('user_id',get_option('id','agency_name','f_users'),@$_GET['user_id'],'class="search-query"','เลือกองค์กร'); ?>
		<span>ปีงบประมาณ </span>
		<?php echo form_dropdown('year',get_year_option("2556"),@$_GET['year'],'class="search-query"','เลือกปีงบประมาณ'); ?>
		<span>เดือน</span>
		<?php echo form_dropdown('month',get_month(),@$_GET['month'],'class="search-query"','เลือกเดือน')?>
		<button name="btn_search" class="btn btn-success">ค้นหา</button>
	</form>
</div>
<div class="pull-right" style="margin-bottom: 10px">
	<a href="criteria/form" class="btn btn-success">เพิ่มรายการ</a>
</div>
	<table class="table table-condensed table-striped">
		<thead>
			<tr class="info">
				<th>ลำดับ</th>
				<th>เดือน</th>
				<th>ผู้รายงาน</th>
				<th>วันที่</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
		<?php foreach($result as $key=>$item): ?>
		<tr>
			<td class="text-center"><?php echo ++$key; ?></td>
			<td><?php $month=(int)$item['month']; echo month_th($month); ?></td>
			<td><?php echo $item['firstname']." ".$item['lastname'] ?></td>
			<td><?php echo DB2date($item['created']) ?></td>
			<td>

				<a class="btn btn-info " href="criteria/form/<?php echo $item['user_id'] ?>?month=<?php echo $month ?>"><i class="fa  fa-pencil"></i></a>
				<a class="btn btn-danger" href="criteria/delete_row/<?php echo $item['id']?>" onclick="return confirm('ยืนยันการลบ ?')"><i class="fa fa-times"></i></a>
			</td>
		</tr>
		<?php endforeach;?>
		</tbody>
	</table>

