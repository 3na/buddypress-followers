<?php get_header( 'buddypress' ); ?>
<div class="container_16 fixedTopPage">	<div class="pageContent">	<?php do_action( 'custom_user_banner' ); ?>
	<div id="content" class="grid_11 noLeft singleProject">
		<div class="padder">			<?php do_action( 'bp_before_member_home_content' ); ?>			<div id="item-header" role="complementary">				<?php locate_template( array( 'members/single/member-header.php' ), true ); ?>			</div><!-- #item-header -->					<div id="fansLeftArea" class="grid_3 noLeft">
				<div id="item-nav">					<div class="item-list-tabs-2 no-ajax curvedEdges" id="object-nav" role="navigation">						<ul>							<?php bp_get_displayed_user_nav(); ?>							<?php do_action( 'bp_member_options_nav' ); ?>						</ul>					</div>
				</div><!-- #item-nav -->		</div>
		<div id="fansMainArea" class="grid_8 noLeft">
			<div id="item-body" class="noTop">				<?php do_action( 'bp_before_member_body' ); ?>				<?php do_action( 'bp_before_followers_loop' ) ?>				<?php if ( bp_has_members( 'include=' . bp_get_follower_ids() ) ) : ?>					<div class="pagination no-ajax">						<div class="pag-count">							<?php bp_members_pagination_count() ?>						</div>						<div class="pagination-links">							<?php bp_members_pagination_links() ?>
						</div>					</div>

		<?php do_action( 'bp_before_followers_list' ) ?>

					<ul id="followers-list" class="item-list">
					<?php while ( bp_members() ) : bp_the_member(); ?>
				
						<li>
							<div class="item-avatar">
								<a href="<?php bp_member_permalink(); ?>"><?php bp_member_avatar(); ?></a>
							</div>
				
							<div class="item">
								<div class="item-title">
									<a href="<?php bp_member_permalink(); ?>"><?php bp_member_name(); ?></a>
				
									<?php if ( bp_get_member_latest_update() ) : ?>
				
										<span class="update"> <?php bp_member_latest_update(); ?></span>
				
									<?php endif; ?>
				
								</div>
				
								<div class="item-meta"><span class="activity"><?php bp_member_last_active(); ?></span></div>
				
								<?php do_action( 'bp_directory_members_item' ); ?>
				
								<?php
								 /***
								  * If you want to show specific profile fields here you can,
								  * but it'll add an extra query for each member in the loop
								  * (only one regardless of the number of fields you show):
								  *
								  * bp_member_profile_data( 'field=the field name' );
								  */
								?>
							</div>
				
							<div class="action">
				
								<?php do_action( 'bp_directory_members_actions' ); ?>
				
							</div>
				
							<div class="clear"></div>
						</li>
				
					<?php endwhile; ?>
					</ul>

					<?php do_action( 'bp_after_followers_list' ) ?>

				<?php else: ?>

					<div id="message" class="info">
						<p><?php _e( "Sorry, this member has no followers.", 'bp-follow' ) ?></p>
					</div>

				<?php endif; ?>

				<?php do_action( 'bp_after_followers_loop' ) ?>

				<?php do_action( 'bp_after_member_body' ); ?>

			</div><!-- #item-body -->			</div>

			<?php do_action( 'bp_after_member_home_content' ); ?>

		</div><!-- .padder -->
	</div><!-- #content -->
	<div class="grid_5 noLeft noRight">
	<?php dynamic_sidebar('Blog Sidebar') ?>	</div></div></div>
<?php get_footer( 'buddypress' ); ?>