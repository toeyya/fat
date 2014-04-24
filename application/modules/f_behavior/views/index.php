<div id="Breadcrumbs">
  	<ol id="path-breadcrumb">
      <li><a href="home">หน้าแรก</a></li>
      <li><a href="f_weight/ebelly">ระบบสารสนเทศ e-flat belly</a></li>
      <li class="active">แบบประเมินพฤติกรรม ครั้งที่ <?php echo $time ?></li>
    </ol>
</div>
<div class="titleGroup2">แบบประเมินพฤติกรรม ครั้งที่ <?php echo $time ?></div>
<div class="contentBlank">
<div id="search">
	<form action="f_behavior/index/<?php echo $time ?>" class="form-search">
		<?php if($permission=="1"): ?>
		<span>จังหวัด</span>
		<span id="province">
		<?php echo form_dropdown('province_id',get_option('id','province_name','f_province','','province_name'),@$_GET['province_id'],'class="search-query"','เลือกจังหวัด'); ?>
		</span>
		<span>องค์กร</span>
		<span id="agency">
		<?php if(!empty($_GET['province_id'])){  ?>
			<?php echo form_dropdown('user_id',get_option('id','agency_name','f_users','province_id='.$_GET['province_id']),@$_GET['user_id'],'class="search-query"','เลือกองค์กร'); ?>
		<?php }else{ ?>
			<select name="user_id" class="search-query"><option value="">เลือกองค์กร</option></select>
		<?php } ?>
		</span>
		<?php endif; ?>
		<span>ปีงบประมาณ </span>
		<?php echo form_dropdown('year',get_year_option("2556"),@$_GET['year'],'class="search-query w100"',''); ?>
		<button name="btn_search" class="btn btn-success">ค้นหา</button>
	</form>
</div>
<div class="right" style="margin-bottom: 10px;">
	<a href="f_behavior/example/<?php echo $time ?>" class="btn btn-default">ตัวอย่างไฟล์ excel ครั้งที่ <?php echo $time ?></a>
	<a href="f_behavior/import/<?php echo $time ?>" class="btn btn-default"><i class="fa fa-arrow-up"></i>นำเข้า  excel</a>
	<a href="f_behavior/index/<?php echo $time ?>/export<?=GetCurrentUrlGetParameter();?>" class="btn btn-default"><i class="fa fa-arrow-down"></i>ดาวน์โหลด  excel</a>
	<a href="f_behavior/index/<?php echo $time ?>/preview<?=GetCurrentUrlGetParameter();?>" class="btn btn-default" target="_blank">พิมพ์งาน</a>
 	<?php if($time=="1"): ?>
 	<button  name="btn_add" class="btn_add  btn btn-info">เพิ่มทีละหลายคน</button>
 	<?php endif; ?>
</div>


