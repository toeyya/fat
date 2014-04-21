<div class="titleGroup2"></div>

<div class="contentBlank">
	<div id="Breadcrumbs">
  	<ol id="path-breadcrumb">
      <li><a href="home">หน้าแรก</a></li>
      <li><a href="f_weight/ebelly">ระบบสารสนเทศ e-flat belly</a></li>
       <li><a href="criteria/index/1">องค์กรต้นแบบไร้พุง</a></li>
      <li class="active">รายงานตามตัวชี้วัด  กพร.</li>
    </ol>
</div>

<div id="search" class="form-search">
	<form action="criteria/report" class="form-search">
		<span>องค์กร</span>
		<?php echo form_dropdown('user_id',get_option('id','agency_name','f_users'),@$_GET['user_id'],'class="search-query"','เลือกองค์กร'); ?>
		<span>ปีงบประมาณ </span>
		<?php echo form_dropdown('year',get_year_option("2557"),@$_GET['year'],'class="search-query"',''); ?>
		<button name="btn_search" class="btn btn-success">ค้นหา</button>
	</form>
</div>

<?php if(!empty($_GET)){ ?>
<div class="right" style="margin-bottom: 10px;">
	<a href="criteria/report/export<?=GetCurrentUrlGetParameter();?>" class="btn btn-default"><i class="fa fa-arrow-down"></i>ดาวน์โหลด excel</a>
	<a href="criteria/report/preview<?=GetCurrentUrlGetParameter();?>" class="btn btn-default" target="_blank">พิมพ์ข้อมูล</a>
</div>
<div id="span7">
	<table class="table table-bordered table-condensed table-striped">
	<thead>
	<tr>
		<th>ลำดับ</th>
		<th>ศูนย์อนามัย</th>
		<th>จังหวัด</th>
		<th>ชื่อองค์กรต้นแบบ</th>
		<th>จำนวนประชากรทั้งหมด(คน)</th>
		<th>จำนวนวัดรอบเอว(คน)</th>
		<th>จำนวนวัดรอบเอวปกติ(คน)</th>
		<th>ร้อยละ 60 วัดรอบเอวปกติ(%)</th>
		<th>เกณฑ์ <br/>1</th>
		<th>เกณฑ์ <br/>2</th>
		<th>เกณฑ์ <br/>3</th>
		<th>เกณฑ์ <br/>4</th>
		<th>เกณฑ์ <br/>5</th>
		<th>เกณฑ์ <br/>6</th>
		<th>เกณฑ์ <br/>7</th>
		<th>เกณฑ์ <br/>7.1</th>
		<th>เกณฑ์ <br/>7.2</th>
		<th>เกณฑ์ <br/>7.2.1</th>
		<th>เกณฑ์ <br/>7.2.2</th>
		<th>เกณฑ์ <br/>7.3</th>
		<th>เกณฑ์ <br/>8</th>
		<th>เกณฑ์ <br/>9</th>
		<th>เกณฑ์ <br/>10</th>
	</tr>
	</thead>
	<tbody>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
	</tbody>
	</table>
</div>
</div>
<?php } ?>