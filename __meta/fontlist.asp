<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Font List</title>
<style type="text/css">
	body, html {font-size:19px; line-height:25px;}
	.fontscroll {width:290px; height:150px; overflow:scroll; overflow-x:hidden; border:1px solid #ccc; margin:0 0 0 5px; padding:0 0 0 1px;}
	.fontclick {margin:5px 0 0 0; display:block; height:30px; width:270px; background:#fff url(images/fontlist.png) 0 0 no-repeat; cursor:pointer; border:1px solid #fff;}
	.fontclick:hover {border-color:#ccc;}
	.fontclick.active, .fontclick.active:hover {border-color:#000;}
<% fontArray = array("Aclonica", "Allan", "Allerta", "Allerta Stencil", "Amaranth", "Annie Use Your Telescope", "Anonymous Pro", "Anton", "Architects Daughter", "Arimo", "Artifika", "Arvo", "Asset", "Astloch", "Aubrey", "Bangers", "Bentham", "Bevan", "Bigshot One", "Black Ops One", "Bowlby One", "Bowlby One SC", "Brawler", "Buda", "Cabin", "Cabin Sketch", "Calligraffitti", "Candal", "Cantarell", "Cardo", "Carme", "Carter One", "Caudex", "Cedarville Cursive", "Cherry Cream Soda", "Chewy", "Coda", "Coda Caption", "Coming Soon", "Copse", "Corben", "Cousine", "Covered By Your Grace", "Crafty Girls", "Crimson Text", "Crushed", "Cuprum", "Damion", "Dancing Script", "Dawning of a New Day", "Delius", "Didact Gothic", "Droid Sans", "Droid Sans Mono", "Droid Serif", "EB Garamond", "Expletus Sans", "Federo", "Fontdiner Swanky", "Forum", "Francois One", "Gentium Basic", "Geo", "Give You Glory", "Gloria Hallelujah", "Goblin One", "Goudy Bookletter 1911", "Gravitas One", "Gruppo", "Hammersmith One", "Holtwood One SC", "Homemade Apple", "IM Fell DW Pica", "IM Fell DW Pica SC", "IM Fell Double Pica", "IM Fell Double Pica SC", "IM Fell English", "IM Fell English SC", "IM Fell French Canon", "IM Fell French Canon SC", "IM Fell Great Primer", "IM Fell Great Primer SC", "Inconsolata", "Indie Flower", "Irish Grover", "Istok Web", "Josefin Sans", "Josefin Slab", "Judson", "Jura", "Just Another Hand", "Just Me Again Down Here", "Kameron", "Kelly Slab", "Kenia", "Kranky", "Kreon", "Kristi", "La Belle Aurore", "Lato", "League Script", "Leckerli One", "Lekton", "Limelight", "Lobster", "Lobster Two", "Lora", "Love Ya Like A Sister", "Loved by the King", "Luckiest Guy", "Maiden Orange", "Mako", "Maven Pro", "Meddon", "MedievalSharp", "Megrim", "Merriweather", "Metrophobic", "Michroma", "Miltonian", "Miltonian Tattoo", "Modern Antiqua", "Molengo", "Monofett", "Mountains of Christmas", "Muli", "Neucha", "Neuton", "News Cycle", "Nixie One", "Nobile", "Nothing You Could Do", "Nova Cut", "Nova Flat", "Nova Mono", "Nova Oval", "Nova Round", "Nova Script", "Nova Slim", "Nova Square", "Nunito", "OFL Sorts Mill Goudy TT", "Old Standard TT", "Open Sans", "Open Sans Condensed", "Orbitron", "Oswald", "Over the Rainbow", "Ovo", "PT Sans", "PT Sans Caption", "PT Sans Narrow", "PT Serif", "PT Serif Caption", "Pacifico", "Patrick Hand", "Paytone One", "Permanent Marker", "Philosopher", "Play", "Playfair Display", "Podkova", "Pompiere", "Puritan", "Quattrocento", "Quattrocento Sans", "Radley", "Raleway", "Redressed", "Reenie Beanie", "Rock Salt", "Rokkitt", "Rosario", "Ruslan Display", "Schoolbell", "Shadows Into Light", "Shanti", "Sigmar One", "Six Caps", "Slackey", "Smythe", "Sniglet", "Snippet", "Special Elite", "Stardos Stencil", "Sue Ellen Francisco", "Sunshiney", "Swanky and Moo Moo", "Syncopate", "Tangerine", "Tenor Sans", "Terminal Dosis Light", "The Girl Next Door", "Tienne", "Tinos", "Ubuntu", "Ultra", "UnifrakturCook", "UnifrakturMaguntia", "Unkempt", "Unna", "VT323", "Varela", "Varela Round", "Vibur", "Vollkorn", "Waiting for the Sunrise", "Wallpoet", "Walter Turncoat", "Wire One", "Yanone Kaffeesatz", "Yellowtail", "Yeseva One", "Zeyada")
n = ubound(fontArray)
for i = 0 to n
	response.write("span.f"&i&" {background-position:0 -"&i*30&"px;}" & vbNewLine)
next %>
</style>
</head>
<body>
<div class="fontscroll">
<%for i = 0 to n
	response.write("<span class=""fontclick f"&i&""" data-font="""&fontArray(i)&"""></span>" & vbNewLine)
next%>
</div><!--fontscroll-->
<input type="hidden" nae="fontfamily" id="fontfamily" value="" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script>
$(function() {
	$(".fontclick").click(function() {
		$(".fontclick").removeClass("active");
		var $that = $(this).addClass("active");
		$("#fontfamily").val($that.attr("data-font"));
	});
});
</script>
</body>
</html>