<?php
class fontBeast {
	//set private properties arrays to be used. font arrays taken from Google Web Fonts
	private $fontFamily = "Aclonica";
	private $fontText = "Please don't eat me, fontBEAST!";
	private $fontSize = 48;
	private $fontSizeType = "px";
	private $fontColor = "#1b3880";
	private $strokeWidth = 1;
	private $strokeColor = "#ffffff";
	private $bgColor = "#d4dae8";
	private $bgImage = "";
	
	private $fontNames = array("Aclonica", "Allan", "Allerta", "Allerta Stencil", "Amaranth", "Annie Use Your Telescope", "Anonymous Pro", "Anton", "Architects Daughter", "Arimo", "Artifika", "Arvo", "Asset", "Astloch", "Aubrey", "Bangers", "Bentham", "Bevan", "Bigshot One", "Black Ops One", "Bowlby One", "Bowlby One SC", "Brawler", "Buda", "Cabin", "Cabin Sketch", "Calligraffitti", "Candal", "Cantarell", "Cardo", "Carme", "Carter One", "Caudex", "Cedarville Cursive", "Cherry Cream Soda", "Chewy", "Coda", "Coda Caption", "Coming Soon", "Copse", "Corben", "Cousine", "Covered By Your Grace", "Crafty Girls", "Crimson Text", "Crushed", "Cuprum", "Damion", "Dancing Script", "Dawning of a New Day", "Delius", "Didact Gothic", "Droid Sans", "Droid Sans Mono", "Droid Serif", "EB Garamond", "Expletus Sans", "Federo", "Fontdiner Swanky", "Forum", "Francois One", "Gentium Basic", "Geo", "Give You Glory", "Gloria Hallelujah", "Goblin One", "Goudy Bookletter 1911", "Gravitas One", "Gruppo", "Hammersmith One", "Holtwood One SC", "Homemade Apple", "IM Fell DW Pica", "IM Fell DW Pica SC", "IM Fell Double Pica", "IM Fell Double Pica SC", "IM Fell English", "IM Fell English SC", "IM Fell French Canon", "IM Fell French Canon SC", "IM Fell Great Primer", "IM Fell Great Primer SC", "Inconsolata", "Indie Flower", "Irish Grover", "Istok Web", "Josefin Sans", "Josefin Slab", "Judson", "Jura", "Just Another Hand", "Just Me Again Down Here", "Kameron", "Kelly Slab", "Kenia", "Kranky", "Kreon", "Kristi", "La Belle Aurore", "Lato", "League Script", "Leckerli One", "Lekton", "Limelight", "Lobster", "Lobster Two", "Lora", "Love Ya Like A Sister", "Loved by the King", "Luckiest Guy", "Maiden Orange", "Mako", "Maven Pro", "Meddon", "MedievalSharp", "Megrim", "Merriweather", "Metrophobic", "Michroma", "Miltonian", "Miltonian Tattoo", "Modern Antiqua", "Molengo", "Monofett", "Mountains of Christmas", "Muli", "Neucha", "Neuton", "News Cycle", "Nixie One", "Nobile", "Nothing You Could Do", "Nova Cut", "Nova Flat", "Nova Mono", "Nova Oval", "Nova Round", "Nova Script", "Nova Slim", "Nova Square", "Nunito", "OFL Sorts Mill Goudy TT", "Old Standard TT", "Open Sans", "Open Sans Condensed", "Orbitron", "Oswald", "Over the Rainbow", "Ovo", "PT Sans", "PT Sans Caption", "PT Sans Narrow", "PT Serif", "PT Serif Caption", "Pacifico", "Patrick Hand", "Paytone One", "Permanent Marker", "Philosopher", "Play", "Playfair Display", "Podkova", "Pompiere", "Puritan", "Quattrocento", "Quattrocento Sans", "Radley", "Raleway", "Redressed", "Reenie Beanie", "Rock Salt", "Rokkitt", "Rosario", "Ruslan Display", "Schoolbell", "Shadows Into Light", "Shanti", "Sigmar One", "Six Caps", "Slackey", "Smythe", "Sniglet", "Snippet", "Special Elite", "Stardos Stencil", "Sue Ellen Francisco", "Sunshiney", "Swanky and Moo Moo", "Syncopate", "Tangerine", "Tenor Sans", "Terminal Dosis Light", "The Girl Next Door", "Tienne", "Tinos", "Ubuntu", "Ultra", "UnifrakturCook", "UnifrakturMaguntia", "Unkempt", "Unna", "VT323", "Varela", "Varela Round", "Vibur", "Vollkorn", "Waiting for the Sunrise", "Wallpoet", "Walter Turncoat", "Wire One", "Yanone Kaffeesatz", "Yellowtail", "Yeseva One", "Zeyada");
	
