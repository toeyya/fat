<div id="Rform">
	<h1>รายงานตามตัวชี้วัด  กพร.</h1>
</div>
<table border="1" style="width:1000px">
<thead>
	<tr class"success">
		<th>#</th>
		<th>ศูนย์อนามัย</th>
		<th>จังหวัด</th>
		<th>ชื่อองค์กรต้นแบบ</th>
		<th>จน.ประชากรทั้งหมด<br/>(คน)</th>
		<th>จน.วัดรอบเอว<br/>(คน)</th>
		<th>จน.วัดรอบเอวปกติ<br/>(คน)</th>
		<th>ร้อยละ 60 วัดรอบเอวปกติ<br/>(%)</th>
		<th>ข้อ<br/>1</th>
		<th>ข้อ <br/>2</th>
		<th>ข้อ <br/>3</th>
		<th>ข้อ <br/>4</th>
		<th>ข้อ <br/>5</th>
		<th>ข้อ <br/>6</th>
		<th>ข้อ <br/>7.1</th>
		<th>ข้อ <br/>7.2</th>
		<th>ข้อ <br/>7.2.1</th>
		<th>ข้อ <br/>7.2.2</th>
		<th>ข้อ <br/>7.3</th>
		<th>ข้อ <br/>8</th>
		<th>ข้อ <br/>9</th>
		<th>ข้อ <br/>10</th>
	</tr>
	</thead>
	<tbody>
		<?php $i=(@$_GET['page'] > 1)? (((@$_GET['page'])* 20)-20)+1:1;?>
		<?php foreach($result as $item): ?>
		<tr>
			<td><?php echo $i; ?></td>
			<td><?php echo $item['area_no']?></td>
			<td><?php echo $item['province_name']?></td>
			<td><?php echo $item['agency_name'] ?></td>
			<td><?php echo $item['cnt']?></td>
			<td><?php echo $user[$item['user_id']];?></td>
			<td><?php echo $fat[$item['user_id']]?></td>
			<td><?php echo (empty($user[$item['user_id']]) || empty($fat[$item['user_id']])) ? 0 : number_format(($fat[$item['user_id']]*100)/$user[$item['user_id']],1)?></td>
			<?php for($j=1;$j<15;$j++): ?>
			<td><?php echo $res[@$criteria[$item['user_id']][$j]] ?></td>
			<?php endfor; ?>

		</tr>
		<?php $i++;endforeach; ?>
	</tbody>
	</table>