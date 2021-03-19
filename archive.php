<?php get_header();?>



      <?php 
      if (class_exists('ACF')) {
            get_template_part('sections/block','flexible_content');
      }
      ?>

      

      <?php if (have_posts()): while (have_posts()): the_post();?>      

            <h3><?php the_title();?></h3>
            <p><?php the_excerpt();?></p>

      <?php endwhile;else:endif;?>



<?php get_footer();?>