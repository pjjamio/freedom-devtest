        <?php 
            $footer_headline = get_field('footer_headline', 'option');
            $footer_sub_headline = get_field('footer_sub_headline', 'option');
            $footer_description = get_field('footer_description', 'option');
            $button_text = get_field('button_text', 'option');
            $button_link = get_field('button_link', 'option');
        ?>
        <div class="row footer">
            <div class="cont">
                <?php if($footer_headline){ ?>
                    <h2 class="headline"><?php echo $footer_headline; ?></h2>
                <?php } ?>
                <?php if($footer_sub_headline){ ?>
                    <p class="sub-headline"><?php echo $footer_sub_headline; ?></p>
                <?php } ?>
                <?php if($button_text){ ?>
                    <p><a href="<?php echo $button_link; ?>" class="btn"><?php echo $button_text; ?></a></p>
                <?php } ?>
                <?php if($footer_description){ ?>
                    <div class="desc"><?php echo $footer_description; ?></div>
                <?php } ?>
            </div>
        </div>

        <div class="row footer-widgets">
            <div class="cont">
                <div class="col left-col">
                    <?php if ( is_active_sidebar( 'footer_left' ) ) : ?>
                        <?php dynamic_sidebar( 'footer_left' ); ?>
                    <?php endif; ?>
                </div>
                <div class="col right-col">
                    <?php if ( is_active_sidebar( 'footer_right' ) ) : ?>
                        <?php dynamic_sidebar( 'footer_right' ); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    
    </div><!-- end-container -->

    <?php wp_footer(); ?>
</body>
</html>