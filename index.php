<?php
/**
 * TextHost 3
 * Main page
 * DO NOT EDIT - Everything can be configured at settings.php
 * @author Jeffrey Wang
 * @company MyWikis
 * @license (c) 2014-2015 MyWikis, All Rights Reserved
*/

// Load program files
define ( 'MYWIKIS' , 'TextHost' );
require ( "includes.php" );
require ( "settings.php" );
$texthost = new TextHost();
?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php ( empty ( $texthost_pagetitle ) ) ? $thindexpgtitle = $texthost_name : $thindexpgtitle = $texthost_pagetitle; echo $thindexpgtitle; ?></title>
		<link rel="stylesheet" href="<?php echo $texthost_bootstrap_url; ?>" />
	</head>
	<body lang="en">
		<div class="container">
		<?php if ( isset ( $texthost_logo ) ) { echo "<img src=\"$texthost_logo\" alt=\"TextHost\" width=\" $texthost_logo_width\" height=\"$texthost_logo_height\" />"; } ?>
		<h1><?php echo $texthost_name; ?></h1>
<?php
if ( $_REQUEST['submitted'] == true ) {
$texthost->SubmitText();
} else {
?>
    <p><?php ( empty ( $texthost_description ) ) ? $thindexdesc = 'Write something below and we\'ll save it. Access is public.' : $thindexdesc = $texthost_description; echo $thindexdesc; ?></p>
    <!--<p>If you'd like, use the registered-user version of Write <a href="write.php">here</a>.</p>-->
    <hr />
    <form method="post" action="index.php">
    Title: <input type="text" name="title" value="" placeholder="Title" required /><br />
    Name (optional): <input type="text" name="author" value="Anonymous" placeholder="Name (optional)" /><br />
    Format: <input type="radio" name="format" value="txt" checked>Text file <input type="radio" name="format" value="html">HTML <?php if ( $texthost_php === true ) { ?> <input type="radio" name="format" value="php">PHP <?php } ?><br />
    Content: <br /><textarea class="input-xxlarge" name="content" cols="50" rows="20" placeholder="Hello, I'm adding some text here!" required></textarea>
	<input type="hidden" name="submitted" value="true" />
      <?php
      if ( $texthost_recaptcha === true ) {
	require_once( 'recaptchalib.php' );
      $publickey = $texthost_recaptcha_public; // you got this from the signup page
      echo recaptcha_get_html($publickey);
	echo "Allowed tags: " . htmlspecialchars ( $texthost_allowedtags );
	}
      ?>
    <?php if ( isset ( $texthost_tosnotice ) ) { ?><p><?php echo $texthost_tosnotice; ?></p><?php } ?>
    <button class="btn btn-primary" type="submit">Submit your text</button>
<?php
}
?>
<hr />
<p>Software &copy; 2014-2015 MyWikis. Unique content is &copy; 2014-<?php echo date( 'Y' ) . " " . $texthost_name; ?>.</p>
		</div>
	</body>
</html>
