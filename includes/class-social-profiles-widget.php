<?php
/**
 * Social Profiles Widget Class.
 *
 * @package social-profiles-widget
 */

/**
 * Social Profiles Widget.
 */
class Social_Profiles_Widget extends WP_Widget {

	/**
	 * Constructor.
	 */
	public function __construct() {
		$widget_ops = array(
			'classname'   => 'social-profiles',
			'description' => __( 'Displays Social Profile links as icons', 'social-profiles-widget' ),
		);
		parent::__construct( 'socialprofiles', __( 'Social Profiles', 'social-profiles-widget' ), $widget_ops );
	}

	/**
	 * Images URL.
	 *
	 * @var string
	 */
	public $plugin_imgs_url;

	/**
	 * Fields.
	 *
	 * @param array $instance Instance.
	 */
	public function spw_fields_array( $instance = array() ) {

		$this->plugins_imgs_url = SOCIAL_PROFILES_WIDGET_URL . '/assets/images/';

		return array(
			'feedburner'  => array(
				'title'      => __( 'RSS/Feedburner URL', 'social-profiles-widget' ),
				'img'        => sprintf( '%s/Feed_%s.png', $this->plugins_imgs_url . esc_attr( $instance['icon_set'] ), esc_attr( $instance['size'] ) ),
				'img_widget' => sprintf( '%s/Feed_%s.png', $this->plugins_imgs_url . esc_attr( $instance['icon_set'] ), '48x48' ),
				'img_title'  => __( 'RSS', 'social-profiles-widget' ),
			),
			'twitter'     => array(
				'title'      => __( 'Twitter URL', 'social-profiles-widget' ),
				'img'        => sprintf( '%s/Twitter_%s.png', $this->plugins_imgs_url . esc_attr( $instance['icon_set'] ), esc_attr( $instance['size'] ) ),
				'img_widget' => sprintf( '%s/Twitter_%s.png', $this->plugins_imgs_url . esc_attr( $instance['icon_set'] ), '48x48' ),
				'img_title'  => __( 'Twitter', 'social-profiles-widget' ),
			),
			'facebook'    => array(
				'title'      => __( 'Facebook URL', 'social-profiles-widget' ),
				'img'        => sprintf( '%s/Facebook_%s.png', $this->plugins_imgs_url . esc_attr( $instance['icon_set'] ), esc_attr( $instance['size'] ) ),
				'img_widget' => sprintf( '%s/Facebook_%s.png', $this->plugins_imgs_url . esc_attr( $instance['icon_set'] ), '48x48' ),
				'img_title'  => __( 'Facebook', 'social-profiles-widget' ),
			),
			'linkedin'    => array(
				'title'      => __( 'Linkedin URL', 'social-profiles-widget' ),
				'img'        => sprintf( '%s/Linkedin_%s.png', $this->plugins_imgs_url . esc_attr( $instance['icon_set'] ), esc_attr( $instance['size'] ) ),
				'img_widget' => sprintf( '%s/Linkedin_%s.png', $this->plugins_imgs_url . esc_attr( $instance['icon_set'] ), '48x48' ),
				'img_title'  => __( 'Linkedin', 'social-profiles-widget' ),
			),
			'youtube'     => array(
				'title'      => __( 'YouTube URL', 'social-profiles-widget' ),
				'img'        => sprintf( '%s/Youtube_%s.png', $this->plugins_imgs_url . esc_attr( $instance['icon_set'] ), esc_attr( $instance['size'] ) ),
				'img_widget' => sprintf( '%s/Youtube_%s.png', $this->plugins_imgs_url . esc_attr( $instance['icon_set'] ), '48x48' ),
				'img_title'  => __( 'Youtube', 'social-profiles-widget' ),
			),
			'flickr'      => array(
				'title'      => __( 'Flickr URL', 'social-profiles-widget' ),
				'img'        => sprintf( '%s/Flickr_%s.png', $this->plugins_imgs_url . esc_attr( $instance['icon_set'] ), esc_attr( $instance['size'] ) ),
				'img_widget' => sprintf( '%s/Flickr_%s.png', $this->plugins_imgs_url . esc_attr( $instance['icon_set'] ), '48x48' ),
				'img_title'  => __( 'Flickr', 'social-profiles-widget' ),
			),
			'delicious'   => array(
				'title'      => __( 'Delicious URL', 'social-profiles-widget' ),
				'img'        => sprintf( '%s/Delicious_%s.png', $this->plugins_imgs_url . esc_attr( $instance['icon_set'] ), esc_attr( $instance['size'] ) ),
				'img_widget' => sprintf( '%s/Delicious_%s.png', $this->plugins_imgs_url . esc_attr( $instance['icon_set'] ), '48x48' ),
				'img_title'  => __( 'Delicious', 'social-profiles-widget' ),
			),
			'stumbleupon' => array(
				'title'      => __( 'StumbleUpon URL', 'social-profiles-widget' ),
				'img'        => sprintf( '%s/Stumbleupon_%s.png', $this->plugins_imgs_url . esc_attr( $instance['icon_set'] ), esc_attr( $instance['size'] ) ),
				'img_widget' => sprintf( '%s/Stumbleupon_%s.png', $this->plugins_imgs_url . esc_attr( $instance['icon_set'] ), '48x48' ),
				'img_title'  => __( 'StumbleUpon', 'social-profiles-widget' ),
			),
			'digg'        => array(
				'title'      => __( 'Digg URL', 'social-profiles-widget' ),
				'img'        => sprintf( '%s/Digg_%s.png', $this->plugins_imgs_url . esc_attr( $instance['icon_set'] ), esc_attr( $instance['size'] ) ),
				'img_widget' => sprintf( '%s/Digg_%s.png', $this->plugins_imgs_url . esc_attr( $instance['icon_set'] ), '48x48' ),
				'img_title'  => __( 'Digg', 'social-profiles-widget' ),
			),
			'myspace'     => array(
				'title'      => __( 'MySpace URL', 'social-profiles-widget' ),
				'img'        => sprintf( '%s/Myspace_%s.png', $this->plugins_imgs_url . esc_attr( $instance['icon_set'] ), esc_attr( $instance['size'] ) ),
				'img_widget' => sprintf( '%s/Myspace_%s.png', $this->plugins_imgs_url . esc_attr( $instance['icon_set'] ), '48x48' ),
				'img_title'  => __( 'MySpace', 'social-profiles-widget' ),
			),
		);
	}

