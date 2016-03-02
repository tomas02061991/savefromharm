<!DOCTYPE html>
<html>
	<head>
        <meta charset="UTF-8">
        <title>Safe From Harm - Safe the last tigers</title>
        <meta name="author" content="Camilla Krarup Lauridsen &amp; Tomas Nielsen ">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>

        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">

        <?php $success; ?>
    </head>
    
	<body <?php body_class(); ?>>
        <!-- Bootstrap menu skal tilføjes of doom -->
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo_hvid.png" alt=""/></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
              <div class="nav navbar-nav navbar-right">
                  <div id="donate" data-toggle="modal" data-target="#donateModal">DONATE</div>
              </div>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
        <!-- <nav>
            <div class="logo col-md-2" id="logo">
                <a href="#home">
                    <img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo_hvid.png" alt=""/>
                </a>
            </div>
            <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
            <div id="donate" data-toggle="modal" data-target="#donateModal">DONATE</div>
		</nav> -->
