<?php get_header(); ?>
      <main class="mdl-layout__content">
        <div class="mdl-layout__tab-panel is-active" id="overview">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
            <header class="section__play-btn mdl-cell mdl-cell--3-col-desktop mdl-cell--2-col-tablet mdl-cell--4-col-phone mdl-color--teal-100 mdl-color-text--white">
              <i class="material-icons">play_circle_filled</i>
            </header>
            <div class="mdl-card mdl-cell mdl-cell--9-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone">
              <div class="mdl-card__supporting-text">
                <h4><?php the_title(); ?></h4>
                <?php the_content(__('(more...)')); ?>
                <br>Posted on <?php the_time('F jS, Y') ?>
              </div>
              <div class="mdl-card__actions">
                <a href="<?php echo esc_url( get_permalink() ); ?>" class="mdl-button">Continue Reading...</a>
              </div>
            </div>
          </section>
          <?php endwhile; else: ?>
          <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
            <div class="mdl-card mdl-cell mdl-cell--9-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone">
              <div class="mdl-card__supporting-text">
                <?php _e('Sorry, no posts matched your criteria.'); ?>   
              </div>
            </div>
          </section>
          <?php endif; ?>
        </div>
<?php get_footer(); ?>
