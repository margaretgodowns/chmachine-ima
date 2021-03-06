<?php while (have_posts()) : the_post();
?>
<?php get_template_part('templates/content', 'page'); ?>
<?php get_template_part('templates/inner-hero'); ?>

<div class="main">
  <div class="benefits">
    <div class="case-study-section flex-container flex-three-column">
      <?php
        $args = array(
            'post_type'    => array(
                'case_study'
            ),
            'posts_per_page' => -1,
            'orderby' => 'menu_order'
         );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post();
      ?>
        <div class="case-study flex-item">
          <a href="<?php the_permalink(); ?>">
            <h5 class="show-small"><?php the_title(); ?></h5>
            <div class="case-study-wrapper">
                <?php the_post_thumbnail(); ?>
            </div>
            <h5 class="hide-small"><?php the_title(); ?></h5>
          </a>
        </div>
      <?php endwhile; ?>
    </div>
  </div>
</div>

<?php endwhile; ?>
