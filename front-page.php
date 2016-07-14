<?php
/**
 * The template for the homepage
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 1.0
 */

get_header(); ?>

<section class="home-page">
	<div class="main-content">
		<div class="content">
			<?php while ( have_posts() ): the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
				<a href="<?php echo site_url('/blog/'); //the problem area, links to the wrong spot in my php //?>" class="btn">Front End Geek</a>
				<a href="<?php echo site_url('/page/'); //the problem area, links to the wrong spot in my php // ?>" class="btn2"> Jewelry Geek</a>
			<?php endwhile; ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>
