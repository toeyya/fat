<?php $i = 0;
foreach($result as $key=>$item):
?>
<tr>
	<td class="title"><input type="text" name="fullname[]" 	value="<?php echo $item['fullname'] ?>" class="noborder input-medium"></td>
	<td><?php echo form_dropdown('gender[]',$gender,$item['gender'],'class="gender noborder w60"','เลือก','0'); ?>		</td>
	<td><input type="text" name="age[]" 		value="<?php echo $item['age'] ?>" 								   class="noborder aligncenter w40" 			maxlength="2"></td>
	<td><input type="text" name="weight[]" 		value="<?php echo ($item['time']=="2") ? $item['weight']:''; ?>"   class="weight noborder aligncenter w40" 			maxlength="3"></td>
	<td><input type="text" name="height[]" 		value="<?php echo $item['height'] ?>" 							   class="height noborder aligncenter w40" 		maxlength="3"></td>
	<td><input type="text" name="waistline[]" 	value="<?php echo ($item['time']=="2") ? $item['waistline']:''?>"  class="waistline noborder aligncenter  w40"  maxlength="3"></td>
	<td><input type="text" name="fat[]"  		value="<?php echo ($item['time']=="2") ? $item['fat']:'' ?>"	   class="noborder aligncenter w100  <?php if(!empty($fat_mean[$item['fat']])){ echo $fat_mean[$item['fat']];} ?>"  ></td>
	<td><input type="text" name="bmi_value[]" 	value="<?php echo ($item['time']=="2") ? $item['bmi_value']:'' ?>" class="bmi-value noborder aligncenter w40" 			readonly="readonly" ></td>
	<td><input type="text" name="bmi_mean[]"  	value="<?php echo ($item['time']=="2") ?  $item['bmi_mean']:'' ?>" class="bmi-mean noborder aligncenter w100 <?php if(!empty($bmi_mean[$item['bmi_mean']])){ echo $bmi_mean[$item['bmi_mean']];} ?>"  readonly="readonly">
		<input type="hidden" name="main_id[]" value="<?php echo ($item['time']=="2") ? $item['main_id']:'' ?>">
		<input type="hidden" name="detail_id[]" value="<?php echo ($item['time']=="2") ? $item['detail_id']:''; ?>">
	    <?php echo ($item['time']=="2") ? form_hidden("updated[]",date('Y-m-d H:i:s')) : form_hidden("created[]",date('Y-m-d H:i:s'))?>
	</td>
</tr>
<?php $i = $key;endforeach; $i=$i+1;?>