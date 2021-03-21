<?php

$header_type = get_field('header_type');
$header_title = get_field('header_title');
$header_text = get_field('header_text');
$header_image = get_field('header_image');
$header_logos = get_field('header_logos');

$image_size = 'full';

?>

<section class="section header">
    <div class="container">
        <div class="columns is-vcentered">
            
            <?php if ($header_type === 'header-home') : ?>
                <div class="column is-6">
                    <h1 class="is-size-3-mobile is-size-1-desktop title mt-0 mb-5"><?php echo $header_title; ?></h1>
                    <p class="mb-5">
                        <?php echo $header_text ?>
                    </p>
                    <div class="header__sponsors">
                    
                        <?php if (isset($header_logos) && !empty($header_logos)): 
                            foreach ($header_logos as $logo) : ?>
                                <img src="<?php echo $logo['url'];  ?>" alt="<?php echo $logo['alt'];  ?>" title="<?php echo $logo['title'];  ?>" /> <!-- TODO: Add responsive sizes -->
                            <?php endforeach;
                        endif; ?>
                    </div>
                </div>

                <div class="column is-6 has-text-centered">
                    <img src="<?php echo $header_image['url'];  ?>" alt="<?php echo $header_image['alt'];  ?>" title="<?php echo $header_image['title'];  ?>" />
                </div>
                §
            <?php elseif ($header_type === 'header-page') :
                    echo "This is a page page"; 
            else :
                echo "No header";
            endif; ?>
        </div>
    </div>
</section>
