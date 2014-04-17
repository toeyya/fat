<style>
	.perm{margin-right:10px;}
</style>

<h1>สิทธิ์การใช้งาน</h1>
<form action="permissions/admin/permissions/save" method="post" id="form" name="form" class="form-horizontal">
			  <div class="form-group">
			   <label for="name" class="col-sm-2 control-label"><label class="alertred">*</label>ชื่อ</label>
			    <div class="col-sm-4">
			      <input type="text" class="form-control" name="name"  placeholder="ชื่อ" value="<?php echo $rs['name'] ?>">
			    </div>
			  </div>


<?php foreach($module as $key => $item): ?>
			  <div class="form-group">
			   <label for="name" class="col-sm-2 control-label"><label class="alertred">*</label><?php echo $item['label'] ?></label>
			    <div class="col-sm-4">
			   <label class="checkbox" for="<?php echo 'checkbox['.$key.']['.$perm.']'; ?>">
			   	<input id="<?php echo 'checkbox['.$key.']['.$perm.']'; ?>" type="checkbox" name="<?php echo 'checkbox['.$key.']['.$perm.']'; ?>" value="1" <?php echo (@$rs_perm[$key][$perm]) ? 'checked' : ''; ?> >
			   	<?php echo @$crud[$perm]; ?></label>

			    </div>
			  </div>
<?php endforeach; ?>
</table>
<br>
<input type="hidden" name="lid" id="lid" value="<?php echo $level['lid']?>">
<input type="hidden" name="level_code" value="<?php echo $level['level_code']?>">
<div id="boxadd" style="text-align: center;">
  	<input  type="submit" value="บันทึก" class="btn_save"/>
  	<?php echo form_back('btn_back'); ?>
</div>

</form>
<script type="text/javascript">
	$(document).ready(function(){
		$("table.list tr:not(:first)").each(function(){
			var btn = "<span style='float:right;'><input class='check' type='button' value='เลือกทั้งหมด'><input class='uncheck' type='button' value='ไม่เลือกทั้งหมด'></span>";
			$(this).find("td:eq(1)").append(btn);
		});

		$(".check").live("click",function(){
			$(this).closest("td").find("input[type=checkbox]").attr('checked',true);
		});

		$(".uncheck").live("click",function(){
			$(this).closest("td").find("input[type=checkbox]").removeAttr('checked',true);
		});
		$( "#form" ).validate({
  			rules: {
  				level_name:{required:true,remote:{url:'<?php echo base_url()?>permissions/admin/permissions/chkPermission',data:{lid:function(){return $('#lid').val();}}}}
				   },
    		messages:{
				level_name:{required:"กรุณาระบุสิทธิ์การใช้งาน",remote:"มีสิทธิการใช้งานนี้เเล้วในระบบ"}
					}
  		});
	});
</script>