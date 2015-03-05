<?php
/**
 * TextHost 3
 * INCLUDES FILE
 * DO NOT EDIT
 * @author Jeffrey Wang
 * @company MyWikis
 * @license (c) 2014-2015 MyWikis, All Rights Reserved
*/

if ( !defined ( 'MYWIKIS' ) ) {
echo "Unauthorized usage of script; aborting.";
die();
}

class TextHost { // class bell dings to begin
	// Initialize variables
	public $content, $author, $title, $format, $openthegate, $dirlocation, $formatText, $content_safe;

	// Check the file format the author desires
	function CheckFormat () {
		if ( $this->format === 'txt' ) {
			$this->formatText = ".txt";
		}
		if ( $this->format === 'html' ) {
			$this->formatText = '.html';
		}
		if ( $this->format === 'php' ) {
			$this->formatText = '.php';
		}
	}

	// Check the directory location of where TextHost is located
	function CheckDirLocation () {
		require_once ( 'settings.php' );
		if ( empty ( $texthost_dir ) ) {
			$texthost_dir = '/home/mywikis/mywikis.com/texthost_oo';
		}
	}

	// Grab the settings file and use it.
	function GrabSettingsFile () {
		require_once ( 'settings.php' );
	}

	// Perform a strip search on HTML and PHP tags and kill them. We don't want any XSS.
	function StripTags () {
	require_once ( 'settings.php' );
		$this->content_safe = strip_tags ( $this->content , $texthost_allowedtags );
	}

	function SubmitText() {
	require ( 'settings.php' );
	// Let us construct these functions and surrect them. function __construct ()
		$this->content = $_REQUEST['content'];
		$this->author = $_REQUEST['author'];
		$this->title = $_REQUEST['title'];
		$this->format = $_REQUEST['format'];
		if ( $texthost_recaptcha === false ) { goto norecaptcha; }
		  require_once( 'recaptchalib.php' );
		  $privatekey = $texthost_recaptcha_private;
 		 $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);
		 if (!$resp->is_valid) {
   		 // What happens when the CAPTCHA was entered incorrectly
  		  die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
         		"(reCAPTCHA said: " . $resp->error . ")");
 	 	} else {
		norecaptcha:
		$this->GrabSettingsFile();
		$this->CheckFormat();
		$this->CheckDirLocation();
		$this->StripTags();
		$this->openthegate = fopen( $texthost_dir . '/' . $texthost_savedir . '/' . $this->title . $this->formatText , 'a+' );
        	fwrite ( $this->openthegate , "\r\n" . "Submitted by ". $this->author . "\n" . $this->content_safe . "\r\n" );
		?><p>Your content has been saved successfully. You may now visit your text <a href="<?php echo $texthost_webaddr_save . '/' . $this->title . $this->formatText; ?>" target="_blank">here</a>. Or, <a href="index.php">make another one</a>!</p><?php
		} // ends reCAPTCHA check
	}
} // class bell dings to end