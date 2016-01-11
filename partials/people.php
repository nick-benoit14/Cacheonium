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

	</div>

	<div>
		<h3>Staff</h3>
		<?php $args = array('role' => 'staff',);

					$users = get_users( $args );
					foreach($users as $user){
						echo $user->description;
					}


		 ?>
	</div>

</article>
