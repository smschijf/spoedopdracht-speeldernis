<?php

    $title = get_field('title', $widget_id);
    $link = get_field('link', $widget_id);

?>
<div class="widget">
    
    <?php if($title != ''): ?><h3><?php echo $title; ?></h3><?php endif; ?>
    
    <?php
    if( have_rows('products', $widget_id) ):
    ?>
        <div class="products-holder">
            <?php
            while ( have_rows('products', $widget_id) ) : the_row();
                $image = get_sub_field('image');
                $text = get_sub_field('text');
            ?>
                <div class="product">
                    <?php if($image != ''): ?>
                        <div class="product-image-holder">
                            <figure class="product-image" style="background-image:url('<?php echo $image['sizes']['large']; ?>');"></figure>
                        </div>
                    <?php endif; ?>
                    <?php if($text != ''): ?>
                        <div class="product-content">
                            <?php echo $text; ?>
                        </div>
                    <?php endif; ?>
                </div>
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