<div id="Breadcrumbs">
  	<ol id="path-breadcrumb">
      <li><a href="home">หน้าแรก</a></li>
      <li><a href="f_weight/ebelly">ระบบสารสนเทศ e-flat belly</a></li>
      <li class="active">รอบเอวและน้ำหนักตัว  ครั้งที่ <?php echo $time ?></li>
    </ol>
</div>
<div class="titleGroup2">รอบเอวและน้ำหนักตัว  ครั้งที่ <?php echo $time ?></div>
<div class="contentBlank">
<div id="search">
	<form action="f_weight/index/<?php echo $time ?>" class="form-search">
		<span>ปีงบประมาณ </span>
		<?php echo form_dropdown('year',get_year_option("2556"),@$_GET['year'],'class="search-query"',''); ?>
		<button name="btn_search" class="btn btn-success">ค้นหา</button>
	</form>
</div>
<div class="right" style="margin-bottom: 10px;">
	<a href="f_weight/example/<?php echo $time ?>" class="btn btn-default">ตัวอย่างไฟล์ excel ครั้งที่ 1</a>
	<a href="f_weight/import/<?php echo $time ?>" class="btn btn-default"><i class="fa fa-arrow-up"></i>นำเข้า  excel</a>
	<a href="f_weight/index/<?php echo $time ?>/export<?=GetCurrentUrlGetParameter();?>"  class="btn btn-default"><i class="fa fa-arrow-down"></i>ดาวน์โหลด  excel</a>
	<a href="f_weight/index/<?php echo $time ?>/preview<?=GetCurrentUrlGetParameter();?>" class="btn btn-default" target="_blank">พิมพ์ข้อมูล</a>
 	<?php if($time=="1"): ?>
 	<button  name="btn_add" class="btn_add  btn btn-info">เพิ่มทีละหลายคน</button>
 	<?php endif; ?>
