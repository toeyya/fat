<div class="titleGroup2">รายงานภาวะโรคอ้วนลงพุงของศูนย์การเรียนรู้องค์กรต้นแบบไร้พุง (BMI)</div>
<div id="Breadcrumbs">
<ol id="path-breadcrumb">
  <li><a href="home">หน้าแรก</a></li>
  <li><a href="">ระบบเฝ้าระวังโรคอ้วนลงพุง</a></li>
  <li class="active">รายงานภาวะโรคอ้วนลงพุงของศูนย์การเรียนรู้องค์กรต้นแบบไร้พุง (BMI)</li>
</ol>
</div>
<div class="contentBlank">
<div id="search" class="form-search">
	<form action="report/index/bmi" class="form-search">
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
	<a href="report/index/bmi/export<?=GetCurrentUrlGetParameter();?>"  class="btn btn-default"><i class="fa fa-arrow-down"></i>ดาวน์โหลด excel</a>
	<a href="report/index/bmi/preview<?=GetCurrentUrlGetParameter();?>" class="btn btn-default" target="_blank">พิมพ์ข้อมูล</a>
</div>
<div class="clearfix"></div>

<div id="Rform">

	<h1>โครงการ ศูนย์การเรียนรู้องค์กรต้นแบบไร้พุง</h1>
	<h3>รายงานภาวะโรคอ้วนลงพุงของศูนย์การเรียนรู้องค์กรต้นแบบไร้พุง ( BMI)</h3>
	<div style="text-align: center">
	<label class="caption">หน่วยงาน</label><?php echo $user_name ?><label class="caption">ครั้งที่</label><?php echo $time; ?>
	</div>
</div>
<table class="table table-bordered table-condensed table-striped">
<thead>
<tr class="success">
	<th rowspan="3" style="vertical-align: middle">วัดรอบเอว</th>
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
		<td class="title">ผอม ( BMI &lt; 18.50)</td>
		<td><?php $n =(empty($waist[1]['ผอม'])) ? 0 : $waist[1]['ผอม']; echo number_format($n); $male1[1] = $n; ?></td>
		<td><?php $percent1[1] = ($n==0 || $total[1][$time]==0) ? 0 :number_format(($n*100)/$total[1][$time],1);echo number_format($percent1[1],1)."%"; ?></td>
		<td><?php $n =(empty($waist[2]['ผอม'])) ? 0 : $waist[2]['ผอม']; echo number_format($n); $female1[1] = $n; ?></td>
		<td><?php $percent1[2] = ($n==0 || $total[2][$time]==0) ? 0 :number_format(($n*100)/$total[2][$time],1);echo number_format($percent1[2],1)."%"; ?></td>
		<td><?php $sum_horizontal[1] = $male1[1] + $female1[1];echo number_format($male1[1] + $female1[1]) ?></td>
		<td><?php  $waist1 = (empty($waist[1])) ? 0 : array_sum($waist[1]);
				   $waist2 = (empty($waist[2])) ? 0 : array_sum($waist[2]);
			 	   $user_total = $waist1 + $waist2;
			 	   $sum_percent[1] = ($sum_horizontal[1]==0) ? 0: number_format(($sum_horizontal[1]*100)/$user_total,1);echo number_format($sum_percent[1],1)."%";
			?></td>
	</tr>
	<tr>
		<td class="title">ปกติ (18.51 &le; BMI &le; 22.99)</td>
		<td><?php $n =(empty($waist[1]['ปกติ'])) ? 0 : $waist[1]['ปกติ']; echo number_format($n); $male1[2] = $n; ?></td>
		<td><?php $percent2[1] = ($n==0 || $total[1][$time]==0) ? 0 :number_format(($n*100)/$total[1][$time],1);echo number_format($percent2[1],1)."%"; ?></td>
		<td><?php $n =(empty($waist[2]['ปกติ'])) ? 0 : $waist[2]['ปกติ']; echo number_format($n); $female1[2] = $n; ?></td>
		<td><?php $percent2[2] = ($n==0 || $total[2][$time]==0) ? 0 :number_format(($n*100)/$total[2][$time],1);echo number_format($percent2[2],1)."%"; ?></td>
		<td><?php $sum_horizontal[2] = $male1[2] + $female1[2];echo number_format($male1[2] + $female1[2]) ?></td>
		<td><?php $sum_percent[2] = ($sum_horizontal[2]==0) ? 0: number_format(($sum_horizontal[2]*100)/$user_total,1);echo number_format($sum_percent[2],1)."%"; ?></td>
	</tr>
	<tr>
		<td class="title">ท้วม (23.00 &le; BMI &le; 24.99)</td>
		<td><?php $n =(empty($waist[1]['ท้วม'])) ? 0 : $waist[1]['ท้วม']; echo number_format($n); $male1[3] = $n; ?></td>
		<td><?php $percent3[1] = ($n==0 || $total[1][$time]==0) ? 0 :number_format(($n*100)/$total[1][$time],1);echo number_format($percent3[1],1)."%"; ?></td>
		<td><?php $n =(empty($waist[2]['ท้วม'])) ? 0 : $waist[2]['ท้วม']; echo number_format($n); $female1[3] = $n; ?></td>
		<td><?php $percent3[2] = ($n==0 || $total[2][$time]==0) ? 0 :number_format(($n*100)/$total[2][$time],1);echo number_format($percent3[2],1)."%"; ?></td>
		<td><?php $sum_horizontal[3] = $male1[3] + $female1[3];echo number_format($male1[3] + $female1[3]) ?></td>
		<td><?php $sum_percent[3] = ($sum_horizontal[3]==0) ? 0: number_format(($sum_horizontal[3]*100)/$user_total,1);echo number_format($sum_percent[3],1)."%"; ?></td>
	</tr>
	<tr>
		<td class="title">อ้วน ( 25.0 &le; BMI &le; 29.9 )</td>
		<td><?php $n =(empty($waist[1]['อ้วน'])) ? 0 : $waist[1]['อ้วน']; echo number_format($n); $male1[4] = $n; ?></td>
		<td><?php $percent4[1] = ($n==0 || $total[1][$time]==0) ? 0 :number_format(($n*100)/$total[1][$time],1);echo number_format($percent4[1],1)."%"; ?></td>
		<td><?php $n =(empty($waist[2]['อ้วน'])) ? 0 : $waist[2]['อ้วน']; echo number_format($n); $female1[4] = $n; ?></td>
		<td><?php $percent4[2] = ($n==0 || $total[2][$time]==0) ? 0 :number_format(($n*100)/$total[2][$time],1);echo number_format($percent4[2],1)."%"; ?></td>
		<td><?php $sum_horizontal[4] = $male1[4] + $female1[4];echo number_format($male1[4] + $female1[4]) ?></td>
		<td><?php $sum_percent[4] = ($sum_horizontal[4]==0) ? 0: number_format(($sum_horizontal[4]*100)/$user_total,1);echo number_format($sum_percent[4],1)."%"; ?></td>
	</tr>
	<tr>
		<td class="title">อ้วนมาก ( BMI &ge; 30.0)</td>
		<td><?php $n =(empty($waist[1]['อ้วนมาก'])) ? 0 : $waist[1]['อ้วนมาก']; echo number_format($n); $male1[5] = $n; ?></td>
		<td><?php $percent5[1] = ($n==0 || $total[1][$time]==0) ? 0 :number_format(($n*100)/$total[1][$time],1);echo number_format($percent5[1],1)."%"; ?></td>
		<td><?php $n =(empty($waist[2]['อ้วนมาก'])) ? 0 : $waist[2]['อ้วนมาก']; echo number_format($n); $female1[5] = $n; ?></td>
	    <td><?php $percent5[2] = ($n==0 || $total[2][$time]==0) ? 0 :number_format(($n*100)/$total[2][$time],1);echo number_format($percent5[2],1)."%"; ?></td>
		<td><?php $sum_horizontal[5] = $male1[5] + $female1[5]; echo number_format($male1[5] + $female1[5]) ?></td>
		<td><?php $sum_percent[5] = ($sum_horizontal[5]==0) ? 0: number_format(($sum_horizontal[5]*100)/$user_total,1);echo number_format($sum_percent[5],1)."%"; ?></td>
	</tr>
	<tr>
		<td>รวม</td>
		<td><?php echo number_format(array_sum($male1)) ?></td>
		<td><?php echo number_format($percent1[1]+$percent2[1]+$percent3[1]+$percent4[1]+$percent5[1],1)?>%</td>
		<td><?php echo number_format(array_sum($female1)) ?></td>
		<td><?php echo number_format($percent1[2]+$percent2[2]+$percent3[2]+$percent4[2]+$percent5[2],1)?>%</td>
		<td><?php echo number_format(array_sum($sum_horizontal));?></td>
		<td><?php echo number_format(array_sum($sum_percent),1)?>%</td>
	</tr>
