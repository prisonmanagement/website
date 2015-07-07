

<?php defined('_JEXEC') or die('Restricted area - You are not allowed access'); ?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language ?>" lang="<?php echo $this->language ?>">
<head>
	<!-- The following JDOC Head tag loads all the header and meta information from your site config and content. -->
	<jdoc:include type="head" />

	<!-- This meta tag adds mobile device detection -->
    <meta name="viewport" content="user-scalable=yes, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi" />

	<!-- Joomla System CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" />

	<!-- Foundation CSS (for Responsiveness) -->
	<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/flex/css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/flex/css/foundation.css" />

	<!-- Template-specific CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/flex/css/hacks.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/flex/css/template.css" />

	<!-- Favicon -->
    <link rel="icon" type="image/ico" href="<?php echo $this->baseurl ?>/templates/flex/favicon.ico" />

</head>
<body><header>
		<grid class="row">
			<grid class="small-12 large-6 columns">
				<img src="<?php echo $this->baseurl ?>/templates/flex/images/adjustable-logo.png" alt="Prison Management logo">
			</grid>
		</grid>

		<grid class="row">
			<grid class="small-12 large-12 columns">

				<nav id="Menu">
					<jdoc:include type="modules" name="main-navigation" style="none" />
				</nav>

			</grid>
		</grid>

	</header>

	<section id="MainContentArea">

		<grid class="row">
			<grid class="small-12 large-3 columns">
				<aside id="left">
					<jdoc:include type="modules" name="left-sidebar" style="xhtml" />
				</aside>
			</grid>
			<grid class="small-12 large-6 columns">
				<!-- Message shows system messages -->
				<jdoc:include type="message" />
				<jdoc:include type="component" />
			</grid>

		</grid>
		
	</section>

	<footer>
		
		<grid class="row">
			<grid class="small-12 large-12 columns">
				<jdoc:include type="modules" name="footer" style="none" />
			</grid>	
		</grid>

	</footer>
	
</body>
</html>