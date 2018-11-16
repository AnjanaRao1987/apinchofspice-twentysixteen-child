<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<?php if ( is_active_sidebar( 'sidebar-1' )  ) : ?>
<aside id="secondary" class="sidebar widget-area" role="complementary">
<!-- ======== my code ======== -->
	<?php add_theme_support( 'post-thumbnails' );  //Adds thumbnails compatibility to the theme 
	set_post_thumbnail_size( 300, 200, true ); // Sets the Post Main Thumbnails 
	add_image_size( 'delicious-recent-thumbnails', 300, 200, true ); // Sets Recent ?>
<h4>RECENT POSTS</h4>

<?php 
$is_it_archive = is_archive();
$remove_post = array();
array_push($remove_post, $post->ID);
$query_args = array(
			'post_type' => array('post','Recipes'),
			'posts_per_page' => 5,
			'orderby' => 'rand',
			'post__not_in' => $remove_post
		);

if ($is_it_archive != 1){
$the_query = new WP_Query($query_args); ?>

<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
    <br>
	<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
	<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('delicious-recent-thumbnails'); ?></a>
	<br>
<?php endwhile;
	wp_reset_postdata();}
?>


<!-- ======== ending my code === -->
		<?php dynamic_sidebar( 'sidebar-1' ); ?>

	</aside><!-- .sidebar .widget-area -->
<?php endif; ?>