</tbody>
</table>
<div class="aligncenter"><button type="button" name="show" class="btn btn-info btn-large " id="btn-show" >เปิด - ปิด กราฟ</button></div>
<div id="container_grp"  style="height:500px;margin-left:20px;margin-top:10px;margin-bottom: 20px;" class="hide"></div>
</div>
<script type="text/javascript">
$(function () {
	$('#btn-show').click(function(){
			$('#container_grp').toggleClass("hide show");
	});
    $('#container_grp').highcharts({
        chart: {
            type: 'column',
            marginBottom: 120,
            marginLeft: 80,
            width: 1000
        },
        title: {
            text: 'รายงานภาวะโรคอ้วนลงพุงของศูนย์การเรียนรู้องค์กรต้นแบบไร้พุง (BMI)'
        },
        subtitle: {
            text: 'หน่วยงาน <?php echo $user_name ?> ครั้งที่ <?php echo $time; ?>'

        },
        xAxis: {
            categories: ['ชาย', 'หญิง','รวม'],
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
            name: 'ผอม ',
            data: [<?php echo implode(",",$percent1); ?>,<?php echo $sum_percent[1] ?>],
            color:'#F8EA82'

        }, {
            name: 'ปกติ',
            data: [<?php echo implode(",",$percent2); ?>,<?php echo $sum_percent[2] ?>],
             color:'#BDFBC5'
        }, {
            name: 'ท้วม',
            data: [<?php echo implode(",",$percent3); ?>,<?php echo $sum_percent[3] ?>],
             color:'#FBBE99'
        },{
            name: 'อ้วน',
            data: [<?php echo implode(",",$percent4); ?>,<?php echo $sum_percent[4] ?>],
             color:'#FFA29B'
        },{
            name: 'อ้วนมาก',
            data: [<?php echo implode(",",$percent5); ?>,<?php echo $sum_percent[5] ?>],
            color:'#E89CFB'
        }]
    });
});

</script>
<?php } ?>
