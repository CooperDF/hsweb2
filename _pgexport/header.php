<!doctype html> 
<html style="height: 100%; background-repeat: no-repeat; background-position: center center; background-size: cover; background-attachment: fixed;" <?php language_attributes(); ?>>
    <head> 
        <meta charset="<?php bloginfo( 'charset' ); ?>"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="keywords" content="pinegrow, blocks, bootstrap"/>
        <meta name="description" content="HS Website!"/>
        <link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/ico/favicon.png"> 
        <!-- Core CSS -->                  
        <!-- Style Library -->         
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->         
        <!--[if lt IE 9]>
      <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5shiv.js"></script>
      <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/respond.min.js"></script>
    <![endif]-->         
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php wp_head(); ?>
    </head>     
    <body style="background-image:url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/15583176680_beba53ce93_z.jpg');" class="bg-image-cover <?php echo implode(' ', get_body_class()); ?>">
        <header id="header-2" class="header-2 soft-scroll">
            <nav class="main-nav navbar navbar-default navbar-fixed-top" style="background: #2F993B; position: fixed;">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                            <span class="sr-only"><?php _e( 'Toggle navigation', 'hs_web_2' ); ?></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="<?php echo esc_url( home_url() ); ?>"> <?php echo wp_get_attachment_image( get_theme_mod( 'blocks_header_2_logo' ), 'large', null, array(
                                    'class' => 'brand-img img-responsive'
                            ) ) ?> </a>
                    </div>
                    <div class="clearfix clear-columns2"></div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbar-collapse">
                        <?php wp_nav_menu( array(
                                'menu' => 'primary',
                                'menu_class' => 'nav navbar-nav navbar-left',
                                'container' => '',
                                'depth' => '2',
                                'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                                'walker' => new wp_bootstrap_navwalker()
                        ) ); ?>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </nav>
        </header>
        <div class="clearfix clear-columns"></div>
        <section id="content-1-4" class="content-block-nopad content-1-4">