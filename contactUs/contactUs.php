<!doctype html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<title>Contact Us - Nu Delta Fraternity</title>
	<meta name="description" content="Nu Delta Fraternity Website">
	<meta name="author" content="Malcom Gilbert">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="shortcut icon" href="/favicon.ico">
	<link rel="stylesheet" href="css/stylev5.css">
    <link href="https://fonts.googleapis.com/css?family=Lora:regular,italic,bold,bolditalic&v1" rel="stylesheet" type="text/css">

	<!--<script src="js/libs/modernizr-1.7.min.js"></script>-->
</head>
<body class="contactUs">

    <!-- div wrappers to make to footer stick to the bottom of the page -->
    <div id="footerWrapper1">
    <div id="footerWrapper2">
	<header>
    	<!-- puts the navigation bar in a javascript file for flexibility -->
    	<nav id="navigationBar"><ul id="topNavBar"><li class="topNavList"><a href="index.html" class="home">Home</a></li><li class="topNavList"><a href="brothers.html" class="brothers">Brothers</a></li><li class="topNavList"><a href="rush.html" class="rush">Rush</a></li><li class="topNavList"><a href="summerHousing.html" class="summerHousing">Summer Housing</a></li><li class="topNavList"><a href="gallery/gallery.html" class="gallery">Gallery</a></li><li class="topNavList"><a href="directions.html" class="directions">Directions</a></li><li class="topNavList"><a href="alumni.html" class="alumni">Alumni</a></li><li class="topNavList"><a href="aboutUs.html" class="aboutUs">About Us</a></li><li class="topNavList"><a href="contactUs.php" class="contactUs">Contact Us</a></li></ul></nav>
        <section id="banner">
        		<img id="bannerImage" src="images/banner3.png" alt="Nu Delta Fraternity" title="Nu Delta Fraternity"/>
        </section>
    </header>
    
    <!-- the divs are wrapper classes to make the layout work properly -->
	<div class="colmask threecol">
	<div class="colmid">
		<div class="colleft">
        
        
        
			<section class="middleArea">
            <div id="container">
                <div id="contact-form" class="clearfix">
                    <h1>Contact Nu Delta</h1>
                    <h2>Fill out our contact form below to get in touch with us! Please provide as much information as possible for us to help you with your enquiry :)</h2>
                    <?php
                    //init variables
                    $cf = array();
                    $sr = false;
                    
                    if(isset($_SESSION['cf_returndata'])){
                        $cf = $_SESSION['cf_returndata'];
                        $sr = true;
                    }
                    ?>
                    <ul id="errors" class="<?php echo ($sr && !$cf['form_ok']) ? 'visible' : ''; ?>">
                        <li id="info">There were some problems with your form submission:</li>
                        <?php 
                        if(isset($cf['errors']) && count($cf['errors']) > 0) :
                            foreach($cf['errors'] as $error) :
                        ?>
                        <li><?php echo $error ?></li>
                        <?php
                            endforeach;
                        endif;
                        ?>
                    </ul>
                    <p id="success" class="<?php echo ($sr && $cf['form_ok']) ? 'visible' : ''; ?>">Thanks for your message! We will get back to you ASAP!</p>
                    <form method="post" action="contactUs/process.php">
                        <label for="name">Name: <span class="required">*</span></label>
                        <input type="text" id="name" name="name" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['name'] : '' ?>" placeholder="John Doe" required autofocus />
                        
                        <label for="email">Email Address: <span class="required">*</span></label>
                        <input type="email" id="email" name="email" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['email'] : '' ?>" placeholder="johndoe@example.com" required />
                        
                        <label for="telephone">Telephone: </label>
                        <input type="tel" id="telephone" name="telephone" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['telephone'] : '' ?>" />
                        
                        <label for="enquiry">Enquiry: </label>
                        <select id="enquiry" name="enquiry">
                            <option value="Summer Housing" <?php echo ($sr && !$cf['form_ok'] && $cf['posted_form_data']['enquiry'] == 'Summer Housing') ? "selected='selected'" : '' ?>>Summer Housing</option>
                            <option value="Website" <?php echo ($sr && !$cf['form_ok'] && $cf['posted_form_data']['enquiry'] == 'Website') ? "selected='selected'" : '' ?>>Website</option>
                            <option value="Rush" <?php echo ($sr && !$cf['form_ok'] && $cf['posted_form_data']['enquiry'] == 'Rush') ? "selected='selected'" : '' ?>>Rush</option>
                            <option value="CPW" <?php echo ($sr && !$cf['form_ok'] && $cf['posted_form_data']['enquiry'] == 'CPW') ? "selected='selected'" : '' ?>>CPW</option>
                            <option value="General" <?php echo ($sr && !$cf['form_ok'] && $cf['posted_form_data']['enquiry'] == 'General') ? "selected='selected'" : '' ?>>General</option>
                        </select>
                        
                        <label for="message">Message: <span class="required">*</span></label>
                        <textarea id="message" name="message" placeholder="Your message must be greater than 20 charcters" required data-minlength="20"><?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['message'] : '' ?></textarea>
                        
                        <span id="loading"></span>
                        <input type="submit" value="Submit" id="submit-button" />
                        <p id="req-field-desc"><span class="required">*</span> indicates a required field</p>
                    </form>
                    <?php unset($_SESSION['cf_returndata']); ?>
                </div>
            </div>
			</section>
            
            
            
			<section class="leftArea">
                <div id="leftPanelImageWrapper">
                    <img src="images/shieldDark.png" class="leftPanelImage" id="leftPanelImageDark"/>
                    <img src="images/shield.png" class="leftPanelImage" id="leftPanelImageColor"/>
                </div>
			</section>
            
            
            
			<section class="rightArea">
            
               <section class="rightPanelSection">
                    <header class="rightPanelTitle">Follow Us!</header>
                    <section id="twitterPane">
                    <div  class="twitterButton"><a href="https://twitter.com/NuDelta" class="twitter-follow-button" data-show-count="false" data-align="left" data-text-color="#688888" data-link-color="#688888">Follow @NuDelta</a></div>
					</section>
                </section>
            
				<section class="rightPanelSection">
                <header class="rightPanelTitle">Event Calendar</header>
                <a href="rush.html#eventCalendar"><img src="images/calendar.png" class="rightPanelImage" id="calendar"/></a>
                </section>
                
                <section class="rightPanelSection">
                <header class="rightPanelTitle">Need Directions?</header>
                <a href="directions.html"><img src="images/location.png" class="rightPanelImage"  id="location"/></a>
                </section>
                
			</section>
            
            
            
<!-- close layout wrappers -->
		</div>
	</div>
</div>
<!-- close footer wrappers -->
</div>
</div>
<!-- puts the navigation bar in a javascript file for flexibility -->
<script src="https://cdn.rawgit.com/mjgil/nu-delta-site-2011/release/js/footer.js"></script>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
	<!--[if lt IE 7 ]>
	<script src="js/libs/dd_belatedpng.js"></script>
	<script> DD_belatedPNG.fix('img, .png_bg');</script>
	<![endif]-->
	<script src="https://platform.twitter.com/widgets.js" type="text/javascript"></script>
    <script src="https://cdn.rawgit.com/mjgil/nu-delta-site-2011/release/js/googleAnalytics.js"></script>
    <script src="https://cdn.rawgit.com/mjgil/nu-delta-site-2011/release/js/mainScript.js"></script>
    <script src="https://cdn.rawgit.com/mjgil/nu-delta-site-2011/release/js/libs/respond.min.js"></script>
    <script src="contactUs/js/script.js"></script>
    <script src="contactUs/js/plugins.js"></script>
</body>
</html>