<?php get_header(); ?>
<main class="mdl-layout__content">
	<div class="mdl-layout__tab-panel is-active" id="overview">
		<div id="content">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
				<div class="mdl-card mdl-cell mdl-cell--12-col">
	              <div class="mdl-card__supporting-text">
	                <h4><?php the_title(); ?></h4>
	                <?php the_content(__('(more...)')); ?>
	                <br>Posted on <?php the_time('F jS, Y') ?>
	              </div>
	              <div class="mdl-card__actions">
	                <a href="#" class="mdl-button">Continue Reading...</a>
	              </div>
	            </div>
			</section>
			<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
		</div>
	</div>
	<?php get_footer(); ?>