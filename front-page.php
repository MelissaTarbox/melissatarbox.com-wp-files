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
				<a href="<?php echo site_url('/category/front-end-geek/');?>"class="btn">Front-End Geek</a>
				<a href="<?php echo site_url('/category/jewelry-geek/');?>" class="btn2"> Jewelry Geek</a>
			<?php endwhile; ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>
