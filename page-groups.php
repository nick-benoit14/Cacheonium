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
						<div style="padding:6%;" <?php post_class('post post-single'); ?> >
              <h1>Groups</h1>
							<p>
								Cache Makers hosts a multitude volunteer led youth groups focused on Science, Technology, Engineering, and Math.
								Joining Cache Maker's 4-H club and signing up for a group is a great way to start learning interesting things,
								continue learning about something you are already interested in, or meet likeminded individuals.
							</p>

							<div style="max-width:950px; margin:auto; padding-top:2%; padding-bottom:2%;">
						  	<?php echo eventbrite_get_eventblocks(); ?>
							</div>
						</div>

						<div style="padding:6%;" <?php post_class('post post-single'); ?> >
							<h2>About Groups</h2>
							<h3> What is a group?</h3>
							<p>	Cache Makers youth groups are 4-H clubs. Like all other 4-H clubs they are organized and taught by
							    volunteers from the community. Volunteer leaders are generally parents, but that is not always the case.
									Volunteer leaders must register with 4-H and pass a background check.
							</p>
							<h3>What can I expect when I sign up for a group?</h3>
								<p>	Cache Makers is built on the idea of community involvement and a sense of giving back to the community.
								   To encourage family involvement and ensure there are enough volunteers to help teach kids our sign up fee's
									  are broken down into a three categories.
							</p>
							<ul>
								<li><h4> No parental involvement</h4><p> Sign your child up for a group that they are interested in and bring them to come learn cool things!</p></li>
								<li><h4>Half Parental involvement</h4></li><p>Half the cost of a normal signup. Join your child late every week, or attend half of the meetings with your child.
								                            Come see what your child is up to, participate in the cool things they are learning, and maybe learn a thing or
																						two yourself.</p>

								<li><h4>Full Parental Involvement</h4></li> <p>Free. Cache Makers groups are free for you and your child to come make and learn together. Whether you have
																					 a developed professional knowledge of the topic, or were not even aware of a it before the group, you and your
																					 child are always welcome at Cache Makers.</p>
							 	</ul>
							 <h3>How to help out as a parent?</h3> -<p> Parents are sometimes unsure about how they are able to help out, especially if they aren't familiar
							 																with the content. Helping can be as simple as making sure your child is spelling words correctly when
																							coding, or as involved as helping the group leader develop lesson plans. Increasing the adult / child ratio
																							can have a significant impact on the effectiveness of a classroom so your mere presense even is a large help.</p>


								<h3>Scholarships</h3> <p>We believe that all kids should have an opportunity to learn. For this reason registration fee scholarhips are available
								 							 for those who qualify. We do our best to make sure that our registration fee's are not cost prohibitive, but if there is
															 a way we can make working with you, your child, and your family easier come and talk to us and we will work something out.	</p>


			<!--				<p>
								 We provide a space, context, and resources to support enthusiastic volunteers in giving back to the community and it's youth.
								  We believe that education does not stop when you leave the classroom. Whether
							    you are leaving the classroom for the evening, or for good, learning is a lifelong process that transcends the 8:00 - 4:00 school day.
							</p>
							<p>All over Cache Valley and the rest of the world excited parents, community members, and kids come together to participate in youth sports.
							   We are bringing that same collective community experience to STEM education. Youth groups are led by community members who want to give back
							   to the community by sharing something that is important and interesting to them. We have found kids respond incredibly positively to this kind
							   of hands on learning.
							 </p>
			-->
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