<div id="span7">
<form action="f_behavior/save/<?php echo $time?>" method="post" >
<div><span class="alertred">*</span><span>ปีงบประมาณ </span> <?php echo form_dropdown('year',get_year_option("2556"),$year,'',''); ?></div>
	<table class="table table-bordered  table-striped table-condensed">
	<tr class="success">
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
		<?php if($time=="1"): ?>
		<th></th>
		<?php endif; ?>
	</tr>
	<?php if($time=="1"){ ?>
	<?php $i = 0;
	foreach($result as $key =>$item):?>
	<tr>
		<td class="title">
			<span class="hide"><input type="text" name="fullname[]" value="<?php echo $item['fullname'] ?>" class="noborder input-medium"></span>
			<span class="show"><?php echo $item['fullname'] ?></span>
		</td>
		<td><span class="hide"><?php echo form_dropdown('gender[]',$gender,@$item['gender'],'class="noborder w60"','เลือก','0'); ?></span>
			<span class="show"><?php echo (!empty($item['gender'])) ? $gender[$item['gender']]:''; ?></span>
		</td>
		<td>
			<span class="hide"><input type="text" name="age[]" value="<?php echo $item['age'] ?>"  class="age noborder" style="width:35px;" maxlength="2"></span>
			<span class="show"><?php echo $item['age']; ?></span>
			</td>
		<?php for($j=0;$j<20;$j++){
			$m=  $j;
			$m = $m+1;
		?>
		<td><span class="hide">
			<input type="radio" name="<?php echo 'score'.$key.'_'.$j?>" value="0" <?php if($item['score_'.$m]=="0"){echo 'checked="checked"';} ?> />0<br/>
			<input type="radio" name="<?php echo 'score'.$key.'_'.$j?>" value="3" <?php if($item['score_'.$m]=="3"){echo 'checked="checked"';} ?>/>3<br/>
			<input type="radio" name="<?php echo 'score'.$key.'_'.$j?>" value="5" <?php if($item['score_'.$m]=="5"){echo 'checked="checked"';} ?>/>5</span>
			<span class="show"><?php echo ($item['score_'.$m]=="3" || $item['score_'.$m]=="5"|| $item['score_'.$m]=="0") ? $item['score_'.$m]:"-"; ?></span>
		</td>
		<?php } ?>
		<td><input type="hidden" name="year_data[]" value="<?php echo $item['year']?>">
			<p><button type="button" class="btn  btn-info  btn_edit btn-mini"><i class="fa  fa-pencil"></i></button></p>
			<button type="button" class="btn btn-danger btn_delete btn-mini"><i class="fa fa-times"></i></button>
			<input type="hidden" name="main_id[]"   class="main_id" value="<?php echo $item['main_id'] ?>">
			<input type="hidden" name="detail_id[]" class="detail_id" value="<?php echo $item['detail_id'] ?>" >
			<?php
			$updated = array('name'=>'updated','class'=>'updated','value'=>date('Y-m-d H:i:s'),'type'=>'hidden');
			$created = array('name'=>'created','class'=>'created','value'=>date('Y-m-d H:i:s'),'type'=>'hidden');
			echo ($item['detail_id']) ? form_hidden("updated[$key]",date('Y-m-d H:i:s')) : form_hidden("created[$key]",date('Y-m-d H:i:s'))?>

		</td>
	</tr>
	<?php
	 $i = $key;endforeach; $i=$i+1;?>
	<tr>

		<td><input type="text" name="fullname[]" value="" class="noborder input-medium" ></td>
		<td><?php echo form_dropdown('gender[]',$gender,'','class=" noborder w60"','เลือก','0'); ?></td>
		<td><input type="text" name="age[]" value=""  class="age noborder" style="width:35px;" maxlength="2"></td>
		<?php for($j=0;$j<20;$j++){
			$m=  $j;
			$m = $m+1;
			//echo $item['score_'.$m];
		?>
		<td>
			<input type="radio" name="<?php echo 'score'.$i.'_'.$j?>" value="0"  />0<br/>
			<input type="radio" name="<?php echo 'score'.$i.'_'.$j?>" value="3"  />3<br/>
			<input type="radio" name="<?php echo 'score'.$i.'_'.$j?>" value="5"  />5

		</td>
		<?php }?>
		<td><input type="hidden" name="year_data[]" value="">
			<button type="button" class="btn btn-danger btn_clear btn-mini"><i class="fa  fa-minus"></i></button>
			<?php echo form_hidden("created[$i]",date('Y-m-d H:i:s'))?>
		</td>
	 </tr>
	 <?php }else if($time=="2"){require("index2.php");} ?>
	</table>
	<div class="text-center"><?php echo $pagination; ?></div>
	<div class="alert alert-warning">
		<span class="label label-warning">หมายเหตุ</span>
		  <ol style="margin-top:10px;">
		  	<li style="padding: 5px;">เกณฑ์คะแนน :  0 = ไม่เคยเลย, 3 = ครั้งคราว, 5 = ประจำ</li>
		  	<li>หากไม่ระบุชื่อ-นามสกุล ข้อมูลแถวดังกล่าวจะไม่ถูกบันทึก</li>
		  </ol>

	</div>
		<div class="aligncenter"><?php echo $pagination; ?><br/>
		<?php if($permission=="2"): ?>
		<button class="btnSave" style="width:300px;">ยืนยัน</button>
		<?php endif; ?>
	</div>

</form>
</div>
</div>

<script type="text/javascript">
$(document).ready(function(){
	var tr_last = $('.table-bordered tr:last');
	var rowCount = $('.table-bordered tr').length;
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
			tr+='<td><button type="button" class="btn btn-danger btn_delete btn-mini"><i class="fa fa-times"></i></button></td></tr>';
			tr_last.after(tr);
			$('.table-bordered').rowCount();
	}
	$('.btn_add').click(insert_tr);

	$('.btn_delete').live('click',function(){
		if(confirm('คุณต้องการลบข้อมูล?')){
		   	var id = $(this).next().val();
		   	var tr = $(this).closest('tr');
		   	console.log(id);
		   	if(id!=undefined)
		   	{
			   	$.ajax({
			   		url:'f_behavior/delete',data:'id='+id,
			   		success:function(){
			   			tr.remove();
			   			$('.table-bordered').rowCount();
			   		}
			   	});
		   	}else{
				tr.remove();
				$('.table-bordered').rowCount();
		   	}
		}
	});
	$('select[name=province_id]').change(function(){
		if($(this).val().length>0){
			$.ajax({
				url:'setting/getAgency',data:'province_id='+$(this).val(),
				success:function(data){
					$('#agency').html(data);
				}
			});
		}
	});
});
</script>