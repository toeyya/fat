<div id="blank">
<div class="titleGroup"><img src="media/img/title-group.png" width="394" height="92" /></div>
<div class="titleGroup2">ศูนย์การเรียนรู้องค์กรต้นแบบไร้พุง ปี 2557</div>
<div id="Breadcrumbs">
<ol id="path-breadcrumb">
  <li><a href="home">หน้าแรก</a></li>
  <li class="active">องค์กรต้นแบบไร้พุง</li>
</ol>
</div>
<div class="contentGroup">
<div class="search" style="border-right:1px solid #DAD8D9;padding:20px; text-align:center;background-color:#F5F3F4">
	<form class="form-search" method="get" action="criteria/index">
    <span>องค์กร</span>
    <input type="text" class="search-query">
	<span>ปีงบประมาณ </span>
		<?php echo form_dropdown('year',get_year_option("2556"),@$_GET['year'],'class="search-query"',''); ?>
		<button name="btn_search" class="btn btn-success">ค้นหา</button>
	</form>
</div>
<table width="100%" cellpadding="1" cellspacing="1">
  <tr>
    <td colspan="3" bgcolor="#f2f8fd" style="border-top:10px solid white; padding:10px;">
    <div class="line6"></div>
<table width="100%" border="0" cellpadding="0" style="line-height:30px; border-collapse:separate; border-spacing:5px; padding:5px; color:black;">
          <tr>
            <td width="24%" align="right"><label> ชื่อองค์กร :</label> </td>
            <td colspan="4"><span class="titleName"><?php echo $user['agency_name'] ?> </span></td>
          </tr>
          <tr>
          	<td width="24%" align="right"><label>ประเภท:</label></td>
            <td colspan="4"><span class="titleName"><?php echo $agency_type; ?></span></td>
          </tr>
          <tr>
            <td width="24%" align="right"><label> เลขที่โครงการย่อย :</label></td>
            <td colspan="3">&nbsp;</td>
          </tr>
  		  <tr>
  		  	<td width="20%" align="right"><label>งบประมาณที่ได้รับ:</label></td>
            <td><span class="titleName"><?php echo number_format($user['budget']) ?></span></td>
  		  </tr>
          <tr>
            <td align="right"> <label>ที่ตั้ง:</label></td>
            <td width="19%"><span class="titleName"><?php echo $user['address'] ?></span></td>
            <td width="50px"><label>ตำบล :</label></td>
            <td><span class="titleName"><?php echo $district ?></span></td>
            <td width="50px"><label>อำเภอ :</label></td>
            <td><span class="titleName"><?php echo $amphur ?></span></td>
            <td width="50px"><label>จังหวัด :</label></td>
            <td><span class="titleName"><?php echo $province ?></span></td>
          </tr>
          <tr>
            <td align="right"><label>ผู้ประสานงานโครงการ :</label></td>
            <td><span class="titleName"><?php echo $user['firstname']." ".$user['lastname'] ?></span></td>
            <td width="70px"><label>ตำแหน่ง :</label></td>
            <td><span class="titleName"><?php echo $user['position'] ?></span></td>
            <td width="30px"><label>โทร :</label></td>
            <td><span class="titleName"><?php echo $user['phone'] ?></span></td>
            <td width="30px"><label>อีเมล์ :</label></td>
            <td><span class="titleName"><?php echo $user['email'] ?></span></td>
          </tr>
        </table>
        <div class="line6"></div>
    </td>
  </tr>
</table>
<div id="span7">
<form method="post" action="criteria/save" enctype="multipart/form-data">

