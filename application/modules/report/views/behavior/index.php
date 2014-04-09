<div class="titleGroup2">ผลการประเมินพฤติกรรมและกราฟความถี่</div>
<div class="contentBlank">
<div id="search" class="form-search">
	<form action="report/index/behavior" class="form-search">
		<span>องค์กร</span>
		<?php echo form_dropdown('user_id',get_option('id','agency_name','f_users'),@$_GET['user_id'],'class="search-query"','เลือกองค์กร'); ?>
		<span>ปีงบประมาณ </span>
		<?php echo form_dropdown('year',get_year_option("2557"),@$_GET['year'],'class="search-query"',''); ?>
		<button name="btn_search" class="btn btn-success">ค้นหา</button>
	</form>
</div>

<?php if(!empty($_GET)){ ?>
<div class="alert alert-block alert-info"><span class="label label-info" style="margin-right:10px;"> ผลการค้นหา </span> องค์กร  :<?php echo $user_name; ?> ปีงบประมาณ :<?php echo $yearth; ?>  จำนวนผู้ตอบแบบสอบถาม ครั้งที่ 1 :<?php echo $total1 ?> จำนวนผู้ตอบแบบสอบถาม ครั้งที่ 2 :<?php echo $total2 ?></div>
<div class="right" style="margin-bottom: 10px;">
		<a href="report/index/behavior/export<?=GetCurrentUrlGetParameter();?>" class="btn btn-default"><i class="fa fa-arrow-down"></i>ดาวน์โหลด excel</a>
	<a href="report/index/behavior/preview<?=GetCurrentUrlGetParameter();?>" class="btn btn-default" target="_blank">พิมพ์ข้อมูล</a>
</div>
<div id="span7">
	<table class="table table-bordered table-condensed table-striped">
	<thead>
	<tr>
		<th rowspan="2">พฤติกรรมที่ปฏิบัติ</th>
		<th colspan="7">ครั้งที่ 1</th>
		<th colspan="7">ครั้งที่ 2</th>
		<th colspan="2">เปรียบเทียบครั้งที่ 1 - 2 </th>
	</tr>
	<tr>
		<th>ประจำ</th>
		<th>%ประจำ</th>
		<th>ครั้งคราว</th>
		<th>%ครั้งคราว</th>
		<th>ไม่เคยเลย</th>
		<th>%ไม่เคยเลย</th>
		<th>คะแนนรวม</th>
		<th>ประจำ</th>
		<th>%ประจำ</th>
		<th>ครั้งคราว</th>
		<th>%ครั้งคราว</th>
		<th>ไม่เคยเลย</th>
		<th>%ไม่เคยเลย</th>
		<th>คะแนนรวม</th>
		<th>คะแนนรวม</th>
		<th>ร้อยละ</th>
	</tr>
	</thead>
	<tbody>
	<?php foreach($title as $key =>$t): ?>
	<tr>
		<td class="title"><?php echo $t ?></td>
		<td><?php echo $remainder1 =(!empty($score1[$key][2]['cnt'])) ? $score1[$key][2]['cnt']:0; ?></td>
		<td class="orange"><?php echo $graph1['5'][$key]= ($remainder1!=0) ? (($remainder1*5)/($total1*5))*100:0; ?></td>
		<td><?php echo $remainder2 =(!empty($score1[$key][1]['cnt'])) ? $score1[$key][1]['cnt']:0; ?></td>
		<td class="green"><?php echo $graph1['3'][$key]= ($remainder2!=0) ? (($remainder2*3)*100)/($total1*3):0; ?></td>
		<td><?php echo $remainder3 =(!empty($score1[$key][0]['cnt'])) ? $score1[$key][0]['cnt']:0; ?></td>
		<td class="yellow"><?php echo $graph1['1'][$key]= ($remainder3!=0) ? (($remainder3*1)*100)/($total1*1):0; ?></td>
		<td><?php echo $sum1[$key]=($remainder1+$remainder2+$remainder3) ?></td>

		<td><?php echo $remainder4 =(!empty($score2[$key][2]['cnt'])) ? $score2[$key][2]['cnt']:0; ?></td>
		<td class="orange"><?php echo $graph2['5'][$key]= ($remainder4!=0) ? (($remainder4*5)/($total2*5))*100:0; ?></td>
		<td><?php echo $remainder5 =(!empty($score2[$key][1]['cnt'])) ? $score2[$key][1]['cnt']:0; ?></td>
		<td class="green"><?php echo $graph2['3'][$key]= ($remainder5!=0) ? (($remainder5*3)*100)/($total2*3):0; ?></td>
		<td><?php echo $remainder6 =(!empty($score2[$key][0]['cnt'])) ? $score2[$key][0]['cnt']:0; ?></td>
		<td class="yellow"><?php echo $graph2['1'][$key]= ($remainder6!=0) ? (($remainder6*1)*100)/($total2*1):0; ?></td>
		<td><?php echo $sum2[$key]=($remainder4+$remainder5+$remainder6) ?></td>
		<td><?php echo abs($sum1[$key]-$sum2[$key])?></td>
		<td><?php echo (abs($sum1[$key]-$sum2[$key]))?></td>

	</tr>
	<?php endforeach; ?>

	<tr>
		<td colspan="7">คะแนนพฤติกรรมเฉลี่ยครั้งที่ 1</td>
		<td><?php echo ($total1>0)? array_sum($sum1)/$total1:0; ?></td>
		<td colspan="6">คะแนนพฤติกรรมเฉลี่ยครั้งที่ 2</td>
		<td><?php echo ($total2>0)? array_sum($sum2)/$total2:0; ?></td>
		<td></td>
		<td></td>
	</tr>

	</tbody>
	</table>
<div class="alert alert-warning "><span class="label label-warning">เกณฑ์คะแนน</span>
	<ul class="unstyled  info">
		<li class="offset1"><span style="width:156px;display: inline-block">คะแนนรวมระหว่าง  90 - 100  </span>คะแนน หมายถึง พฤติกรรมด้านสุขภาพขอท่านดีมาก</li>
		<li class="offset1"><span style="width:156px;display: inline-block">คะแนนรวมระหว่าง  80 - 89   </span>คะแนน หมายถึง พฤติกรรมด้านสุขภาพของท่านดี</li>
		<li class="offset1"><span style="width:156px;display: inline-block">คะแนนรวมระหว่าง  60 - 79   </span>คะแนน หมายถึง พฤติกรรมด้านสุขภาพของท่านดีปานกลาง</li>
		<li class="offset1"><span style="width:156px;display: inline-block">คะแนนรวมน้อยกว่า 60  	    </span>คะแนน หมายถึง ควรปรับเปลี่ยนพฤติกรรมเพื่อประโยชน์ต่อสุขภาพที่ดี</li>
	</ul>
</div>
<div class="aligncenter"><button type="button" name="show" class="btn btn-info btn-large " id="btn-show" >เปิด - ปิด กราฟ</button></div>
<div id="container_grp"  style="height:800px;margin-top:10px;margin-bottom: 20px;" class="hide"></div>
</div><!-- span7 -->
</div>
<?php } ?>
<script type="text/javascript">
$(function () {
	$('#btn-show').click(function(){
			$('#container_grp').toggleClass("hide show");
	});
    $('#container_grp').highcharts({
        chart: {
            type: 'bar'
        },
        title: {
            text: 'กราฟคะแนนความถี่  องค์กร  :<?php echo $user_name; ?>  ปีงบประมาณ :<?php echo $yearth; ?> '
        },
        xAxis: {
            categories: ['ข้อที่ 1', 'ข้อที่ 2', 'ข้อที่ 3', 'ข้อที่ 4', 'ข้อที่ 5','ข้อที่ 6', 'ข้อที่ 7', 'ข้อที่ 8', 'ข้อที่ 9', 'ข้อที่ 10'
            			,'ข้อที่ 11', 'ข้อที่ 12', 'ข้อที่ 13', 'ข้อที่ 14', 'ข้อที่ 15','ข้อที่ 16', 'ข้อที่ 17', 'ข้อที่ 18', 'ข้อที่ 19', 'ข้อที่ 20']
        },
        yAxis: {
            min: 0,
            title: {
                text: 'ร้อยละ'
            },

        },
        credits: {enabled: false},
        legend: {
            backgroundColor: '#FFFFFF',
            reversed: true
        },

        tooltip: {
            pointFormat: '<span style="color:{series.color}">{point.stack}{series.name}</span>: <b>{point.percentage:.0f}%</b><br/>',
            shared: true
        },
        plotOptions: {
            series: {
                stacking: 'percent',
                 dataLabels: {
                    enabled: true,
                     style: {
                        color: '#626262'
                    }
                }
            }


        },
            series: [{
            name: 'ประจำ',
            data: [<?php echo implode(",",$graph2[5]); ?>],
            stack: 'ครั้งที่ 2',
            color:'#FBBE99'/* ส้ม   */
        }, {
            name: 'ครั้งคราว',
            data: [<?php echo implode(",",$graph2[3]); ?>],
            stack: 'ครั้งที่ 2',
            color:'#BDFBC5'/* เขียว */
        }, {
            name: 'ไม่เคยเลย',
            data: [<?php echo implode(",",$graph2[1]); ?>],
            stack: 'ครั้งที่ 2',
            color:'#F8EA82' /* เหลือง */

        },{
			showInLegend: false,
            name: 'ประจำ',
            data: [<?php echo implode(",",$graph1[5]); ?>],
            stack: 'ครั้งที่ 1',
            color:'#FBBE99'/* ส้ม   */
        }, {
        	showInLegend: false,
            name: 'ครั้งคราว',
            data: [<?php echo implode(",",$graph1[3]); ?>],
            stack: 'ครั้งที่ 1',
            color:'#BDFBC5'/* เขียว */
        }, {
        	showInLegend: false,
            name: 'ไม่เคยเลย',
            data: [<?php echo implode(",",$graph1[1]); ?>],
            stack: 'ครั้งที่ 1',
            color:'#F8EA82' /* เหลือง */

        }]
    });
});

</script>
