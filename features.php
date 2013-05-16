<?php ob_start('ob_gzhandler'); ?>
<!DOCTYPE html>
<html>
<head id="dochead">
<title>fontBEAST</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/style.css" />
<link type="image/png" rel="icon" href="favicon.ico" />
</head>
<body>
<?php include "inc/ie6.php"; ?>
<div id="wrapper">
    <div id="content">
        <h1 class="logo" title="Beware the mighty fontBEAST!"><a href="index.php">fontBEAST</a></h1>
        <h2>To Do List</h2>
        <ol>
            <li>Place source code in a GIT repository.</li>
            <li>Sanitize and validate all form input</li>
			<li>Make font family selection more accessible via keyboard controls.</li>
        </ol>
        <hr />
        <h2>Bugs &amp; Errors</h2>
        <ul>
            <li>Fonts with more than one word in name aren't working. Not sure why.</li>
        </ul>
        <hr />
        <h2>Changelog</h2>
        <dl class="changelog">
            <dt>0.1</dt>
                <dd>Initial concept created. Canvas working with jCanvas.</dd>
            <dt>0.2</dt>
                <dd>Fonts implemented. Some not working, realized Google handles names slightly different depending upon html/css/script usage.</dd>
            <dt>0.21</dt>
                <dd>Fonts fixed, corrected data on <em>hopefully</em> all 214 fonts from Google's Web Fonts collection.</dd>
            <dt>0.3</dt>
                <dd>Logo created, site given basic styling. Color pickers added instead of manual entry. Created font family selector, not very friendly atm.</dd>
            <dt>0.4</dt>
                <dd>Output box generating CSS as pulled from Google's external style sheet.</dd>
            <dt>0.5</dt>
                <dd>Implemented code syntax hilighter for output. Used Formalize to clean up forms.</dd>
            <dt>0.6</dt>
                <dd>Added search box to filters fonts. After form submit, font choice now auto scrolled to top. Added click-to-copy buttons for output code.</dd>
            <dt>0.7</dt>
                <dd>Converted code into an OOP class, much cleaner on front end. Fun learning experience.</dd>
			<dt>0.8</dt>
				<dd>Scrapped the idea for the image upload, I didn't like how it was working out. Made entire process AJAX Driven.</dd>
			<dt>0.81</dt>
				<dd>Removed jCanvas and went with native code. Added JS Output and HTML Output so a user can (theoretically) recreate.</dd>
			<dt>0.82</dt>
				<dd>Managed to break the syntax highligher and multi word fonts. Joy.</dd>
			<dt>0.9</dt>
				<dd>Changed syntax highlighters, hid form upon canvas creation. Tested output code.</dd>
        </dl>
    </div><!--content-->
</div><!--wrapper-->
<?php include "inc/footer.php" ?>
</body>
</html>
<?php ob_end_flush(); ?>