</div>
<div id="span7">
	<form action="f_weight/save/<?php echo $time; ?>"  method="post">
	<div><span class="alertred">*</span><span>ปีงบประมาณ </span> <?php echo form_dropdown('year',get_year_option("2556"),$year,'',''); ?></div>
	<table class="table table-bordered table-condensed table-striped">
		<tr class="success">
			<th>ชื่อ-นามสกุล</th>
			<th>เพศ</th>
			<th>อายุ</th>
			<th>น้ำหนัก<br/>(กก.) </th>
			<th>ส่วนสูง <br/>(ซม.)</th>
			<th>รอบเอว<br/> (ซม.)</th>
			<th>โรคอ้วนลงพุง</th>
			<th>BMI<br/> (ค่าคำนวน)</th>
			<th>BMI<br/>(ความหมาย)</th>
			<?php if($time=="1"): ?>
			<th></th>
			<?php endif; ?>
		</tr>
		<?php
		if($time=="1"){
			$i = 0;
			foreach($result as $key=>$item): ?>
		<tr>
			<td class="title"><span class="hide"><input type="text" name="fullname[]" value="<?php echo $item['fullname'] ?>" class="noborder input-medium"></span>
				<span class="show"><?php echo $item['fullname'] ?></span>
			</td>
			<td><span class="hide"><?php echo form_dropdown('gender[]',$gender,$item['gender'],'class="gender noborder w60"','เลือก','0'); ?></span>
				<span class="show"><?php echo (!empty($item['gender'])) ? $gender[$item['gender']]:''; ?></span>
			</td>
			<td><span class="hide"><input type="text" name="age[]" value="<?php echo $item['age'] ?>" class="noborder aligncenter w40" maxlength="2"></span>
				<span class="show"><?php echo $item['age'] ?></span>
			</td>
			<td><span class="hide"><input type="text" name="weight[]" value="<?php echo $item['weight'] ?>" class="noborder aligncenter w40" maxlength="3"></span>
				<span class="show"><?php echo $item['weight'] ?></span>
			</td>
			<td><span class="hide"><input type="text" name="height[]" value="<?php echo $item['height'] ?>" class="height noborder aligncenter w40" maxlength="3"></span>
				<span class="show"><?php echo $item['height'] ?></span>
			</td>
			<td><span class="hide"><input type="text" name="waistline[]" value="<?php echo $item['waistline'] ?>" class="waistline noborder aligncenter  w40" maxlength="3"></span>
				<span class="show"><?php echo $item['waistline'] ?></span>
			</td>
			<td><input type="text" name="fat[]" class="noborder aligncenter w100 <?php if(!empty($fat_mean[$item['fat']])){ echo $fat_mean[$item['fat']];} ?>" value="<?php echo $item['fat'] ?>" readonly="readonly"></td>
			<td><span class="hide"><input type="text" name="bmi_value[]" value="<?php echo $item['bmi_value'] ?>" class="bmi-value noborder aligncenter w40" readonly="readonly" ></span>
				<span class="show"><?php echo $item['bmi_value'] ?></span>
			</td>
			<td><input type="text" name="bmi_mean[]" value="<?php echo $item['bmi_mean'] ?>" class="bmi-mean noborder aligncenter w100 <?php if(!empty($bmi_mean[$item['bmi_mean']])){ echo $bmi_mean[$item['bmi_mean']];} ?>"  readonly="readonly"></td>
			<td><input type="hidden" name="year_data[]" value="<?php echo $item['year']?>">
				<p><button type="button" class="btn  btn-info  btn_edit btn-mini"><i class="fa  fa-pencil"></i></button></p>
				<button type="button" class="btn btn-danger btn_delete btn-mini"><i class="fa fa-times"></i></button>
			    <input type="hidden" name="main_id[]"    value="<?php echo $item['main_id'] ?>">
			    <input type="hidden" name="detail_id[]"  value="<?php echo $item['detail_id'] ?>">
			   <?php echo ($item['main_id']) ? form_hidden("updated[$key]",date('Y-m-d H:i:s')) : form_hidden("created[$key]",date('Y-m-d H:i:s'))?></td>
		</tr>
		<?php $i = $key;endforeach; $i=$i+1; ?>
		<tr>
			<td class="title"><input type="text" name="fullname[]" value=""  class="noborder input-medium"></td>
			<td><?php echo form_dropdown('gender[]',$gender,'','class="gender noborder w60"','เลือก','0'); ?></td>
			<td><input type="text" name="age[]"       value="" class="age noborder aligncenter w40"        maxlength="2"></td>
			<td><input type="text" name="weight[]"    value="" class="weight noborder aligncenter w40"     maxlength="3"></td>
			<td><input type="text" name="height[]" 	  value="" class="height noborder aligncenter w40"     maxlength="3"></td>
			<td><input type="text" name="waistline[]" value="" class="waistline noborder aligncenter  w40" maxlength="3"></td>
			<td><input type="text" name="fat[]"  	  value="" class="noborder aligncenter w100"           readonly="readonly"></td>
			<td><input type="text" name="bmi_value[]" value="" class="bmi-value noborder aligncenter w40"            readonly="readonly"></td>
			<td><input type="text" name="bmi_mean[]"  value="" class="bmi-mean noborder aligncenter w100"  readonly="readonly"></td>
			<td><input type="hidden" name="year_data[]" value="">
				<button type="button" class="btn btn-danger btn_clear btn-mini"><i class="fa  fa-minus"></i></button>
				<?php echo form_hidden("created[$i]",date('Y-m-d H:i:s'))?></td>

		</tr>
		<?php }else if($time=="2"){  ?>
			<?php require('index2.php') ?>
		<?php } ?>

	</table>
	<div class="alert alert-warning"><span class="label label-warning">หมายเหตุ</span> หากไม่ระบุชื่อ-นามสกุล ข้อมูลแถวดังกล่าวจะไม่ถูกบันทึก</div>
	<div class="aligncenter"><button class="btnSave" style="width:300px;">ยืนยัน</button></div>
	</form>
