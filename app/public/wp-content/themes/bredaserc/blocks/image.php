<?php
    $background_color = get_sub_field('image_bg');
    $block_layout = get_sub_field('image_layout');
    $image = get_sub_field('image_img');
    $text = get_sub_field('image_text');
    $row_flex = ($block_layout === 'image-right') ? 'row-reversed' : '';
?>

<section class="section <?php echo $background_color; ?> image">
    <div class="container">
        <div class="columns <?php echo $row_flex; ?>">
            <?php if ($block_layout === 'image-full') : ?>
                <div class="column">
                Full
                    <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>" title="<?php echo $image['title'] ?>">
                </div>
            <?php else : ?>
            <div class="column">
                <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>" title="<?php echo $image['title'] ?>">
            </div>
            <div class="column"><?php echo $text; ?></div>

            <?php endif; ?>
        </div>
    </div>
</section>