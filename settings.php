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
	$texthost_name       = 'TextHost 3 by MyWikis'; // The name of your TextHost instance
	$texthost_description = 'Write something below and we\'ll save it. Access is public.';
	$texthost_pagetitle = 'TextHost 3 | MyWikis'; // The page title of the TextHost main page. If left blank, $texthost_name's value will fill in this value automatically.
	$texthost_logo        = 'https://www.mywikis.com/assets/mywikis.png'; // Logo path here. Must be a URL.
	$texthost_logo_width = 150; // Logo width
	$texthost_logo_height  = 39; // Logo height
	$texthost_dir           = '/home/mywikis/mywikis.com/texthost_3/'; // A trailing slash is not required for your TextHost directory
	$texthost_savedir    = 'texts'; // The directory where you will keep your texts in. Must be located in the directory your TextHost instance is in.
	$texthost_webaddr  = 'https://www.mywikis.com/texthost_oo'; // The web address of where your TextHost directory is.
	$texthost_webaddr_save = 'https://www.mywikis.com/texthost_oo/texts'; // The web address of where your TextHost texts directory is.
	$texthost_allowedtags = '<p><b><a><i><u><s>';
	$texthost_recaptcha = true;
	$texthost_recaptcha_public = '6Lcy_eASAAAAAMfmft7psbVAwWwzSjz0VQMhlguy';
	$texthost_recaptcha_private = '6Lcy_eASAAAAAO_n6ATqW2YotY7CMX-Wmp9HQ6_C';
	$texthost_tosnotice = 'By submitting your text, you agree to the <a href="https://www.mywikis.com/terms" target="_blank">MyWikis Terms of Service</a> (opens in new window) and that we are not responsible for anything hosted here.';
	$texthost_php = false;
	$texthost_bootstrap_url = "//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css";
