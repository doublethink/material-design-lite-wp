<html>
	<head>
		<title><?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?></title>
		<link 	rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
		<link rel='stylesheet' href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/material.deep_orange-light_green.min.css"></link>
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<style>
		#view-source {
		  position: fixed;
		  display: block;
		  right: 0;
		  bottom: 0;
		  margin-right: 40px;
		  margin-bottom: 40px;
		  z-index: 900;
		}
		</style>
	</head>
	<body class="mdl-demo mdl-color--grey-100 mdl-color-text--grey-700 mdl-base">
		<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
			<header class="mdl-layout__header mdl-layout__header--scroll mdl-color--primary">
				<div class="mdl-layout--large-screen-only mdl-layout__header-row">
				</div>
				<div class="mdl-layout__header-row">
				  <h3><?php bloginfo( 'name' ); ?></h3>&nbsp&nbsp
				  <h4><?php bloginfo( 'description' ); ?></h4>
				</div>
				<div class="mdl-layout--large-screen-only mdl-layout__header-row">
				</div>
				<div class="mdl-layout--large-screen-only mdl-layout__tab-bar mdl-js-ripple-effect mdl-color--primary-dark">
				  <a href="#overview" class="mdl-layout__tab is-active">Overview</a>
				  <a href="#features" class="mdl-layout__tab">Features</a>
				  <a href="#features" class="mdl-layout__tab">Details</a>
				  <a href="#features" class="mdl-layout__tab">Technology</a>
				  <a href="#features" class="mdl-layout__tab">FAQ</a>
				  <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored mdl-shadow--4dp mdl-color--accent" id="add">
				    <i class="material-icons">add</i>
				  </button>
				</div>
			</header>
			<div class="mdl-layout__drawer">
			<span class="mdl-layout-title"><?php bloginfo( 'name' ); ?></span>
				<nav class="mdl-navigation">
				  <a href="#overview" class="mdl-navigation__link">Overview</a>
				  <a href="#features" class="mdl-navigation__link">Features</a>
				  <a href="#features" class="mdl-navigation__link">Details</a>
				  <a href="#features" class="mdl-navigation__link">Technology</a>
				  <a href="#features" class="mdl-navigation__link">FAQ</a>
				</nav>
			</div>