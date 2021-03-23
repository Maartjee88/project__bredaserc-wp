<?php $background_color = get_sub_field('slider_bg'); ?>
<section class="section <?php echo $background_color; ?> sponsors">
        <div class="container">
            <h2 class="is-size-2"><?php echo get_sub_field('slider_title'); ?></h2>
            
            <?php 
            $logos = get_sub_field('slider_logos');
            $button = get_sub_field('slider_btn');

            if ( isset($logos) && !empty($logos) ) : ?>
                <div class="columns">
                    <div class="column is-10 is-offset-1">
                        <div class="glider-contain multiple">
                            <button class="glider-prev" aria-label="Previous">
                                <i class="fa fa-chevron-left"></i>
                            </button> 

                            <div class="glider">
                                <?php foreach ( $logos as $logo ) : ?>
                                    <img src="<?php echo $logo['url'] ?>" alt="<?php echo $logo['alt'] ?>" title="<?php echo $logo['title'] ?>">
                                <?php endforeach; ?>
                            </div>
                            
                            <button class="glider-next" aria-label="Next">
                                <i class="fa fa-chevron-right"></i>
                            </button>

                            <div id="dots" class="glider-dots"></div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <a href="<?php echo $button['link'] ?>" target="<?php echo $button['target']; ?>" class="button button--primary"><?php echo $button['title']; ?></a>
        </div>
    </section>