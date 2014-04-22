<?php if(!empty($_GET)){ ?>
<div id="Rform">

	<h1>โครงกร ศูนย์การเรียนรู้องค์กรต้นแบบไร้พุง</h1>
	<h3>รายงานภาวะโรคอ้วนลงพุงของศูนย์การเรียนรู้องค์กรต้นแบบไร้พุง (Ht/2)</h3>
	<div style="text-align: center">
	<label class="caption">หน่วยงาน</label><?php echo $user_name ?><label class="caption">ครั้งที่</label><?php echo $time; ?>
	</div>
</div>
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
<div id="container_grp"  style="height:500px;margin-left:20px;margin-top:10px;margin-bottom: 20px;" class="show"></div>
<div class="aligncenter"><button name="btn_print" onclick="window.print();" class="btn btn-default btn-large">พิมพ์งาน</button></div>

<script type="text/javascript">
$(function () {
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
<?php } ?>