	private $linkNames = array("Aclonica", "Allan:700", "Allerta", "Allerta+Stencil", "Amaranth:400,400italic,700,700italic", "Annie+Use+Your+Telescope", "Anonymous+Pro:400,400italic,700,700italic", "Anton", "Architects+Daughter", "Arimo:400,700,400italic,700italic", "Artifika", "Arvo:400,700,400italic,700italic", "Asset", "Astloch:400,700", "Aubrey", "Bangers", "Bentham", "Bevan", "Bigshot+One", "Black+Ops+One", "Bowlby+One", "Bowlby+One+SC", "Brawler", "Buda:300", "Cabin:400,500,600,700,400italic,500italic,600italic,700italic", "Cabin+Sketch:700", "Calligraffitti", "Candal", "Cantarell:400,700,400italic,700italic", "Cardo", "Carme", "Carter+One", "Caudex:400,700,400italic,700italic", "Cedarville+Cursive", "Cherry+Cream+Soda", "Chewy", "Coda:800", "Coda+Caption:800", "Coming+Soon", "Copse", "Corben:700", "Cousine:400,700,400italic,700italic", "Covered+By+Your+Grace", "Crafty+Girls", "Crimson+Text:400,400italic,600,600italic,700,700italic", "Crushed", "Cuprum", "Damion", "Dancing+Script:400,700", "Dawning+of+a+New+Day", "Delius", "Didact+Gothic", "Droid+Sans", "Droid+Sans+Mono", "Droid+Serif:400,700,400italic,700italic", "EB+Garamond", "Expletus+Sans:400,400italic,500,500italic,600,600italic,700,700italic", "Federo", "Fontdiner+Swanky", "Forum", "Francois+One", "Gentium+Basic:400,700,400italic,700italic", "Geo", "Give+You+Glory", "Gloria+Hallelujah", "Goblin+One", "Goudy+Bookletter+1911", "Gravitas+One", "Gruppo", "Hammersmith+One", "Holtwood+One+SC", "Homemade+Apple", "IM+Fell+DW+Pica:400,400italic", "IM+Fell+DW+Pica+SC", "IM+Fell+Double+Pica:400,400italic", "IM+Fell+Double+Pica+SC", "IM+Fell+English:400,400italic", "IM+Fell+English+SC", "IM+Fell+French+Canon:400,400italic", "IM+Fell+French+Canon+SC", "IM+Fell+Great+Primer:400,400italic", "IM+Fell+Great+Primer+SC", "Inconsolata", "Indie+Flower", "Irish+Grover", "Istok+Web:400,700,400italic,700italic", "Josefin+Sans:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic", "Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic", "Judson:400,700,400italic", "Jura:300,400,500,600", "Just+Another+Hand", "Just+Me+Again+Down+Here", "Kameron:400,700", "Kelly+Slab", "Kenia", "Kranky", "Kreon:300,400,700", "Kristi", "La+Belle+Aurore", "Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic", "League+Script", "Leckerli+One", "Lekton:400,700,400italic", "Limelight", "Lobster", "Lobster+Two:400,400italic,700,700italic", "Lora:400,700,400italic,700italic", "Love+Ya+Like+A+Sister", "Loved+by+the+King", "Luckiest+Guy", "Maiden+Orange", "Mako", "Maven+Pro:400,500,700,900", "Meddon", "MedievalSharp", "Megrim", "Merriweather:300,400,700,900", "Metrophobic", "Michroma", "Miltonian", "Miltonian+Tattoo", "Modern+Antiqua", "Molengo", "Monofett", "Mountains+of+Christmas", "Muli:300,400,300italic,400italic", "Neucha", "Neuton:400,400italic", "News+Cycle", "Nixie+One", "Nobile:400,400italic,700,700italic", "Nothing+You+Could+Do", "Nova+Cut", "Nova+Flat", "Nova+Mono", "Nova+Oval", "Nova+Round", "Nova+Script", "Nova+Slim", "Nova+Square", "Nunito:300,400,700", "OFL+Sorts+Mill+Goudy+TT:400,400italic", "Old+Standard+TT:400,400italic,700", "Open+Sans:300italic,400italic,600italic,700italic,800italic,300,400,600,700,800", "Open+Sans+Condensed:300,300italic", "Orbitron:400,500,700,900", "Oswald", "Over+the+Rainbow", "Ovo", "PT+Sans:400,700,400italic,700italic", "PT+Sans+Caption:400,700", "PT+Sans+Narrow:400,700", "PT+Serif:400,700,400italic,700italic", "PT+Serif+Caption:400,400italic", "Pacifico", "Patrick+Hand", "Paytone+One", "Permanent+Marker", "Philosopher", "Play:400,700", "Playfair+Display", "Podkova", "Pompiere", "Puritan:400,700,400italic,700italic", "Quattrocento", "Quattrocento+Sans", "Radley", "Raleway:100", "Redressed", "Reenie+Beanie", "Rock+Salt", "Rokkitt:400,700", "Rosario", "Ruslan+Display", "Schoolbell", "Shadows+Into+Light", "Shanti", "Sigmar+One", "Six+Caps", "Slackey", "Smythe", "Sniglet:800", "Snippet", "Special+Elite", "Stardos+Stencil:400,700", "Sue+Ellen+Francisco", "Sunshiney", "Swanky+and+Moo+Moo", "Syncopate:400,700", "Tangerine:400,700", "Tenor+Sans", "Terminal+Dosis+Light", "The+Girl+Next+Door", "Tienne:400,700,900", "Tinos:400,700,400italic,700italic", "Ubuntu:300,400,500,700,300italic,400italic,500italic,700italic", "Ultra", "UnifrakturCook:700", "UnifrakturMaguntia", "Unkempt", "Unna", "VT323", "Varela", "Varela+Round", "Vibur", "Vollkorn:400italic,700italic,400,700", "Waiting+for+the+Sunrise", "Wallpoet", "Walter+Turncoat", "Wire+One", "Yanone+Kaffeesatz:200,300,400,700", "Yellowtail", "Yeseva+One", "Zeyada");
	