	/**
	 * Widget.
	 *
	 * @param  array $args     Arguments.
	 * @param  array $instance Instance.
	 */
	public function widget( $args, $instance ) {

		$before_widget = $args['before_widget'];
		$after_widget  = $args['after_widget'];
		$before_title  = $args['before_title'];
		$after_title   = $args['after_title'];

		$instance = wp_parse_args(
			$instance,
			array(
				'title'      => '',
				'new_window' => 0,
				'icon_set'   => 'default',
				'size'       => '24x24',
			)
		);

		echo wp_kses_post( $before_widget );

		if ( ! empty( $instance['title'] ) ) {
			echo wp_kses_post( $before_title . $instance['title'] . $after_title );
		}

			$new_window = $instance['new_window'] ? 'target="_blank"' : '';

		foreach ( $this->spw_fields_array( $instance ) as $key => $data ) {
			if ( ! empty( $instance[ $key ] ) ) {
				printf( '<a href="%s" %s><img src="%s" alt="%s" /></a>', esc_url( $instance[ $key ] ), esc_attr( $new_window ), esc_url( $data['img'] ), esc_attr( $data['img_title'] ) );
			}
		}

		echo wp_kses_post( $after_widget );

	}

	/**
	 * Update data.
	 *
	 * @param array $new_instance New instance.
	 * @param array $old_instance Old instance.
	 */
	public function update( $new_instance, $old_instance ) {
		return $new_instance;
	}

