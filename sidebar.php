 <aside id="sidebar">
    <?php 
    //if there are widgets in the sidebar widget area, show them, otherwise, show static stuff
    if( !dynamic_sidebar('Blog Sidebar') ):
     ?> 
 
        <section id="categories" class="widget">
            <h3 class="widget-title"> Categories </h3>
            <ul>
               <?php wp_list_categories(array(
                    'show_count' => 1,
                    'number' => 10,
                    'orderby' => 'count',
                    'order' => 'desc',
                    'title_li' => ''
                    
               )); ?>                
            </ul>
        </section>
        <section id="archives" class="widget">
            <h3 class="widget-title"> Archives </h3>
            <ul>
                <?php wp_get_archives(array(
                    'type' => 'yearly'
                )); ?>
            </ul>
        </section>
        <section id="tags" class="widget">
            <h3 class="widget-title"> Tags </h3>
            <?php wp_tag_cloud(); ?>
            
        </section>
        <section id="meta" class="widget">
            <h3 class="widget-title"> Meta </h3>
            <ul>
                <?php wp_register(); ?>
                <li> <?php wp_loginout(); ?> </li>
            </ul>
        </section>
        
    <?php endif; ?>
  </aside><!-- end sidebar --> 