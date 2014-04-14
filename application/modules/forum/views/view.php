<div class="titleGroup2"><?php echo $value["title"]?></div>

<div class="contentBlank" >

<form action="forum/comment/<?php echo $value["id"]?>" method="post" >
<table class="table table-bordered" >
	<thead>
		<tr style="background: #02947d; color: #ffffff;" >
			<th style="width: 230px;">#</th>
			<th>หัวข้อ</th>
		</tr>
	</thead>
	
	<tbody>
		<tr>
			<td></td>
			<td><?php echo $value["detail"]?></td>
		</tr>
		<?php foreach ($variable as $key => $item):?>
		<tr>
			<td>
				<strong>ความคิดเห็นที่ <?php echo (@$_GET["page"]) ? (@$_GET["page"]!=1) ? ($key+($_GET["page"]*10)) : $key+1 : $key+1?></strong><br />
				<?php echo $item["email"]	?><br />
				<span style="font-size: 12px; font-weight: bold;"><?php echo mysql_to_th($item["created"],"F",TRUE)?></span>
			</td>
			<td><?php echo $item["detail"]?></td>
		</tr>
		<?php endforeach?>
		<tr>
			<td colspan="2"></td>
		</tr>
		<?php if(is_login()):?>
		<tr>
			<td><strong>แสดงความคิดเห็น</strong></td>
			<td><textarea class="col-lg-12" rows="5" name="detail" style="resize: none;" ></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td style="text-align: center;" ><button type="submit" >ยืนยัน</button></td>
		</tr>
		<?php endif?>
	</tbody>
	
	<tfoot>
		<tr>
			<td colspan="5" ><?php echo $pagination?></td>
		</tr>
	</tfoot>
	
</table>
</form>

</div>