<table width="100%" cellpadding="1" cellspacing="1">
<tr>
<td valign="top" bgcolor="#EFFEDD" style="border-right:1px solid #CEE6B2;padding:10px;"><strong><font color="#478302">จำนวนประชากร</font> อายุ 15 ปีขึ้นไป ทั้งหมด</strong>
<div id="formGroup" style="line-height: 25px;">
    <label style="margin-left:55px;display:inline-block"> ชาย  : </label>
    <input type="text" name="people_fiveteen_male" value="">
    <label style="display: inline-block">คน <span style="color:#F00;">*</span></label><br>
    <label style="margin-left:51px;display:inline-block">หญิง :  </label>
    <input type="text" name="people_fiveteen_female" value="">
    <label style="display: inline-block">คน <span style="color:#F00;">*</span></label><br>
    <label style="margin-left:57px;display:inline-block">รวม :  </label>
    <input type="text" name="people_total">
    <label style="display: inline-block">คน</label><br>
    <label style="display: inline-block">คิดเป็นร้อยละ :</label>
    <input type="text" name="people_percent">
    <label style="display: inline-block">%</label>
 </div>
</td>
<td valign="top" bgcolor="#EFFEDD" style="border-right:1px solid #CEE6B2;padding:10px;"><strong><font color="#478302">จำนวนประชากร</font> อายุ 15 ปีขึ้นไปที่วัดเส้นรอบเอว</strong>
  <div id="formGroup">
    <label style="margin-left:55px;display:inline-block"> ชาย  : </label>
    <input type="text">
    <label style="display: inline-block">คน <span style="color:#F00;">*</span></label><br>
    <label style="margin-left:51px;display:inline-block">หญิง :  </label>
    <input type="text">
    <label style="display: inline-block">คน <span style="color:#F00;">*</span></label><br>
    <label style="margin-left:57px;display:inline-block">รวม :  </label>
    <input type="text">
    <label style="display: inline-block">คน</label><br>
    <label style="display: inline-block">คิดเป็นร้อยละ :</label>
    <input type="text">
    <label style="display: inline-block">%</label>
  </div></td>
<td valign="top" bgcolor="#EFFEDD" style="padding:10px;"><strong><font color="#478302">จำนวนประชากร</font> อายุ 15 ปีขึ้นไปที่วัดเส้นรอบเอวปกติ</strong>
  <div id="formGroup">
    <label style="margin-left:55px;display:inline-block"> ชาย  : </label>
    <input type="text">
    <label style="display: inline-block">คน <span style="color:#F00;">*</span></label><br>
    <label style="margin-left:51px;display:inline-block">หญิง :  </label>
    <input type="text">
    <label style="display: inline-block">คน <span style="color:#F00;">*</span></label><br>
    <label style="margin-left:57px;display:inline-block">รวม :  </label>
    <input type="text">
    <label style="display: inline-block">คน</label><br>
    <label style="display: inline-block">คิดเป็นร้อยละ :</label>
    <input type="text">
    <label style="display: inline-block">%</label>
  </div></td>
</tr>
</table>
<br/>
<table class="table table-bordered table-condensed">
<thead>
<tr class="success">
	<th>เกณฑ์การประเมิน</th>
	<th>หลักฐาน</th>
	<th>ชื่อเอกสาร </th>
	<th>ผลการประเมิน</th>
</tr>
</thead>
<tr><?php $i=0; ?>
	<?php echo (!empty($rs['id'])) ? form_hidden("updated",date('Y-m-d H:i:s')) : form_hidden("created",date('Y-m-d H:i:s'))?>

	<td class="title" width="620">1.มีคณะกรรมการการบริหารจัดการองค์กรและชุมชน</td>
	<td width="100" valign="top">
		<label class="radio-inline"><input type="radio" name="evidence1" value="1" <?php if(@$rs[$i]['evidence']=="1"){echo 'checked="checked"';} ?>>มี</label>
		<label class="radio-inline"><input type="radio" name="evidence1" value="2" <?php if(@$rs[$i]['evidence']=="2"){echo 'checked="checked"';} ?>>ไม่มี</label></td>
	<td style="text-align: left"><input type="text" name="file_name1" value="<?php echo @$rs[$i]['file_name'] ?>" class="input-medium">

		<input type="file" name="file1" >
		<?php if(@$rs[$i]['files']): ?>
		<p>
			<a href="criteria/download/<?php echo @$rs[$i]['id']?>" class="btn btn-mini btn-info">ดาวน์โหลด</a>
			<a href="criteria/delete/<?php echo @$rs[$i]['id'] ?>" class="btn btn-mini btn-default" onclick="return confirm('ยืนยันการลบข้อมูล ?')">ลบไฟล์</a>
		</p>
		<?php endif ?>
		</td>
	<td width="130">
		<label class="radio-inline"><input type="radio" name="result1" value="1" <?php if(@$rs[$i]['result']=="1"){echo 'checked="checked"';} ?>>ผ่าน</label>
		<label class="radio-inline"><input type="radio" name="result1" value="2" <?php if(@$rs[$i]['result']=="2"){echo 'checked="checked"';} ?>>ไม่ผ่าน</label>
	</td>
	<input type="hidden" name="id1" value="<?php echo @$rs[$i]['id'] ?>">
