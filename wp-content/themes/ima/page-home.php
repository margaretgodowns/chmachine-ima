<?php while (have_posts()) : the_post();
  $header = get_field('header');
  $content = get_field('content');
  $cta_header = get_field('cta_header');
  $button_text = get_field('button_text');
  $button_url = get_field('button_url');
  $background_image = get_field('contact_background_image');
?>
  <?php get_template_part('templates/content', 'page'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
  <?php get_template_part('templates/hero'); ?>

  <div class="main">
    <div class="full-width-text-block">
      <div class="arrow-up"></div>
      <h2><?php echo $header; ?></h2>

      <?php echo $content; ?>

    </div>

    <?php get_template_part('templates/four-blocks'); ?>

  </div>
    <?php get_template_part('templates/background-image-section'); ?>

  <div class="main">
    <div class="full-width-text-block">
      <h2>Distributor Alliance</h2>
    </div>
    <div class="members">

      <?php
        $args = array(
            'post_type'    => array(
                'member'
            ),
            'posts_per_page' => -1,
            'orderby' => 'menu_order'
         );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post();
      ?>

      <div class="member">
        <a href="<?php echo the_field('url'); ?>">

          <?php the_post_thumbnail(); ?>

        </a>
      </div>

      <?php endwhile; ?>

    </div>
  </div>
  <div class="background-image-section cta aspect-ratio-sixteen-three" style="background-image: url(<?php echo $background_image; ?>);">
    <div class="content">
      <h2><?php echo $cta_header; ?></h2>
      <a class="cta-button" href="<?php echo $button_url; ?>"><?php echo $button_text; ?></a>
    </div>
  </div>
  <div class="main">
    <div class="full-width-text-block">
      <h2>Industry News</h2>
    </div>
    <div class="news-section">

      <?php
        $args = array(
            'post_type'    => array(
                'post'
            ),
            'posts_per_page' => 3,
            'orderby' => 'menu_order'
         );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post();
      ?>

      <div class="news-item">
        <a href="<?php the_permalink(); ?>">

          <?php the_post_thumbnail(); ?>

          <h5><?php the_title(); ?></h5>
        </a>
      </div>

      <?php endwhile; ?>


      </div>
    </div>
  </div>

<?php endwhile; ?>
