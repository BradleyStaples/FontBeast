<?php
	ob_start('ob_gzhandler');
	require "inc/class.php";
	error_reporting(E_ALL);
	ini_set("display_errors",1);
	$fb = new fontBeast();
?>
<!DOCTYPE html>
<html>
<head id="dochead">
<title>fontBEAST</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/fonts.css.php" />
<link type="image/png" rel="icon" href="favicon.ico" />
<script id="output-template" type="text/x-handlebars-template">
	<div class="outputcontainer">
		<br /><input type="button" class="centeralign showform" value="Show Form" /><br />
		<h2 class="center"><em>Presto, Voila, &amp; BAMF!</em></h2>
		<canvas id="displayfont" width="1000" height="300"></canvas>
		<br /><h2 class="center">Don't forget your code:</h2>
		<h4>CSS Code</h4>
		<pre id="cssoutput" class="brush:css;">{{cssOutput}}</pre>
		<h4>JS Code</h4>
		<pre id="jsoutput" class="brush:js;">{{jsOutput}}</pre>
		<h4>HTML Code</h4>
		<pre id="htmloutput" class="brush:html;">{{htmlOutput}}</pre>
	</div>
</script>
</head>
<body>
<?php require "inc/ie6.php"; ?>
<div id="wrapper">
	<div id="content">
		<h1 class="logo" title="Beware the mighty fontBEAST!"><a href="/">fontBEAST</a></h1>
		<form id="fontform" name="fontform" class="fontform" method="post" action="index.php">
		<fieldset>
			<legend>Unleash your beast</legend>
			<div class="fontmeta">
				<label for="text" class="textarea">Text</label>
				<textarea name="text" id="text">Don't eat me, FontBeast!</textarea><br />
				<input type="hidden" name="fontfamily" id="fontfamily" value="Aclonica" />
				<label for="fontsize">Font Size</label>
				<input type="number" name="fontsize" id="fontsize" value="48" /><br />
				<label for="fontsizetype">Size Type</label>
				<select name="fontsizetype" id="fontsizetype">
					<option value="px">px</option>
					<option value="em">em</option>
					 <option value="pt">pt</option>
				</select><br />
				<label for="strokewidth">Stroke Width</label>
				<input type="number" name="strokewidth" id="strokewidth" value="2" /><br />
				<label for="strokecolor">Stroke Color</label>
				<input type="color" name="strokecolor" id="strokecolor" data-hex="true" value="#ffffff" /><br />
				<label for="fillcolor">Text Color</label>
				<input type="color" name="fillcolor" id="fillcolor" data-hex="true" value="#1b3880" /><br />
				<label for="bgcolor">Background Color</label>
				<input type="color" name="bgcolor" id="bgcolor" data-hex="true" value="#d4dae8" /><br />
			</div><!--fontmeta-->
			<label for="filter" class="filterlabel" >Search Fonts</label>
			<input type="text" class="filter" name="filter" id="filter" />
			<div class="fontscroll">
			<?php $fb -> writeFontSelector(); ?>
			</div><!--fontscroll-->
		</fieldset>
		<input type="submit" name="submit" class="submit" value="Get Your Font On" />
		</form>
	</div><!--content-->
</div><!--wrapper-->
<?php include "inc/footer.php"; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="http://meta100.github.com/mColorPicker/javascripts/mColorPicker_min.js"></script>
<script src="js/extensions.js"></script>
<script src="js/fontBeast.js"></script>
</body>
</html>
<?php ob_end_flush(); ?>