</tr>
<tr><?php $i=1; ?>
	<td class="title">2.มีนโยบายที่เหมาะสมในองค์กร</td>
	<td><label class="radio inline"><input type="radio" name="evidence2" value="1" <?php if(@$rs[$i]['evidence']=="1"){echo 'checked="checked"';} ?>>มี</label>
		<label class="radio inline"><input type="radio" name="evidence2" value="2" <?php if(@$rs[$i]['evidence']=="2"){echo 'checked="checked"';} ?>>ไม่มี</label></td>
	<td style="text-align: left">
		<input type="text" name="file_name2" value="<?php echo @$rs[$i]['file_name'] ?>" class="input-medium inline">
		<input type="file" name="file2" >

		<?php if(!empty($rs[$i]['files'])): ?>
		<p>
			<a href="criteria/download/<?php echo @$rs[$i]['id']?>" class="btn btn-mini btn-info">ดาวน์โหลด</a>
			<a href="criteria/delete/<?php echo @$rs[$i]['id'] ?>" class="btn btn-mini btn-default" onclick="return confirm('ยืนยันการลบข้อมูล ?');">ลบไฟล์</a>
		</p>
		<?php endif ?>
		</td>
	<td><label class="radio inline"><input type="radio" name="result2" value="1" <?php if(@$rs[$i]['result']=="1"){echo 'checked="checked"';} ?>>ผ่าน</label>
		<label class="radio inline"><input type="radio" name="result2" value="2" <?php if(@$rs[$i]['result']=="2"){echo 'checked="checked"';} ?>>ไม่ผ่าน</label>
	</td>
	<input type="hidden" name="id2" value="<?php echo @$rs[$i]['id'] ?>">
</tr>
<tr><?php $i=2; ?>
	<td class="title">3.มีแผนงาน และการจัดสรรงบประมาณสนับสนุนในโครงการฯ ที่เข้าร่วม </td>
	<td><label class="radio inline"><input type="radio" name="evidence3" value="1" <?php if(@$rs[$i]['evidence']=="1"){echo 'checked="checked"';} ?>>มี</label>
		<label class="radio inline"><input type="radio" name="evidence3" value="2" <?php if(@$rs[$i]['evidence']=="2"){echo 'checked="checked"';} ?>>ไม่มี</label></td>
	<td style="text-align: left"><input type="text" name="file_name3"  value="<?php echo @$rs[$i]['file_name'] ?>" class="input-medium">
		<input type="file" name="file3" >

		<?php if(@$rs[$i]['files']): ?>
		<p>
			<a href="criteria/download/<?php echo @$rs[$i]['id']?>" class="btn btn-mini btn-info">ดาวน์โหลด</a>
			<a href="criteria/delete/<?php echo @$rs[$i]['id'] ?>" class="btn btn-mini btn-default" onclick="return confirm('ยืนยันการลบข้อมูล ?');">ลบไฟล์</a>
		</p>
		<?php endif ?>

		</td>
	<td><label class="radio inline"><input type="radio" name="result3" value="1" <?php if(@$rs[$i]['result']=="1"){echo 'checked="checked"';} ?>>ผ่าน</label>
		<label class="radio inline"><input type="radio" name="result3" value="2" <?php if(@$rs[$i]['result']=="2"){echo 'checked="checked"';} ?>>ไม่ผ่าน</label>
	</td>
	<input type="hidden" name="id3" value="<?php echo @$rs[$i]['id'] ?>">