	private $cssNames = array("'Aclonica', sans-serif", "'Allan', cursive", "'Allerta', sans-serif", "'Allerta Stencil', sans-serif", "'Amaranth', sans-serif", "'Annie Use Your Telescope', cursive", "'Anonymous Pro', sans-serif", "'Anton', sans-serif", "'Architects Daughter', cursive", "'Arimo', sans-serif", "'Artifika', serif", "'Arvo', serif", "'Asset', cursive", "'Astloch', cursive", "'Aubrey', cursive", "'Bangers', cursive", "'Bentham', serif", "'Bevan', serif", "'Bigshot One', cursive", "'Black Ops One', cursive", "'Bowlby One', sans-serif", "'Bowlby One SC', sans-serif", "'Brawler', serif", "'Buda', sans-serif", "'Cabin', sans-serif", "'Cabin Sketch', cursive", "'Calligraffitti', cursive", "'Candal', sans-serif", "'Cantarell', sans-serif", "'Cardo', serif", "'Carme', sans-serif", "'Carter One', sans-serif", "'Caudex', serif", "'Cedarville Cursive', cursive", "'Cherry Cream Soda', cursive", "'Chewy', cursive", "'Coda', sans-serif", "'Coda Caption', sans-serif", "'Coming Soon', cursive", "'Copse', serif", "'Corben', serif", "'Cousine', sans-serif", "'Covered By Your Grace', cursive", "'Crafty Girls', cursive", "'Crimson Text', serif", "'Crushed', cursive", "'Cuprum', sans-serif", "'Damion', cursive", "'Dancing Script', cursive", "'Dawning of a New Day', cursive", "'Delius', cursive", "'Didact Gothic', sans-serif", "'Droid Sans', sans-serif", "'Droid Sans Mono', sans-serif", "'Droid Serif', serif", "'EB Garamond', serif", "'Expletus Sans', cursive", "'Federo', cursive", "'Fontdiner Swanky', cursive", "'Forum', cursive", "'Francois One', sans-serif", "'Gentium Basic', serif", "'Geo', sans-serif", "'Give You Glory', cursive", "'Gloria Hallelujah', cursive", "'Goblin One', cursive", "'Goudy Bookletter 1911', serif", "'Gravitas One', cursive", "'Gruppo', sans-serif", "'Hammersmith One', sans-serif", "'Holtwood One SC', serif", "'Homemade Apple', cursive", "'IM Fell DW Pica', serif", "'IM Fell DW Pica SC', serif", "'IM Fell Double Pica', serif", "'IM Fell Double Pica SC', serif", "'IM Fell English', serif", "'IM Fell English SC', serif", "'IM Fell French Canon', serif", "'IM Fell French Canon SC', serif", "'IM Fell Great Primer', serif", "'IM Fell Great Primer SC', serif", "'Inconsolata', sans-serif", "'Indie Flower', cursive", "'Irish Grover', cursive", "'Istok Web', sans-serif", "'Josefin Sans', sans-serif", "'Josefin Slab', serif", "'Judson', serif", "'Jura', sans-serif", "'Just Another Hand', cursive", "'Just Me Again Down Here', cursive", "'Kameron', serif", "'Kelly Slab', cursive", "'Kenia', sans-serif", "'Kranky', cursive", "'Kreon', serif", "'Kristi', cursive", "'La Belle Aurore', cursive", "'Lato', sans-serif", "'League Script', cursive", "'Leckerli One', cursive", "'Lekton', sans-serif", "'Limelight', cursive", "'Lobster', cursive", "'Lobster Two', cursive", "'Lora', serif", "'Love Ya Like A Sister', cursive", "'Loved by the King', cursive", "'Luckiest Guy', cursive", "'Maiden Orange', serif", "'Mako', sans-serif", "'Maven Pro', cursive", "'Meddon', cursive", "'MedievalSharp', cursive", "'Megrim', cursive", "'Merriweather', serif", "'Metrophobic', sans-serif", "'Michroma', sans-serif", "'Miltonian', cursive", "'Miltonian Tattoo', cursive", "'Modern Antiqua', cursive", "'Molengo', sans-serif", "'Monofett', cursive", "'Mountains of Christmas', cursive", "'Muli', sans-serif", "'Neucha', cursive", "'Neuton', serif", "'News Cycle', sans-serif", "'Nixie One', cursive", "'Nobile', sans-serif", "'Nothing You Could Do', cursive", "'Nova Cut', cursive", "'Nova Flat', cursive", "'Nova Mono', cursive", "'Nova Oval', cursive", "'Nova Round', cursive", "'Nova Script', cursive", "'Nova Slim', cursive", "'Nova Square', cursive", "'Nunito', sans-serif", "'OFL Sorts Mill Goudy TT', serif", "'Old Standard TT', serif", "'Open Sans', sans-serif", "'Open Sans Condensed', sans-serif", "'Orbitron', sans-serif", "'Oswald', sans-serif", "'Over the Rainbow', cursive", "'Ovo', serif", "'PT Sans', sans-serif", "'PT Sans Caption', sans-serif", "'PT Sans Narrow', sans-serif", "'PT Serif', serif", "'PT Serif Caption', serif", "'Pacifico', cursive", "'Patrick Hand', cursive", "'Paytone One', sans-serif", "'Permanent Marker', cursive", "'Philosopher', cursive", "'Play', sans-serif", "'Playfair Display', serif", "'Podkova', sans-serif", "'Pompiere', cursive", "'Puritan', sans-serif", "'Quattrocento', serif", "'Quattrocento Sans', sans-serif", "'Radley', serif", "'Raleway', sans-serif", "'Redressed', cursive", "'Reenie Beanie', cursive", "'Rock Salt', cursive", "'Rokkitt', serif", "'Rosario', sans-serif", "'Ruslan Display', cursive", "'Schoolbell', cursive", "'Shadows Into Light', cursive", "'Shanti', sans-serif", "'Sigmar One', sans-serif", "'Six Caps', sans-serif", "'Slackey', cursive", "'Smythe', cursive", "'Sniglet', cursive", "'Snippet', sans-serif", "'Special Elite', cursive", "'Stardos Stencil', cursive", "'Sue Ellen Francisco', cursive", "'Sunshiney', cursive", "'Swanky and Moo Moo', cursive", "'Syncopate', sans-serif", "'Tangerine', cursive", "'Tenor Sans', cursive", "'Terminal Dosis Light', sans-serif", "'The Girl Next Door', cursive", "'Tienne', serif", "'Tinos', serif", "'Ubuntu', sans-serif", "'Ultra', serif", "'UnifrakturCook', cursive", "'UnifrakturMaguntia', cursive", "'Unkempt', cursive", "'Unna', serif", "'VT323', cursive", "'Varela', sans-serif", "'Varela Round', sans-serif", "'Vibur', cursive", "'Vollkorn', serif", "'Waiting for the Sunrise', cursive", "'Wallpoet', cursive", "'Walter Turncoat', cursive", "'Wire One', sans-serif", "'Yanone Kaffeesatz', sans-serif", "'Yellowtail', cursive", "'Yeseva One', serif", "'Zeyada', cursive");
	
