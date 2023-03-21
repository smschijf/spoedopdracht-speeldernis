<main>
    <div class="container">
        <article class="content-holder">
            <div class="content">
                <?php 
                  if ( is_single() && get_post_type() == 'post' ):
                    include(locate_template('/partials/content/content-intro.php', false, false));
                  endif;
                ?>
                <?php include(locate_template('/partials/content/content.php', false, false)); ?>
            </div>
                <?php 
                global $post;
                $id = get_the_ID();
                $template = get_page_template_slug();
                if ( is_page() && $post->post_parent ):
                  $childOf = $post->post_parent;
                else: 
                  $childOf = $post->ID;
                endif;

                $children = wp_list_pages(array(
                  'title_li' => '',
                  'child_of' => $childOf,
                  'echo' => 0
                ));

                ?>
                <aside class="sidebar <?php if ($children && $template == ''): ?>active <?php endif; ?>">
                  <?php if ($children && $template == ''): ?>
                  <nav id="subnavigation">
                      <div class="nav-sub">
                        <ul class="list-menu">
                            <li <?php if($id == $childOf): ?> class="current_page_item"<?php endif; ?>>
                                <a href="<?php echo get_permalink($childOf); ?>"><?php echo get_the_title($childOf); ?></a>
                            </li>
                            <?php echo $children; ?>
                        </ul>
                      </div>
                  </nav>
                  <?php endif; ?>
                 </aside>
                
                <?php //dynamic_sidebar( 'sidebar' ); ?>
           
        </article>
    </div>
</main>