</tr>
<tr><?php $i=3; ?>
	<td class="title">4.มีกระบวนการสร้างทักษะลดพุงให้กับประชากรกลุ่มเป้าหมาย โดยการนำภารกิจ 3 อ.(อาหาร ออกกำลังกาย และอารมณ์) มาปฏิบัติ </td>
	<td><label class="radio inline"><input type="radio" name="evidence4" value="1" <?php if(@$rs[$i]['evidence']=="1"){echo 'checked="checked"';} ?>>มี</label>
		<label class="radio inline"><input type="radio" name="evidence4" value="2" <?php if(@$rs[$i]['evidence']=="2"){echo 'checked="checked"';} ?>>ไม่มี</label></td>
	<td style="text-align: left">
		<input type="text" name="file_name4"  value="<?php echo @$rs[3]['file_name'] ?>" class="input-medium">
		<input type="file" name="file4" >

		<?php if(@$rs[$i]['files']): ?>
		<p>
			<a href="criteria/download/<?php echo @$rs[$i]['id']?>" class="btn btn-mini btn-info">ดาวน์โหลด</a>
			<a href="criteria/delete/<?php echo @$rs[$i]['id'] ?>" class="btn btn-mini btn-default" onclick="return confirm('ยืนยันการลบข้อมูล ?');">ลบไฟล์</a>
		</p>
		<?php endif ?>

		</td>
	<td><label class="radio inline"><input type="radio" name="result4" value="1" <?php if(@$rs[$i]['result']=="1"){echo 'checked="checked"';} ?>>ผ่าน</label>
		<label class="radio inline"><input type="radio" name="result4" value="2" <?php if(@$rs[$i]['result']=="2"){echo 'checked="checked"';} ?>>ไม่ผ่าน</label>
	</td>
	<input type="hidden" name="id4" value="<?php echo @$rs[$i]['id'] ?>">
</tr>
<tr><?php $i=4; ?>
	<td class="title">5.การปรับปรุงสิ่งแวดล้อมที่เอื้อต่อภารกิจ 3อ. </td>
	<td><label class="radio inline"><input type="radio" name="evidence5" value="1" <?php if(@$rs[$i]['evidence']=="1"){echo 'checked="checked"';} ?>>มี</label>
		<label class="radio inline"><input type="radio" name="evidence5" value="2" <?php if(@$rs[$i]['evidence']=="2"){echo 'checked="checked"';} ?>>ไม่มี</label></td>
	<td style="text-align: left"><input type="text" name="file_name5" value="<?php echo @$rs[$i]['file_name'] ?>" class="input-medium">
		<input type="file" name="file5" >
		<?php if(@$rs[$i]['files']): ?>
		<p>
			<a href="criteria/download/<?php echo @$rs[$i]['id']?>" class="btn btn-mini btn-info">ดาวน์โหลด</a>
			<a href="criteria/delete/<?php echo @$rs[$i]['id'] ?>" class="btn btn-mini btn-default" onclick="return confirm('ยืนยันการลบข้อมูล ?');">ลบไฟล์</a>
		</p>
		<?php endif ?>

		</td>
	<td><label class="radio inline"><input type="radio" name="result5" value="1" <?php if(@$rs[$i]['result']=="1"){echo 'checked="checked"';} ?>>ผ่าน</label>
		<label class="radio inline"><input type="radio" name="result5" value="2" <?php if(@$rs[$i]['result']=="2"){echo 'checked="checked"';} ?>>ไม่ผ่าน</label>
	</td>
	<input type="hidden" name="id5" value="<?php echo @$rs[$i]['id'] ?>">
