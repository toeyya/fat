
<div>
	<hr>
	<ul class="breadcrumb">
		<li><a href="admin">หน้าแรก</a></li>
		 <li><a href="permission/admin/permission">สิทธิ์การใช้งาน</a></li>
		 <li class="active"><?php echo $permission['name']?></li>
	</ul>
	<hr>
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="box">
			<div class="box-header">
				<h2><i class="fa fa-align-justify"></i><span class="break"></span>สิทธิ์การใช้งาน</h2>
			</div>
			<div class="box-content">
			<form action="permission/admin/permission/save" method="post" id="form1" name="form" class="form-horizontal">
				  <div class="form-group">
				   <label for="name" class="col-sm-2 control-label"><label class="alertred">*</label>ชื่อ</label>
				    <div class="col-sm-3">
				      <input type="text" class="form-control" name="name"  placeholder="ชื่อ" value="<?php echo $permission['name'] ?>">
				    </div>
				  </div>
				<?php foreach($module as $key => $item): ?>
					  <div class="form-group">
					   <label for="name" class="col-sm-2 control-label"><?php echo $item['label'] ?></label>
					    <div class="col-sm-5">
						<?php foreach($item['permission'] as $perm): ?>
						   <label class="checkbox-inline " for="<?php echo 'checkbox['.$key.']['.$perm.']'; ?>" >
						   		<input id="<?php echo 'checkbox['.$key.']['.$perm.']'; ?>" type="checkbox" name="<?php echo 'checkbox['.$key.']['.$perm.']'; ?>" value="1" <?php echo (!empty($rs_perm[$key][$perm])) ? 'checked' : ''; ?> >
						   	<?php echo @$crud[$perm]; ?>
						   </label>

						<?php endforeach; ?>
						<span class="pull-right">
						   	<button class="btn btn-sm check" type="button" >เลือกทั้งหมด</button> <button class="btn btn-sm uncheck" type="button" >ไม่เลือกทั้งหมด</button>
						 </span>
					    </div>
					  </div>
				<?php endforeach; ?>
				<div class="form-group">
				    <div class="col-sm-offset-2 col-sm-12">
				      <button type="submit" class="btn btn-primary btn-sm">บันทึก</button>
				      <button type="submit" class="btn btn-default btn-sm" onclick="history.go(-1);">ย้อนกลับ</button>
				      <input type="hidden" name="id" id="permission_id" value="<?php echo @$permission['id']?>">
				      <?php echo (!empty($permission['id'])) ? form_hidden('updated',date('Y-m-d H:i:s')) : form_hidden('created',date('Y-m-d H:i:s'))?>
				    </div>
				  </div>

			</form>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){

		$(".check").live("click",function(){
			$(this).closest(".form-group").find("input[type=checkbox]").attr('checked',true);
		});
		$(".uncheck").live("click",function(){
			$(this).closest(".form-group").find("input[type=checkbox]").removeAttr('checked',true);
		});
		$("#form1").validate({rules:{name:"required"},messages:{name:"กรุณาระบุ"}});
	});
</script>