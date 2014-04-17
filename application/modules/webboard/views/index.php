<div class="titleGroup2">เว็บบอร์ด</div>

<div class="contentBlank" >

<table class="table table-bordered" >
	<thead>
		<?php if(login_data("id")):?>
		<tr>
			<th colspan="3" style="text-align: right;" ><a href="webboard/form" class="btn btn-primary" >ตั้งคำถามใหม่</a></th>
		</tr>
		<?php endif?>
		<tr style="background: #02947d; color: #ffffff;" >
			<th>หัวข้อ</th>
			<th style="width: 145px;" >จำนวนคนดู/คนตอบ</th>
			<th style="text-align: center; width: 190px;" >ตอบล่าสุด</th>
		</tr>
	</thead>
	
	<tbody>
		<?php foreach ($variable as $key => $value):?>
		<tr>
			<td><a href="webboard/view/<?php echo $value["id"]?>" title="<?php echo $value["title"]?>" target="_blank" ><?php echo $value["title"]?></a></td>
			<td><?php echo $value["view"]."/".$value["comment"]?></td>
			<td><?php echo mysql_to_th($value["updated"],"F",TRUE)?></td>
		</tr>
		<?php endforeach?>
	</tbody>
	
	<tfoot>
		<tr>
			<td colspan="3" ><?php echo $pagination?></td>
		</tr>
	</tfoot>
	
</table>

</div>