	//constructor
	public function __construct() {
		$this->assignFormData();
	}

	//destructor
	public function __destruct() {
	}

	//generic getter
	public function __get($name) {
		return $this->$name;
	}

	//generic setter
	public function __set($name,$value) {
		$this->$name = $value;
	}
	
	public function countArray() {
		$data = $this->linkNames;
		return count($data);
	}
	
	private function getArrayIndex($value) {
		$max = $this->countArray();
		$data = $this->linkNames;
		for ($i=0; $i < $max; $i++) {
			if ($data[$i] == $value) {return $i;}
		}
	}

	public function getCSSOutput() {
		$CSS = "";
		if (isset($_POST['fontfamily'])) {
			$CSS = file_get_contents("http://fonts.googleapis.com/css?family=".$this->fontFamily."&v2", "r");
		}
		return $CSS;
	}
	
	private function assignFormData() {
		if (!empty($_POST['fontfamily'])) {$this->fontFamily = $_POST['fontfamily'];}
		if (!empty($_POST['text'])) {$this->fontText = $_POST['text'];}
		if (!empty($_POST['fontsize'])) {$this->fontSize = $_POST['fontsize'];}
		if (!empty($_POST['fontsizetype'])) {$this->fontSizeType = $_POST['fontsizetype'];}
		if (!empty($_POST['fillcolor'])) {$this->fontColor = $_POST['fillcolor'];}
		if (isset($_POST['strokewidth'])) {$this->strokeWidth = $_POST['strokewidth'];}
		if (isset($_POST['strokecolor'])) {$this->strokeColor = $_POST['strokecolor'];}
		if (!empty($_POST['bgcolor'])) {$this->bgColor = $_POST['bgcolor'];}
	}

