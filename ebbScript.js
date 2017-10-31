// JavaScript Document

$('#DATES>h2').click(function()
{
	'use strict';
	var dateOpen = $('#DATES').is('.open');
	if(!dateOpen)
	{
		$('#DATES').addClass('open');
		$('section').addClass('shrink');
		$('body,html').addClass('noScroll');
	}
	else
	{
		$('#DATES').removeClass('open');
		$('section').removeClass('shrink');
		$('body,html').removeClass('noScroll');
	}
});


//DETECT EMPTY MONTHS
function emptyCheck()
{
	'use strict';
	var d = new Date();
  var month = d.getMonth()+1;
	var monthClass = "mon_"+month;
	var monthPara = $('p.'+monthClass).find('.place');
	//alert(monthClass);
	$.each(monthPara, function()
	{
		alert('Oh');
		if ($(this).html() === '')
		{
			alert('YEAH!');
			//monthPara.last().html('Yeah!');
		}
	});
	
}

//REMOVE PAST DATES
$(document).ready(function()
{
	'use strict';
	var d = new Date();
  var n = d.getFullYear();
	var month = d.getMonth()+1;
	var month2 = ((''+month).length<2 ? '0' : '') + month;
	var day = d.getDate();
	var date = ((''+month).length<2 ? '0' : '') + month + '-' + ((''+day).length<2 ? '0' : '') + day + '-' + d.getFullYear();
	
	$('#DATES #IMPORT').load('http://www.emmettbowerband.com/dates.html #SCHED', function()
	{
		$('#SCHED').find("[data-date='" + date + "']").prevAll('p').remove();
		$('#SCHED #'+month2).prevAll('h3').remove();
	});
	$('#COPY').append(n+' Emmett Bower Band');
});



//BACK TO TOP FUNCTION
$('#BACK_TOP').click(function() 
{
	'use strict';
  $('html,body').animate({ scrollTop: 0 },1500);
});



//CLEAR CONTACT FORM
$('#RESET_FORM').click(function()
{
	'use strict';
	$('#EMAIL_FORM').find('input[type=text], textarea').val('');
});



var distance1 = $('h1').offset().top;
var distance2 = $('#ABOUT').offset().top;
//var distance3 = $('.fixed').height();
var $window = $(window);

$window.scroll(function() 
{
	'use strict';
 	if ($window.scrollTop() >= distance1+50) 
	{
		$('h1').addClass('fixed');
		$('#BACK_TOP').addClass('show');
  }
	if ($window.scrollTop() >= distance1+50) 
	{
		$('h1').addClass('fixed');
		$('#BACK_TOP').addClass('show');
  }
	else if (distance2 >= 53)
	{
		$('h1').removeClass('fixed');
		$('#BACK_TOP').removeClass('show');
	}
});



$('nav>button:first-of-type').click(function()
{
	'use strict';
	var open = $('nav').is('.open');
	if(!open)
		{
			$('nav').addClass('open', 400, 'swing');
		}
	else
		{
			$('nav').removeClass('open', 400, 'swing');
		}
});



function jumpTo(section)
{
	'use strict';
	$('#DATES').removeClass('open');
	$('section').removeClass('shrink');
	$('nav').removeAttr('class');
	if (section === 'ABOUT')
	{
		$('html, body').animate({scrollTop: $('#'+section).position().top+250}, 1000).focus();
	}
	else
	{
		$('html, body').animate({scrollTop: $('#'+section).position().top-50}, 1500).focus();
	}
	$('#'+section).focus();
}


//PHOTO BOX VIEWER
$('#PHOTO_BOX>div>button').click(function()
{
	'use strict';
	var src = $(this).find('img').attr('src');
	$('body').addClass('noScroll photo').append('<div id="VIEWER"><button type="button" id="VIEWER_CLOSE">&#8855; CLOSE</button><img id="VIEWER_IMG" src="'+src+'" alt=""><button type="button" id="VIEWER_LEFT">&#9656;</button><button type="button" id="VIEWER_RIGHT">&#9656;</button></div>');
	$('html').addClass('noScroll', function()
	{
		var offset = $('#VIEWER_IMG').height() / 2+'px';
		$('#VIEWER_IMG').attr('style','margin-top:-'+offset);
	});
});

