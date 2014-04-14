<div class="titleGroup2">ถาม - ตอบ</div>

<div class="contentBlank" >

<table class="table table-bordered" >
	<thead>
		<tr>
			<th colspan="4" style="text-align: right;" ><a href="#" class="btn btn-primary" >ตั้งคำถามใหม่</a></th>
		</tr>
		<tr style="background: #02947d; color: #ffffff;" >
			<th style="width: 100px;">#</th>
			<th>หัวข้อ</th>
			<th>จำนวนคนดู/คนตอบ</th>
			<th>ตอบล่าสุด</th>
		</tr>
	</thead>
	
	<tbody>
		<?php foreach ($variable as $key => $value):?>
		<tr>
			<td>#<?php echo $value["id"]?></td>
			<td><?php echo $value["title"]?></td>
			<td><?php echo $value["view"]."/".$value["comment"]?></td>
			<td><?php echo mysql_to_th($value["updated"],"F",TRUE)?></td>
		</tr>
		<?php endforeach?>
	</tbody>
	
	<tfoot>
		<tr>
			<td colspan="4" ><?php echo $pagination?></td>
		</tr>
	</tfoot>
	
</table>

</div>