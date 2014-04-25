<style>
 .person .add-on{height: 28px;}
</style>
<div class="titleGroup2">แบบคำนวณโรคอ้วนลงพุง</div>
	<div class="input-prepend input-append person">
	  	<span class="add-on">น้ำหนัก </span><input type="text" name="weight" value="<?php echo @$weight['weight'] ?>" maxlength="3" class="weight"><span class="add-on">กก.</span>
		<span class="add-on">ส่วนสูง </span><input type="text" name="height" value="<?php echo @$weight['height']?>" maxlength="3" class="height"><span class="add-on">ซม.</span>
		<span class="add-on">รอบเอว </span><input type="text" name="waistline" value="<?php echo @$weight['waistline']  ?>" maxlength="3" class="waistline"><span class="add-on">ซม.</span>
	</div>

  <div class="titleGroup2">แบบประเมินตนเอง เรื่องพฤติกรรมการกิน ออกกำลังกาย และอารมณ์</div>

		<table class="table table-bordered table-condensed table-striped">
		<tr>
			<th rowspan="2">พฤติกรรมที่ปฏิบัติ</th>
			<th colspan="3">ความถี่ในการปฏิบัติ</th>
			<th rowspan="2">คะแนน</th>
		</tr>
		<tr>
			<th>ประจำ</th>
			<th>ครั้งคราว</th>
			<th>ไม่เคยเลย</th>

		</tr>
		<?php if(empty($behavior)){ ?>
		<?php foreach($title as $key =>$t):?>
		<tr>
			<td class="title"><?php echo $t ?></td>
			<td><input type="radio" name="score_<?php echo $key ?>" value="5"></td>
			<td><input type="radio" name="score_<?php echo $key ?>" value="3"></td>
			<td><input type="radio" name="score_<?php echo $key ?>" value="0"></td>
			<td>
				<input type ="hidden"  name="f_main_id" value="">
				<input type ="hidden"  name="f_detail_id" value="">
			</td>
		</tr>
		<?php endforeach; ?>
		<?php }else{ ?>
		<?php for($i=1;$i<21;$i++): ?>
		<tr>
			<td class="title"><?php echo $title[$i] ?></td>
			<td><input type="radio" name="score_<?php echo $i ?>" value="5" <?php if($behavior['score_'.$i]=="5"){echo 'checked="checked"';} ?>></td>
			<td><input type="radio" name="score_<?php echo $i ?>" value="3" <?php if($behavior['score_'.$i]=="3"){echo 'checked="checked"';} ?>></td>
			<td><input type="radio" name="score_<?php echo $i ?>" value="0" <?php if($behavior['score_'.$i]=="0"){echo 'checked="checked"';} ?>></td>
			<td><?php echo $arr[$i]=$behavior['score_'.$i]; ?>
				<input type ="hidden"  name="f_main_id"   value="<?php echo $behavior['main_id'] ?>">
				<input type ="hidden"  name="f_detail_id" value="<?php echo $behavior['detail_id'] ?>">
			</td>
		</tr>
		<?php endfor; ?>
		<?php } ?>
		<tr>
			<td colspan="4"><strong>คะแนนรวมพฤติกรรม</strong></td>
			<td><strong><?php echo  array_sum($arr);?></strong></td>
		</tr>

		</table>
		<div class="alert alert-warning "><span class="label label-warning">เกณฑ์คะแนน</span>
		<ul class="info" style="list-style: none">
			<li class="offset1"><span style="width:189px;display: inline-block">คะแนนรวมระหว่าง  90 - 100  </span>คะแนน หมายถึง พฤติกรรมด้านสุขภาพขอท่านดีมาก</li>
			<li class="offset1"><span style="width:189px;display: inline-block">คะแนนรวมระหว่าง  80 - 89   </span>คะแนน หมายถึง พฤติกรรมด้านสุขภาพของท่านดี</li>
			<li class="offset1"><span style="width:189px;display: inline-block">คะแนนรวมระหว่าง  60 - 79   </span>คะแนน หมายถึง พฤติกรรมด้านสุขภาพของท่านดีปานกลาง</li>
			<li class="offset1"><span style="width:189px;display: inline-block">คะแนนรวมน้อยกว่า 60  	    </span>คะแนน หมายถึง ควรปรับเปลี่ยนพฤติกรรมเพื่อประโยชน์ต่อสุขภาพที่ดี</li>
		</ul>
		<br/>
		<span class="label label-warning">สรุปการประเมิน  </span><span style="margin-left:40px;">ถ้าท่านมีพฤติกรรมในแต่ละข้อด้วยความถี่ในการปฏิบัติ ดังนี้</span>
		<table class="table offset1" style="width:60%;margin-top:20px;background-color:#FFFFFF">
			<tr>
				<td><span class="label label-default">เป็นประจำ</span></td>
				<td>(5-7 วันต่อสัปดาห์ ขอให้ท่านจงปฏิบัติต่อไป)</td>
				<td>สะสมคะแนนให้ข้อละ 5 คะแนน</td>
			</tr>
			<tr>
				<td><span class="label label-default">เป็นครั้งคราว</span></td>
				<td>(1-4  วันต่อสัปดาห์) ขอให้ท่านจงพยายามปฏิบัติเป็นประจำ</td>
				<td>สะสมคะแนนได้ข้อละ 3 คะแนน</td>
			</tr>
			<tr>
				<td><span class="label label-default">ไม่เคยเลบ</span></td>
				<td>ขอให้ท่านพิจารณาถึงสาเหตุที่ไม่ได้ปฏิบัติ แล้วพยายามเปลี่ยนมาเป็นครั้งคราว หรือปฏิบัติเป็นประจำเพื่อประโยชน์ต่อสุขภาพ</td>
				<td>สะสมคะแนนได้ข้อละ 0 คะแนน</td>
			</tr>
		</table>
		</div>
<div class="aligncenter"><button name="btn_print" onclick="window.print();" class="btn btn-default btn-large">พิมพ์งาน</button></div>