$(document).on('click','.photo #VIEWER_RIGHT', function()
{
	'use strict';
	var current = $('#VIEWER_IMG').attr('src');
	var next = $('#PHOTO_BOX img[src$="'+current+'"]').parent().parent().next();
	var nextsrc = next.find('img').attr('src');
	var first = $('#PHOTO_BOX img:first').attr('src');
	//alert(''+current+','+first+'');
	if (nextsrc === undefined)
	{
		$('#VIEWER_IMG').attr('src',first);
		var offset = $('#VIEWER_IMG').height() / 2+'px';
		$('#VIEWER_IMG').attr('style','margin-top:-'+offset);
	}
	else
	{
		$('#VIEWER_IMG').attr('src',nextsrc);
		var offset2 = $('#VIEWER_IMG').height() / 2+'px';
		$('#VIEWER_IMG').attr('style','margin-top:-'+offset2);
	}
});

$(document).on('click','.photo #VIEWER_LEFT', function()
{
	'use strict';
	var current = $('#VIEWER_IMG').attr('src');
	var prev = $('#PHOTO_BOX img[src$="'+current+'"]').parent().parent().prev();
	var prevsrc = prev.find('img').attr('src');
	var last = $('#PHOTO_BOX img:last').attr('src');
	//alert(''+current+','+first+'');
	if (prevsrc === undefined)
	{
		$('#VIEWER_IMG').attr('src',last);
		var offset = $('#VIEWER_IMG').height() / 2+'px';
		$('#VIEWER_IMG').attr('style','margin-top:-'+offset);
	}
	else
	{
		$('#VIEWER_IMG').attr('src',prevsrc);
		var offset2 = $('#VIEWER_IMG').height() / 2+'px';
		$('#VIEWER_IMG').attr('style','margin-top:-'+offset2);
	}
});



//MERCH BOX VIEWER
$('#MERCH_BOX>div>button').click(function()
{
	'use strict';
	var src = $(this).find('img').attr('src');
	$('body').addClass('noScroll merch').append('<div id="VIEWER"><button type="button" id="VIEWER_CLOSE">&#8855; CLOSE</button><img id="VIEWER_IMG" src="'+src+'" alt=""><button type="button" id="VIEWER_LEFT">&#9656;</button><button type="button" id="VIEWER_RIGHT">&#9656;</button></div>');
	$('html').addClass('noScroll', function()
	{
		var offset = $('#VIEWER_IMG').height() / 2+'px';
		$('#VIEWER_IMG').attr('style','margin-top:-'+offset);
	});
});

$(document).on('click','.merch #VIEWER_RIGHT', function()
{
	'use strict';
	var current = $('#VIEWER_IMG').attr('src');
	var next = $('#MERCH_BOX img[src$="'+current+'"]').parent().parent().next();
	var nextsrc = next.find('img').attr('src');
	var first = $('#MERCH_BOX img:first').attr('src');
	//alert(''+current+','+first+'');
	if (nextsrc === undefined)
	{
		$('#VIEWER_IMG').attr('src',first);
		var offset = $('#VIEWER_IMG').height() / 2+'px';
		$('#VIEWER_IMG').attr('style','margin-top:-'+offset);
	}
	else
	{
		$('#VIEWER_IMG').attr('src',nextsrc);
		var offset2 = $('#VIEWER_IMG').height() / 2+'px';
		$('#VIEWER_IMG').attr('style','margin-top:-'+offset2);
	}
});

$(document).on('click','.merch #VIEWER_LEFT', function()
{
	'use strict';
	var current = $('#VIEWER_IMG').attr('src');
	var prev = $('#MERCH_BOX img[src$="'+current+'"]').parent().parent().prev();
	var prevsrc = prev.find('img').attr('src');
	var last = $('#MERCH_BOX img:last').attr('src');
	//alert(''+current+','+first+'');
	if (prevsrc === undefined)
	{
		$('#VIEWER_IMG').attr('src',last);
		var offset = $('#VIEWER_IMG').height() / 2+'px';
		$('#VIEWER_IMG').attr('style','margin-top:-'+offset);
	}
	else
	{
		$('#VIEWER_IMG').attr('src',prevsrc);
		var offset2 = $('#VIEWER_IMG').height() / 2+'px';
		$('#VIEWER_IMG').attr('style','margin-top:-'+offset2);
	}
});




$(document).on('click', '#VIEWER_CLOSE', function()
{
	'use strict';
	$('#VIEWER').remove();
	$('body, html').removeAttr('class');
});