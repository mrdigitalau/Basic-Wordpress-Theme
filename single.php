<?php get_header();?>



            <?php if (have_posts()): while (have_posts()): the_post();?>      

		      <?php the_content();?>

		<?php endwhile;else:endif;?>



            <?php
            $tags = get_the_tags();
            if ($tags):
            foreach ($tags as $tag):
            ?>

                  <a href="<?php echo get_tag_link($tag->term_id); ?>"><?php echo $tag->name; ?></a>

	      <?php endforeach;endif;?>



<?php get_footer();?>