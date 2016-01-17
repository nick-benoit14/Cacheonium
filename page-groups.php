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
              <h1>Groups</h1>
							<p>
								Cache Makers hosts a multitude volunteer led youth groups focused on Science, Technology, Engineering, and Math.
								Joining Cache Maker's 4-H club and signing up for a group is a great way to start learning interesting things,
								continue learning about something you are already interested in, or meet likeminded individuals.

								 We provide a space, context, and resources to support enthusiastic volunteers in giving back to the community and it's youth.
								  We believe that education does not stop when you leave the classroom. Whether
							    you are leaving the classroom for the evening, or for good, learning is a lifelong process that transcends the 8:00 - 4:00 school day.
							</p>

								<p>All over Cache Valley and the rest of the world excited parents, community members, and kids come together to participate in youth sports.
								   We are bringing that same collective community experience to STEM education. Youth groups are led by community members who want to give back
								   to the community by sharing something that is important and interesting to them. We have found kids respond incredibly positively to this kind
								   of hands on learning.</p>

							<div style="max-width:950px; margin:auto;">
						  	<?php echo eventbrite_get_eventblocks(); ?>
							</div>

						<?php if(have_posts()) :
						 while (have_posts()) : the_post();

								the_content();

							endwhile;
							endif;
						?>

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
