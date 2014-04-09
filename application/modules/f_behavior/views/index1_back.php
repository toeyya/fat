<h1><small>เพิ่ม / แก้ไขรอบเอวและน้ำหนักตัวของประชาชนในหน่วยงาน/องค์กรต้นแบบ ครั้งที่ 1</small></h1>
<div id="search">
	<form action="f_behavior/index">
		<span>ข้อมูลปีงบประมาณ </span>
		<?php echo form_dropdown('year',get_year_option("2557",1),'','',''); ?>

		<button name="btn_search" class="btn btn-success">ค้นหา</button>
	</form>
</div>
<div class="right" style="margin-bottom: 10px;">
	<a href="#" class="btn btn-default">นำเข้าไฟล์  excel</a>
 	<button  name="btn_add" class="btn_add  btn btn-success">เพิ่มทีละหลายคน</button>
</div>

<div id="span7">
<form  id="form1">
	<table class="table table-bordered table-condensed">
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
		<th></th>
	</tr>
	<?php foreach($result as $key =>$item): ?>
	<tr>
		<td>
			<span class="hide"><input type="text" name="fullname" value="<?php echo $item['fullname'] ?>" class="noborder input-medium"></span>
			<span class="show"><?php echo $item['fullname'] ?></span>
		</td>
		<td><span class="hide"><?php echo form_dropdown('gender',$gender,@$item['gender'],'class="noborder w60"','เลือก'); ?></span>
			<span class="show"><?php echo (!empty($item['gender'])) ? $gender[$item['gender']]:''; ?></span>
		</td>
		<td>
			<span class="hide"><input type="text" name="age" value="<?php echo $item['age'] ?>"  class="noborder" style="width:35px;"></span>
			<span class="show"><?php echo $item['age']; ?></span>
			</td>
		<?php for($j=0;$j<20;$j++){
			$m=  $j;
			$m = $m+1;
			//echo $item['score_'.$m];
		?>
		<td><span class="hide">
			<input type="radio" name="<?php echo 'score'.$key.'_'.$j?>" value="0" <?php if($item['score_'.$m]=="0"){echo 'checked="checked"';} ?> />0<br/>
			<input type="radio" name="<?php echo 'score'.$key.'_'.$j?>" value="3" <?php if($item['score_'.$m]=="3"){echo 'checked="checked"';} ?>/>3<br/>
			<input type="radio" name="<?php echo 'score'.$key.'_'.$j?>" value="5" <?php if($item['score_'.$m]=="5"){echo 'checked="checked"';} ?>/>5</span>
			<span class="show"><?php echo ($item['score_'.$m]=="3" || $item['score_'.$m]=="5"|| $item['score_'.$m]=="0") ? $item['score_'.$m]:"-"; ?></span>
		</td>
		<?php } ?>
		<td>
			<p><button type="button" class="btn  btn-info  btn_edit btn-mini"><i class="fa  fa-pencil"></i></button></p>
			<button type="button" class="btn btn-danger btn_delete btn-mini"><i class="fa fa-times"></i></button>
			<input type="hidden" name="main_id"   value="<?php echo $item['main_id'] ?>">
			<input type="hidden" name="detail_id" value="<?php echo $item['detail_id'] ?>" >
			<?php
			$updated = array('name'=>'updated','class'=>'updated','value'=>date('Y-m-d H:i:s'),'type'=>'hidden');
			$created = array('name'=>'created','class'=>'created','value'=>date('Y-m-d H:i:s'),'type'=>'hidden');
			echo ($item['detail_id']) ? form_hidden("updated",date('Y-m-d H:i:s')) : form_hidden('created',date('Y-m-d H:i:s'))?>

		</td>
	</tr>
	<?php endforeach; ?>
	<tr>
		<td><input type="text" name="fullname" value="" class="noborder input-medium"></td>
		<td><?php echo form_dropdown('gender',$gender,'','class="noborder w60"','เลือก'); ?></td>
		<td><input type="text" name="age" value=""  class="noborder" style="width:35px;"></td>
		<?php for($j=0;$j<20;$j++){
			$m=  $j;
			$m = $m+1; ?>
		<td>
			<input type="radio" name="<?php echo 'score'.$key.'_'.$j?>" value="0" />0<br/>
			<input type="radio" name="<?php echo 'score'.$key.'_'.$j?>" value="3" />3<br/>
			<input type="radio" name="<?php echo 'score'.$key.'_'.$j?>" value="5" />5</span>
		</td>
		<?php } ?>
		<td>
			<p><button type="button" class="btn btn-info btn_edit btn-mini"><i class="fa  fa-pencil"></i></button></p>
			<button type="button" class="btn btn-danger btn_delete btn-mini"><i class="fa  fa-minus"></i></button>

			<?php echo form_hidden('created',date('Y-m-d H:i:s'))?>
		</td>
	</tr>
	</table>
	<div class="aligncenter"><button class="btn btn-primary btn-large" name="btn_save" type="submit">ยืนยัน</button></div>
