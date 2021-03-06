<div class="titleGroup2">รายงานภาวะโรคอ้วนลงพุงของศูนย์การเรียนรู้องค์กรต้นแบบไร้พุง (Ht/2)</div>
<div id="Breadcrumbs">
<ol id="path-breadcrumb">
  <li><a href="home">หน้าแรก</a></li>
   <li><a href="f_weight/ebelly">ระบบสารสนเทส e-flat belly</a></li>
  <li><a href="f_weight/index/1">ระบบเฝ้าระวังโรคอ้วนลงพุง</a></li>
  <li class="active">รายงานภาวะโรคอ้วนลงพุงของศูนย์การเรียนรู้องค์กรต้นแบบไร้พุง (Ht/2)</li>
</ol>
</div>
<div class="contentBlank">
<div id="search" class="form-search">
	<form action="report/index/height" class="form-search">
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
		<span>ครั้งที่</span>
		<?php  $arr = array("1"=>'1',"2"=>'2');
			echo form_dropdown('time',$arr,@$_GET['time'],'class="search-query input-mini"');
		 ?>
		<button name="btn_search" class="btn btn-success">ค้นหา</button>
	</form>
</div>
<?php
$ab_m1 =0 ;$ab_f1=0;$sum_per1=0;$ab_m2 =0 ;$ab_f2=0;$sum_per2=0;

if(!empty($_GET)){ ?>
<div class="right" style="margin-bottom: 10px;">
	<a href="report/index/height/export<?=GetCurrentUrlGetParameter();?>"  class="btn btn-default"><i class="fa fa-arrow-down"></i>ดาวน์โหลด excel</a>
	<a href="report/index/height/preview<?=GetCurrentUrlGetParameter();?>" class="btn btn-default" target="_blank">พิมพ์ข้อมูล</a>
</div>
<div class="clearfix"></div>

<div id="Rform">

	<h1>โครงการ ศูนย์การเรียนรู้องค์กรต้นแบบไร้พุง</h1>
	<h3>รายงานภาวะโรคอ้วนลงพุงของศูนย์การเรียนรู้องค์กรต้นแบบไร้พุง (Ht/2)</h3>
	<div style="text-align: center">
	<label class="caption">หน่วยงาน</label><?php echo $user_name ?><label class="caption">ครั้งที่</label><?php echo $time; ?>
	</div>
</div>
<!--<div class="span20">-->
<table class="table table-bordered table-condensed table-striped">
<thead>
<tr class="success">
	<th rowspan="3" style="vertical-align: middle">ความสูงหารสอง</th>
</tr>
<tr class="success">
	<th colspan="2">ชาย</th>
	<th colspan="2">หญิง</th>
	<th colspan="2">รวม</th>
</tr>
<tr class="success">
	<th>จำนวน</th>
	<th>%ชาย</th>
	<th>จำนวน</th>
	<th>%หญิง</th>
	<th>จำนวน</th>
	<th>%รวม</th>
</tr>
</thead>
<tbody>
	<tr>
		<td class="title">ปกติ (รอบเอวน้อยกว่า ht/2)</td>
		<td><?php $n=(empty($normal[1])) ? 0 : $normal[1]; echo number_format($n);$male[1]=$n; ?></td>
		<td><?php $ab_m1 = ($n==0 || $total[1][$time]==0) ? 0 :number_format(($n*100)/$total[1][$time],1);echo number_format($ab_m1,1)."%"; ?></td>
		<td><?php $n= (empty($normal[2])) ? 0 : $normal[2];echo number_format($n);$female[1]=$n?></td>
		<td><?php $ab_f1 = ($n==0 || $total[2][$time]==0) ? 0 :number_format(($n*100)/$total[2][$time],1);echo number_format($ab_f1,1)."%" ?></td>
		<td><?php $sum = $male[1] + $female[1]; echo number_format($sum);$s[1]=$sum ?></td>
		<td><?php $total1 = (empty($normal))  ? 0 : array_sum($normal);
				  $total2 = (empty($abnormal)) ? 0 : array_sum($abnormal);
				  $user_total = $total1 + $total2;
				  $sum_per1 = ($sum==0) ? 0 : number_format(($sum*100)/$user_total,1);echo number_format($sum_per1,1)."%";
		?></td>
	</tr>
	<tr>
		<td class="title">อ้วน (รอบเอวมากกว่า ht/2)</td>
		<td><?php $n =(empty($abnormal[1])) ? 0 : $abnormal[1];echo number_format($n);$male[2]=$n; ?></td>
		<td><?php $ab_m2 = ($n==0 || $total[1][$time]==0) ? 0 :number_format(($n*100)/$total[1][$time],1);echo number_format($ab_m2,1)."%"; ?></td>
		<td><?php $n =(empty($abnormal[2])) ? 0 : $abnormal[2];echo number_format($n);$female[2]=$n; ?></td>
		<td><?php $ab_f2 = ($n==0 || $total[2][$time]==0) ? 0 :number_format(($n*100)/$total[2][$time],1);echo number_format($ab_f2,1)."%" ?></td>
		<td><?php $sum = $male[2] + $female[2]; echo number_format($sum);$s[2]=$sum ?></td>
		<td><?php $sum_per2 = ($sum==0) ? 0 : number_format(($sum*100)/$user_total,1);
				  echo number_format($sum_per2,1)."%"; ?></td>
	</tr>
	<tr>
		<td>รวม</td>
		<td><?php echo number_format(array_sum($male)); ?></td>
		<td><?php echo number_format($ab_m1+ $ab_m2,1) ?>%</td>
		<td><?php echo number_format(array_sum($female)); ?></td>
		<td><?php echo number_format($ab_f1+ $ab_f2,1) ?>%</td>
		<td><?php echo number_format(array_sum($s))?></td>
		<td><?php echo number_format($sum_per1 + $sum_per2,1) ?>%</td>
	</tr>
</tbody>
</table>
<div class="aligncenter"><button type="button" name="show" class="btn btn-info btn-large " id="btn-show" >เปิด - ปิด กราฟ</button></div>
<div id="container_grp"  style="height:500px;margin-left:20px;margin-top:10px;margin-bottom: 20px;" class="hide"></div>
<?php } ?>
</div>

