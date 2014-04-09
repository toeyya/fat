<h1><small>ผลการประเมินพฤติกรรม</small></h1>
<div>องค์กร  :<?php echo $user_name; ?> ปีงบประมาณ :<?php echo $yearth; ?>  จำนวนผู้ตอบแบบสอบถาม ครั้งที่ 1 :<?php echo $total1 ?> จำนวนผู้ตอบแบบสอบถาม ครั้งที่ 2 :<?php echo $total2 ?></div>
	<table width="500px" border="1">
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
		<td width="500px"><?php echo $t ?></td>
		<td><?php echo $remainder1 =(!empty($score1[$key][2]['cnt'])) ? $score1[$key][2]['cnt']:0; ?></td>
		<td style="background-color:#FBBE99;color:#626262;"><?php echo $graph1['5'][$key]= ($remainder1!=0) ? (($remainder1*5)/($total1*5))*100:0; ?></td>
		<td><?php echo $remainder2 =(!empty($score1[$key][1]['cnt'])) ? $score1[$key][1]['cnt']:0; ?></td>
		<td style="background-color:#BDFBC5;color:#626262;"><?php echo $graph1['3'][$key]= ($remainder2!=0) ? (($remainder2*3)*100)/($total1*3):0; ?></td>
		<td><?php echo $remainder3 =(!empty($score1[$key][0]['cnt'])) ? $score1[$key][0]['cnt']:0; ?></td>
		<td style="background-color:#F8EA82;color:#626262;"><?php echo $graph1['1'][$key]= ($remainder3!=0) ? (($remainder3*1)*100)/($total1*1):0; ?></td>
		<td><?php echo $sum1[$key]=($remainder1+$remainder2+$remainder3) ?></td>

		<td><?php echo $remainder4 =(!empty($score2[$key][2]['cnt'])) ? $score2[$key][2]['cnt']:0; ?></td>
		<td style="background-color:#FBBE99;color:#626262;"><?php echo $graph2['5'][$key]= ($remainder4!=0) ? (($remainder4*5)/($total2*5))*100:0; ?></td>
		<td><?php echo $remainder5 =(!empty($score2[$key][1]['cnt'])) ? $score2[$key][1]['cnt']:0; ?></td>
		<td style="background-color:#BDFBC5;color:#626262;"><?php echo $graph2['3'][$key]= ($remainder5!=0) ? (($remainder5*3)*100)/($total2*3):0; ?></td>
		<td><?php echo $remainder6 =(!empty($score2[$key][0]['cnt'])) ? $score2[$key][0]['cnt']:0; ?></td>
		<td style="background-color:#F8EA82;color:#626262;"><?php echo $graph2['1'][$key]= ($remainder6!=0) ? (($remainder6*1)*100)/($total2*1):0; ?></td>
		<td><?php echo $sum2[$key]=($remainder4+$remainder5+$remainder6) ?></td>
		<td><?php echo abs($sum1[$key]-$sum2[$key])?></td>
		<td></td>

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
		<li class="offset1" style="text-align: left"><span style="width:156px;display: inline-block">คะแนนรวมระหว่าง  90 - 100  </span>คะแนน หมายถึง พฤติกรรมด้านสุขภาพขอท่านดีมาก</li>
		<li class="offset1" style="text-align: left"><span style="width:156px;display: inline-block">คะแนนรวมระหว่าง  80 - 89   </span>คะแนน หมายถึง พฤติกรรมด้านสุขภาพของท่านดี</li>
		<li class="offset1" style="text-align: left"><span style="width:156px;display: inline-block">คะแนนรวมระหว่าง  60 - 79   </span>คะแนน หมายถึง พฤติกรรมด้านสุขภาพของท่านดีปานกลาง</li>
		<li class="offset1" style="text-align: left"><span style="width:156px;display: inline-block">คะแนนรวมน้อยกว่า 60  	    </span>คะแนน หมายถึง ควรปรับเปลี่ยนพฤติกรรมเพื่อประโยชน์ต่อสุขภาพที่ดี</li>
	</ul>
</div>
