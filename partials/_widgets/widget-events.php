<?php

    $title = get_field('title', $widget_id);
    $link = get_field('link', $widget_id);

?>
<div class="widget">
    
    <?php if($title != ''): ?><h3><?php echo $title; ?></h3><?php endif; ?>
    
    <?php
    if( have_rows('events', $widget_id) ):
    ?>
        <div class="events-holder">
            <?php
            while ( have_rows('events', $widget_id) ) : the_row();
                $month = get_sub_field('month');
                $day = get_sub_field('day');
                $text = get_sub_field('text');
                $url = get_sub_field('link');
            ?>
                <?php
                if($url != ''):
                    ?>

                     <a class="event" href="<?php echo esc_url($url); ?>" target="_blank">

                    <?php else: ?>
                    <div class="event">
                    <?php endif; ?>
                        <div class="event-date">
                            <span class="month"><?php echo $month; ?></span>
                            <div class="day"><?php echo $day; ?></div>
                        </div>
                        <div class="event-content">
                            <?php echo $text; ?>
                        </div>

                    <?php if($url != ''): ?></a> <?php else: ?> </div> <?php endif; ?>
            <?php
            endwhile;
            ?>
        </div>
    <?php

    endif;

    ?>
    
    <?php if($link != ''):

        $link_url = $link['url'];
        $link_title = $link['title'];
        $link_target = $link['target'] ? $link['target'] : '_self';

        ?>
        <div class="widget-content">
            <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
        </div>
    <?php endif; ?>

</div>