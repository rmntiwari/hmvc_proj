<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Page Title</title>
<script src="https://code.jquery.com/jquery-3.0.0.js"></script>
<script src="//code.jquery.com/jquery-3.3.1.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>


</head>
<body>

 
<h1>This is a Heading</h1>
<p>This is a paragraph.</p>
 
<a id="pp" href="chart_pop?sid=1200&qid=2550"  style ="padding:10px; display:block;"> Show chart </a>

 <script>

 $('#pp').fancybox({
		topRatio    : 0.4,
		width        : 600,
		height        : 600,
		autoSize    : false,
		closeClick    : false,
		openEffect    : 'none',
		closeEffect    : 'none',
		type		: 'ajax',
		helpers: {
		title: 'googlechart'
		}
	}); 
 
 </script>

</body>
</html>