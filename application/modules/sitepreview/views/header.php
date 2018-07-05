




<!DOCTYPE html>
<html>
<head>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.qtip-1.0.0-rc3.min.js'; ?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.mousewheel-3.0.6.pack.js'; ?>" ></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.fancybox.pack.js'; ?>"></script>


</head>

<h3>header text</h3>
<input type ="hidden"; name="device_icon_imgs" id = "device_icon_imgs" value="<?php echo base_url().'assets/images/responsive_system_icon_Sprite.png'; ?>" > 

<div class="viewports" style="position: fixed; top: 0px;  left: 0px; right: 0px; z-index: 9999; height: 45px; background: rgb(238, 238, 238); color: rgb(0, 0, 0); box-shadow: 0px 0px 0px; display: block;">

	<ul class="viewlist" style="border:1px solid red; height:40px;margin-top:0px;">

	<li class="reset" style="display: inline-block; cursor: pointer; font-size: 12px; line-height: 12px; text-align: center; border-right: 0px solid rgb(85, 85, 85); padding: 13px 5px; float: left; color: rgb(0, 0, 0);">
		
	</li>

	<div class="close"> <a style="cursor: pointer; color:#000;text-decoration:none;"></a></div>

	<div id="" class="auto" style="background-position: -9px -242px!important;width: 35px;height: 35px;padding: 5px 5px 0 0;margin-left: 10px;float: left;margin-top: 3px;background: url(<?php echo base_url().'assets/images/responsive_system_icon_Sprite.png'; ?> );background-repeat: no-repeat;cursor: pointer; border:1px solid ;" data-state="clicked">
		
	</div>

	<div id="" class="1250px" style="background-position: -12px -103px!important;width: 25px;height: 35px;padding: 5px 5px 0 0;margin-left: 10px;float: left;margin-top: 3px;background: url(<?php echo base_url().'assets/images/responsive_system_icon_Sprite.png'; ?> );background-repeat: no-repeat;cursor: pointer;" data-state="notclicked">
		
	</div>

	<div id="" class="400px" style="background-position: -12px -8px!important;width: 25px;height: 35px;padding: 5px 5px 0 0;margin-left: 10px;float: left;margin-top: 3px;background: url(<?php echo base_url().'assets/images/responsive_system_icon_Sprite.png'; ?> );background-repeat: no-repeat;cursor: pointer;" data-state="notclicked"></div>

	<div id="" class="pop" style="background-position: -9px -289px!important;width: 35px;height: 35px;padding: 5px 5px 0 0;margin-left: 10px;float: left;margin-top: 3px;background: url(<?php echo base_url().'assets/images/responsive_system_icon_Sprite.png'; ?> );background-repeat: no-repeat;cursor: pointer;" data-state="notclicked"></div>

	<button type="button" id="sendbtn" name="sendbtn" class=" imgSend btn  btn-success gotomanagebtn" style="" onclick="gotomanage()">Done</button> <a href="#" id="linkShare" rel="89619" style="margin: -3px 15px 0px 0px;float: right;appearance: button;"></a>

</ul>

<div style="clear:both;"></div>

</div>

<style>

.gotomanagebtn {
    background-color: #3c8ac9;
    float: right;
    margin-top: 12px;
    border: none;
    border-radius: 2px;
    display: inline-block;
    height: 35px;
    line-height: 26px;
    outline: 0;
    padding: 5px 20px 5px 20px;
    font-size: 11px;
    text-transform: uppercase;
    color: #fff;
    margin-top: 3px;
    margin-right: 6%;
}

	</style>
<script src="<?php echo base_url().'assets/js/jresize.js'; ?>"></script>
<script>



	$(function() {
		$.jResize({
			 viewPortSizes   : ['auto', '1250px', '400px', 'pop'], // ViewPort Widths
			 backgroundColor : 'eee',  
			 fontColor       : '000'  
		});
		
	});

</script>



<body>