</tr>
<tr><?php $i=5;?>
	<td class="title"> 6.มีการสื่อสารประชาสัมพันธ์  เพื่อสร้างความตระหนักและแรงขับเคลื่อนในองค์กร/ชุมชน</td>
	<td><label class="radio inline"><input type="radio" name="evidence6" value="1" <?php if(@$rs[$i]['evidence']=="1"){echo 'checked="checked"';} ?>>มี</label>
		<label class="radio inline"><input type="radio" name="evidence6" value="2" <?php if(@$rs[$i]['evidence']=="2"){echo 'checked="checked"';} ?>>ไม่มี</label></td>
	<td style="text-align: left">
		<input type="text" name="file_name6" value="<?php echo @$rs[$i]['file_name'] ?>" class="input-medium">
		<input type="file" name="file6" >

		<?php if(@$rs[$i]['files']): ?>
		<p>
			<a href="criteria/download/<?php echo @$rs[$i]['id']?>" class="btn btn-mini btn-info">ดาวน์โหลด</a>
			<a href="criteria/delete/<?php echo @$rs[$i]['id'] ?>" class="btn btn-mini btn-default" onclick="return confirm('ยืนยันการลบข้อมูล ?');">ลบไฟล์</a>
		</p>
		<?php endif ?>

		</td>
	<td><label class="radio inline"><input type="radio" name="result6" value="1" <?php if(@$rs[$i]['result']=="1"){echo 'checked="checked"';} ?>>ผ่าน</label>
		<label class="radio inline"><input type="radio" name="result6" value="2" <?php if(@$rs[$i]['result']=="2"){echo 'checked="checked"';} ?>>ไม่ผ่าน</label>
	</td>
	<input type="hidden" name="id6" value="<?php echo @$rs[$i]['id'] ?>">
</tr>
<tr>
	<td class="title" colspan="4"> 7.ผลลัพธ์ในองค์กรและชุมชน ภายหลัง 4 เดือน </td>
</tr>
<tr><?php $i=6;?>
	<td class="title"><span style="margin-left:15px;"> 7.1 มีสมาชิกร่วมประเมินภาวะโภชนาการ ร้อยละ 80</span></td>
	<td><label class="radio inline"><input type="radio" name="evidence7" value="1" <?php if(@$rs[$i]['evidence']=="1"){echo 'checked="checked"';} ?>>มี</label>
		<label class="radio inline"><input type="radio" name="evidence7" value="2" <?php if(@$rs[$i]['evidence']=="2"){echo 'checked="checked"';} ?>>ไม่มี</label></td>
	<td style="text-align: left">
		<input type="text" name="file_name7" value="<?php echo @$rs[$i]['file_name'] ?>" class="input-medium">
		<input type="file" name="file7" >
		<?php if(@$rs[$i]['files']): ?>
		<p>
			<a href="criteria/download/<?php echo @$rs[$i]['id']?>" class="btn btn-mini btn-info">ดาวน์โหลด</a>
			<a href="criteria/delete/<?php echo @$rs[$i]['id'] ?>" class="btn btn-mini btn-default" onclick="return confirm('ยืนยันการลบข้อมูล ?');">ลบไฟล์</a>
		</p>
		<?php endif ?>

		</td>
	<td><label class="radio inline"><input type="radio" name="result7" value="1" <?php if(@$rs[$i]['result']=="1"){echo 'checked="checked"';} ?>>ผ่าน</label>
		<label class="radio inline"><input type="radio" name="result7" value="2" <?php if(@$rs[$i]['result']=="2"){echo 'checked="checked"';} ?>>ไม่ผ่าน</label>
	</td>
	<input type="hidden" name="id7" value="<?php echo @$rs[$i]['id'] ?>">
