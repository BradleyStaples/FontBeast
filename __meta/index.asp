<!--#include file="inc/fontArray.asp"-->
<!DOCTYPE html>
<html>
<head id="dochead">
<title>Fonts &amp; Canvas</title>
<meta charset="utf-8">
<link rel="stylesheet" href="inc/style.css" />
<link rel="stylesheet" href="inc/fonts.asp" />
<% if request.querystring("fontfamily") <> "" then%><link href="http://fonts.googleapis.com/css?family=<%=request.querystring("fontfamily")%>&v2" rel="stylesheet" type="text/css" /><%end if%>
</head>
<body>
<!--#include file="inc/ie6.asp"-->
<div id="wrapper">
	<div id="content">
		<h1>fontBEAST</h1>
		<form name="fontform" class="fontform" method="get" action="index.asp">
		<fieldset>
			<legend>Unleash your beast</legend>
			<div class="fontmeta">
				<label for="text" class="textarea">Text</label>
				<textarea name="text" id="text">Don't Eat Me, fontBEAST!</textarea><br />
				<input type="hidden" name="fontfamily" id="fontfamily" />
				<label for="fontsize">Font Size</label>
				<input type="number" name="fontsize" id="fontsize" value="36"><br />
				<label for="fontsizetype">Size Type</label>
				<select name="fontsizetype" id="fontsizetype">
					<option value="px">px</option>
					<option value="em">em</option>
					<option value="pt">pt</option>
				</select><br />
				<label for="strokewidth">Stroke Width</label>
				<input type="number" name="strokewidth" id="strokewidth" value="1"><br />
				<label for="strokecolor">Stroke Color</label>
				<input type="color" name="strokecolor" id="strokecolor" data-hex="true" value="#990000"><br />
				<label for="fillcolor">Text Color</label>
				<input type="color" name="fillcolor" id="fillcolor" data-hex="true" value="#333333"><br />
				<label for="bgcolor">Background Color</label>
				<input type="color" name="bgcolor" id="bgcolor" data-hex="true" value="#f0ffb0"><br />
			</div><!--fontmeta-->
			<div class="fontscroll">
			<%for i = 0 to numFonts
				response.write("<span class=""fontclick f"&i&""" data-font="""&replace(fontArray(i)," ","+")&"""></span>" & vbNewLine)
			next%>
			</div><!--fontscroll-->
		</fieldset>
		<input type="submit" value="Get Your Font On" />
		</form>
		<hr />
		<h2><em>Voila!</em></h2>
		<canvas id="displayfont" width="1000" height="300"></canvas>
		<h2>And of course, the code:</h2>
		<div class="csscode">.pad5 {padding:5px;}
.left {float:left;}
.tleft {text-align:left;}
.right {float:right;}
.tright {text-align:right;}
.center {text-align:center;}
.centeralign {text-align:center; margin:0 auto;}
.clear {clear:both;}</div> <!--output-->
	</div><!--content-->
</div><!--wrapper-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="http://meta100.github.com/mColorPicker/javascripts/mColorPicker_min.js"></script>
<script src="js/jcanvas.min.js"></script>
<script>
var WebFontConfig = {
	google: {families:['<%=replace(request.querystring("fontfamily"),"+"," ")%>']},
	active: function() {drawCanvas();},
	doInit: <% if request.querystring("fontfamily") <> "" then response.write("true") else response.write("false") end if%>
};
(function() {
	$(".fontclick").click(function() {
		$(".fontclick").removeClass("active");
		var $that = $(this).addClass("active");
		$("#fontfamily").val($that.attr("data-font"));
	});
	if (WebFontConfig.doInit) {
		var wf = document.createElement('script'),
		s = document.getElementsByTagName('script')[0];
		wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
		wf.type = 'text/javascript';
		wf.async = 'true';
		s.parentNode.insertBefore(wf, s);
	}
})();
<%if request.querystring("fontfamily") <> "" then%>
var drawCanvas = function() {
	var $canvas = $("#displayfont");
	//draw canvas
	$canvas
	.drawRect({
		fillStyle: '<%=request.querystring("bgcolor")%>',
		x: 0,
		y: 0,
		width: $canvas.width(),
		height: $canvas.height(),
		fromCenter: false
	})
	.drawText({
		fillStyle: '<%=request.querystring("fillcolor")%>',
		strokeStyle: '<%=request.querystring("strokecolor")%>',
		strokeWidth: <%=request.querystring("strokewidth")%>,
		text: '<%=replace(request.querystring("text"),"'","\'")%>',
		align: "left",
		baseline: "top",
		font: "normal <%=request.querystring("fontsize")%><%=request.querystring("fontsizetype")%> '<%=replace(request.querystring("fontfamily"),"+"," ")%>'",
		x: 10,
		y: 10
	});
};
<%end if%>
</script>
</body>
</html>