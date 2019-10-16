<?php /* Template Name: Holding Page Template */ get_header(); ?>

<section id="holding-container">

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <? //php the_content(); ?>
    <div class="inner-container">
      <div class="content-container left">
        <div class="content-inner content-logo">
          <?php if ( get_field( 'holding_page_logo' ) ) { ?>
            <img src="<?php the_field( 'holding_page_logo' ); ?>" alt="<?php the_title(); ?>" class="logo">
          <?php } ?>
        </div>
        <div class="content-inner content-copy">
          <?php if ( have_rows( 'holding_page_content' ) ) : ?>
          	<?php while ( have_rows( 'holding_page_content' ) ) : the_row(); ?>
              <h1 id="welcome-header" style="color: <?php the_field( 'brand_primary_color', 'option' ); ?>;"><?php the_title(); ?></h1>
              <p id="welcome-message"><?php the_sub_field( 'content' ); ?></p>
          	<?php endwhile; ?>
          <?php endif; ?>

          <?php if ( have_rows( 'cta_button' ) ) : ?>
          	<?php while ( have_rows( 'cta_button' ) ) : the_row(); ?>
          		<?php if ( get_sub_field( 'cta_button_toggle' ) == 1 ) { ?>
          		 <a href="<?php the_sub_field( 'cta_button_url' ); ?>" id="portal-link" target="_blank" title="<?php the_sub_field( 'cta_button_value' ); ?>"><?php the_sub_field( 'cta_button_value' ); ?></a>
          		<?php } else {
                // Include nothing
          		} ?>
          	<?php endwhile; ?>
          <?php endif; ?>

          <?php if ( have_rows( 'newsletter' ) ) : ?>
          	<?php while ( have_rows( 'newsletter' ) ) : the_row(); ?>
          		<?php if ( get_sub_field( 'newsletter_toggle' ) == 1 ) { ?>
          		 <?php the_sub_field( 'newsletter_embed' ); ?>
          		<?php } else {
               // Include nothing
          		} ?>
          	<?php endwhile; ?>
          <?php endif; ?>

          <div id="ada-open-container" style="background-color: <?php the_field( 'brand_secondary_color', 'option' ); ?>;" class="">
            <button type="button" name="open" id="ada-open" title="Discover More  ">Discover More</button> <!-- EDIT REQUIRED -->
          </div>
        </div>
        <div class="content-inner content-social">
          <div id="social-media-container">

            <?php if ( have_rows( 'social_media', 'option' ) ) : ?>
            	<?php while ( have_rows( 'social_media', 'option' ) ) : the_row(); ?>

            		<?php if ( have_rows( 'facebook' ) ) : ?>
            			<?php while ( have_rows( 'facebook' ) ) : the_row(); ?>
            				<?php if ( get_sub_field( 'facebook_toggle' ) == 1 ) { ?>
                      <a href="<?php the_sub_field( 'facebook_url' ); ?>" title="Facebook" target="_blank" style="background-color: <?php the_field( 'brand_secondary_color', 'option' ); ?>;"> <!-- EDIT REQUIRED -->
                        <?php $facebook_icon = get_sub_field( 'facebook_icon' ); ?>
                				<?php if ( $facebook_icon ) { ?>
                          <img src="<?php echo $facebook_icon['url']; ?>" alt="<?php echo $facebook_icon['alt']; ?>" class="icon facebook">
                				<?php } ?>
                      </a>
            			  <?php	} else {
            				 // echo 'false';
            				} ?>
            			<?php endwhile; ?>
            		<?php endif; ?>

                <?php if ( have_rows( 'twitter' ) ) : ?>
            			<?php while ( have_rows( 'twitter' ) ) : the_row(); ?>
            				<?php if ( get_sub_field( 'twitter_toggle' ) == 1 ) { ?>
                      <a href="<?php the_sub_field( 'twitter_url' ); ?>" title="Twitter" target="_blank" style="background-color: <?php the_field( 'brand_secondary_color', 'option' ); ?>;"> <!-- EDIT REQUIRED -->
                        <?php $twitter_icon = get_sub_field( 'twitter_icon' ); ?>
                				<?php if ( $twitter_icon ) { ?>
                          <img src="<?php echo $twitter_icon['url']; ?>" alt="<?php echo $twitter_icon['alt']; ?>" class="icon twitter">
                				<?php } ?>
                      </a>
            			  <?php	} else {
            				 // echo 'false';
            				} ?>
            			<?php endwhile; ?>
            		<?php endif; ?>

                <?php if ( have_rows( 'instagram' ) ) : ?>
            			<?php while ( have_rows( 'instagram' ) ) : the_row(); ?>
            				<?php if ( get_sub_field( 'instagram_toggle' ) == 1 ) { ?>
                      <a href="<?php the_sub_field( 'instagram_url' ); ?>" title="Instagram" target="_blank" style="background-color: <?php the_field( 'brand_secondary_color', 'option' ); ?>;"> <!-- EDIT REQUIRED -->
                        <?php $instagram_icon = get_sub_field( 'instagram_icon' ); ?>
                				<?php if ( $instagram_icon ) { ?>
                          <img src="<?php echo $instagram_icon['url']; ?>" alt="<?php echo $instagram_icon['alt']; ?>" class="icon instagram">
                				<?php } ?>
                      </a>
            			  <?php	} else {
            				 // echo 'false';
            				} ?>
            			<?php endwhile; ?>
            		<?php endif; ?>

            	<?php endwhile; ?>
            <?php endif; ?>

          </div>
        </div>
      </div>
      <div class="content-container right">
        <?php if ( get_field( 'holding_page_image' ) ) { ?>
          <div class="content-inner" style="background-image: url(<?php the_field( 'holding_page_image' ); ?>);">
          </div>
        <?php } else { ?>
          <div class="content-inner">
            <p>add an image in the page settings.</p>
          </div>
        <?php } ?>
      </div>
    </div>

    <div id="ada-content" class="">
      <?php if ( have_rows( 'holding_page_content' ) ) : ?>
      	<?php while ( have_rows( 'holding_page_content' ) ) : the_row(); ?>
          <h2><?php the_sub_field( 'additional_content_title' ); ?></h2>
          <?php the_sub_field( 'additional_content' ); ?>
      	<?php endwhile; ?>
      <?php endif; ?>
    </div>

  <?php endwhile; ?>

<?php else: ?>

  <h2>Something is not configured correctly. Please message your website's technical contact.</h2>

<?php endif; ?>

</section>

<?php get_footer(); ?>
