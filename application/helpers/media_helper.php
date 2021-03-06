<?php

if(!function_exists('set_notify'))
{
	function set_notify($type,$msg)
	{
		$config = array(
			'notify' => TRUE,
			'type' => $type,
			'msg' => $msg
		);
		$CI =& get_instance();
		$CI->session->set_flashdata($config);
	}
}

if(!function_exists('js_notify'))
{
	function js_notify()
	{
		$CI =& get_instance();
		if($CI->session->flashdata('notify'))
		{
			$js = '<link rel="stylesheet" href="media/css/jquery.notifyBar.css" type="text/css" media="screen" />';
		    $js .= '<script type="text/javascript" src="media/js/jquery.notifyBar.js"></script>';
		    $js .= '<script type="text/javascript">
		    				$(function () {
						  		$.notifyBar({
						  			cls:"'.$CI->session->flashdata('type').'",
						    		html: "'.$CI->session->flashdata('msg').'",
						    		delay: 5000,
						    		animationSpeed: "normal"
						  		});
							});
						</script>';
			return $js;
		}
	}
}
function js_syntax()
{
	return '<script type="text/javascript" src="js/sysntaxhighilight/scripts/shCore.js"></script>
			<script type="text/javascript" src="js/sysntaxhighilight/scripts/shBrushBash.js"></script>
			<script type="text/javascript" src="js/sysntaxhighilight/scripts/shBrushCpp.js"></script>
			<script type="text/javascript" src="js/sysntaxhighilight/scripts/shBrushCSharp.js"></script>
			<script type="text/javascript" src="js/sysntaxhighilight/scripts/shBrushCss.js"></script>
			<script type="text/javascript" src="js/sysntaxhighilight/scripts/shBrushDelphi.js"></script>
			<script type="text/javascript" src="js/sysntaxhighilight/scripts/shBrushDiff.js"></script>
			<script type="text/javascript" src="js/sysntaxhighilight/scripts/shBrushGroovy.js"></script>
			<script type="text/javascript" src="js/sysntaxhighilight/scripts/shBrushJava.js"></script>
			<script type="text/javascript" src="js/sysntaxhighilight/scripts/shBrushJScript.js"></script>
			<script type="text/javascript" src="js/sysntaxhighilight/scripts/shBrushPhp.js"></script>
			<script type="text/javascript" src="js/sysntaxhighilight/scripts/shBrushPlain.js"></script>
			<script type="text/javascript" src="js/sysntaxhighilight/scripts/shBrushPython.js"></script>
			<script type="text/javascript" src="js/sysntaxhighilight/scripts/shBrushRuby.js"></script>
			<script type="text/javascript" src="js/sysntaxhighilight/scripts/shBrushScala.js"></script>
			<script type="text/javascript" src="js/sysntaxhighilight/scripts/shBrushSql.js"></script>
			<script type="text/javascript" src="js/sysntaxhighilight/scripts/shBrushVb.js"></script>
			<script type="text/javascript" src="js/sysntaxhighilight/scripts/shBrushXml.js"></script>
			<link type="text/css" rel="stylesheet" href="js/sysntaxhighilight/styles/shCore.css"/>
			<link type="text/css" rel="stylesheet" href="js/sysntaxhighilight/styles/shThemeDefault.css"/>
			<script type="text/javascript">
				SyntaxHighlighter.config.clipboardSwf = "js/sysntaxhighilight/scripts/clipboard.swf";
				SyntaxHighlighter.all();
			</script>';
}
function js_report(){
	return '<script type="text/javascript" src="media/js/report.js"></script>';
}
function js_checkbox($module='admin')
{
	$CI =& get_instance();
	$js = '$.notifyBar({
				cls:"success",
				html: "บันทึกข้อมูลเรียบร้อยแล้วค่ะ",
				delay: 500,
				animationSpeed: "normal"
		  });
		  ';
	return '
		<link rel="stylesheet" href="media/css/jquery.notifyBar.css" type="text/css" media="screen" />
		<script type="text/javascript" src="media/js/jquery.notifyBar.js"></script>
		<script>
			$(function(){
				$("input:checkbox").click(function(){
					var value = $(this).is(":checked") ? 1 : 0;
					$.post("'.$CI->router->fetch_module().'/'.$module.'/'.$CI->router->fetch_class().'/save",{id:this.value ,active:value},
						  function(){
						  	'.$js.'
						  });
				});
			});
		</script>';
}
function js_radiobox()
{
	$CI =& get_instance();
	return '<link rel="stylesheet" href="media/js/checkbox/jquery.checkbox.css" />
		<script type="text/javascript" src="media/js/checkbox/jquery.checkbox.min.js"></script>
		<script>
			$(function(){
				$("input:radio").checkbox({empty:"media/js/checkbox/empty.png"});
				$("input:radio").click(function(){

					$.get("'.$CI->router->fetch_module().'/admin/'.$CI->router->fetch_module().'/save_radio",{active:this.value});
				});
			});
		</script>';
}
if ( ! function_exists('js_datepicker'))
{
	function js_datepicker($selector=".datepicker")
	{
		$js = '<link rel="stylesheet" href="media/js/date_input/date_input.css" type="text/css" media="screen" />';
		$js .= '<script type="text/javascript" src="media/js/date_input/jquery.date_input.min.js"></script>';
		$js .= '<script type="text/javascript" src="media/js/date_input/jquery.date_input.th_TH.js"></script>';
		$js .= '<script type="text/javascript">
					$(function(){
						$("input.datepicker").date_input();
					});
				</script>';
		return $js;
	}
}
/**
 * uppic_mce
 *
 * Upload images from uppic.me to TinyMCE
 *
 * @access	public
 * @return	str
 */
