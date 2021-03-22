<?php 
$background_color = get_sub_field('announcements_bg');

if( have_rows('announcements_content') ) : ?>
    <section class="section <?php echo $background_color; ?> announcements">
        <div class="container">
            <div class="columns">
                <?php while( have_rows('announcements_content') ) : the_row(); 
                $image = get_sub_field('announcements_content_img');
                $button = get_sub_field('announcements_content_btn'); ?>
                    <div class="column is-12 is-6-desktop">
                        <div class="card announcement__card">
                            <div class="card__visual">
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>">
                                <?php if (isset($button) && !empty($button)) : ?>
                                    <a href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>" class="button button--primary"><?php echo $button['title']; ?></a>
                                <?php endif; ?>
                            </div>
                            <div class="card__text">
                                <h2 class="is-size-4 is-size-4-desktop"><?php echo get_sub_field('announcements_content_title'); ?></h2>
                                <p><?php echo get_sub_field('announcements_content_text'); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
<?php endif; ?>