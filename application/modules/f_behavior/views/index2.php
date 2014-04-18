	<?php $i = 0;
	foreach($result as $key =>$item):?>
	<tr>
		<td><input type="text" name="fullname[]" value="<?php echo $item['fullname'] ?>" class="noborder input-medium"></td>
		<td><?php echo form_dropdown('gender[]',$gender,@$item['gender'],'class="noborder w60"','เลือก','0'); ?></td>
		<td><input type="text" name="age[]" value="<?php echo $item['age'] ?>"  class="age noborder" style="width:35px;" maxlength="2"></td>
		<?php for($j=0;$j<20;$j++){
			$m=  $j;
			$m = $m+1;
		?>
		<td>
			<input type="radio" name="<?php echo 'score'.$key.'_'.$j?>" value="0" <?php if($item['score_'.$m]=="0" && $item['time']=="2"){echo 'checked="checked"';} ?>/>0<br/>
			<input type="radio" name="<?php echo 'score'.$key.'_'.$j?>" value="3" <?php if($item['score_'.$m]=="3" && $item['time']=="2"){echo 'checked="checked"';} ?>/>3<br/>
			<input type="radio" name="<?php echo 'score'.$key.'_'.$j?>" value="5" <?php if($item['score_'.$m]=="5" && $item['time']=="2"){echo 'checked="checked"';} ?>/>5

		</td>
		<?php } ?>
			<input type="hidden" name="year_data[]" value="<?php echo $item['year']?>">
			<input type="hidden" name="main_id[]"   value="<?php echo $item['main_id'] ?>">
			<input type="hidden" name="detail_id[]" value="<?php echo ($item['time']=="2") ? $item['detail_id']:''; ?>" >
			<?php echo ($item['time']=="2" && !empty($item['detail_id'])) ? form_hidden("updated[$key]",date('Y-m-d H:i:s')) : form_hidden("created[$key]",date('Y-m-d H:i:s'))?>
	</tr>
	<?php
	 $i = $key;endforeach; $i=$i+1;?>