<script type="text/javascript">
$(document).ready(function(){
	$('select[name=province_id]').change(function(){
		if( $(this).val().length>0){
			$.ajax({
				url:'setting/getAgency',
				data:'province_id='+$(this).val(),
				success:function(data){
					$('#agency').html(data);
				}
			});
		}else{
			$('#agency').html('<select name="user_id" class="search-query"><option value="">เลือกองค์กร</option></select>');
		}
	});
	$('#btn-show').click(function(){
			$('#container_grp').toggleClass("hide show");
	});
    $('#container_grp').highcharts({
        chart: {
            type: 'column',
            marginBottom: 120,
            marginLeft: 100,
            width: 1000
        },
        title: {
            text: 'รายงานภาวะโรคอ้วนลงพุงของศูนย์การเรียนรู้องค์กรต้นแบบไร้พุง (Ht/2)'
        },
        subtitle: {
            text: 'หน่วยงาน <?php echo $user_name ?> ครั้งที่ <?php echo $time; ?>'
        },
        xAxis: {
            categories: ['ชาย', 'หญิง','รวม'],
            title: {
                text: 'ความสูงหารสอง',
                offset: '30'
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'ร้อยละ',
                offset: '30'
            }
        },
        tooltip: {
            valueSuffix: ' %'
        },

        legend: {
            align: 'center',
            x:50, // = marginLeft - default spacingLeft
            y:-30,
            symbolHeight:30,
            borderColor: '#FFFFFF',
            itemWidth: 70
        },
        credits: {
            enabled: false
        },
        plotOptions: {
            series: {
                column: 'percent',
                 dataLabels: {
                    enabled: true,
                    x: -10,
                    y: -15,
                     style: {
                        color: '#626262'
                    }
                }
            }


        },
        series: [{
            name: 'ปกติ ',
            data: [<?php echo $ab_m1.",".$ab_f1.",".$sum_per1 ?>],
            color:'#BDFBC5'
        }, {
            name: 'อ้วน',
            data: [<?php echo $ab_m2.",".$ab_f2.",".$sum_per2 ?>],
            color:'#FFA29B'
        }]
    });
});
</script>

