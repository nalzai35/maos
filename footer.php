<?php global $razthemes; ?>

            </div>
            <div class="row footer pt-4 mt-5 border-top">
                <div class="col-md-6 left"><?php echo $razthemes['copyright_text'] ?></div>
                <div class="col-md-6 right">
                    <?php
                        wp_nav_menu([
                            'menu'            => 'footer',
                            'theme_location'  => 'footer',
                            'container'       => 'div',
                        ]);
                    ?>
                </div>
            </div>
        </div>

        <?php wp_footer(); ?>
    </body>
</html>
