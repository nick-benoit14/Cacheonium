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
	<h1>People</h1>

	<div>
		<h3>Volunteer Leaders</h3>
		<div>
			<?php $args = array('role' => 'leader',);

				$users = get_users( $args );
				foreach( $users as $user ){ ?>
					<div>
						<h4><?php echo $user->get('first_name') . " " . $user->get('last_name'); ?></h4>
								<?php echo get_avatar( $user->ID ); ?>
					</div>
			<?php		} ?>
		</div>
	</div>

	<div>
		<h3>Staff</h3>
			<div>
				<?php $args = array('role' => 'staff',);

					$users = get_users( $args );
					foreach( $users as $user ){ ?>
						<div>
							<h4><?php echo $user->get('first_name') . " " . $user->get('last_name'); ?></h4>
									<?php echo get_avatar( $user->ID ); ?>
						</div>
				<?php		} ?>
			</div>



	</div>

</article>
