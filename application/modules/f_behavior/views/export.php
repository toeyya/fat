<h1 style="margin:20px 0px" class="text-left"><small>แบบประเมินพฤติกรรม ครั้งที่ <?php echo $time ?>  ปีงบประมาณ <?php echo $year_search; ?></small></h1>
	<table width="70%" border=1>
	<tr>

		<th>ชื่อ - นามสกุล</th>
		<th>เพศ</th>
		<th>อายุ</th>
		<th>ข้อ 1</th>
		<th>ข้อ 2</th>
		<th>ข้อ 3</th>
		<th>ข้อ 4</th>
		<th>ข้อ 5</th>
		<th>ข้อ 6</th>
		<th>ข้อุ 7</th>
		<th>ข้อ 8</th>
		<th>ข้อ 9</th>
		<th>ข้อ 10</th>
		<th>ข้อ 11</th>
		<th>ข้อ 12</th>
		<th>ข้อ 13</th>
		<th>ข้อ 14</th>
		<th>ข้อ 15</th>
		<th>ข้อ 16</th>
		<th>ข้อ 17</th>
		<th>ข้อ 18</th>
		<th>ข้อ 19</th>
		<th>ข้อ 20</th>
	</tr>

	<?php $i = 0;
	foreach($result as $key =>$item):?>
	<tr>
		<td><?php echo $item['fullname'] ?></td>
		<td><?php echo (!empty($item['gender'])) ? $gender[$item['gender']]:''; ?></td>
		<td><?php echo $item['age']; ?></td>
		<?php for($j=0;$j<20;$j++){
			$m=  $j;
			$m = $m+1;
		?>
		<td><?php echo ($item['score_'.$m]=="3" || $item['score_'.$m]=="5"|| $item['score_'.$m]=="0") ? $item['score_'.$m]:"-"; ?></td>
		<?php } ?>
	</tr>
	<?php endforeach;?>
</table>