<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<meta name="author" content="Refarm.cz">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
  <title>
    <?php if($page=='home'){echo 'Home | ';} ?>
    <?php if($page=='avantgarden'){echo 'The AvantGarden | ';} ?>
    <?php if($page=='team'){echo 'Bohemian AvantGardeners | ';} ?>
    <?php if($page=='contact'){echo 'Contact | ';} ?>
    AvantGardeners.cz
  </title>

	<meta itemprop="name" content="Bohemian AvantGardeners" />
	<meta name="description" content="We came together as a team with a shared passion to radically change the story of how food is produced in our neighborhood.">
  <link rel="canonical" href="http://avantgardeners.cz<?php $url = $_SERVER['REQUEST_URI']; echo $url ?>">
	<meta itemprop="image" content="http://avantgardeners.cz/img/social/og-image.jpg" />

	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-125058230-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	  gtag('config', 'UA-125058230-1');
	</script>

	<link rel="apple-touch-icon" sizes="180x180" href="/img/icons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/img/icons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/img/icons/favicon-16x16.png">
  <link rel="manifest" href="/img/icons/site.webmanifest">
  <link rel="mask-icon" href="/img/icons/safari-pinned-tab.svg" color="#1b1d1f">
  <link rel="shortcut icon" href="/img/icons/favicon.ico">
  <meta name="msapplication-TileColor" content="#1b1d1f">
  <meta name="msapplication-config" content="/img/icons/browserconfig.xml">
  <meta name="theme-color" content="#1b1d1f">

	<script type="application/ld+json">
	  {
		  "@context": "http://schema.org",
			"@type": "Organization",
			"name": "Bohemian AvantGardeners",
			"url": "http://avantgardeners.cz",
			"logo": "http://avantgardeners.cz/img/logo/refarm_logo_small.png"
	  }
  </script>
	<script type="application/ld+json">
	  {
			"@context" : "http://schema.org",
			"@type" : "WebSite",
			"name" : "Bohemian AvantGardeners",
			"alternateName" : "Bohemian AvantGardeners - We came together as a team with a shared passion to radically change the story of how food is produced in our neighborhood.",
			"url" : "http://avantgardeners.cz"
	  }
  </script>

  <meta property="og:image:width" content="1034">
  <meta property="og:image:height" content="1974">
  <meta property="og:title" content="Bohemian AvantGardeners">
  <meta property="og:description" content="We came together as a team with a shared passion to radically change the story of how food is produced in our neighborhood.">
  <meta property="og:url" content="http://avantgardeners.cz">
  <meta property="og:image" content="http://avantgardeners.cz/img/social/og-image.jpg">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Bohemian AvantGardeners">
  <meta name="twitter:description" content="We came together as a team with a shared passion to radically change the story of how food is produced in our neighborhood.">
  <meta name="twitter:image" content="http://avantgardeners.cz/img/social/twitter-image.jpg">

  <link rel="stylesheet" type="text/css" href="assets/css/style.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <?php if($page=='avantgarden'){echo '<link rel="stylesheet" href="assets/css/owl.carousel.min.css">';} ?>
  <?php if($page=='avantgarden'){echo '<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">';} ?>
</head>
<body>

<header class="<?php if($page=='home'){echo 'header_index';} ?><?php if($page=='avantgarden'){echo 'header_avantgarden';} ?><?php if($page=='team'){echo 'header_team';} ?><?php if($page=='contact'){echo 'header_index';} ?>">
	<nav>
		<a href="/"><img class="nav-logo" src="img/logo/logo_white.png"></a>
		<ul class="nav-list">
			<li class="<?php if($page=='home'){echo 'nav-list-active';} ?>"><a href="/">Home</a></li>
			<li class="<?php if($page=='avantgarden'){echo 'nav-list-active';} ?>"><a href="avantgarden">The AvantGarden</a></li>
			<li class="<?php if($page=='team'){echo 'nav-list-active';} ?>"><a href="team">Team</a></li>
			<li class="<?php if($page=='contact'){echo 'nav-list-active';} ?>"><a href="contact">Contact</a></li>
		</ul>
	</nav>
	<div class="header-content wrapped">
		<h1 class="header-title">
      <?php if($page=='home'){echo ' ';} ?>
      <?php if($page=='avantgarden'){echo 'The AvantGarden';} ?>
      <?php if($page=='team'){echo 'Bohemian AvantGardeners';} ?>
      <?php if($page=='contact'){echo 'Contact';} ?>
    </h1>
    <?php if($page=='home'){echo '<h3 class="header-quote"><i>“You can solve all the world’s problems in a garden.” — Geoff Lawton</i></h3>';} ?>
		<span class="header-underline"></span>
	</div>
</header>