</tr>
<tr><?php $i=7;?>
	<td class="title"><span style="margin-left:15px;"> 7.2 มีการประเมินภาวะโภชนาการเกิน โดยการวัดก่อนและหลังในบุคคลคนเดียวกัน</span></td>
	<td><label class="radio inline"><input type="radio" name="evidence8" value="1" <?php if(@$rs[$i]['evidence']=="1"){echo 'checked="checked"';} ?>>มี</label>
		<label class="radio inline"><input type="radio" name="evidence8" value="2" <?php if(@$rs[$i]['evidence']=="2"){echo 'checked="checked"';} ?>>ไม่มี</label></td>
	<td style="text-align: left">
		<input type="text" name="file_name8" value="<?php echo @$rs[$i]['file_name'] ?>" class="input-medium">
		<input type="file" name="file8" >
		<?php if(@$rs[$i]['files']): ?>
		<p>
			<a href="criteria/download/<?php echo @$rs[$i]['id']?>" class="btn btn-mini btn-info">ดาวน์โหลด</a>
			<a href="criteria/delete/<?php echo @$rs[$i]['id'] ?>" class="btn btn-mini btn-default" onclick="return confirm('ยืนยันการลบข้อมูล ?');">ลบไฟล์</a>
		</p>
		<?php endif ?>
	</td>
	<td><label class="radio inline"><input type="radio" name="result8" value="1" <?php if(@$rs[$i]['result']=="1"){echo 'checked="checked"';} ?>>ผ่าน</label>
		<label class="radio inline"><input type="radio" name="result8" value="2" <?php if(@$rs[$i]['result']=="2"){echo 'checked="checked"';} ?>>ไม่ผ่าน</label>
	</td>
	<input type="hidden" name="id8" value="<?php echo @$rs[$i]['id'] ?>">
</tr>
<tr><?php $i=8; ?>
	<td class="title"><span style="margin-left:30px;"> - สมาชิกองค์กรอายุ 15 ปีขึ้นไป ที่มีรอบเอวเกิน  สามารถลดรอบเอวได้</span></td>
	<td><label class="radio inline"><input type="radio" name="evidence9" value="1" <?php if(@$rs[$i]['evidence']=="1"){echo 'checked="checked"';} ?>>มี</label>
		<label class="radio inline"><input type="radio" name="evidence9" value="2" <?php if(@$rs[$i]['evidence']=="2"){echo 'checked="checked"';} ?>>ไม่มี</label></td>
	<td style="text-align: left">
		<input type="text" name="file_name9" value="<?php echo @$rs[$i]['file_name'] ?>" class="input-medium">
		<input type="file" name="file9" >
		<?php if(@$rs[$i]['files']): ?>
		<p>
			<a href="criteria/download/<?php echo @$rs[$i]['id']?>" class="btn btn-mini btn-info">ดาวน์โหลด</a>
			<a href="criteria/delete/<?php echo @$rs[$i]['id'] ?>" class="btn btn-mini btn-default" onclick="return confirm('ยืนยันการลบข้อมูล ?');">ลบไฟล์</a>
		</p>
		<?php endif ?>

	</td>
	<td><label class="radio inline"><input type="radio" name="result9" value="1" <?php if(@$rs[$i]['result']=="1"){echo 'checked="checked"';} ?>>ผ่าน</label>
		<label class="radio inline"><input type="radio" name="result9" value="2" <?php if(@$rs[$i]['result']=="2"){echo 'checked="checked"';} ?>>ไม่ผ่าน</label>
	</td>
	<input type="hidden" name="id9" value="<?php echo @$rs[$i]['id'] ?>">
</tr>
<tr><?php $i=9; ?>
	<td class="title"><span style="margin-left:30px;"> - ร้อยละ 100 ของผู้มีรอบเอวปกติสามารถควบคุมรอบเอวอยู่ในเกณฑ์ปกติ </span></td>
	<td><label class="radio inline"><input type="radio" name="evidence10" value="1" <?php if(@$rs[$i]['evidence']=="1"){echo 'checked="checked"';} ?>>มี</label>
		<label class="radio inline"><input type="radio" name="evidence10" value="2" <?php if(@$rs[$i]['evidence']=="2"){echo 'checked="checked"';} ?>>ไม่มี</label></td>
	<td style="text-align: left">
		<input type="text" name="file_name10" value="<?php echo @$rs[$i]['file_name'] ?>" class="input-medium">
		<input type="file" name="file10" >
		<?php if(@$rs[$i]['files']): ?>
		<p>
			<a href="criteria/download/<?php echo @$rs[$i]['id']?>" class="btn btn-mini btn-info">ดาวน์โหลด</a>
			<a href="criteria/delete/<?php echo @$rs[$i]['id'] ?>" class="btn btn-mini btn-default" onclick="return confirm('ยืนยันการลบข้อมูล ?');">ลบไฟล์</a>
		</p>
		<?php endif ?>
	</td>
	<td><label class="radio inline"><input type="radio" name="result10" value="1" <?php if(@$rs[$i]['result']=="1"){echo 'checked="checked"';} ?>>ผ่าน</label>
		<label class="radio inline"><input type="radio" name="result10" value="2" <?php if(@$rs[$i]['result']=="2"){echo 'checked="checked"';} ?>>ไม่ผ่าน</label>
	</td>
	<input type="hidden" name="id10" value="<?php echo @$rs[$i]['id'] ?>">
