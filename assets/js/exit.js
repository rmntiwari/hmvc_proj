if(!window.jQuery){ (function() {var jsapi = document.createElement('script'); jsapi.type = 'text/javascript'; jsapi.async = true;jsapi.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js';(document.getElementsByTagName('head')[0] || document.getElementsByTagName('head')[0]).appendChild(jsapi);})(); }
            
var d = document;
var f = d.getElementsByTagName('body')[0];
var ProExitPopupOuter = d.createElement('div');
var ProExitPopup = d.createElement('div');
var ProExitPopupIframe = d.createElement('iframe');
var ProExitPopupClose = d.createElement('span');
var ProExitPopupCloseIcon = d.createElement('i');
var ProExitPopupElementStyle = d.createElement('style');
var ProExitPopupLoadingImage = d.createElement("img");
ProExitPopupElementStyle.type = 'text/css';

//ProExitPopupOuter
ProExitPopupOuter.setAttribute('class','ProExitPopupOuter');

//ProExitPopup
ProExitPopup.setAttribute('class','ProExitPopup');
ProExitPopup.setAttribute('id','ProExitPopup');

//ProExitPopupIframe
ProExitPopupIframe.setAttribute('class','ProExitPopupIframe');
ProExitPopupIframe.setAttribute('id','ProExitPopupIframe');
ProExitPopupIframe.setAttribute('onload','OnHidingLoader()');
ProExitPopupIframe.setAttribute('src',url); // Main url
ProExitPopup.appendChild(ProExitPopupLoadingImage);

//ProExitPopupClose
ProExitPopupCloseIcon.setAttribute('class','ExitPopupcloseIcon');
ProExitPopupClose.setAttribute('class','ProExitPopupClose');

//ProExitPopupLoadingImage
ProExitPopupLoadingImage.setAttribute('class','ProExitPopupLoadingImage');
ProExitPopupLoadingImage.setAttribute('src','http://www.proprofs.com/quiz-school/images/loader1.gif');
ProExitPopup.appendChild(ProExitPopupLoadingImage);

//ProExitPopupElementStyle
ProExitPopupElementStyle.innerHTML = ".ProExitPopupOuter{display:none;top:0;left:0;position:fixed;width:100%;height:100%;background:rgba(0,0,0,0.5)}.ProExitPopup{position:absolute;    border-radius: 4px;width:700px;height:470px;display:block;margin-left:auto;margin-right:auto;left:0;right:0;margin-top:50px;background-color:#fff;border:4px solid #fff;box-shadow:0 0 10px 0 rgba(0,0,0,0.5);    min-height: 340px; transform:translate3d(0,0,0);animation-name: topFadeOut;animation-duration: 0.3s;backface-visibility:hidden;perspective:1000px}@media(max-width:767px){.ProExitPopup{width:88%;}}.ProExitPopupClose{position:absolute;width:25px;height:25px;margin-top:-15px;margin-left:-16px;float:right;color:#fff;line-height:27px;text-align:center;cursor:pointer;font-size:18px;border-radius:100%;background-color:#000;border:3px solid #fff;box-shadow:0 0 4px 1px rgba(0,0,0,0.5)}.ProExitPopup .ProExitPopupIframe{width:100%;height:470px; min-height: 340px;border:0;opacity:.2; border-radius:4px;}.ProExitPopup .ProExitPopupLoadingImage{position:absolute;display:block;margin-top:28%;width:50px;left:47%;right:47%}@keyframes shake{10%,90%{transform:translate3d(-1px,0,0)}20%,80%{transform:translate3d(2px,0,0)}30%,50%,70%{transform:translate3d(-4px,0,0)}40%,60%{transform:translate3d(4px,0,0)}}@keyframes topFadeOut { 0% {transform:scale(0,0);opacity: 0.8;}100% { transform:scale(1,1);opacity: 1;}}.ExitPopupcloseIcon{width:15px;height:15px;opacity:1}.ExitPopupcloseIcon:before,.ExitPopupcloseIcon:after{position:absolute;left:12px;content:' ';height:16px;width:3px;margin-top:4px;background-color:#fff}.ExitPopupcloseIcon:before{transform:rotate(45deg)}.ExitPopupcloseIcon:after{transform:rotate(-45deg)}@media(max-width:1400px){.ProExitPopup iframe, .ProExitPopup{max-height:520px;}}@media(min-height:700px){.ProExitPopup iframe, .ProExitPopup{max-height:580px;}}@media(min-height:800px){.ProExitPopup iframe, .ProExitPopup{max-height:680px;}}@media(min-height:900px){.ProExitPopup iframe, .ProExitPopup{max-height:780px;}}@media(min-height:1000px){.ProExitPopup iframe, .ProExitPopup{max-height:880px;}}@media(min-height:1200px){.ProExitPopup iframe, .ProExitPopup{max-height:1000px;}}";
d.getElementsByTagName('head')[0].appendChild(ProExitPopupElementStyle);

ProExitPopupOuter.appendChild(ProExitPopup);
ProExitPopup.appendChild(ProExitPopupIframe);
ProExitPopup.appendChild(ProExitPopupClose);
ProExitPopupClose.appendChild(ProExitPopupCloseIcon);
f.appendChild(ProExitPopupOuter);


function OnHidingLoader(){
	setTimeout(function(){
		var doc = document.getElementById('ProExitPopupIframe').contentWindow.document;
		trueHeight = Math.max(
			Math.max(doc.body.scrollHeight, doc.documentElement.scrollHeight),
			Math.max(doc.body.offsetHeight, doc.documentElement.offsetHeight),
			Math.max(doc.body.clientHeight, doc.documentElement.clientHeight)
		); 
		
		

		if (navigator.appName == 'Microsoft Internet Explorer' ||  !!(navigator.userAgent.match(/Trident/) || navigator.userAgent.match(/rv:11/)) || (typeof $.browser !== "undefined" && $.browser.msie == 1))
		{
			trueHeight = trueHeight;
		}else{
			trueHeight = trueHeight;
		}


		document.getElementById('ProExitPopup').style.height = trueHeight + "px";
		document.getElementById('ProExitPopupIframe').style.height = trueHeight + "px";

	},100);	

    $('.ProExitPopupLoadingImage').hide();
    $('.ProExitPopupIframe').css('opacity','1');
}

//for addressbar
if(exitin != 0){
	d.addEventListener("mouseleave", function(e){
		if( e.clientY < 0 )
		{
			
			setTimeout(function(){
				var doc = document.getElementById('ProExitPopupIframe').contentWindow.document;
				trueHeight = Math.max(
					Math.max(doc.body.scrollHeight, doc.documentElement.scrollHeight),
					Math.max(doc.body.offsetHeight, doc.documentElement.offsetHeight),
					Math.max(doc.body.clientHeight, doc.documentElement.clientHeight)
				); 
				
				

				if (navigator.appName == 'Microsoft Internet Explorer' ||  !!(navigator.userAgent.match(/Trident/) || navigator.userAgent.match(/rv:11/)) || (typeof $.browser !== "undefined" && $.browser.msie == 1))
				{
					trueHeight = trueHeight;
				}else{
					trueHeight = trueHeight;
				}


				document.getElementById('ProExitPopup').style.height = trueHeight + "px";
				document.getElementById('ProExitPopupIframe').style.height = trueHeight + "px";

			},100);	
			
			$('.ProExitPopupOuter').show();

			
		}
	}, false);
}

ProExitPopupClose.addEventListener('click',function(){
    //$('.ProExitPopupOuter').hide();
	$('.ProExitPopupOuter').remove();
	
});


//for set time
if(st != '0'){
    setTimeout(function(){
		
		
		setTimeout(function(){
			var doc = document.getElementById('ProExitPopupIframe').contentWindow.document;
			trueHeight = Math.max(
				Math.max(doc.body.scrollHeight, doc.documentElement.scrollHeight),
				Math.max(doc.body.offsetHeight, doc.documentElement.offsetHeight),
				Math.max(doc.body.clientHeight, doc.documentElement.clientHeight)
			); 
			
			

			if (navigator.appName == 'Microsoft Internet Explorer' ||  !!(navigator.userAgent.match(/Trident/) || navigator.userAgent.match(/rv:11/)) || (typeof $.browser !== "undefined" && $.browser.msie == 1))
			{
				trueHeight = trueHeight;
			}else{
				trueHeight = trueHeight;
			}


			document.getElementById('ProExitPopup').style.height = trueHeight + "px";
			document.getElementById('ProExitPopupIframe').style.height = trueHeight + "px";

		},100);
		
		$('.ProExitPopupOuter').show();
    },(st*1000));
}


//for scrolling
if(sfs > 0){

    window.onscroll = function() {
        var doch = (document.documentElement.offsetHeight-window.innerHeight);
        doch = ((doch/4)*sfs);
        if (window.pageYOffset >= doch && window.pageYOffset <= (doch+10)) {
			
			
			setTimeout(function(){
				var doc = document.getElementById('ProExitPopupIframe').contentWindow.document;
				trueHeight = Math.max(
					Math.max(doc.body.scrollHeight, doc.documentElement.scrollHeight),
					Math.max(doc.body.offsetHeight, doc.documentElement.offsetHeight),
					Math.max(doc.body.clientHeight, doc.documentElement.clientHeight)
				); 
				
				

				if (navigator.appName == 'Microsoft Internet Explorer' ||  !!(navigator.userAgent.match(/Trident/) || navigator.userAgent.match(/rv:11/)) || (typeof $.browser !== "undefined" && $.browser.msie == 1))
				{
					trueHeight = trueHeight;
				}else{
					trueHeight = trueHeight;
				}


				document.getElementById('ProExitPopup').style.height = trueHeight + "px";
				document.getElementById('ProExitPopupIframe').style.height = trueHeight + "px";

			},100);
			
            $('.ProExitPopupOuter').show();
        }
    };
}