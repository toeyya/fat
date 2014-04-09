<h1><small>กราฟคะแนนความถี่ </small></h1>
<div id="search">
	<form action="f_behavior/report/index" class="form-search">
		<span>องค์กร</span>
		<?php echo form_dropdown('user_id',get_option('id','agency_name','f_users'),@$_GET['user_id'],'class="form-control"','ทุกองค์กร'); ?>
		<span>ปีงบประมาณ </span>
		<?php echo form_dropdown('year',get_year_option("2557"),'','',''); ?>
		<span>ครั้งที่ </span>
		<?php $time = array('1'=>'ครั้งที่ 1','2'=>'ครั้งที่ 2');echo form_dropdown('time',$time,@$_GET['time'],'','');?>
		<button name="btn_search" class="btn btn-success">ค้นหา</button>
	</form>
</div>
<?php if(!empty($_GET)){ ?>
<div class="alert alert-block alert-info"><span class="label label-info" style="margin-right:10px;"> ผลการค้นหา </span> องค์กร  :<?php echo $user_name; ?> ปีงบประมาณ :<?php echo $yearth; ?>  ครั้งที่  :<?php echo $_GET['time']; ?> จำนวนผู้ตอบแบบสอบถาม :<?php echo $total ?></div>
<div id="span7">
	<table class="table table-bordered table-condensed table-striped">
	<tr>
		<th rowspan="2">พฤติกรรมที่ปฏิบัติ</th>
		<th colspan="6">ความถี่ในการปฏิบัติ</th>
		<th rowspan="2">คะแนนรวม</th>
	</tr>
	<tr>
		<th>ประจำ</th>
		<th>%ประจำ</th>
		<th>ครั้งคราว</th>
		<th>%ครั้งคราว</th>
		<th>ไม่เคยเลย</th>
		<th>%ไม่เคยเลย</th>
	</tr>
	<?php foreach($title as $key =>$t): ?>
	<tr>
		<td class="title"><?php echo $t ?></td>
		<td><?php echo $remainder1 =(!empty($score[$key][2]['cnt'])) ? $score[$key][2]['cnt']:0; ?></td>
		<td class="orange"><?php echo $graph['5'][$key]= ($remainder1!=0) ? (($remainder1*5)/($total*5))*100:0; ?></td>
		<td><?php echo $remainder2 =(!empty($score[$key][1]['cnt'])) ? $score[$key][1]['cnt']:0; ?></td>
		<td class="green"><?php echo $graph['3'][$key]= ($remainder2!=0) ? (($remainder2*3)*100)/($total*3):0; ?></td>
		<td><?php echo $remainder3 =(!empty($score[$key][0]['cnt'])) ? $score[$key][0]['cnt']:0; ?></td>
		<td class="yellow"><?php echo $graph['1'][$key]= ($remainder3!=0) ? (($remainder3*1)*100)/($total*1):0; ?></td>
		<td><?php echo $sum[$key]=($remainder1+$remainder2+$remainder3) ?></td>
	</tr>
	<?php endforeach; ?>
	<tr>
		<td colspan="7">คะแนนพฤติกรรมเฉลี่ย</td>
		<td><?php echo ($total>0)? array_sum($sum)/$total:0; ?></td>
	</tr>
	</table>
<div class="aligncenter"><button type="button" name="show" class="btn btn-info btn-large " id="btn-show" >เปิด - ปิด กราฟ</button></div>
<div id="container"  style="height:800px;margin-top:10px;" class="hide"></div>
</div><!-- span7 -->
<?php } ?>
<script type="text/javascript">
$(function () {
	$('#btn-show').click(function(){
			$('#container').toggleClass("hide show");
	});
    $('#container').highcharts({
        chart: {
            type: 'bar'
        },
        title: {
            text: 'กราฟคะแนนความถี่  องค์กร  :<?php echo $user_name; ?>  ปีงบประมาณ :<?php echo $yearth; ?>  ครั้งที่  :<?php echo $_GET['time']; ?>'
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
        plotOptions: {
            series: {
                stacking: 'normal',
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
            data: [<?php echo implode(",",$graph[5]); ?>],
            color:'#FBBE99'/* ส้ม   */
        }, {
            name: 'ครั้งคราว',
            data: [<?php echo implode(",",$graph[3]); ?>],
             color:'#BDFBC5'/* เขียว */
        }, {
            name: 'ไม่เคยเลย',
            data: [<?php echo implode(",",$graph[1]); ?>],
             color:'#F8EA82' /* เหลือง */
        }]
    });
});

</script>