</tr>
<tr><?php $i=10; ?>
	<td class="title"><span style="margin-left:15px;"> 7.3ผลลัพธ์ในองค์กรและชุมชน ภายหลัง 4 เดือน </span></td>
	<td><label class="radio inline"><input type="radio" name="evidence11" value="1" <?php if(@$rs[$i]['evidence']=="1"){echo 'checked="checked"';} ?>>มี</label>
		<label class="radio inline"><input type="radio" name="evidence11" value="2" <?php if(@$rs[$i]['evidence']=="2"){echo 'checked="checked"';} ?>>ไม่มี</label></td>
	<td style="text-align: left">
		<input type="text" name="file_name11" value="<?php echo @$rs[$i]['file_name'] ?>" class="input-medium">
		<input type="file" name="file11" >
		<?php if(@$rs[$i]['files']): ?>
		<p>
			<a href="criteria/download/<?php echo @$rs[$i]['id']?>" class="btn btn-mini btn-info">ดาวน์โหลด</a>
			<a href="criteria/delete/<?php echo @$rs[$i]['id'] ?>" class="btn btn-mini btn-default" onclick="return confirm('ยืนยันการลบข้อมูล ?');">ลบไฟล์</a>
		</p>
		<?php endif ?>
	</td>
	<td><label class="radio inline"><input type="radio" name="result11" value="1" <?php if(@$rs[$i]['result']=="1"){echo 'checked="checked"';} ?>>ผ่าน</label>
		<label class="radio inline"><input type="radio" name="result11" value="2" <?php if(@$rs[$i]['result']=="2"){echo 'checked="checked"';} ?>>ไม่ผ่าน</label>
	</td>
	<input type="hidden" name="id11" value="<?php echo @$rs[$i]['id'] ?>">
</tr>
<tr><?php $i=11; ?>
	<td class="title">8.มีแกนนำที่มีความรู้ ความสามารถถ่ายทอดประสบการณ์แก่องค์กรเครือข่ายได้</td>
	<td><label class="radio inline"><input type="radio" name="evidence12" value="1" <?php if(@$rs[$i]['evidence']=="1"){echo 'checked="checked"';} ?>>มี</label>
		<label class="radio inline"><input type="radio" name="evidence12" value="2" <?php if(@$rs[$i]['evidence']=="2"){echo 'checked="checked"';} ?>>ไม่มี</label></td>
	<td style="text-align: left">
		<input type="text" name="file_name12" value="<?php echo @$rs[$i]['file_name'] ?>" class="input-medium">
		<input type="file" name="file12" >

		<?php if(@$rs[$i]['files']): ?>
		<p>
			<a href="criteria/download/<?php echo @$rs[$i]['id']?>" class="btn btn-mini btn-info">ดาวน์โหลด</a>
			<a href="criteria/delete/<?php echo @$rs[$i]['id'] ?>" class="btn btn-mini btn-default" onclick="return confirm('ยืนยันการลบข้อมูล ?');">ลบไฟล์</a>
		</p>
		<?php endif ?>

	</td>
	<td><label class="radio inline"><input type="radio" name="result12" value="1" <?php if(@$rs[$i]['result']=="1"){echo 'checked="checked"';} ?>>ผ่าน</label>
		<label class="radio inline"><input type="radio" name="result12" value="2" <?php if(@$rs[$i]['result']=="2"){echo 'checked="checked"';} ?>>ไม่ผ่าน</label>
	</td>
	<input type="hidden" name="id12" value="<?php echo @$rs[$i]['id'] ?>">
