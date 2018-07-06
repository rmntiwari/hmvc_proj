<!DOCTYPE html>
<html lang="en">
	<head>
	  <title>Popup</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	</head>
	<body>

	
		<div style="height:8000px;"></div>

		
		<script>
		var d=document;
		var st=0; // set time
		
		/*
			set time
			<select name="trigger_st" id="trigger_st" onchange="ExitPopupChange(1)" style="pointer-events: unset; opacity: 1;">
			<option value="0">Select Timer</option>
			<option value="1">Immediately</option>
			<option value="3">After 3 seconds</option>
			<option value="5">After 5 seconds</option>
			<option value="10">After 10 seconds</option>
			<option value="15">After 15 seconds</option>
			<option value="30">After 30 seconds</option>
			<option value="60">After 1 minute</option>
			<option value="120">After 2 minutes</option>
			<option value="180">After 3 minutes</option>
			<option value="300">After 5 minutes</option>
			</select>
		
		*/
		
		
		var sfs=1; //scrolling
		
		/*
			example for scrolling
			<select name="trigger_sfs" id="trigger_sfs" onchange="ExitPopupChange(2)" style="pointer-events: unset; opacity: 1;">
			<option value="0">Select </option>
			<option value="1">25% of page</option>
			<option value="2">50% of page</option>
			<option value="3">75% of page</option>
			<option value="4">100% of page</option>
			</select>
		*/
		
		
		var exitin=0; // for address bar
		var url="http://localhost/hmvc_proj/index.php/exitpopup/popup"; // for title
		window.onload=function(){
			f=d.getElementsByTagName("script")[0];
			s=d.createElement("script");
			s.type="text/javascript";
			s.src="/survey/manage/exitPopupCode.js?v=13";
			d.getElementsByTagName("body")[0].appendChild(s);
		};

		if(st != '0'){
			var timeWait = st;
			var setWait = setInterval(function(){

				timeWait--;
				$('#waitingSecond').text(timeWait);

			},1000);

			setTimeout(function(){
				clearInterval(setWait);
				$('#waitingSecond').text('0');
			},(st * 1000));
		}
		</script>
		<script src="http://localhost/hmvc_proj/assets/js/exit.js"></script>

	</body>
</html>
