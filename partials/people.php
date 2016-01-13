<?php
/**
 * The default template for displaying content
 *
 * @package WPlook
 * @subpackage Morning Time Lite
 * @since Morning Time Lite 1.0
 */

?>

<article <?php post_class("post post-single"); ?> > <!-- Cache Makers People Block -->
	<div class="cachemakers-content">
	<h1>People</h1>
	<p>Cache Makers is made possible by the hard work and dedication of many enthusiastic and excited
		 community members. We collectively work to give Cache Valley kids and families a place to come
		 be excited about Science, Technology, Engineering, and Math. Join us in learning about the
		 world around us and making the future. </p>
	<div>
		<h3>Group Leaders</h3>
		<div class="cachemakers-people">
			<?php $args = array('role' => 'leader',);

				$users = get_users( $args );
				foreach( $users as $user ): ?>
					<div class="cachemakers-peopleblock">
								<?php echo get_avatar( $user->ID , 150); ?>
								<div class="people-text">
									<p><?php echo $user->first_name . " " . $user->last_name; ?></p>
									<p class="sub-title"><?php echo $user->title; ?> </p>
							  </div>

					</div>
			<?php	endforeach; ?>
		</div>
	</div>

	<div>
		<h3>Staff</h3>
			<div class="cachemakers-people">
				<?php $args = array('role' => 'staff',);
					$users = get_users( $args );
					foreach( $users as $user ): ?>
					<div class="cachemakers-peopleblock">
								<?php echo get_avatar( $user->ID , 150); ?>
								<div class="people-text">
									<p><?php echo $user->first_name . " " . $user->last_name; ?></p>
									<p class="sub-title"><?php echo $user->title; ?> </p>
								</div>
					</div>
				<?php	endforeach; ?>
			</div>
	</div>
</div>
</article>
