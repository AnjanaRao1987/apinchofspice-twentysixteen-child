<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php twentysixteen_excerpt(); ?>

	<?php twentysixteen_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );

			if ( '' !== get_the_author_meta( 'description' ) ) {
				get_template_part( 'template-parts/biography' );
			}
		?>
	</div><!-- .entry-content -->


<!--- recipe name -->
	<?php	if (get_field('recipe_name')){  ?>
    <h2 class="acf-key"> Recipe : <span class ="acf-value"><?php the_field('recipe_name')?> </span></h2>
    <?php } ?>
    <?php	if (get_field('cuisine')){  ?>
    <h2 class="acf-key"> Cuisine : <span class ="acf-value"><?php the_field('cuisine')?> </span></h2>
    <?php } ?>

    <?php	if (get_field('preparation_time')){  ?>
    <h2 class="acf-key"> Preparation Time : <span class ="acf-value"><?php the_field('preparation_time')?> </span></h2>
    <?php } ?>

    <?php	if (get_field('cooking_time')){  ?>
    <h2 class="acf-key"> Cooking Time : <span class ="acf-value"><?php the_field('cooking_time')?> </span></h2>
    <?php } ?>

    <?php	if (get_field('servings')){  ?>
    <h2 class="acf-key"> Servings : <span class ="acf-value"><?php the_field('servings')?> </span></h2>
    <?php } ?>

    <?php	if (get_field('ingrediants')){  ?>
    <h2 class="acf-key"> Ingrediants : <span class ="acf-value"><?php the_field('ingrediants')?> </span></h2>
    <?php } ?>

    <?php	if (get_field('procedure')){  ?>
    <h2 class="acf-key"> Procedure : <span class ="acf-value"><?php the_field('procedure')?> </span></h2>
    <?php } ?>

<!-- end of addition by anjana -->
	<footer class="entry-footer">
		<?php twentysixteen_entry_meta(); ?>
		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
