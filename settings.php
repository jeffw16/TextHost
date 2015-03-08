<?php
/**
 * TextHost 3
 * Settings
 * EDIT WITH CAUTION
 * @license (c) 2014-2015 MyWikis, All Rights Reserved
 * HOW TO EDIT
 * Just edit the VARIABLES in single quotation or double quotation marks or none at all with numbers only.
 * Don't know programming?: Do NOT edit anything that is not on a line that has an equal sign.
 * Thank you!
*/
if ( !defined ( 'MYWIKIS' ) ) {
	echo "Unauthorized usage of script; aborting.";
	die();
}
	$texthost_name       = 'My TextHost'; // The name of your TextHost instance
	$texthost_description = 'Write something below and we\'ll save it. Access is public.';
	$texthost_pagetitle = 'My TextHost | My Organization'; // The page title of the TextHost main page. If left blank, $texthost_name's value will fill in this value automatically.
	$texthost_logo        = 'https://www.example.com/example.png'; // Logo path here. Must be a URL.
	$texthost_logo_width = 150; // Logo width
	$texthost_logo_height  = 39; // Logo height
	$texthost_dir           = '/home/myuser/example.com/public_html/texthost/'; // A trailing slash is not required for your TextHost directory
	$texthost_savedir    = 'texts'; // The directory where you will keep your texts in. Must be located in the directory your TextHost instance is in.
	$texthost_webaddr  = 'https://www.example.com/texthost'; // The web address of where your TextHost directory is.
	$texthost_webaddr_save = 'https://www.example.com/texthost/texts'; // The web address of where your TextHost texts directory is.
	$texthost_allowedtags = '<p><b><a><i><u><s>';
	$texthost_recaptcha = true;
	$texthost_recaptcha_public = '';
	$texthost_recaptcha_private = '';
	$texthost_tosnotice = 'By submitting your text, you agree to the <a href="https://www.mywikis.com/terms" target="_blank">MyWikis Terms of Service</a> (opens in new window) and that we are not responsible for anything hosted here.';
	$texthost_php = false;
	$texthost_bootstrap_url = "//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css";
