<?php while (have_posts()) : the_post();
?>
<?php get_template_part('templates/content', 'page'); ?>
<?php get_template_part('templates/inner-hero'); ?>

<div class="main team-wrapper">
  <h2>Executive Team</h2>
  <div class="news-section flex-container flex-three-column">
    <?php
      $args = array(
          'post_type'    => array(
              'team_member'
          ),
          'posts_per_page' => -1,
          'orderby' => 'menu_order',
          'order' => 'ASC'
      );
      $loop = new WP_Query( $args );
      while ( $loop->have_posts() ) : $loop->the_post();
      $division = get_field('team_division');
      if ( $division === 'executive' ):
    ?>
    <div class="news-item flex-item">
      <img src="<?php the_post_thumbnail_url(); ?>" alt="">
      <h3><?php the_title(); ?></h3>
      <p><i><?php echo the_field('title'); ?></i></p>
      <div class="bio">
        <?php the_content(); ?>
      </div>
      <?php if( '' !== get_post()->post_content ): ?>
        <a href="#" class="show_hide" data-content="toggle-text"><span class="more-less">Read More</span></a>
      <?php endif; ?>
    </div>
    <?php endif; endwhile; ?>
    <?php wp_reset_postdata(); ?>
  </div>
  <h2>Marketing Team</h2>
  <div class="news-section flex-container flex-three-column">
    <?php
      $args = array(
          'post_type'    => array(
              'team_member'
          ),
          'posts_per_page' => -1,
          'orderby' => 'menu_order',
          'order' => 'ASC'
       );
      $loop = new WP_Query( $args );
      while ( $loop->have_posts() ) : $loop->the_post();
      $division = get_field('team_division');
      if ( $division === 'marketing' ):
    ?>
    <div class="news-item flex-item">
      <img src="<?php the_post_thumbnail_url(); ?>" alt="">
      <h3><?php the_title(); ?></h3>
      <p><i><?php echo the_field('title'); ?></i></p>
      <div class="bio">
        <?php the_content(); ?>
      </div>
      <?php if( '' !== get_post()->post_content ): ?>
        <a href="#" class="show_hide" data-content="toggle-text"><span class="more-less">Read More</span></a>
      <?php endif; ?>
    </div>
    <?php endif; endwhile; ?>
    <?php wp_reset_postdata(); ?>
  </div>
  <h2>Business Development Team</h2>
  <div class="news-section flex-container flex-three-column">
    <?php
      $args = array(
          'post_type'    => array(
              'team_member'
          ),
          'posts_per_page' => -1,
          'orderby' => 'menu_order',
          'order' => 'ASC'
       );
      $loop = new WP_Query( $args );
      while ( $loop->have_posts() ) : $loop->the_post();
      $division = get_field('team_division');
      if ( $division === 'business' ):
    ?>
    <div class="news-item flex-item">
      <img src="<?php the_post_thumbnail_url(); ?>" alt="">
      <h3><?php the_title(); ?></h3>
      <p><i><?php echo the_field('title'); ?></i></p>
      <div class="bio">
        <?php the_content(); ?>
      </div>
      <?php if( '' !== get_post()->post_content ): ?>
        <a href="#" class="show_hide" data-content="toggle-text"><span class="more-less">Read More</span></a>
      <?php endif; ?>
    </div>
    <?php endif; endwhile; ?>
    <?php wp_reset_postdata(); ?>
  </div>
  <h2>Quality Assurance Team</h2>
  <div class="news-section flex-container flex-three-column">
    <?php
      $args = array(
          'post_type'    => array(
              'team_member'
          ),
          'posts_per_page' => -1,
          'orderby' => 'menu_order',
          'order' => 'ASC'
       );
      $loop = new WP_Query( $args );
      while ( $loop->have_posts() ) : $loop->the_post();
      $division = get_field('team_division');
      if ( $division === 'qa' ):
    ?>
    <div class="news-item flex-item">
      <img src="<?php the_post_thumbnail_url(); ?>" alt="">
      <h3><?php the_title(); ?></h3>
      <p><i><?php echo the_field('title'); ?></i></p>
      <div class="content">
        <?php the_content(); ?>
      </div>
      <?php if( '' !== get_post()->post_content ): ?>
        <a href="#" class="show_hide" data-content="toggle-text"><span class="more-less">Read More</span></a>
      <?php endif; ?>
    </div>
    <?php endif; endwhile; ?>
    <?php wp_reset_postdata(); ?>
  </div>
</div>

<?php endwhile; ?>
