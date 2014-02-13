<?php
/**
 * Page shell for upgrade script
 *
 * Displays an ajax loader until upgrade is complete
 */

// Set the content type
header("Content-type: text/html; charset=UTF-8");

$lang = get_current_language();

$url = elgg_get_site_url() . "upgrade.php?upgrade=upgrade";
$code = get_input("code");
if (!empty($code)) {
	$url = elgg_http_add_url_query_elements($url, array("code" => $code));
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $lang; ?>" lang="<?php echo $lang; ?>">
	<head>
		<?php echo elgg_view("page/elements/head", $vars); ?>
		<meta http-equiv="refresh" content="1;url=<?php echo $url; ?>"/>
	</head>
	<body>
		<div style="margin-top:200px">
			<?php echo elgg_view("graphics/ajax_loader", array("hidden" => false)); ?>
		</div>
	</body>
</html>
