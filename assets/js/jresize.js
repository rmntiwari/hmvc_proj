(function($)

{

		$.jResize=function(options){

		$.jResize.defaults={

			viewPortSizes:["auto","1250px","400px","pop"],
			backgroundColor:'eee',fontColor:'000'
		}

      options=$.extend( {},$.jResize.defaults,options);




var resizer='<div class="viewports" style="position:fixed;top:0; padding:'+paddings+' left:0;right:0;z-index:9999;height: '+heigts+' background:#'
+options.backgroundColor+';color:#'+options.fontColor+';box-shadow:0 0 0px ;"><ul class="viewlist" style="margin-left:200px;">'
+'</ul><div style="clear:both;"></div></div>';var viewPortWidths=options.viewPortSizes;var viewPortList='display:inline-block;cursor:pointer;font-size:12px;line-height:12px;text-align:center;width:;'
+'border-right:0px solid #555;padding:13px 5px;float:left';


var credit='<div class="close"> '
+'<a style="cursor: pointer; color:#'+options.fontColor+';text-decoration:none;"></a></div>';



$('body').wrapInner('<div id="resizer" />');

$('#resizer').before(resizer);

$.each(viewPortWidths,function(go,className)
{
		$('.viewlist').append($('<div id="" class="'+className+'"'+' style="'+viewPortList+'"></div>'+className));
		
		$('.'+className+'').click(function(){

			if(className==='pop')
			{
				widthName='auto';
			}

			else
			{
				widthName=className;
			}


			$('#resizer').animate({width:''+widthName+''},300);

		});

$('.400px').attr('style',test1);
$('.1250px').attr('style',test2);
$('.auto').attr('style',test3);
$('.pop').attr('style',test4);

var imgShare='width: 70px;float: right;border: 1px solid rgba(27, 24, 24, 0.15);height: 20px;text-align:center;padding-top: 7px;margin-top: 8px;cursor: pointer;border-radius: 2px;height: 24px;cursor: pointer; background: url(/survey/images/share_andedit_icon.png) no-repeat;padding: 6px 1px 0px 29px;color: #4d4d4d;text-decoration: none;background-position: 6px 2px;';var imgShare_hover='width: 70px;float: right;border: 1px solid rgba(27, 24, 24, 0.15);height: 20px;text-align:center;padding-top: 7px;margin-top: 8px;cursor: pointer;border-radius: 2px;height: 24px;cursor: pointer; background: url(/survey/images/share_andedit_icon.png) no-repeat;padding: 6px 1px 0px 29px;color: #4d4d4d;text-decoration: none;background-position: 6px -23px;';var editImage='width: 70px;float: right;border: 1px solid rgba(27, 24, 24, 0.15);height: 20px;text-align:center;padding-top: 7px;margin-top: 8px;cursor: pointer;border-radius: 2px;height: 24px;cursor: pointer; background: url(/survey/images/share_andedit_icon.png) no-repeat;padding: 6px 1px 0px 29px;color: #4d4d4d;text-decoration: none;background-position: 6px -54px;';var editImage_hover='width: 70px;float: right;border: 1px solid rgba(27, 24, 24, 0.15);height: 20px;text-align:center;padding-top: 7px;margin-top: 8px;cursor: pointer;border-radius: 2px;height: 24px;cursor: pointer; background: url(/survey/images/share_andedit_icon.png) no-repeat;padding: 6px 1px 0px 29px;color: #4d4d4d;text-decoration: none;background-position: 6px -81px;';var tooltip='border-radius: 0px;position: absolute;width: 60px;padding: 14px 0px 0px;display: none;top: 42px;left: 1153.58px;z-index: 6001;';var tooltip_hover='border-radius: 0px;position: absolute;width: 60px;padding: 14px 0px 0px;display: block;top: 52px!important;left: 1153.58px;z-index: 9999;';$(document).ready(function(){$('.auto').attr('style',test3_h);$("#linkShare").mouseover(function(){$("#imgShare").attr('style',imgShare_hover);});$("#linkShare").mouseout(function(){$("#imgShare").attr('style',imgShare);});$("#linkEdit").mouseover(function(){$("#imgEdit").attr('style',editImage_hover);});$("#linkEdit").mouseout(function(){$("#imgEdit").attr('style',editImage);});$("#imgShare").mouseover(function(){$("#linkShare").attr('style',tooltip_hover);});$("#imgShare").mouseout(function(){$("#linkShare").attr('style',tooltip);});});});$('.auto').click(function(){$('#resizer').css({width:'auto'});});$('.pop').click(function(){$('#resizer').css({width:'auto'});});$('.auto').click(function(){if($(this).attr('data-state')=='clicked'){$(this).attr('data-state','notclicked');}
else
{
	var frame=document.getElementById("preview_frame"),frameDoc=frame.contentDocument||frame.contentWindow.document;frameDoc.documentElement.innerHTML="";
	$('#hidden_frame_check').val('fullframe_exist');var title_src=$('#hidSurvey').val();
	$('.frame').attr('src','/survey/t/index.php?title='+title_src+'&preview=true&hidden_frame_check=fullframe_exist');
	$(this).attr('data-state','clicked');
	$('.1250px').attr('data-state','notclicked');
	$('.400px').attr('data-state','notclicked');$('.pop').attr('data-state','notclicked');
	$('.set-img').attr('id','');

	if($('#pp_parent').length)
    {
    	$('#pp_parent').remove();
    }


$('.demoFrame').hide();$('.frame').show();$('.frame').css('width','100%');$('.frame').css('margin-left','0');$('.frame').css('margin-top','0px');$('.frame').css('height',$(window).height());}
$(this).attr('style',test3_h);$('.400px').attr('style',test1);$('.1250px').attr('style',test2);$('.pop').attr('style',test4);});$('.1250px').click(function(){if($(this).attr('data-state')=='clicked'){$(this).attr('data-state','notclicked');}
else{var frame=document.getElementById("preview_frame"),frameDoc=frame.contentDocument||frame.contentWindow.document;frameDoc.documentElement.innerHTML="";$('#hidden_frame_check').val('ipad_exist');var title_src=$('#hidSurvey').val();$('.frame').attr('src','/survey/t/index.php?title='+title_src+'&preview=true&hidden_frame_check=ipad_exist');$(this).attr('data-state','clicked');$('.auto').attr('data-state','notclicked');$('.400px').attr('data-state','notclicked');$('.pop').attr('data-state','notclicked');$('.set-img').attr('id','over');if($('#pp_parent').length)
{$('#pp_parent').remove();}


$('.demoFrame').hide();$('.frame').show();$('.frame').css('width','59.3%');$('.frame').css('margin-left','255px');$('.frame').css('height','640px');$('.frame').css('margin-top','');}
$(this).attr('style',test2_h);$('.400px').attr('style',test1);$('.auto').attr('style',test3);$('.pop').attr('style',test4);});$('.400px').click(function(){if($(this).attr('data-state')=='clicked'){$(this).attr('data-state','notclicked');}
else{var frame=document.getElementById("preview_frame"),frameDoc=frame.contentDocument||frame.contentWindow.document;frameDoc.documentElement.innerHTML="";$('#hidden_frame_check').val('iphone_exist');var title_src=$('#hidSurvey').val();$('.frame').attr('src','/survey/t/index.php?title='+title_src+'&preview=true&hidden_frame_check=iphone_exist');$(this).attr('data-state','clicked');$('.auto').attr('data-state','notclicked');$('.1250px').attr('data-state','notclicked');$('.pop').attr('data-state','notclicked');$('.set-img').attr('id','over2');if($('#pp_parent').length)
{$('#pp_parent').remove();}


$('.demoFrame').hide();
$('.frame').show();
$('.frame').css('width','75.4%');
$('.frame').css('margin-left','50px');
$('.frame').css('height','544px');
$('.frame').css('margin-top','43px');
}

$(this).attr('style',test1_h);

$('.1250px').attr('style',test2);

$('.auto').attr('style',test3);

$('.pop').attr('style',test4);});

$('.pop').click(function(){

	if($(this).attr('data-state')=='clicked')

	{
		$(this).attr('data-state','notclicked');
	}
  else
	{

		var frame=document.getElementById("preview_frame"),frameDoc=frame.contentDocument||frame.contentWindow.document;frameDoc.documentElement.innerHTML="";
		$('#hidden_frame_check').val('popup_exist');var title_src=$('#hidSurvey').val();$('.frame').attr('src','/survey/t/index.php?title='+title_src+'&preview=true&hidden_frame_check=popup_exist');
		$(this).attr('data-state','clicked');$('.auto').attr('data-state','notclicked');

		$('.1250px').attr('data-state','notclicked');$('.400px').attr('data-state','notclicked');
		$('.set-img').attr('id','');$('.frame').hide();$('.demoFrame').show();$('.frame').css('width','100%');
		$('.frame').css('margin-left','0');$('.frame').css('margin-top','0px');$('.demoFrame').css('height',$(window).height()-20);
		var randnum=Math.random();var t=$('#hidSurvey').val();var theme='000000';var d=document;f=d.getElementsByTagName('body')[0];
		r=d.createElement('div');
		r.id='pp_parent';
		r.setAttribute('style','position:fixed;display:block;right: 30px;bottom: 0;background-color:#fff;height:auto;max-height:550px !important;');
		f.appendChild(r,f);
		u=d.getElementById('pp_parent');
		c=d.createElement('a');
		c.id='pp_tab';
		c.setAttribute('style','cursor:pointer;display: block; height: 30px; position: relative; top: 0; right: 0; text-decoration: none; text-align: right; color: #000; font-size: 19px; font-weight: bold; background:#'+theme+';border: solid 2px #'+theme+';border-bottom: 0; -webkit-border-top-left-radius: 6px; -webkit-border-top-right-radius: 6px; -moz-border-radius-topleft: 6px; -moz-border-radius-topright: 6px; border-top-left-radius: 6px; border-top-right-radius: 6px;width:300px;');
		u.appendChild(c);
		z=d.createElement('span');
		z.setAttribute('style','display: block; float: left; text-align: center;font-size: 16px;margin-left: 15px;margin-top: 4px;color:#fff;font-family:calibri;');
		z.innerHTML='Take this survey';c.appendChild(z);
		x=d.getElementById('pp_tab');
		w=d.createElement('a');
		w.id='pp_tab_t';w.setAttribute('style','background-image:url('+ $("#device_icon_imgs").val() +');background-position: -207px 5px;width:16px;height: 18px;float:right;margin-right: 10px;');
		c.appendChild(w);s=d.createElement('div');
		s.id=t;s.setAttribute('style','position:static;bottom:0;right:0;border-top:solid 2px #'+theme+';border-left:solid 2px #'+theme+';border-right:solid 2px #'+theme+'; right:30px;');
		u.appendChild(s);p=d.getElementById(t);
		x=d.createElement('div');x.id='loader';x.setAttribute('style','height:255px;text-align:center;display:block;');
		p.appendChild(x);
		q=d.createElement('img');q.setAttribute('src','https://www.proprofs.com/survey/images/loading_ck.gif');
		q.setAttribute('style','margin-top: 80px;margin-left: 15px;');
		x.appendChild(q);
		i=document.createElement('IFRAME');
		i.setAttribute('src','https://www.proprofs.com/survey/t/?title='+t+'&pop_up=true&preview=true&rand='+randnum);
		i.setAttribute('frameborder','0');
		i.setAttribute('marginwidth','0');
		i.setAttribute('marginheight','0');
		i.setAttribute('onload','hideLoading("pp_popSurvey")');
		i.setAttribute('style','display:none;width:300px;max-height:450px;');

		i.id='pp_popSurvey';p.appendChild(i);check=0;

		d.getElementById('pp_tab').onclick=function()
		{

			if(check==0){

				d.getElementById(t).style.display='none';

			  	check=1;

			  	d.getElementById('pp_tab_t').setAttribute('style','background-image:url('+ $("#device_icon_imgs").val() +');background-position: -192px 5px;width:16px;height: 18px;float:right;margin-right: 10px;');
			}

			  else
			  {
			  	d.getElementById(t).style.display='block';
			  	check=0;d.getElementById('pp_tab_t').setAttribute('style','background-image:url('+ $("#device_icon_imgs").val() +');background-position: -207px 5px;width:16px;height: 18px;float:right;margin-right: 10px;');
			  }

		}

	}// else end 


$('.pop').attr('style',test4_h);
$('.1250px').attr('style',test2);
$('.auto').attr('style',test3);
$('.400px').attr('style',test1);

});

 