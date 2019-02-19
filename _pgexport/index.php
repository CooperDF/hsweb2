<?php
get_header(); ?>

<div class="container">
    <div class="row">
        <div class="content clearfix">
            <h1><?php echo get_theme_mod( 'blocks_content_1_4_title', __( 'Kickstart your web development', 'hs_web_2' ) ); ?></h1>
            <p class="lead"><?php echo get_theme_mod( 'blocks_content_1_4_text', __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.', 'hs_web_2' ) ); ?></p>
            <div class="row pad45">
                <div class="col-sm-6">
                    <h5><?php echo get_theme_mod( 'blocks_content_1_4_col1_title', __( 'Tons Of Elements', 'hs_web_2' ) ); ?></h5>
                    <p><?php echo get_theme_mod( 'blocks_content_1_4_col1_text', __( 'Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labor.', 'hs_web_2' ) ); ?></p>
                </div>
                <div class="col-sm-6">
                    <div class="min-height-300px map" data-map-lat="<?php echo get_theme_mod( 'blocks_map_lat' ); ?>" data-map-long="<?php echo get_theme_mod( 'blocks_map_long' ); ?>" data-map-zoom="<?php echo get_theme_mod( 'blocks_map_zoom' ); ?>" data-marker-image="<?php echo esc_url( get_template_directory_uri().'/images/map-pin.png' ) ?>"></div>
                </div>
            </div>
            <!-- /.row -->
        </div>
    </div>
    <!-- /.row-->
</div>
<!-- /.container -->            

<?php get_footer(); ?>