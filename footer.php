				<footer id="site-footer" class="site-footer">
					<div class="footer-wrapper">
						<div class="footer-content-container">
							<div class="footer-logo-container">
								<?php if($footerLogoUrl = get_option('aca_footer_logo')): ?>
									<a href="<?php bloginfo('url'); ?>">
										<img src="<?=esc_attr($footerLogoUrl)?>" alt="<?php bloginfo('name'); ?>">
									</a>
								<?php endif; ?>
							</div>
							<div class="footer-links-wrapper">
								<?php
								wp_nav_menu(
									array(
										'theme_location'  => 'footer',
										'menu_class'      => 'menu-wrapper',
										'container_id'    => 'footer-menu-container',
										'container_class' => 'footer-menu-container',
										'items_wrap'      => '<ul id="footer-menu-list" class="%2$s">%3$s</ul>',
										'fallback_cb'     => false,
									)
								);
								?>
								<div class="footer-secondary-social-container">
									<?php
									wp_nav_menu(
										array(
											'theme_location'  => 'footer-secondary',
											'menu_class'      => 'menu-wrapper',
											'container_id'    => 'footer-secondary-menu-container',
											'container_class' => 'footer-secondary-menu-container',
											'items_wrap'      => '<ul id="footer-secondary-menu-list" class="%2$s">%3$s</ul>',
											'fallback_cb'     => false,
										)
									);
									?>
									<div class="footer-social-container">
										<ul id="footer-social-list">
											<?php if($inUrl = get_option('aca_instagram_profile_url')): ?>
												<li>
													<a href="<?=esc_attr($inUrl)?>" title="Instagram">
														<i class="fab fa-instagram-square"></i>
													</a>
												</li>
											<?php endif; ?>
											<?php if($fbUrl = get_option('aca_facebook_profile_url')): ?>
												<li>
													<a href="<?=esc_attr($fbUrl)?>" title="Facebook">
														<i class="fab fa-facebook-square"></i>
													</a>
												</li>
											<?php endif; ?>
											<?php if($twUrl = get_option('aca_twitter_profile_url')): ?>
												<li>
													<a href="<?=esc_attr($twUrl)?>" title="Twitter">
														<i class="fab fa-twitter-square"></i>
													</a>
												</li>
											<?php endif; ?>
											<?php if($liUrl = get_option('aca_linkedin_profile_url')): ?>
												<li>
													<a href="<?=esc_attr($liUrl)?>" title="Linkedin">
														<i class="fab fa-linkedin"></i>
													</a>
												</li>
											<?php endif; ?>
										</ul>
									</div>
								</div>
								<div class="footer-copyright-container">
									<?php if($copyright = get_option('aca_footer_copyright')): ?>
										&copy;&nbsp;<?=date('Y') . ' ' . $copyright?>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
				</footer>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- #content -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>