</div>
</div>
</div>
<script type="text/javascript">
$(document).ready(function(){
	$('.table-bordered').rowCount();
	$('.btn_delete').live('click',function(){
		if(confirm('คุณต้องการลบข้อมูล?')){
		   	var id = $(this).next().val();
		   	var tr = $(this).closest('tr');
		   	if(id!=undefined)
		   	{
			   	$.ajax({
			   		url:'<?php echo base_url(); ?>f_weight/delete',
			   		data:'id='+id,
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
	$('[name=btn_add]').click(function(){
		var tr_last = $('.table-bordered tr:last');
		var rowCount = $('.table-bordered tr').length;
		var tr ='<tr><td>'+rowCount+'</td><td class="title"><input type="text" name="fullname[]" value="" class="noborder input-medium"></td>';
			tr+='<td><select name="gender[]" class="gender noborder w60">';
			tr+='<option value="0">เลือก</option>';
			tr+='<option value="1">ชาย</option>';
			tr+='<option value="2">หญิง</option>';
			tr+='</select></td>';
			tr+='<td><input type="text" name="age[]" value="" class="age noborder aligncenter w40"  ></td>';
			tr+='<td><input type="text" name="weight[]" value="" class="noborder aligncenter w40"  ></td>';
			tr+='<td><input type="text" name="height[]" value="" class="height noborder aligncenter w40"  ></td>';
			tr+='<td><input type="text" name="waistline[]" value="" class="waistline noborder aligncenter w40"  ></td>';
			tr+='<td><input type="text" name="fat[]" value="" class="noborder aligncenter w100" readonly="readonly" ></td>';
			tr+='<td><input type="text" name="bmi_value[]" value="" class="bmi-value noborder aligncenter w40"  ></td>';
			tr+='<td><input type="text" name="bmi_mean[]" class="bmi-mean noborder aligncenter w100"  value="" readonly="readonly" ></td>';
			tr+='<td><p><button type="button" class="btn  btn-info  btn_edit btn-mini"><i class="fa  fa-pencil"></i></button></p>';
			tr+='<button type="button" class="btn btn-danger btn_delete btn-mini"><i class="fa fa-times"></i></button>';
			tr+='<input type="hidden" name="created[]" value="<?php echo date('Y-m-d H:i:s'); ?>"></td></tr>';
		 tr_last.after(tr);
		 $('.table-bordered').rowCount();

	});
	$('.height').live('blur',function(){
			var bmi=0.00;
			var tr = $(this).closest('tr');
			var weight = $(this).closest('td').prev().find('input').val();
			var height = $(this).val();
			if(weight.length>0 && height.length>0){
				height = parseInt(height);
				weight = parseInt(weight);
				result =bmi_cal(weight,height);
				tr.find('.bmi-value').val(result[0].toFixed(1));
				tr.find('.bmi-mean').removeClass('red green orange yellow grey');
				tr.find('.bmi-mean').val(result[1]).addClass(result[2]);
			}else if(weight.length==0 || height.length==0){
				tr.find('.bmi-value').val('');
				tr.find('.bmi-mean').val('');
				tr.find('.bmi-mean').removeClass('red green orange yellow grey');
			}
	});
	$('.waistline').live('blur',function(){
		var time = '<?php echo $time; ?>';
		if(time=="2"){
			$( ".height" ).trigger( "blur" );
		}
		var bmi = $(this).closest('td').next().next().find('input').val();
		var tr =  $(this).closest('tr');
		var gender = tr.find('td').eq(2).find('.gender option:selected').val();
		var waist = $(this).val();
		if(waist.length>0 && gender>0){
			waist = parseInt(waist);
			result = fat_cal(waist,gender);
			tr.find('td').eq(7).find('input').removeClass('red green orange yellow grey');
			tr.find('td').eq(7).find('input').val(result[0]).addClass(result[1]);
		}else if(waist.length==0 || gender.length==0){
			tr.find('td').eq(7).find('input').removeClass('red green orange yellow grey');
			tr.find('td').eq(7).find('input').val('');
		}
	});

});
</script>
