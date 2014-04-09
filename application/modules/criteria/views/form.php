<div id="blank">
<div class="titleGroup"><img src="media/img/title-group.png" width="394" height="92" /></div>
<div class="titleGroup2">รายงานความก้าวหน้าประจำเดือน </div>
<div id="Breadcrumbs">
<ol id="path-breadcrumb">
  <li><a href="home">หน้าแรก</a></li>
  <li><a href="criteria/index">องค์กรต้นแบบไร้พุง</a></li>
  <li class="active">รายงานความก้าวหน้าประจำเดือน</li>
</ol>
</div>
<div class="contentGroup">
<form method="post" action="criteria/save2" enctype="multipart/form-data">
<table class="table table-bordered table-condensed">
<tr><th colspan="6"><span>*</span> <span>เดือน </span><?php echo form_dropdown('month',get_month(),@$result[0]['month'],'class="input-medium"')?></th></tr>
<tr class="success">
	<th>กิจกรรม</th>
	<th>รายละเอียดกิจกรรม</th>
	<th>ผลผลิต </th>
	<th>ปัญหา/อุปสรรค</th>
	<th>ข้อเสนอแนะ</th>
	<th>ภาพถ่าย 3 ภาพ</th>
</tr>
<?php $i=1;
		if(empty($result)){?>
<?php	 foreach($title as $t){?>
<tr>
	<td class="title"><?php echo $t ?></td>
	<td class="text-center"><textarea rows="4"  name="activity<?php echo $i ?>"></textarea></td>
	<td><textarea rows="5"  name="product<?php echo $i ?>"></textarea></td>
	<td><textarea rows="5"  name="problem<?php echo $i ?>"></textarea></td>
	<td><textarea rows="5"  name="recommand<?php echo $i ?>"></textarea></td>
	<td>
		<input type="file" name="image1_<?php echo $i ?>"><br/>
		<input type="file" name="image2_<?php echo $i ?>"><br/>
		<input type="file" name="image3_<?php echo $i ?>">
	</td>
	<input type="hidden" name="id" value="">
	<?php  form_hidden("created",date('Y-m-d H:i:s'))?>
</tr>

<?php  $i++; }}else{  ?>
<?php  foreach($result as $item){?>
<tr>
	<td class="title"><?php echo $title[$i] ?></td>
	<td><textarea rows="4" class="span2" name="activity<?php echo $i ?>"><?php echo $item['activity'] ?></textarea></td>
	<td><textarea rows="4" class="span2" name="product<?php echo $i ?>"><?php echo $item['product'] ?></textarea></td>
	<td><textarea rows="4" class="span2" name="problem<?php echo $i ?>"><?php echo $item['problem']?></textarea></td>
	<td><textarea rows="4" class="span2" name="recommand<?php echo $i ?>"><?php echo $item['recommand'] ?></textarea></td>
	<td>
    	<?php if(!empty($item['image1'])): ?>
    	<p>
    	<a href="uploads/criteria/image/<?php echo $item['image1'] ?>" rel="lightbox">
			<img style="width:50px; vertical-align:middle;" src="uploads/criteria/image/thumbnail/<?php echo $item['image1'] ?>">
		</a>
		<a href="#" name="btn_del" rel="image1"  class="btn btn-default btn-mini" onclick="return confirm('ยืนยันการลบ ?')">ลบ</a>
		</p>
		<?php endif;?>
		<input type="file" name="image1_<?php echo $i ?>"><br/>
	    <?php if(!empty($item['image2'])): ?>
    	<p>
    	<a href="uploads/criteria/image/<?php echo $item['image2'] ?>" rel="lightbox">
			<img style="width:50px; vertical-align:middle;" src="uploads/criteria/image/thumbnail/<?php echo $item['image2'] ?>">
		</a>
		<a href="#" name="btn_del" rel="image2"  class="btn btn-default btn-mini" onclick="return confirm('ยืนยันการลบ ?')">ลบ</a>
		</p>
		<?php endif;?>
		<input type="file" name="image2_<?php echo $i ?>"><br/>
	    <?php if(!empty($item['image3'])): ?>
    	<p>
    	<a href="uploads/criteria/image/<?php echo $item['image3'] ?>" rel="lightbox">
			<img style="width:50px; vertical-align:middle;" src="uploads/criteria/image/thumbnail/<?php echo $item['image3'] ?>">
		</a>
		<a href="#" name="btn_del"  rel="image3"  class="btn btn-default btn-mini" onclick="return confirm('ยืนยันการลบ ?')">ลบ</a>
		</p>
		<?php endif;?>
		<input type="file" name="image3_<?php echo $i ?>">
	</td>
	<input type="hidden" name="id<?php echo $i?>" class="identify" value="<?php echo $item['id'] ?>">
	<?php form_hidden("updated",date('Y-m-d H:i:s'))?>
</tr>
<?php $i++; }//endforeach ?>
<?php } ?>

</table>
<div class="pull-right"><span class='caption'>ผู้รายงาน</span>.............<span class="caption">วันที่</span>...........</div>
<div class="clearfix"></div>
<div class="aligncenter"><button class="btnSave" style="width:300px;" name="btn_save" type="submit">ยืนยัน</button></div>
</form>
</div>
</div>
<script type="text/javascript">
$(document).ready(function(){
	$('[name=btn_del]').click(function(event){
		var id = $(this).closest('tr').find('.identify').val();
		var field = $(this).attr('rel');
		var obj = $(this).closest('p');
		$.ajax({
			url:'criteria/delete_file',
			data:'id='+id+'&field='+field,
			success:function(){
				obj.fadeOut('slow').remove();
			}
		});
		event.preventDefault();
	});
});
</script>

