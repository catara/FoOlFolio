<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php echo $title; ?></title>
		<meta name="description" content="FoOlRulez programming team">
		<meta name="author" content="FoOlRulez">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<link rel="stylesheet" href="<?php echo site_url() ?>assets/theme/style.css?v=<?php echo FOOLFOLIO_VERSION ?>">
		<link rel="sitemap" type="application/xml" title="Sitemap" href="<?php echo site_url() ?>sitemap.xml" />
		<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo site_url() ?>rss.xml" />
		<link rel="alternate" type="application/atom+xml" title="Atom" href="<?php echo site_url() ?>atom.xml" />
		<link rel="shortcut icon" href="<?php echo site_url() ?>assets/theme/images/favicon.ico">
		<link rel="apple-touch-icon" href="<?php echo site_url() ?>assets/theme/images/apple-touch-icon.png">
		<?php
		// wrap up all the Facebook Open Graph, we need this very dynamic
		echo '<meta property="og:title" content="' . $title . '" />
		';
		echo '<meta property="og:site_name" content="FoOlRulez" />
		';

		if (isset($og_description) && $og_description)
			echo '<meta property="og:description" content="' . $og_description . '" />
		';
		if (isset($og_url) && $og_url)
			echo '<meta property="og:url" content="' . $og_url . '" />
		';
		if (isset($og_image) && $og_image)
			echo '<meta property="og:image" content="' . $og_image . '" />
		';

		// canonical url needs to be dynamic as well
		if (!isset($canonical_url))
		{
			$canonical_url = site_url();
		}
		echo '<link rel="canonical" href="' . $canonical_url . '" />
';
		?>
		<script src="<?php echo site_url() ?>assets/theme/js/libs/modernizr-2.0.6.min.js"></script>
	</head>

	<body>

		<div id="container">
			<header>
			</header>
			<div id="main" role="main">

			</div>
			<aside id="sidebar">
				<?php echo $main_content_view; ?>
			</aside>
			<footer>
			</footer>
		</div> <!--! end of #container -->

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="<?php echo site_url() ?>assets/theme/js/libs/jquery-1.6.2.min.js"><\/script>')</script>

		<script defer src="<?php echo site_url() ?>assets/theme/js/plugins.js?v=<?php echo FOOLFOLIO_VERSION ?>"></script>
		<script defer src="<?php echo site_url() ?>assets/theme/js/script.js?v=<?php echo FOOLFOLIO_VERSION ?>"></script>

		<script>
			window._gaq = [['_setAccount','UAXXXXXXXX1'],['_trackPageview'],['_trackPageLoadTime']];
			Modernizr.load({
				load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
			});
		</script>

		<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
	 chromium.org/developers/how-tos/chrome-frame-getting-started -->
		<!--[if lt IE 7 ]>
		  <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
		  <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
	</body>
</html>