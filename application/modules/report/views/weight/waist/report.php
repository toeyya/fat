<div class="contentBlank">
<?php if(!empty($_GET)){ ?>
<div id="Rform">

	<h1>โครงกร ศูนย์การเรียนรู้องค์กรต้นแบบไร้พุง</h1>
	<h3>รายงานภาวะโรคอ้วนลงพุงของศูนย์การเรียนรู้องค์กรต้นแบบไร้พุง ( รอบเอว)</h3>
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
	<td><?php echo number_format($cnt[1]); ?></td>
	<td><?php echo ($cnt[1]!=0 && $total !=0) ? number_format(($cnt[1]*100)/$total,1): 0 ?></td>
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
	<td><?php echo number_format($sum_weight[1]); ?></td>
	<td><?php echo $avg_weight1 = number_format($avg_weight[1]) ?></td>
	<td><?php echo number_format($sum_weight[2]) ?></td>
	<td><?php echo $avg_weight2 = number_format($avg_weight[2]) ?></td>
	<td><?php echo number_format(abs($sum_weight[1]-$sum_weight[2])); ?></td>
	<td><?php echo $diff1 = number_format(abs($avg_weight[1]-$avg_weight[2])); ?></td>
	<td><?php echo number_format($sum_waist[1]) ?></td>
	<td><?php echo $avg_waist1 = number_format($avg_waist[1]) ?></td>
	<td><?php echo number_format($sum_waist[2]) ?></td>
	<td><?php echo $avg_waist2 = number_format($avg_waist[2]) ?></td>
	<td><?php echo number_format(abs($sum_waist[1]-$sum_waist[2])); ?></td>
	<td><?php echo $diff2 = number_format(abs($avg_waist[1]-$avg_waist[2]));
		$per_weight = number_format(($diff1*100)/$avg_weight1);
		$per_waist  = number_format(($diff2*100/$avg_waist1));
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
	<td><?php echo number_format($cnt[1]); ?></td>
	<td><?php echo ($cnt[1]!=0 && $total !=0) ? number_format(($cnt[1]*100)/$total,1): 0 ?></td>
	<td><?php echo number_format($sum_weight[1]) ?></td>
	<td><?php echo number_format($avg_weight[1]) ?></td>
	<td><?php echo number_format($sum_waist[1]); ?></td>
	<td><?php echo number_format($avg_waist[1]); ?></td>
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
	<td>100.0</td>
	<td><?php echo number_format($normal2+$abnormal2) ?></td>
	<td>100.0</td>
	<td><?php echo number_format($sum)?></td>
	<td><?php echo number_format(($sum*100)/$sum,1) ?></td>
</tr>
</tbody>
</table>

<div id="container_grp"  style="height:500px;margin-left:20px;margin-top:10px;margin-bottom: 20px;" class="show"></div>
<div id="container_diff"  style="height:500px;margin-left:20px;margin-top:10px;margin-bottom: 20px;" class="<?php echo ($time=='1') ? 'hide':'show'?>"></div>
<div class="aligncenter"><button name="btn_print" onclick="window.print();" class="btn btn-default btn-large">พิมพ์งาน</button></div>
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
            data: [<?php echo implode(",",$n_percent); ?>]
        }, {
            name: 'อ้วนลงพุง',
            data: [<?php echo implode(",",$ab_percent); ?>]
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
