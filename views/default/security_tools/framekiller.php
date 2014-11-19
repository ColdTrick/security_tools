<?php
// If you don't need it in a particular case, use this where needed :
//elgg_unextend_view('page/elements/head', 'security_tools/framekiller');

// Important : Enable this only if you don't need to include iframes in other websites !!
$framekiller = elgg_get_plugin_setting('enable_framekiller', 'security_tools', 100); // Include early
if ($framekiller == 'yes') {
	?>
	<style> html{display:none;} </style>
	<script>
	if(self == top) {
		document.documentElement.style.display = 'block'; 
	} else {
		top.location = self.location; 
	}
	</script>
	<?php
}

