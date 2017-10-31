<?php

if(isset($_POST['SEND'])) 
{
	
	$FIRST_NAME = $_POST['FIRST_NAME'];
	$WEBSITE = $_POST['WEBSITE'];
	$SENDER_EMAIL = $_POST['EMAIL'];
	$MESSAGE = $_POST['MESSAGE'];
	$ADD = $_POST['LIST'];


	//BAD SUBMISSION
	if (!empty($WEBSITE))
	{
		die();
	}
	
	
	//SENDER WOULD LIKE TO BE ADDED TO MAILING LIST
	if (empty($WEBSITE) && !empty($ADD))
	{
		$ALERT = "alert('You will recieve a confirmation email. Please respond to this email and confirm that you would like to be added to our mailing list.')";
		$ALERT1 = "You will recieve a confirmation email. Please respond to this email and confirm that you would like to be added to our mailing list.";
		
		$to = "jeffbower@emmettbowerband.com";
		$subject = "Email sent from Emmett Bower Band website, request to add to mailing list";

		$message = "
			<html>
			<head>
				<title>Email sent from Emmett Bower Band website</title>
			</head>
			<body>
				<h1 style='font-family:Arial, Helvetica, sans-serif; font-size:1.5em;'>Email sent from the Emmett Bower Band website.</h1>
				<p style='font-family:Arial, Helvetica, sans-serif;'>Message from $FIRST_NAME at $SENDER_EMAIL:</p>
				<p style='font-family:Arial, Helvetica, sans-serif;'>$MESSAGE</p>
				<p style='font-family:Arial, Helvetica, sans-serif; font-weight:bold; color:red;'>Please add sender to mailing list upon confirmation!</p>
			</body>
			</html>";

		// Set content-type header for sending HTML email
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

		// Additional headers
		$headers .= 'From: jeffbower@emmettbowerband.com' . "\r\n";
		$headers .= 'Reply-To: jeffbower@emmettbowerband.com' . "\r\n";
		$headers .= 'Return-Path: jeffbower@emmettbowerband.com' . "\r\n";

		mail($to,$subject,$message,$headers);
		
		//SECOND EMAIL
		$to1 = $SENDER_EMAIL;
		$subject1 = "Email sent to the Emmett Bower Band website, mailing list confirmation";

		$message1 = "
			<html>
			<head>
				<title>Email sent to the Emmett Bower Band website</title>
			</head>
			<body>
				<h1 style='font-family:Arial, Helvetica, sans-serif; font-size:1.5em;'>Reply to this email to be added to out mailing list. <br>Email sent to the Emmett Bower Band website.</h1>
				<p style='font-family:Arial, Helvetica, sans-serif;'>Your message:</p>
				<p style='font-family:Arial, Helvetica, sans-serif;'>$MESSAGE</p>
				<p style='font-family:Arial, Helvetica, sans-serif;'>Thank you for your inquiry!<p>
			</body>
			</html>";

		// Set content-type header for sending HTML email
		$headers1 = "MIME-Version: 1.0" . "\r\n";
		$headers1 .= "Content-type:text/html;charset=UTF-8" . "\r\n";

		// Additional headers
		$headers1 .= 'From: jeffbower@emmettbowerband.com' . "\r\n";
		$headers1 .= 'Reply-To: jeffbower@emmettbowerband.com' . "\r\n";
		$headers1 .= 'Return-Path: jeffbower@emmettbowerband.com' . "\r\n";

		mail($to1,$subject1,$message1,$headers1);
	}

	
	//SENDER DOES NOT WANT TO BE ADDED TO THE MAILING LIST
	else if (empty($WEBSITE) && empty($ADD))
	{
		$ALERT = "";
		$ALERT1 = "";
		$to = "jeffbower@emmettbowerband.com";
		$subject = "Email sent from Emmett Bower Band website";

		$message = "
			<html>
			<head>
				<title>Email sent from Emmett Bower Band website</title>
			</head>
			<body>
				<h1 style='font-family:Arial, Helvetica, sans-serif; font-size:1.5em;'>Email sent from the Emmett Bower Band website.</h1>
				<p style='font-family:Arial, Helvetica, sans-serif;'>Message from $FIRST_NAME at $SENDER_EMAIL:</p>
				<p style='font-family:Arial, Helvetica, sans-serif;'>$MESSAGE</p>
			</body>
			</html>";

		// Set content-type header for sending HTML email
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

		// Additional headers
		$headers .= 'From: jeffbower@emmettbowerband.com' . "\r\n";
		$headers .= 'Reply-To: jeffbower@emmettbowerband.com' . "\r\n";
		$headers .= 'Return-Path: jeffbower@emmettbowerband.com' . "\r\n";

		mail($to,$subject,$message,$headers);
		
		//SECOND EMAIL
		$to1 = $SENDER_EMAIL;
		$subject1 = "Email sent to the Emmett Bower Band website";

		$message1 = "
			<html>
			<head>
				<title>Email sent to the Emmett Bower Band website</title>
			</head>
			<body>
				<h1 style='font-family:Arial, Helvetica, sans-serif; font-size:1.5em;'>Email sent to the Emmett Bower Band website.</h1>
				<p style='font-family:Arial, Helvetica, sans-serif;'>Your message:</p>
				<p style='font-family:Arial, Helvetica, sans-serif;'>$MESSAGE</p>
				<p style='font-family:Arial, Helvetica, sans-serif;'>Thank you for your inquiry!<p>
			</body>
			</html>";

		// Set content-type header for sending HTML email
		$headers1 = "MIME-Version: 1.0" . "\r\n";
		$headers1 .= "Content-type:text/html;charset=UTF-8" . "\r\n";

		// Additional headers
		$headers1 .= 'From: jeffbower@emmettbowerband.com' . "\r\n";
		$headers1 .= 'Reply-To: jeffbower@emmettbowerband.com' . "\r\n";
		$headers1 .= 'Return-Path: jeffbower@emmettbowerband.com' . "\r\n";

		mail($to1,$subject1,$message1,$headers1);
	}
}