</form>
</div>
<script type="text/javascript">
function toObject(arr) {
  var rv = {};
  for (var i = 0; i < arr.length; ++i)
    rv['rows'+i] = arr[i];
  return rv;
}
$(document).ready(function(){
	var tr_last = $('.table-bordered tr:last');
	var rowCount = $('.table-bordered tr').length;
	//tr_last.find('td').eq(0).html(rowCount-1);
	$('.table-bordered').rowCount();
	function insert_tr(){
		var i;
		var order = rowCount-1;
		var tr ='<tr><td></td><td><input type="text" name="fullname" class="noborder input-medium"></td>';
			tr+='<td><select name="gender" class="noborder w60">';
			tr+='<option value="0">เลือก</option><option value="1">ชาย</option><option value="2">หญิง</option>';
			tr+='</select></td>';
			tr+='<td><input type="text" name="age"   class="noborder" style="width:35px;"></td>';
			for (i=0;i<20;i++){
				tr+='<td><small><input type="radio" name="score'+order+'_'+i+'" value="0">0</small>';
				tr+='<input type="radio" name="score'+order+'_'+i+'"  value="3">3';
				tr+='<input type="radio" name="score'+order+'_'+i+'"  value="5">5</td>';
			}
			tr+='<td><button type="button" class="btn btn-danger btn_delete btn-small">ลบ</button></td></tr>';
			tr_last.after(tr);
			$('.table-bordered').rowCount();
	}
	$('.btn_add').click(insert_tr);
	$('#form1').submit(function(event){
		var chk_name,input_name,sel_name,chk_val,input_val,sel_val;
		var cnt = $('.table-bordered tr:not(:first-child)').length;
		var names ={},obj = {},j=0;
		  for (var i = 0; i < cnt; i++){
		    names['rows'+i] = {};
		  }
		$('.table-bordered tr:not(:first-child)').each(function(){
			$(this).children('td:not(:first-child)').each(function(){

				if($(this).find('input').attr('name'))
				{
					var len = $(this).children('input').length;
					for(i=0;i<len;i++)
					{
						input_name = $(this).find('input').eq(i).attr('name');
						if(input_name != undefined){
						 input_val = $(this).find('input').eq(i).val();
							if(input_val != undefined){
								names['rows'+j][input_name] = input_val;
							}
						}
					}
				}
				if($(this).find('select').attr('name')){
					sel_name   = $(this).find('select').attr('name');
					if(sel_name != undefined){
						sel_val = $(this).find("select option:selected").val();
						if(sel_val != undefined){
							names['rows'+j][sel_name] = sel_val;
						}
					}
				}
				chk_name = $(this).find('input[type=radio]').attr('name');
				if(chk_name != undefined)
				{
					if($(this).find('input[type=radio]:checked').val()==undefined){
						chk_val='';
					}else{
						chk_val = $(this).find('input[type=radio]:checked').val();
					}
					names['rows'+j][chk_name] = chk_val;
				}
			});
			j++;
		});
		$.ajax({
			type:'post',
			cache:false,
			url:'f_behavior/save/1',
			data: names,
			success:function(){
				alert("บันทึกข้อมูลเรียบร้อยค่ะ");

			}

		});
		event.preventDefault();
		event.stopPropagation();
		return false;

	});
	$('.btn_delete').live('click',function(){
		if(confirm('คุณต้องการลบข้อมูล?')){
		   	var id = $(this).next().val();
		   	var tr = $(this).closest('tr');
		   	console.log(id);
		   	if(id!=undefined)
		   	{
			   	$.ajax({
			   		url:'f_behavior/delete',
			   		data:'id='+id,
			   		success:function(){
			   			tr.remove();
			   			$('.table-bordered').rowCount();
			   			alert('ลบข้อมูลเรียบร้อยแล้วค่ะ');
			   		}
			   	});
		   	}else{
				tr.remove();
				$('.table-bordered').rowCount();
				alert('ลบข้อมูลเรียบร้อยแล้วค่ะ');
		   	}

		}
	});
	$('.btn_edit').live('click',function(){
		$(this).closest('tr').find('.hide').attr('class','show');
		//$(this).closest('tr').find('.show').attr('class','hide');
	});
})
</script>
