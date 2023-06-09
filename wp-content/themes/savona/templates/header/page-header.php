	<div class="entry-header">
		<div class="cv-outer">
		<div class="cv-inner">
			<div class="header-logo">
				
				<?php 
		
				if ( has_custom_logo() ) :

					$custom_logo_id = get_theme_mod( 'custom_logo' );
					$custom_logo 	= wp_get_attachment_image_src( $custom_logo_id , 'full' );
					
				?>
	
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php esc_attr( bloginfo('name') ); ?>" class="logo-img">
					<img src="<?php echo esc_url(  $custom_logo[0] ); ?>" alt="<?php esc_attr( bloginfo('name') ); ?>">
				</a>
				
				<?php else : ?>
				<a href="<?php echo esc_url( home_url('/') ); ?>"><?php echo bloginfo( 'title' ); ?></a>
				<?php endif; ?>

				<?php if ( display_header_text() ) : ?>
				<br>
				<p class="site-description"><?php echo bloginfo( 'description' ); ?></p>
				<?php endif; ?>
				
			</div>
		</div>
		</div>
	</div>