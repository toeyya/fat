<div id="bmi">
   <div id="formBMI">
    <label>น้ำหนัก :</label>
    <input type="text" name="weight" value="" class="weight" maxlength="3">
    <label>กิโลกรัม</label><br>
    <label style="margin-left:1px;">ส่วนสูง :</label>
    <input type="text" name="height" value="" class="height" maxlength="3">
    <label>เซ็นติเมตร</label>
   <button type="button" value="" class="btn-bmi" ></button>
  <div class="alert alert-warning hide result" style="margin-top:10px;">
  	<span class="label label-warning"> ค่า bmi</span> <span class="ans"></span></div>
  </div>
</div>

<div style="display:none" >
<div id="result" style="height: 100%">

</div>
</div>
<script type="text/javascript">
$(document).ready(function(){
	checkNum('.weight,.height');
	$('.btn-bmi').click(function(){
		var weight = $('input[name=weight]').val();
		var height = $('input[name=height]').val();
		if(weight.length>0 && height.length>0)
		{
			weight = parseInt(weight);
			height = parseInt(height);
			//var result = bmi_cal(weight,height);
			//$('.result').removeClass('hide').addClass('show').find('.ans').html(result[0].toFixed(2));
			$.ajax({
				url:'f_weight/bmi/cal',
				data:'weight='+weight+'&height='+height,
				success:function(data){
					$('#result').html(data);

				}
			});
			$.colorbox({href:"#result"});
		}
	});
	//$('.result').addClass('hide').removeClass('show');
});
</script>
