<?php $background_color = get_sub_field('announcements_bg');

$rows = get_sub_field('announcements_content');
$halfRows = ceil(count($rows)/2);
$first_row = array_slice($rows, 0, $halfRows);
$second_row = array_slice($rows, $halfRows);

echo $halfRows;

if( have_rows('announcements_content') ) : ?>
    <section class="section <?php echo $background_color; ?> announcements">
        <div class="container">
        <?php for ($i = 1; $i <= $halfRows; $i++) : 
            if ($i === 1) : 
                $ann_content = $first_row; 
            elseif ($i === 2) :
                $ann_content = $second_row;
            endif; 

            $count = count($ann_content); 
            
            // echo '<pre>';
            //     print_r($ann_content);
            //     echo '</pre>';
                ?>

            <div class="columns">
            <?php $announcement = 0;
                for ($c = 1; $c <= $count; $c++) : 
                $content = $ann_content[$announcement];
                
                $image = $content['announcements_content_img'];
                $button = $content['announcements_content_btn']; ?>
                    <div class="column is-12 is-6-desktop">
                        <div class="card announcement__card">
                            <div class="card__visual">
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>">
                                <?php if (isset($button) && !empty($button)) : ?>
                                    <a href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>" class="button button--primary"><?php echo $button['title']; ?></a>
                                <?php endif; ?>
                            </div>
                            <div class="card__text">
                                <h2 class="is-size-4 is-size-4-desktop"><?php echo $content['announcements_content_title']; ?></h2>
                                <p><?php echo $content['announcements_content_text']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php 
            $announcement++;
            endfor; ?>
            </div>
        <?php endfor; ?>
        </div>
    </section>
<?php endif; ?>