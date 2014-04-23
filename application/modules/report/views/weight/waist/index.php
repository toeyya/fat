<div class="titleGroup2">รายงานภาวะโรคอ้วนลงพุงของศูนย์การเรียนรู้องค์กรต้นแบบไร้พุง (รอบเอว)</div>
<div id="Breadcrumbs">
<ol id="path-breadcrumb">
  <li><a href="home">หน้าแรก</a></li>
  <li><a href="">ระบบเฝ้าระวังโรคอ้วนลงพุง</a></li>
  <li class="active">รายงานภาวะโรคอ้วนลงพุงของศูนย์การเรียนรู้องค์กรต้นแบบไร้พุง (รอบเอว)</li>
</ol>
</div>
<div class="contentBlank">
<div id="search" class="form-search">
	<form action="report/index/waist" class="form-search">
		<span>ปีงบประมาณ </span>
		<?php echo form_dropdown('year',get_year_option("2556"),@$_GET['year'],'class="search-query"',''); ?>
		<span>องค์กร</span>
		<?php echo form_dropdown('user_id',get_option('id','agency_name','f_users'),@$_GET['user_id'],'class="search-query"','เลือกองค์กร'); ?>
		<span>ครั้งที่</span>
		<?php  $arr = array("1"=>'1',"2"=>'2');
			echo form_dropdown('time',$arr,@$_GET['time'],'class="search-query input-mini"');
		 ?>
		<button name="btn_search" class="btn btn-success">ค้นหา</button>
	</form>
