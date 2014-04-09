function checkNum(element){
	$(element).keypress(function(event){
	     //console.log(event.which);
	    if(event.which != 8 && isNaN(String.fromCharCode(event.which))){
	       event.preventDefault(); //stop character from entering input
		}
	});
}

function bmi_cal(weight,height)
{
	height = height/100;
	height = height * height;
	bmi = weight/(height);
	if(bmi<=18.49){color='yellow';title='ผอม';}
	else if(bmi==18.50 || bmi<=22.9){color='green';title='ปกติ';}
	else if(bmi==23.00 || bmi<=24.9){color='orange';title='ท้วม';}
	else if(bmi==25.00 || bmi<=29.9){color='red',title='อ้วน';}
	else if(bmi>=30.00){color='grey';title='อ้วนมาก';}
	var result = new Array(bmi,title,color);
	return result;

}
function fat_cal(waist,gender)
{
	if(waist!=undefined && gender !=undefined){
		if((gender=="1" && waist<90) || (gender=="2" && waist<80)){
			color='green';title='ปกติ';
		}else if((gender=="1" && waist>=90) || (gender=="2" && waist>=80)){
			color='red',title='อ้วนลงพุง';
		}
	}
	var result = new Array(title,color);
	return result;
}
$('.btn_edit').click(function(){
  	$(this).closest('tr').find('span').toggleClass("hide show");
});
$('.btn_clear').click(function(){
	$(this).closest('tr').find('input').val('').removeClass('red green orange yellow grey');
	$('input[type=radio]').removeAttr('checked');
	$("select option").filter(function() {return $(this).val() == "0";}).prop('selected', true);
});