?>


<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Emmett Bower Band :: Official Site :: Lincoln, Nebraska</title>

<link href="https://fonts.googleapis.com/css?family=Bungee+Inline|Bitter:400,400i,700|Exo+2:400,700" rel="stylesheet">
<link href="css/ebbMain.css" rel="stylesheet" type="text/css">
<link href="css/ebbDates.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

<script src="js/jquery.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
</head>

<body onLoad="<? echo "$ALERT" ?>; jumpTo('CONTACT')">
	
	<div class="hero"><!--<img src="images/Emmett_Bower_Band_Hero2.jpg" alt="">--></div>
	
	<header>
		<!--<h1><img src="images/Emmett_Bower_Band_Logo.png" alt="Emmett Bower Band"></h1>-->
		
		<nav>
			<button type="button"><img src="images/sandwich.png" alt="Menu"></button><!--
	 --><button type="button" onClick="jumpTo('ABOUT')"><span>ABOUT</span><span>ABOUT</span></button><!--
	 --><button type="button" onClick="jumpTo('MUSIC')"><span>MUSIC</span><span>MUSIC</span></button><!--
	 --><button type="button" onClick="jumpTo('PHOTOS')"><span>PHOTOS</span><span>PHOTOS</span></button><!--
	 --><button type="button" onClick="jumpTo('VIDEOS')"><span>VIDEOS</span><span>VIDEOS</span></button><!--
	 --><button type="button" onClick="jumpTo('MERCH')"><span>MERCH</span><span>MERCH</span></button><!--
	 --><button type="button" onClick="jumpTo('CONTACT')"><span>CONTACT</span><span>CONTACT</span></button><!--
	 -->
		</nav>
		
		<div id="SOCIAL">
			<a href="https://www.youtube.com/channel/UCWv2jQRmaz34U35jS9b-ZTQ" target="_blank"><img src="images/YT.png" alt=""></a>
			<a href="https://www.facebook.com/emmettbowerband" target="_blank"><img src="images/FB.png" alt=""></a>
			<a href="https://twitter.com/emmettbowerband?lang=en" target="_blank"><img src="images/TW.png" alt=""></a>
			<a href="https://www.instagram.com/jeffbower75/" target="_blank"><img src="images/IG.png" alt=""></a>
		</div>
		
		<div id="DATES">
			<h2 id="SD" tabindex="0">SHOW DATES</h2>
			<div id="IMPORT"></div>
		</div>
	</header>
	
	<section id="ABOUT">
		<h1>
			<img src="images/Emmett_Bower_Band_Logo.png" alt="Emmett Bower Band: Live Alt-Country Music from Lincoln, Nebraska">
		</h1>
		<img src="images/Emmett_Bower_Banner1.jpg" alt="">
		<h2>ABOUT THE EMMETT BOWER BAND</h2>
		<p>The <strong>Emmett Bower Band</strong> is a rock influenced alt-country act from Nebraska, which originated in late October, 2010.</p> 
		<p>Since the early days, the music and format has constantly evoloved.  Changes to the band's line up were inevitable. The current line up consist of a tight four-piece group, creating the foundation for the group's unique sound.</p>
		<h3>EMMETT BOWER BAND LINE-UP:</h3>
		<ul>
			<li><strong>Jeffrey Emmett Bower</strong> &ndash; Acoustic/Electric Guitars, Lead Vocals</li>
			<li><strong>George Laughery</strong> &ndash; Electric Guitar</li>
			<li><strong>Troy Johnson</strong> &ndash; Bassjo/Electric Bass/Upright Bass</li>
			<li><strong>Matty Sanders</strong> &ndash; Drums/Percussion</li>
		</ul>
		<p>The <strong>Emmett Bower Band</strong> plays nearly 100 shows per year, touring the nation &mdash; even playing shows in country music strongholds like Nashville and Austin. The band has shared the stage with amazing talent, such as Randy Rogers Band, Roger Creager, Jason Boland and the Stragglers, Bart Crow, Jackson Taylor, Gloriana, Sonia Leigh, No Justice, Thomas Rhett, Jon Pardi, Frankie Ballard, Logan Mize, Casey Donahue Aaron Watson, Whiskey Myers and many others. The band's catalog of music currently consists of three self produced albums under the the "It's A Party Records" record label (the bands own label). Songs such as "<em>You saved me</em>", "<em>Burn Through The Night</em>", "<em>Rearview</em>", "<em>Before She's Gone</em>", "<em>Lakin'</em>", "<em>Chasin' the Sun</em>", "<em>Tumbleweed</em>", and "<em>Main Attraction</em>" have been played on radio stations in Nebraska, Kansas, and Tennessee in regular rotation.</p>
		<p>In Nebraska, <strong>Emmett Bower Band</strong> songs can regularly be heard on stations such as Y102, 103.9 KNLV, US92, 104.9 The Max, 93.1 the River, and KBEAR Country. Possessing a wealth of stage experience and a deep catalog of music, the four members have honed their live performance to accomodate larger venues, dance halls, streetdances, rodeos, weddings and festivals. The band takes pride in writing original music their own way.</p> 
		<p>Currently the boys writing music for their fourth album. There is no slowing them down, and they definitely mean business. <strong class="noWrap">It's all neckbones, baby!</strong></p>
		
		<div>
			<h3>Article From the Daily Nebraskan</h3>
			<p class="bold noBottom">The Emmett Bower Band, Bodega's Alley, 11 p.m.</p>
			<p><em>Review by Alex Paun</em></p>
			<p>The <strong>Emmett Bower Band</strong> plays feel good music, that's the best way to describe it. The perfect blend of '90s alternative rock and country, it's no wonder the venue, Bodega's Alley, was packed by the time the band took the stage.</p>
			<p>As an alt-country and Texas country fan, I had pretty high expectations and they did not disappoint.</p>
			<p>The band started the set with "<em>Chasin' the Sun</em>," the lead single off their self-titled album. Hearing the song live, it was even more of a banger, with a singalong chorus reminiscent of pre-Nashville Eli Young Band, mixed with the introspective guitars of R.E.M.</p>
			<p>"<em>Lake'n</em>," an easygoing party anthem off their previous album, "<em>Rearview</em>," had the entire crowd singing along moving side to side, from sorority girls to older folks.</p>
			<p>"So I met this hot chick at a bar one night and I wrote a little song," Jeff Bower said, before diving into a hilarious, head-bopping hangover song called "<em>Met Me At a Bar</em>." The crowd cheering after gloriously honest song was impeccably timed.</p>
			<p>The band ended with "<em>Drinkin' This Beer</em>," and Bower shouting "Peace!" into his microphone. Honestly, there was no more fitting of a way to end that short, punchy set.</p>
		</div>
	</section>
	
	<section id="MUSIC">
		<h2>EMMETT BOWER BAND MUSIC</h2>
		<p>Be sure to check out the Emmett Bower Band and pick up all their albums, available at cdbaby.com, itunes, amazon, rhapsody, spotify, and @ cd warehouse in Lincoln, Nebraska.</p>
		<div id="ALBUM_BOX">
			<div><img src="./images/Emmett_Bower_Album1_RNC.jpg" alt=""></div>
			<div><img src="./images/Emmett_Bower_Album2_Rear.jpg" alt=""></div>
			<div><img src="./images/Emmett_Bower_Album3_Yonder.jpg" alt=""></div>
		</div>
	</section>
	
	<section id="PHOTOS">
		<h2>EMMETT BOWER BAND PHOTOS</h2>
		<div id="PHOTO_BOX">
			<div><button type="button"><img src="./images/Emmett_Bower_Band1.jpg" alt=""></button></div>
			<div><button type="button"><img src="./images/Emmett_Bower_Band2.jpg" alt=""></button></div>
			<div><button type="button"><img src="./images/Emmett_Bower_Band3.jpg" alt=""></button></div>
			<div><button type="button"><img src="./images/Emmett_Bower_Band4.jpg" alt=""></button></div>
			<div><button type="button"><img src="./images/Emmett_Bower_Band5.jpg" alt=""></button></div>
			<div><button type="button"><img src="./images/Emmett_Bower_Band6.jpg" alt=""></button></div>
			<div><button type="button"><img src="./images/Emmett_Bower_Band7.jpg" alt=""></button></div>
			<div><button type="button"><img src="./images/Emmett_Bower_Jeff1.jpg" alt=""></button></div>
			<div><button type="button"><img src="./images/Emmett_Bower_Jeff2.jpg" alt=""></button></div>
			<div><button type="button"><img src="./images/Emmett_Bower_Jeff3.jpg" alt=""></button></div>
			<div><button type="button"><img src="./images/Emmett_Bower_Jeff4.jpg" alt=""></button></div>
			<div><button type="button"><img src="./images/Emmett_Bower_Jeff5.jpg" alt=""></button></div>
			<div><button type="button"><img src="./images/Emmett_Bower_Jeff6.jpg" alt=""></button></div>
			<div><button type="button"><img src="./images/Emmett_Bower_Jeff7.jpg" alt=""></button></div>
			<div><button type="button"><img src="./images/Emmett_Bower_Matt1.jpg" alt=""></button></div>
			<div><button type="button"><img src="./images/Emmett_Bower_Drum1.jpg" alt=""></button></div>
			<div><button type="button"><img src="./images/Emmett_Bower_Jeff8.jpg" alt=""></button></div>
			<div><button type="button"><img src="./images/Emmett_Bower_Jeff9.jpg" alt=""></button></div>
			<div><button type="button"><img src="./images/Emmett_Bower_Band8.jpg" alt=""></button></div>
			<div><button type="button"><img src="./images/Emmett_Bower_Band9.jpg" alt=""></button></div>
			<div><button type="button"><img src="./images/Emmett_Bower_Sign1.jpg" alt=""></button></div>
			<div><button type="button"><img src="./images/Emmett_Bower_Jeff10.jpg" alt=""></button></div>
		</div>
	</section>
	
	<section id="VIDEOS">
		<h2>EMMETT BOWER BAND VIDEOS</h2>
		<p>Watch all of these <strong>Emmett Bower Band</strong> videos and more on our <a href="https://www.youtube.com/channel/UCPK7TfW1dpPAbaZTu2jmu4Q" target="_blank">YouTube channel</a>.</p>
		<div id="VIDEO_BOX">
			<div><iframe src="https://www.youtube.com/embed/Gd8oXCJv-Co" allowfullscreen></iframe></div>
			<div><iframe src="https://www.youtube.com/embed/DE6EviMffSQ" allowfullscreen></iframe></div>
			<div><iframe src="https://www.youtube.com/embed/ONBz1meOW1Q" allowfullscreen></iframe></div>
			<div><iframe src="https://www.youtube.com/embed/yijc-BHbG-I" allowfullscreen></iframe></div>
		</div>
	</section>
	
	<section id="MERCH">
		<h2>EMMETT BOWER BAND MERCHANDISE</h2>
		<p>Oh yeah, we have merchandise. Ask about it at our next show. <a href="#" onClick="jumpTo('CONTACT')">Contact</a> us to ask about available sizes.</p>
		<div id="MERCH_BOX">
			<div><button type="button"><img src="./images/Emmett_Bower_Merch1.jpg" alt=""></button></div>
			<div><button type="button"><img src="./images/Emmett_Bower_Merch2.jpg" alt=""></button></div>
			<div><button type="button"><img src="./images/Emmett_Bower_Merch3.jpg" alt=""></button></div>
		</div>
	</section>
	
	<section id="CONTACT">
		<img src="images/Emmett_Bower_Banner2.jpg" alt="">
		<h2>CONTACT THE EMMETT BOWER BAND</h2>
		<p>Have a event or venue were you'd like the us to perform? Here is the place to start, send a message.</p>
		<p><? echo "$FIRST_NAME" ?>, your email has been sent! <? echo "$ALERT1" ?></p>
		<p>Here is what you sent:</p>
		<p id="MSG_REPEAT">"<? echo "$MESSAGE" ?>"</p>
		<form method="post" id="EMAIL_FORM" action="<? $PHP_SELF ?>">
			<div><label for="FIRST_NAME"><span>FIRST </span>NAME: </label><input type="text" id="FIRST_NAME" name="FIRST_NAME"></div>
			<div class="required"><label for="WEBSITE">WEBSITE: </label><input type="text" id="WEBSITE" name="WEBSITE"></div>
			<div><label for="EMAIL">EMAIL: </label><input type="text" id="EMAIL" name="EMAIL"></div>
			<div><label for="MESSAGE">MESSAGE: </label><textarea id="MESSAGE" name="MESSAGE"></textarea></div>
			<div class="addMe"><input type="checkbox" id="LIST" name="LIST" value="add_me"><label for="LIST">&nbsp;I would like to recieve email notifications about the Emmett Bower Band.</label></div>
			<input type="submit" name="SEND" id="SEND" value="SEND">
			<button type="button" id="RESET_FORM">CLEAR</button>
		</form>
	</section>
	
	<aside id="FOOTER">
		<img src="images/Emmett_Bower_Band_Logo.png" alt="Emmett Bower Band">
		<div id="COPY">&copy;</div>
	</aside>
	
	<button type="button" id="BACK_TOP">&#9662;</button>
	
	<script src="js/ebbScript.js"></script>
	
</body>
</html>
