<h1>รายงานสรุปผลการประเมินรอบเอวในศูนย์การเรียนรู้องค์กรต้นแบบไร้พุง</h1>
<div id="search" class="form-search">
	<form action="report/index/overview" class="form-search">
		<span>ศูนย์อนามัย</span>
		<?php echo form_dropdown('hpc',get_option('id','area_no','f_area_detail where area_id=2 group by area_no'),@$_GEt['hpc'],'class="search-query"','เลือกศูนย์อนามัย'); ?>
		<span>ปีงบประมาณ </span>
		<?php echo form_dropdown('year',get_year_option("2556"),@$_GET['year'],'class="search-query"',''); ?>
		<button name="btn_search" class="btn btn-success">ค้นหา</button>
	</form>
</div>
<div class="right" style="margin-bottom: 10px;">
	<a href="#" class="btn btn-default">พิมพ์รายงาน</a>
	<a href="#" class="btn btn-default">ดาวน์โหลด excel</a>
</div>
<div class="clearfix"></div>
<?php if(!empty($_GET)){ ?>
<div id="Rform">

	<h1>โครงกร ศูนย์การเรียนรู้องค์กรต้นแบบไร้พุง</h1>
	<h3>รายงานสรุปผลการประเมินรอบเอวในศูนย์การเรียนรู้องค์กรต้นแบบไร้พุง</h3>
	<div style="text-align: center">
	<label class="caption">ปีงบประมาณ</label> ..............
	<label class="caption">ครั้งที่ </label> ..............
	</div>
</div>
<!--<div class="span20">-->
<table class="table table-bordered table-condensed table-striped">
<tr class="success">
	<th rowspan="3">ที่</th>
	<th rowspan="3" rowspan="2">ศูนย์อนามัยที่</th>
	<th colspan="7" rowspan="2">จำนวนองค์กรเข้าร่วม</th>
	<th colspan="18">จำนวนประชากรวัดรอบเอว</th>
</tr>
<tr>
	<th colspan="7">ครั้งที่ 1</th>
	<th colspan="7">ครั้งที่ 2</th>
	<th colspan="4">เปรียบเทียบครั้งที่ 1 - 2 </th>
</tr>
<tr>
	<th>อปท.</th>
	<th>รร</th>
	<th>เอกชน</th>
	<th>ภาครัฐ</th>
	<th>สธ.</th>
	<th>ชุมชน</th>
	<th>รวม</th>
	<th>ทั้งหมด</th>
	<th>วัดเอว</th>
	<th>%เข้าร่วม</th>
	<th>อ้วน</th>
	<th>%อ้วน</th>
	<th>ค่าเฉลี่ย</th>
	<th>SD</th>
	<th>ทั้งหมด</th>
	<th>วัดเอว</th>
	<th>%เข้าร่วม</th>
	<th>อ้วน</th>
	<th>%อ้วน</th>
	<th>ค่าเฉลี่ย</th>
	<th>SD</th>
	<th>ค่าเฉลี่ย</th>
	<th>%อ้วน</th>
	<th>ค่าเฉลี่ยน้ำหนัก</th>
	<th>%น้ำหนัก</th>
</tr>
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
	<td></td>
	<td></td>
	<td></td>
	<td></td>
</tr>
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
	<td></td>
	<td></td>
	<td></td>
	<td></td>
</tr>
<tr><td colspan="2">รวมทั้งสิ้น ศูนย์ 1+12+กทม.</td>
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
	<td></td>
	<td></td>

</tr>
</table>
<p class="text-right">ออกรายงาน ณ วันที่...................</p>
<!--></div>-->
<?php  } //$_GET ?>




