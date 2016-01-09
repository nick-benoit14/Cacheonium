<?php
/**
 * The default template for displaying Events
 *
 * @package Cacheonium
 *
 */
?>


<?php get_header(); ?>
	<div class="main">
		<div class="main-body">
			<div class="row">
				<div class="columns large-12">
					<div class="content">
            <div>
              <h1>Events Page</h1>
            </div>

						<?php if(have_posts()) :
						 while (have_posts()) : the_post();

								the_content();

							endwhile;
							endif;
						?>


						<?php get_template_part('content', 'page' ); ?>
					</div><!-- /.content -->


					<!--	<section class="section-comments">
							<div class="row">
								<div class="columns small-12">

									<?php// comments_template( '', true ); ?>

								</div>
							</div>
						</section>
					-->
				</div><!-- /.columns large-8 -->

				<!--
        <div class="columns large-4">
						<div class="sidebar">
							<?php //get_sidebar('page'); ?>
					 </div> --><!-- /.sidebar
				</div> /.columns large-4
        -->

			</div><!-- /.row -->
		</div><!-- /.main-body -->
	</div><!-- /.main -->
<?php get_footer(); ?>
