<!DOCTYPE html>
<html>
<head>
	<title>Jean-Philip Thibault</title>
	
	<meta charset="UTF-8" />
	<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="static/css/bootstrap-main.css">
	<link rel="stylesheet" type="text/css" href="static/css/main.css">
	<script type="text/javascript" src="static/js/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="static/js/handlebars.js"></script>
	<script type="text/javascript" src="static/js/mustache.js"></script>

</head>
<body>
<script type="text/javascript">
	//$(document).ready(function() {
		$.getJSON('json/data.json', function(data) {
		    //var template = "";
		    var base = $('#baseT').html();
		    var baseHtml = Mustache.to_html(base, data);
		    $('#content').html(baseHtml);
		});

	//});
</script>

<div class="container clearfix">


	<section>
		<div id="content"></div>
	</section>
	<footer class="col">
		<p>Si jamais tu veux me <a href="http://www.youtube.com/watch?v=b_ILDFp5DGA" target="_blank">parler</a> ou <a href="mailto:jase@jeanphilipthibault.com">m'écrire</a>.</p>
	</footer>
</div> 

<script id="baseT" type="text/template">
	<header class="col col-lg-12">
		<h1>{{name}}</h1>
		<h2>{{tagline}}</h2>
	</header>
	<article class="col col-lg-5 pull-left">
		<p>{{desc}}</p>
	</article>
	<footer class="col col-lg-5 pull-right">
	<h4>{{tagline-network}}</h4>
	<ul>
		{{#network}}
		<li>
			<a href="{{url}}" class="ico-{{name.toLowerCase()}}" target="_blank">{{name}}</a>
        </li>
        {{/network}}
	</ul>

	<h4>{{tagline-amis}}</h4>
	<ul>
		{{#amis}}
		<li>
			<a href="{{url}}" target="_blank">{{name}}</a>
        </li>
        {{/amis}}
	</ul>

	</footer>
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-40924635-1', 'jeanphilipthibault.com');
  ga('send', 'pageview');
</script>
</body>
</html>