if(!function_exists('uppic_mce'))
{
	function uppic_mce()
	{
		$js = '<style type="text/css">
#upic_uploader{}
#upic_uploadprogress{}
.progressWrapper{margin-top:5px;}
.progressContainer{border-bottom:1px dotted #ddd;padding:2px;}
.progressName{text-align:left;color:black;margin-left:2px;float:left;}
.progressBarStatus{color:#666;text-align:right;margin:1px 1px 0 0;font-size:9px;}
.red{border:solid 1px #B50000;background-color:#FFEBEB;}
.green{border:solid 1px #DDF0DD;background-color:#EBFFEB;}
.blue{border:solid 1px #CEE2F2;background-color:#F0F5FF;}
.progressBarInProgress,.progressBarComplete,.progressBarError{clear:both;font-size:0;width:0%;height:2px;background-color:blue;margin-top:4px;}
.progressBarComplete{width:100%;background-color:green;visibility:hidden;}
.progressBarError{width:100%;background-color:red;visibility:hidden;}
</style>';

		$js .= '<script type="text/javascript" src="http://upic.me/js/embedupload.js"></script>
								<script type="text/javascript">
								upic_type = "htmlfull";
								upic_buttoncss += "color:#000000;";
								function upic_custom(urlshow, urlfull, urlthumb) {
								tinyMCE.get(\'detail\').execCommand("mceInsertContent",false,\'<img src="\' +urlfull+ \'" />\');
								}
								</script>';
		return $js;
	}
}
if ( ! function_exists('js_idcard')){
	function js_idcard()
	{
		$CI =& get_instance();
		return "
			<script>
				$(document).ready(function(){
				 	$('#Show_idcard').children().bind('keydown',function(e){
						if(e.keyCode != 46 && e.keyCode!=8){
							var txtBox=$('#Show_idcard').children();
							var key=$(this).index();
								if(key==0 || key==4)l=1;
								if(key==1)l=4;
								if(key==2)l=5;
								if(key==3)l=2;
								if(txtBox.eq(key).val().length==l){
									txtBox.eq(key+1).val('');
									txtBox.eq(key+1).focus();
								}
							}
					});
				});
			</script>";
	}
}
if(!function_exists('js_lightbox'))
{
	function js_lightbox()
	{
		$js = '<link rel="stylesheet" href="media/js/prettyPhoto_3.1.4/css/prettyPhoto.css" type="text/css" media="screen" />';
		$js .= '<script type="text/javascript" src="media/js/prettyPhoto_3.1.4/js/jquery.prettyPhoto.js"></script>';
		    $js .= '<script type="text/javascript">
		    				$(function () {
						  		$("[rel^=lightbox]").prettyPhoto({theme:\'facebook\',hideflash: true});
							});
						</script>';
			return $js;

	}
}

?>