</tr>
<tr><?php $i=12; ?>
	<td class="title">9.มีกระบวนการขยายองค์กรสู่การเป็นศูนย์การเรียนรู้องค์กรต้นแบบไร้พุง</td>
	<td><label class="radio inline"><input type="radio" name="evidence13" value="1" <?php if(@$rs[$i]['evidence']=="1"){echo 'checked="checked"';} ?>>มี</label>
		<label class="radio inline"><input type="radio" name="evidence13" value="2" <?php if(@$rs[$i]['evidence']=="2"){echo 'checked="checked"';} ?>>ไม่มี</label></td>
	<td style="text-align: left">
		<input type="text" name="file_name13" value="<?php echo @$rs[$i]['file_name'] ?>" class="input-medium">
		<input type="file" name="file13" >
		<?php if(@$rs[$i]['files']): ?>
		<p>
			<a href="criteria/download/<?php echo @$rs[$i]['id']?>" class="btn btn-mini btn-info">ดาวน์โหลด</a>
			<a href="criteria/delete/<?php echo @$rs[$i]['id'] ?>" class="btn btn-mini btn-default" onclick="return confirm('ยืนยันการลบข้อมูล ?');">ลบไฟล์</a>
		</p>
		<?php endif ?>

	</td>
	<td><label class="radio inline"><input type="radio" name="result13" value="1" <?php if(@$rs[$i]['result']=="1"){echo 'checked="checked"';} ?>>ผ่าน</label>
		<label class="radio inline"><input type="radio" name="result13" value="2" <?php if(@$rs[$i]['result']=="2"){echo 'checked="checked"';} ?>>ไม่ผ่าน</label>
	</td>
	<input type="hidden" name="id13" value="<?php echo @$rs[$i]['id'] ?>">
</tr>
<tr><?php $i=13; ?>
	<td class="title">10.มีระบบเฝ้าระวังภาวะอ้วนลงพุง พฤติกรรมการบริโภคและการออกแรง</td>
	<td><label class="radio inline"><input type="radio" name="evidence14" value="1" <?php if(@$rs[$i]['evidence']=="1"){echo 'checked="checked"';} ?>>มี</label>
		<label class="radio inline"><input type="radio" name="evidence14" value="2" <?php if(@$rs[$i]['evidence']=="2"){echo 'checked="checked"';} ?>>ไม่มี</label></td>
	<td style="text-align: left">
		<input type="text" name="file_name14" value="<?php echo @$rs[$i]['file_name'] ?>" class="input-medium">
		<input type="file" name="file14" >

		<?php if(@$rs[$i]['files']): ?>
		<p>
			<a href="criteria/download/<?php echo @$rs[$i]['id']?>" class="btn btn-mini btn-info">ดาวน์โหลด</a>
			<a href="criteria/delete/<?php echo @$rs[$i]['id'] ?>" class="btn btn-mini btn-default" onclick="return confirm('ยืนยันการลบข้อมูล ?');">ลบไฟล์</a>
		</p>
		<?php endif ?>

	</td>
	<td><label class="radio inline"><input type="radio" name="result14" value="1" <?php if(@$rs[$i]['result']=="1"){echo 'checked="checked"';} ?>>ผ่าน</label>
		<label class="radio inline"><input type="radio" name="result14" value="2" <?php if(@$rs[$i]['result']=="2"){echo 'checked="checked"';} ?>>ไม่ผ่าน</label>
	</td>
	<input type="hidden" name="id14" value="<?php echo @$rs[$i]['id'] ?>">
</tr>
<tr rowspan="2">
	<td colspan="3"><p>สรุปผลการประเมิน </p>
		<p>ผ่านข้อ 1 ถึง ข้อ 7 หมายถึงองค์กรต้นแบบไร้พุง</p>
		<p>ผ่านข้อ 1 ถึง ข้อ 10 หมายถึง ศูนย์การเรียนรู้องค์กรต้นแบบไร้พุง</p>
	</td>
	<td></td>
</tr>
</table>
<div class="aligncenter"><button class="btnSave" style="width:300px;" name="btn_save" type="submit">ยืนยัน</button></div>
</form>

</div>
</div>
</div>
