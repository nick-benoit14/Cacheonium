<?php
/**
 * The default template for displaying Single pages
 *
 * @package WPlook
 * @subpackage Morning Time Lite
 * @since Morning Time Lite 1.0
 */
?>


<?php get_header(); ?>
	<div class="main">
		<div class="main-body">
			<div class="row">
				<div class="columns large-12">
					<div class="content">
						<?php get_template_part('partials/people', 'page' ); ?>
						<?php //get_template_part('content', 'page' ); ?>
					</div>
				</div><!-- /.columns large-8 -->
			</div><!-- /.row -->
		</div><!-- /.main-body -->
	</div><!-- /.main -->
<?php get_footer(); ?>
