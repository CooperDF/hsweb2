
        </section>
        <section class="content-block-nopad bg-deepocean footer-wrap-1-4">
            <div class="container footer-1-4">
                <?php if ( is_active_sidebar( 'blocks_footer_1_4_form' ) ) : ?>
                    <?php dynamic_sidebar( 'blocks_footer_1_4_form' ); ?>
                <?php endif; ?>
                <!-- /.social -->
            </div>
            <!-- /.container -->
        </section>
        <div class="copyright-bar-2 bg-orange">
            <div class="container text-center">
                <p><?php echo get_theme_mod( 'blocks_copyright_2_text', __( '© COPYRIGHT 2015 - Pinegrow Blocks - ALL RIGHTS RESERVED.', 'hs_web_2' ) ); ?></p>
            </div>
        </div>                           
        <?php wp_footer(); ?>
    </body>     
</html>
