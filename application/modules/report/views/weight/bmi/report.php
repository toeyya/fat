<div id="Rform">

	<h1>โครงกร ศูนย์การเรียนรู้องค์กรต้นแบบไร้พุง</h1>
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
		<td><?php $percent[1] = ($n==0 || $total[1][$time]==0) ? 0 :($n*100)/$total[1][$time];echo number_format($percent[1],1)."%"; ?></td>
		<td><?php $n =(empty($waist[2]['ผอม'])) ? 0 : $waist[2]['ผอม']; echo number_format($n); $female1[1] = $n; ?></td>
		<td><?php $fpercent[1] = ($n==0 || $total[2][$time]==0) ? 0 :($n*100)/$total[2][$time];echo number_format($fpercent[1],1)."%"; ?></td>
		<td><?php $sum_horizontal[1] = $male1[1] + $female1[1];echo number_format($male1[1] + $female1[1]) ?></td>
		<td><?php  $waist1 = (empty($waist[1])) ? 0 : array_sum($waist[1]);
				   $waist2 = (empty($waist[2])) ? 0 : array_sum($waist[2]);
			 $user_total = $waist1 + $waist2;
			 $sum_percent[1] = ($sum_horizontal[1]==0) ? 0: ($sum_horizontal[1]*100)/$user_total;echo number_format($sum_percent[1],1)."%";
			?></td>
	</tr>
	<tr>
		<td class="title">ปกติ (18.51 &le; BMI &le; 22.99)</td>
		<td><?php $n =(empty($waist[1]['ปกติ'])) ? 0 : $waist[1]['ปกติ']; echo number_format($n); $male1[2] = $n; ?></td>
		<td><?php $percent[2] = ($n==0 || $total[1][$time]==0) ? 0 :($n*100)/$total[1][$time];echo number_format($percent[2],1)."%"; ?></td>
		<td><?php $n =(empty($waist[2]['ปกติ'])) ? 0 : $waist[2]['ปกติ']; echo number_format($n); $female1[2] = $n; ?></td>
			<td><?php $fpercent[2] = ($n==0 || $total[2][$time]==0) ? 0 :($n*100)/$total[2][$time];echo number_format($fpercent[2],1)."%"; ?></td>
		<td><?php $sum_horizontal[2] = $male1[2] + $female1[2];echo number_format($male1[2] + $female1[2]) ?></td>
		<td><?php  $sum_percent[2] = ($sum_horizontal[2]==0) ? 0: ($sum_horizontal[2]*100)/$user_total;echo number_format($sum_percent[2],1)."%"; ?></td>
	</tr>
	<tr>
		<td class="title">ท้วม (23.00 &le; BMI &le; 24.99)</td>
		<td><?php $n =(empty($waist[1]['ท้วม'])) ? 0 : $waist[1]['ท้วม']; echo number_format($n); $male1[3] = $n; ?></td>
		<td><?php $percent[3] = ($n==0 || $total[1][$time]==0) ? 0 :($n*100)/$total[1][$time];echo number_format($percent[3],1)."%"; ?></td>
		<td><?php $n =(empty($waist[2]['ท้วม'])) ? 0 : $waist[2]['ท้วม']; echo number_format($n); $female1[3] = $n; ?></td>
		<td><?php $fpercent[3] = ($n==0 || $total[2][$time]==0) ? 0 :($n*100)/$total[2][$time];echo number_format($fpercent[3],1)."%"; ?></td>
		<td><?php $sum_horizontal[3] = $male1[3] + $female1[3];echo number_format($male1[3] + $female1[3]) ?></td>
		<td><?php  $sum_percent[3] = ($sum_horizontal[3]==0) ? 0: ($sum_horizontal[3]*100)/$user_total;echo number_format($sum_percent[3],1)."%"; ?></td>
	</tr>
	<tr>
		<td class="title">อ้วน ( 25.0 &le; BMI &le; 29.9 )</td>
		<td><?php $n =(empty($waist[1]['อ้วน'])) ? 0 : $waist[1]['อ้วน']; echo number_format($n); $male1[4] = $n; ?></td>
		<td><?php $percent[4] = ($n==0 || $total[1][$time]==0) ? 0 :($n*100)/$total[1][$time];echo number_format($percent[4],1)."%"; ?></td>
		<td><?php $n =(empty($waist[2]['อ้วน'])) ? 0 : $waist[2]['อ้วน']; echo number_format($n); $female1[4] = $n; ?></td>
		<td><?php $fpercent[4] = ($n==0 || $total[2][$time]==0) ? 0 :($n*100)/$total[2][$time];echo number_format($fpercent[4],1)."%"; ?></td>
		<td><?php $sum_horizontal[4] = $male1[4] + $female1[4];echo number_format($male1[4] + $female1[4]) ?></td>
		<td><?php  $sum_percent[4] = ($sum_horizontal[4]==0) ? 0: ($sum_horizontal[4]*100)/$user_total;echo number_format($sum_percent[4],1)."%"; ?></td>
	</tr>
	<tr>
		<td class="title">อ้วนมาก ( BMI &ge; 30.0)</td>
		<td><?php $n =(empty($waist[1]['อ้วนมาก'])) ? 0 : $waist[1]['อ้วนมาก']; echo number_format($n); $male1[5] = $n; ?></td>
		<td><?php $percent[5] = ($n==0 || $total[1][$time]==0) ? 0 :($n*100)/$total[1][$time];echo number_format($percent[5],1)."%"; ?></td>
		<td><?php $n =(empty($waist[2]['อ้วนมาก'])) ? 0 : $waist[2]['อ้วนมาก']; echo number_format($n); $female1[5] = $n; ?></td>
	    <td><?php $fpercent[5] = ($n==0 || $total[2][$time]==0) ? 0 :($n*100)/$total[2][$time];echo number_format($fpercent[5],1)."%"; ?></td>
		<td><?php $sum_horizontal[5] = $male1[5] + $female1[5]; echo number_format($male1[5] + $female1[5]) ?></td>
		<td><?php  $sum_percent[5] = ($sum_horizontal[5]==0) ? 0: ($sum_horizontal[5]*100)/$user_total;echo number_format($sum_percent[5],1)."%"; ?></td>
	</tr>
	<tr>
		<td>รวม</td>
		<td><?php echo number_format(array_sum($male1)) ?></td>
		<td><?php echo number_format(array_sum($percent),1)?>%</td>
		<td><?php echo number_format(array_sum($female1)) ?></td>
		<td><?php echo number_format(array_sum($fpercent),1)?>%</td>
		<td><?php echo number_format(array_sum($sum_horizontal));?></td>
		<td><?php echo number_format(array_sum($sum_percent),1)?>%</td>
	</tr>
</tbody>
</table>
<div id="container_grp"  style="height:500px;margin-left:20px;margin-top:10px;margin-bottom: 20px;" class="show"></div>
<div class="aligncenter"><button name="btn_print" onclick="window.print();" class="btn btn-default btn-large">พิมพ์งาน</button></div>
<script type="text/javascript">
$(function () {
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
            categories: ['ผอม ( BMI < 18.50)', 'ปกติ (18.51 <= BMI<= 22.99)', 'ท้วม (23.00<= BMI<= 24.99)', 'อ้วน ( 25.0 <= BMI <= 29.9)', 'อ้วนมาก ( BMI >= 30.0)'],
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
            name: 'ชาย',
            data: [<?php echo implode(",",$percent); ?>]
        }, {
            name: 'หญิง',
            data: [<?php echo implode(",",$fpercent); ?>]
        }, {
            name: 'รวม',
            data: [<?php echo implode(",",$sum_percent); ?>]
        }]
    });
});

</script>