	public function createArray($cssLink,$cssOutput,$jsOutput,$htmlOutput) {
		$fontLink = $this->fontFamily;
		$index = $this->getArrayIndex($fontLink);
		$arry = array(
			"cssLink" => $cssLink,
			"cssOutput" => $cssOutput,
			"jsOutput" => $jsOutput,
			"htmlOutput" => $htmlOutput,
			"fontFamily" => $this->fontFamily,
			"fontName" => $this->fontNames[$index],
			"fontText" => $this->fontText,
			"fontSize" => $this->fontSize,
			"fontSizeType" => $this->fontSizeType,
			"fontColor" => $this->fontColor,
			"strokeWidth" => $this->strokeWidth,
			"strokeColor" => $this->strokeColor,
			"bgColor" => $this->bgColor
		);
		return $arry;
	}
	
	public function writeCssDeclarations() {
		$max = $this->countArray();
		for ($i=0; $i< $max; $i++) {
			echo "span.f$i {background-position:0 -".($i*30)."px;}\n";
		}
	}
	
	public function getCssLink() {
		$font = $this->fontFamily;
		$link = "<link href=\"http://fonts.googleapis.com/css?family=$font&v2\" rel=\"stylesheet\" type=\"text/css\" />";
		return $link;
	}
	
	public function writeFontSelector() {
		$max = $this->countArray();
		$fontLink = $this->fontFamily;
		$index = $this->getArrayIndex($fontLink);
		for ($i=0; $i< $max; $i++) {
			if ($i == $index) {$className = "active";} else {$className = "";}
			if ($i > 0) {echo "\t\t\t";}
			echo "<span class=\"$className fontclick f$i\" data-font=\"". $this->linkNames[$i]."\">".$this->fontNames[$i]."</span>\n";
		}
	}
}
?>