	/**
	 * Form.
	 *
	 * @param  array $instance Instance.
	 */
	public function form( $instance ) {

		$instance = wp_parse_args(
			$instance,
			array(
				'title'      => '',
				'new_window' => 0,
				'icon_set'   => 'default',
				'size'       => '24x24',
			)
		);
		?>

	<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Title', 'social-profiles-widget' ); ?>:</label><br />
		<input id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" value="<?php echo esc_attr( $instance['title'] ); ?>" style="width:95%;" />
	</p>

	<p><label><input id="<?php echo esc_attr( $this->get_field_id( 'new_window' ) ); ?>" type="checkbox" name="<?php echo esc_attr( $this->get_field_name( 'new_window' ) ); ?>" value="1" <?php checked( 1, $instance['new_window'] ); ?>/> <?php esc_html_e( 'Open links in new window?', 'social-profiles-widget' ); ?></label></p>

	<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'icon_set' ) ); ?>"><?php esc_html_e( 'Icon Set', 'social-profiles-widget' ); ?>:</label>
		<select id="<?php echo esc_attr( $this->get_field_id( 'icon_set' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'icon_set' ) ); ?>">
			<option style="padding-right:10px;" value="default" <?php selected( 'default', $instance['icon_set'] ); ?>><?php esc_html_e( 'Default', 'social-profiles-widget' ); ?></option>
			<option style="padding-right:10px;" value="circles" <?php selected( 'circles', $instance['icon_set'] ); ?>><?php esc_html_e( 'Circles', 'social-profiles-widget' ); ?></option>
			<option style="padding-right:10px;" value="denim" <?php selected( 'denim', $instance['icon_set'] ); ?>><?php esc_html_e( 'Denim', 'social-profiles-widget' ); ?></option>
			<option style="padding-right:10px;" value="inside" <?php selected( 'inside', $instance['icon_set'] ); ?>><?php esc_html_e( 'Inside', 'social-profiles-widget' ); ?></option>
			<option style="padding-right:10px;" value="sketch" <?php selected( 'sketch', $instance['icon_set'] ); ?>><?php esc_html_e( 'Sketch', 'social-profiles-widget' ); ?></option>
		</select>
	</p>

	<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'size' ) ); ?>"><?php esc_html_e( 'Icon Size', 'social-profiles-widget' ); ?>:</label>
		<select id="<?php echo esc_attr( $this->get_field_id( 'size' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'size' ) ); ?>">
			<option style="padding-right:10px;" value="24x24" <?php selected( '24x24', $instance['size'] ); ?>><?php esc_html_e( 'Mini', 'social-profiles-widget' ); ?> (24px)</option>
			<option style="padding-right:10px;" value="32x32" <?php selected( '32x32', $instance['size'] ); ?>><?php esc_html_e( 'Small', 'social-profiles-widget' ); ?> (32px)</option>
			<option style="padding-right:10px;" value="48x48" <?php selected( '48x48', $instance['size'] ); ?>><?php esc_html_e( 'Large', 'social-profiles-widget' ); ?> (48px)</option>
		</select>
	</p>

	<p><?php esc_html_e( 'Enter the URL(s) for your various social profiles below. If you leave a profile URL field blank, it will not be used.', 'social-profiles-widget' ); ?></p>

		<?php

		foreach ( $this->spw_fields_array( $instance ) as $key => $data ) {
			$url = isset( $instance[ $key ] ) ? $instance[ $key ] : '';
			echo '<p class="wp-clearfix">';
			printf( '<img style="float: left; margin-right: 3px;" src="%s" title="%s" />', esc_attr( $data['img_widget'] ), esc_attr( $data['img_title'] ) );
			printf( '<label for="%s"> %s:</label><br />', esc_attr( $this->get_field_id( $key ) ), esc_attr( $data['title'] ) );
			printf( '<input id="%s" name="%s" value="%s" style="%s" />', esc_attr( $this->get_field_id( $key ) ), esc_attr( $this->get_field_name( $key ) ), esc_url( $url ), 'width:65%;' );
			echo '</p>' . "\n";
		}

	}
}
