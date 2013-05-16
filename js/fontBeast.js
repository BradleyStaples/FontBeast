var WebFontConfig = {
	google: {
		families: []
	},
	fontactive: function() {
		fontBeast.drawCanvas();
	}
};
var fontBeast = {
	json : {},
    init : function() {
        var $fontScrollSpan = $('.fontscroll span'),
            $fontClick = $('.fontclick'),
            $scrollerSpan = $('.scroller span');
        $('.fontscroll').scrollTo($('span.active'),100);
        $fontClick.click(function() {
            $fontClick.removeClass('active');
            var $that = $(this).addClass('active');
            $('#fontfamily').val($that.attr('data-font'));
        });
        $scrollerSpan.click(function(){
            $scrollerSpan.removeClass('active');
            $(this).addClass('active');
        });
        $('.filter').keyup(function(){
            $fontScrollSpan.removeClass('filtered');
            var needle = $(this).val().toLowerCase();
                if (needle !== '') {
                $fontScrollSpan.each(function(i) {
                    var $span = $(this),
                        haystack = $span.text().toLowerCase();
                    if (haystack.indexOf(needle) == -1) {
                        $span.addClass('filtered');
                    }
                });
            }
        });
    },
	insertCSSLink : function(json) {
		$("head").append(fontBeast.json.cssLink);
	},
    insertScript : function() {
        var wf = document.createElement('script'),
        s = document.getElementsByTagName('script')[0];
        wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
        wf.type = 'text/javascript';
        wf.async = 'true';
        s.parentNode.insertBefore(wf, s);
    },
    drawCanvas : function(json) {
		var canvas = document.getElementById("displayfont"),
			context = canvas.getContext("2d"),
			$canvas = $("#displayfont"),
			h = $canvas.height(),
			w = $canvas.width();
		context.fillStyle = fontBeast.json.bgColor;
		context.fillRect(0, 0, w, h)
		context.font = fontBeast.json.fontSize + fontBeast.json.fontSizeType + ' "' + fontBeast.json.fontName + '"';
		context.textAlign = "center";
		context.textBaseline = "top";
		context.lineWidth = fontBeast.json.strokeWidth;
		context.strokeStyle = fontBeast.json.strokeColor;
		context.fillStyle = fontBeast.json.fontColor;
		context.fillText(fontBeast.json.fontText.replace("\\",""),w/2,h/2);
		context.strokeText(fontBeast.json.fontText.replace("\\",""),w/2,h/2);
		
		var js = '<scr'+'ipt src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>\n'
		js += '<scr'+'ipt src="http://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js"></script>\n'
		js += '<scr'+'ipt>\n';
		js += 'var canvas = document.getElementById("displayfont"),\n';
		js += '    context = canvas.getContext("2d"),\n';
		js += '    $canvas = $("#displayfont"),\n';
		js += '    h = $canvas.height(),\n';
		js += '    w = $canvas.width();\n';
		js += 'context.fillStyle = "'+fontBeast.json.bgColor+'";\n';
		js += 'context.fillRect(0, 0, w, h)\n';
		js += 'context.font = \''+fontBeast.json.fontSize+fontBeast.json.fontSizeType+' "'+fontBeast.json.fontName+'"\';\n';
		js += 'context.textAlign = "center";\n';
		js += 'context.textBaseline = "top";\n';
		js += 'context.lineWidth = "'+fontBeast.json.strokeWidth+'";\n';
		js += 'context.strokeStyle = "'+fontBeast.json.strokeColor+'";\n';
		js += 'context.fillStyle = "'+fontBeast.json.fontColor+'";\n';
		js += 'context.fillText("'+fontBeast.json.fontText+'",w/2,h/2);\n';
		js += 'context.strokeText("'+fontBeast.json.fontText+'",w/2,h/2);\n';
		js += '</scr'+'ipt>';
		$("#jsoutput").text(js).snippet("javascript",{style:"ide-codewarrior",clipboard:"inc/ZeroClipboard.swf"});
		$("#cssoutput").snippet("css",{style:"ide-codewarrior",clipboard:"inc/ZeroClipboard.swf"});
		$("#htmloutput").text('<canvas id="displayfont" width="1000" height="300"></canvas>').snippet("html",{style:"ide-codewarrior",clipboard:"inc/ZeroClipboard.swf"});
		fontBeast.hideForm();
    },
	retrieveJSON : function() {
		$(".outputcontainer").remove();
		$.post("json.php", $("#fontform").serialize().replace("/'","'"),
		function(data){
			fontBeast.json = data;
			WebFontConfig.google.families[0] = fontBeast.json.fontFamily;
			fontBeast.insertScript();
			fontBeast.insertCSSLink();
			fontBeast.createTemplate();
		}, "json");
	},
	createTemplate : function() {
		var template = Handlebars.compile($("#output-template").html())
			output = template({cssOutput:fontBeast.json.cssOutput,jsOutput:fontBeast.json.jsOutput,htmlOutput:fontBeast.json.htmlOutput});
		$("#fontform").after(output);
	},
	hideForm : function() {
		var form = $("#fontform").hide();
		$(".showform").click(function() {
			form.show();
			$(this).hide();
		})
	}
};

$(function(){
	fontBeast.init();
	$("#fontform").submit(function(e) {
		e.preventDefault();
		subForm();
	})
	$("#fontform input:submit").click(function(e) {
		e.preventDefault();
		subForm();
	})
})

var subForm = function() {
	fontBeast.retrieveJSON();
};