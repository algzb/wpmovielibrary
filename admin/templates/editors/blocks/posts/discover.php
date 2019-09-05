<?php
/**
 * Post Editor 'Discover' Block Template
 *
 * @since 3.0.0
 *
 * @uses $id
 * @uses $title
 */
?>

					<div id="<?php echo esc_attr( $id ); ?>-block" data-controller="<?php echo esc_attr( $controller ); ?>" class="<?php echo esc_attr( $class ); ?>">
						<button type="button" class="button arrow" data-action="collapse"><span class="wpmolicon icon-up-chevron"></span></button>
						<h3 class="block-title"><?php esc_html_e( $title ); ?></h3>
						<div class="block-content">
							<p><?php printf( _n( 'You have a total of <a href="%s">%s post</a>.', 'You have a total of <a href="%s">%s posts</a>.', $total, 'wpmovielibrary' ), esc_url( $edit ), '<strong>' . $total . '</strong>' ); ?></p>
						</div>
					</div>
