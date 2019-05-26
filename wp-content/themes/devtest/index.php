<?php include('header.php'); ?>

<?php if( have_rows('flexible_content', 'option') ): ?>

    <div class="row content">

    <?php while( have_rows('flexible_content', 'option') ): the_row(); ?>

    <?php if( get_row_layout() == 'content' ): ?>

        <div class="cont">
            <?php 
                $headline = get_sub_field('headline');
                $sub_headline = get_sub_field('sub_headline');
                $sub_headline_icon = get_sub_field('sub_headline_icon');
                $description = get_sub_field('description');
                $image = get_sub_field('image');
                $color = get_sub_field('background_image_color');
                $height = get_sub_field('background_image_height');
                $position = get_sub_field('background_position');
            ?>
            <div class="left">
                <?php if($headline) { ?>
                    <h2 class="headline"><?php echo $headline; ?></h2>
                <?php } ?>
                <?php if($sub_headline) { ?>
                <p class="sub-headline">
                    <?php if($sub_headline_icon) { ?>
                    <img src="<?php echo $sub_headline_icon; ?>" alt="">
                    <?php } ?>
                    <?php echo $sub_headline; ?>
                </p>
                <?php } ?>
                <?php if($description) { ?>
                    <div class="desc"><?php echo $description; ?></div>
                <?php } ?>
            </div>
            <div class="right">
                <?php if($image) { ?>
                    <img src="<?php echo $image; ?>" alt="">
                <?php } else { ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/includes/img/default.png" alt="">
                <?php } ?>
            </div>
            <div class="bg-color <?php echo $position; ?>" style="background-color: <?php echo $color; ?>; min-height: <?php echo $height; ?>px"></div>
        </div>

    <?php endif; ?>

    <?php endwhile; ?>

    </div><!-- end-content -->

<?php endif; ?>
    
<?php include('footer.php'); ?>