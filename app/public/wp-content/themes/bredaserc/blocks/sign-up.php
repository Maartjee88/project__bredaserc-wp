<?php $background_color = get_sub_field('sign-up_bg'); ?>
<section class="section <?php echo $background_color; ?> sign-up">
        <div class="container">
            <div class="columns">
                <div class="column is-6">
                    <h2 class="is-size-3-mobile is-size-2"><?php echo get_sub_field('sign-up_title'); ?></h2>

                    <div class="sign-up__terms">
                        <?php echo get_sub_field('sign-up_text'); ?>
                    </div>

                    
                  
                </div>
                <div class="column is-6">
                <div class="sign-up__form">
                        <?php echo do_shortcode('[ninja_form id=' . get_sub_field('sign-up_form') . ']'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>