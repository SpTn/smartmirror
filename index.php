<html>
<head>
	<title>Magic Mirror</title>
	<style type="text/css">
		<?php include('css/main.css') ?>
	</style>
	<link rel="stylesheet" type="text/css" href="css/weather-icons.css">
	<script type="text/javascript">
		var gitHash = '<?php echo trim(`git rev-parse HEAD`) ?>';
	</script>
	<meta name="google" value="notranslate" />
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
</head>
<body>

	<div class="top left"><div class="date small dimmed"></div><div class="time"></div><div class="calendar xxsmall"></div></div>
	<div class="top right"><div class="windsun small dimmed"></div><div class="temp"></div><div class="forecast small dimmed"></div></div>
	<div class="center-ver center-hor"><!-- <div class="dishwasher light">Vaatwasser is klaar!</div> --></div>
	<div class="lower-third center-hor"><div class="compliment light"></div></div>
	<div class="bottom center-hor"><div class="news medium"></div></div>

</div>

<script src="js/jquery.js"></script>
<script src="js/jquery.feedToJSON.js"></script>
<script src="js/ical_parser.js"></script>
<script src="js/moment-with-langs.min.js"></script>
<script src="js/config.js"></script>
<script src="js/rrule.js"></script>
<script src="js/main.js?nocache=<?php echo md5(microtime()) ?>"></script>
<!-- <script src="js/socket.io.min.js"></script> -->

<!-- ******************************** voice commands *******************************  -->

<script src="//cdnjs.cloudflare.com/ajax/libs/annyang/2.0.0/annyang.min.js"></script>
<script>
if (annyang) {
  // Let's define our first command. First the text we expect, and then the function it should call
  var commands = {
    'play some music': function() {
      alert("play some music ! ");
    }	
,
	'Show me weather': function() {
      alert("weather ! ");
    }


  };

  // Add our commands to annyang
  annyang.addCommands(commands);

  // Start listening. You can call this here, or attach this call to an event, button, etc.
  annyang.start();
}
</script>


</body>
</html>