</div>
<?php if(!empty($_GET)){ ?>
<div class="right" style="margin-bottom: 10px;">
	<a href="report/index/waist/export<?=GetCurrentUrlGetParameter();?>"  class="btn btn-default"><i class="fa fa-arrow-down"></i>ดาวน์โหลด excel</a>
	<a href="report/index/waist/preview<?=GetCurrentUrlGetParameter();?>" class="btn btn-default" target="_blank">พิมพ์ข้อมูล</a>
</div>
<div class="clearfix"></div>

<div id="Rform">

	<h1>โครงการ ศูนย์การเรียนรู้องค์กรต้นแบบไร้พุง</h1>
	<h3>รายงานภาวะโรคอ้วนลงพุงของศูนย์การเรียนรู้องค์กรต้นแบบไร้พุง (รอบเอว)</h3>
	<div style="text-align: center">
	<label class="caption">หน่วยงาน</label><?php echo $user_name ?><label class="caption">ครั้งที่</label><?php echo $time; ?>
	</div>
</div>
<?php if($time=="2"){  ?>
<table class="table table-bordered table-condensed table-striped">
<thead>
<tr class="success">
	<th colspan="3">จำนวนสมาชิกองค์กร</th>
</tr>
<tr class="success">
	<th>ทั้งหมด</th>
	<th>เข้าร่วมวัดเอว</th>
	<th>ร้อยละ</th>
</tr>
</thead>
<tbody>
<tr>
	<td><?php echo number_format($total); ?></td>
	<td><?php echo (empty($cnt)) ? 0 :number_format($cnt[1]); ?></td>
	<td><?php echo (empty($cnt) && empty($total)) ? 0:number_format(($cnt[1]*100)/$total,1) ?></td>
</tr>
</tbody>
</table>
<br/>
<table class="table table-bordered table-condensed table-striped">
<thead>
<tr class="success">
	<th colspan="6">น้ำหนัก (กิโลกรัม)</th>
	<th colspan="6">รอบเอว (เซนติเมตร)</th>
</tr>
<tr>
	<th colspan="2">ครั้งที่ 1</th>
	<th colspan="2">ครั้งที่ 2</th>
	<th colspan="2">เปลี่ยนแปลง</th>
	<th colspan="2">ครั้งที่ 1</th>
	<th colspan="2">ครั้งที่ 2</th>
	<th colspan="2">เปลี่ยนแปลง</th>
</tr>
<tr>
	<th>ผลรวม</th>
	<th>ค่าเฉลี่ย</th>
	<th>ผลรวม</th>
	<th>ค่าเฉลี่ย</th>
	<th>ผลรวม</th>
	<th>ค่าเฉลี่ย</th>
	<th>ผลรวม</th>
	<th>ค่าเฉลี่ย</th>
	<th>ผลรวม</th>
	<th>ค่าเฉลี่ย</th>
	<th>ผลรวม</th>
	<th>ค่าเฉลี่ย</th>
</tr>
</thead>
<tbody>
<tr>
	<td><?php echo (empty($sum_weight)) ? 0: number_format($sum_weight[1]); ?></td>
	<td><?php echo $avg_weight1 = (empty($avg_weight)) ? 0: number_format($avg_weight[1]) ?></td>
	<td><?php echo (empty($sum_weight)) ? 0: number_format($sum_weight[2]) ?></td>
	<td><?php echo $avg_weight2 = (empty($avg_weight)) ? 0: number_format($avg_weight[2]) ?></td>
	<td><?php echo (empty($sum_weight[1]) || empty($sum_weight[2])) ? 0 :number_format(abs($sum_weight[1]-$sum_weight[2])); ?></td>
	<td><?php echo $diff1 = (empty($avg_weight[1]) || empty($avg_weight[2])) ? 0 :number_format(abs($avg_weight[1]-$avg_weight[2])); ?></td>
	<td><?php echo (empty($sum_waist)) ? 0 :number_format($sum_waist[1]) ?></td>
	<td><?php echo $avg_waist1 = (empty($avg_waist)) ? 0 :number_format($avg_waist[1]) ?></td>
	<td><?php echo (empty($sum_waist)) ? 0 :number_format($sum_waist[2]) ?></td>
	<td><?php echo $avg_waist2 = (empty($avg_waist)) ? 0 :number_format($avg_waist[2]) ?></td>
	<td><?php echo (empty($sum_waist[1]) || empty($sum_waist[2])) ? 0 : number_format(abs($sum_waist[1]-$sum_waist[2])); ?></td>
	<td><?php echo $diff2 = (empty($avg_waist[1]) || empty($avg_waist[2])) ? 0 : number_format(abs($avg_waist[1]-$avg_waist[2]));
		$per_weight = (empty($diff1) && empty($avg_weight1)) ? 0 :number_format(($diff1*100)/$avg_weight1);
		$per_waist  = (empty($diff2) && empty($avg_waist1)) ? 0 :number_format(($diff2*100/$avg_waist1));
		$arr = array($avg_weight1, $avg_weight2,$per_weight,$avg_waist1,$avg_waist2,$per_waist);?></td>
</tr>
</tbody>
</table>
<?php }else if($time=="1"){ ?>
<table class="table table-bordered table-condensed table-striped">
<thead>
<tr class="success">
	<th colspan="3">จำนวนสมาชิกองค์กร</th>
	<th colspan="2">น้ำหนัก</th>
	<th colspan="2">รอบเอว</th>
</tr>
<tr>
	<th>ทั้งหมด</th>
	<th>เข้าร่วมวัดเอว</th>
	<th>ร้อยละ</th>
	<th>ผลรวมทั้งหมด</th>
	<th>ค่าเฉลี่ย</th>
	<th>ผลรวมทั้งหมด</th>
	<th>ค่าเฉลี่ย</th>
</tr>
</thead>
<tbody>
<tr>
	<td><?php echo number_format($total); ?></td>
	<td><?php echo (empty($cnt[1])) ? 0 :number_format($cnt[1]); ?></td>
	<td><?php echo (!empty($cnt) &&  $cnt[1]!=0 && $total!=0 ) ? number_format(($cnt[1]*100)/$total,1): 0 ?></td>
	<td><?php echo (empty($sum_weight[1])) ? 0 :number_format($sum_weight[1]) ?></td>
	<td><?php echo (empty($avg_weight[1])) ? 0 :number_format($avg_weight[1]) ?></td>
	<td><?php echo (empty($sum_waist[1])) ? 0 :number_format($sum_waist[1]); ?></td>
	<td><?php echo (empty($avg_waist[1])) ? 0 :number_format($avg_waist[1]); ?></td>
</tr>
</tbody>

<?php } ?>
<br/>
<table class="table table-bordered table-condensed table-striped">
<thead>
<tr class="success">
	<th colspan="7">ภาวะอ้วนลงพุง</th>
</tr>
<tr class="success">
	<th rowspan="2">รอบเอว</th>
	<th colspan="2">ชาย</th>
	<th colspan="2">หญิง</th>
	<th colspan="2">รวม</th>
</tr>
<tr>
	<th>จำวน</th>
	<th>%ชาย</th>
	<th>จำนวน</th>
	<th>%หญิง</th>
	<th>จำนวน</th>
	<th>%รวม</th>
</tr>
</thead>
<tbody>
<tr>
	<td>ปกติ</td>
	<td><?php echo $normal1 = (empty($fat['ปกติ'][1][1])) ? 0 : number_format($fat['ปกติ'][1][1]) ?></td>
	<td><?php $normal=  (empty($fat['อ้วนลงพุง'][1][1])) ? 0 : $fat['อ้วนลงพุง'][1][1];
			  $normal = $normal1 + $normal;
			  echo $n_percent[1]=($normal==0 && $normal1==0) ? 0 :number_format(($normal1*100)/$normal,1);	?></td>
	<td><?php echo $normal2 = (empty($fat['ปกติ'][2][1])) ? 0 : number_format($fat['ปกติ'][2][1]) ?></td>
	<td><?php $normal=  (empty($fat['อ้วนลงพุง'][2][1])) ? 0 : $fat['อ้วนลงพุง'][2][1];
			  $normal = $normal2 + $normal;
			  echo $n_percent[2]= ($normal==0 && $normal2==0) ? 0 :number_format(($normal2*100)/$normal,1);	?></td>
	<td><?php echo number_format($normal1+$normal2);$sum[1] = $normal1+$normal2 ?></td>
	<td><?php
	$abnormal1 = (empty($fat['อ้วนลงพุง'][1][1])) ? 0 : number_format($fat['อ้วนลงพุง'][1][1]);
	$abnormal2 = (empty($fat['อ้วนลงพุง'][2][1])) ? 0 :number_format($fat['อ้วนลงพุง'][2][1]);
	$normal = $normal1 + $normal2 + $abnormal1 + $abnormal2;
	echo $n_percent[3] = ($sum[1]==0 || $normal==0) ? 0 :number_format(($sum[1]*100)/$normal,1) ?></td>
</tr>
<tr>
	<td>อ้วนลงพุง</td>
	<td><?php echo $abnormal1 = (empty($fat['อ้วนลงพุง'][1][1])) ? 0 : number_format($fat['อ้วนลงพุง'][1][1]) ?></td>
	<td><?php $normal=  (empty($fat['ปกติ'][1][1])) ? 0 : $fat['ปกติ'][1][1];
			  $normal = $normal1 + $normal;
			  echo $ab_percent[1] =($normal==0 || $abnormal1==0) ? 0 :number_format(($abnormal1*100)/$normal,1);	?></td>
	<td><?php echo $abnormal2 = (empty($fat['อ้วนลงพุง'][2][1])) ? 0 :number_format($fat['อ้วนลงพุง'][2][1]) ?></td>
	<td><?php $normal=  (empty($fat['ปกติ'][2][1])) ? 0 : $fat['ปกติ'][2][1];
			  $normal = $abnormal2 + $normal;
			  echo $ab_percent[2] = ($normal==0 || $abnormal2==0) ? 0 :number_format(($abnormal2*100)/$normal,1);	?></td>
	<td><?php echo number_format($abnormal1+$abnormal2);$sum[2]=$abnormal1+$abnormal2 ?></td>
	<td><?php
	$normal = $normal1 + $normal2 + $abnormal1 + $abnormal2;
	echo $ab_percent[3] =($sum[2]==0 || $normal==0) ? 0 :number_format(($sum[2]*100)/$normal,1) ?></td>
</tr>
<tr>
	<td>รวม</td>
	<?php $sum = $normal1+$normal2+$abnormal1+$abnormal2 ?>
	<td><?php $sum1=$normal1+$abnormal1;echo number_format($sum1); ?></td>
	<td><?php echo number_format($n_percent[1]+$ab_percent[1],1) ?></td>
	<td><?php echo number_format($normal2+$abnormal2) ?></td>
	<td><?php echo number_format($n_percent[2]+$ab_percent[2],1) ?></td>
	<td><?php echo number_format($sum)?></td>
	<td><?php echo (empty($sum)) ? '0.0' :number_format(($sum*100)/$sum,1) ?></td>
</tr>
</tbody>
</table>

<div class="aligncenter"><button type="button" name="show" class="btn btn-info btn-large " id="btn-show" >เปิด - ปิด กราฟ</button></div>
<div id="container_grp"  style="height:500px;margin-left:20px;margin-top:10px;margin-bottom: 20px;" class="hide"></div>
<div id="container_diff"  style="height:500px;margin-left:20px;margin-top:10px;margin-bottom: 20px;" class="hide"></div>
</div>
<script type="text/javascript">
$(function () {
	$('#btn-show').click(function(){
			$('#container_grp').toggleClass("hide show");
			<?php if($time=="2"): ?>
			$('#container_diff').toggleClass("hide show");
			<?php endif; ?>
	});
    $('#container_grp').highcharts({
        chart: {
            type: 'column',
            marginBottom: 120,
            marginLeft: 80,
            width: 1000
        },
        title: {
            text: 'รายงานภาวะโรคอ้วนลงพุงของศูนย์การเรียนรู้องค์กรต้นแบบไร้พุง (รอบเอว)'
        },
        subtitle: {
            text: 'หน่วยงาน <?php echo $user_name ?> ครั้งที่ <?php echo $time; ?>'

        },
        xAxis: {
            categories: ['%ชาย', '%หญิง','%รวม'],
            title: {
                text: 'วัดรอบเอว',
                offset: '30'
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'ร้อยละ',
                offset: '30'
            },

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
            name: 'ปกติ',
            data: [<?php echo implode(",",$n_percent); ?>],
            color:'#BDFBC5'
        }, {
            name: 'อ้วนลงพุง',
            data: [<?php echo implode(",",$ab_percent); ?>],
            color:'#FFA29B'
        }]
    });
<?php if($time==2): ?>
 $('#container_diff').highcharts({
        chart: {
            type: 'column',
            marginBottom: 120,
            marginLeft: 80,
            width: 1000
        },
        title: {
            text: ''
        },
        subtitle: {
            text: ''

        },
        xAxis: {
            categories: ['น้ำหนักเฉลี่ย<br/>ครั้งที่ 1', 'น้ำหนักเฉลี่ย<br/>ครั้งที่ 1','%เปลี่ยนแปลง','รอบเอวเฉลี่ย<br/>ครั้งที่ 1', 'รอบเอวเฉลี่ย<br/>ครั้งที่ 2','%เปลี่ยนแปลง'],
            title: {
                text: '',
                offset: '30'
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: '',
                offset: '30'
            },

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
            name: '',
            data: [<?php echo implode(",",$arr); ?>]
        }]
    });

<?php endif; ?>

});

</script>
<?php } ?>
