<?php $background_color = get_sub_field('accordion_bg'); ?>

<section class="section <?php echo $background_color; ?> image">
    <div class="container">
        <div class="columns">
            <div class="column">
                <?php if (have_rows('accordion_content')) :
                    while (have_rows('accordion_content')) : the_row(); ?>
                        <details>
                            <summary><?php echo get_sub_field('accordion_content_title');?></summary>
                            <?php echo get_sub_field('accordion_content_content');?>
                        </details>
                    <?php endwhile;
                endif; ?>
            </div>
        </div>
    </div>
</section>
