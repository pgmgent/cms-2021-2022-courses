        <footer class="bg-secondary mt-auto">
            <div class="container py-3 py-lg-4 row text-white">
                <div class="col-12 col-lg-3"></div>
                <div class="col-12 col-md-4 col-lg-3"></div>
                <div class="col-12 col-md-4 col-lg-3"></div>
                <div class="col-12 col-md-4 col-lg-3">
                    <?php if (is_active_sidebar( 'footer_widgets' )) : ?>
                        <?php dynamic_sidebar( 'footer_widgets' ); ?>
                    <?php endif ?>
                </div>
            </div>
        </footer>

        <?php wp_footer(); ?>
    </body>
</html>