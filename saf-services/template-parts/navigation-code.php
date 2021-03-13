		<!-- Navigation Bar -->
		<div class="container-fluid bg-base" id="navigation">
			<div class="container">
				<div class="row">
					<?php if ( true == get_theme_mod( 'search_box_toggle', true ) ) : ?>
						<div class="col-lg-9 pl-0">
						<nav class="navbar navbar-expand-md navbar-dark">
							<div class="d-block d-lg-none d-xl-none d-md-none nav-search">
								<form method="get" action="<?php echo get_home_url(); ?>">
									<span class="fa fa-search"></span><input type="search" name="s" class="form-control">
								</form>
							</div>
							<button class="navbar-toggler" data-toggle="collapse" data-target="#main-navigation">
								<span class="navbar-toggler-icon"></span>
							</button>
							<?php
							wp_nav_menu(array(
								'theme_location'  => 'primary',
								'depth'	          => 5, // 1 = no dropdowns, 2 = with dropdowns.
								'container'       => 'div',
								'container_class' => 'collapse navbar-collapse text-center',
								'container_id'    => 'main-navigation',
								'menu_class'      => 'navbar-nav mr-auto',
								'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
								'walker'          => new WP_Bootstrap_Navwalker(),
							));
							?>
						</nav>
					</div>
					<div class="col-lg-3 pr-0 d-none d-lg-block d-xl-block nav-search">
						<form method="get" action="<?php echo get_home_url(); ?>">
							<span class="fa fa-search"></span><input type="search" name="s" class="form-control">
						</form>
					</div>
					<?php else : ?>
						<div class="col-lg-12">
						<nav class="navbar navbar-expand-md navbar-dark">
							<div class="d-block d-lg-none d-xl-none d-md-none nav-search">
								<form method="get" action="<?php echo get_home_url(); ?>">
									<span class="fa fa-search"></span><input type="search" name="s" class="form-control">
								</form>
							</div>
							<button class="navbar-toggler" data-toggle="collapse" data-target="#main-navigation">
								<span class="navbar-toggler-icon"></span>
							</button>
							<?php
							wp_nav_menu(array(
								'theme_location'  => 'primary',
								'depth'	          => 5, // 1 = no dropdowns, 2 = with dropdowns.
								'container'       => 'div',
								'container_class' => 'collapse navbar-collapse text-center',
								'container_id'    => 'main-navigation',
								'menu_class'      => 'navbar-nav mr-auto',
								'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
								'walker'          => new WP_Bootstrap_Navwalker(),
							));
							?>
						</nav>
					</div>
					<?php endif; ?>
					
				</div>
			</div>
		</div>
		<!-- Navigation Bar -->