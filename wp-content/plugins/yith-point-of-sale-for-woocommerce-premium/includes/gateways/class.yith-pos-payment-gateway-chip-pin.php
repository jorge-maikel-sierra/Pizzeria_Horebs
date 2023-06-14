<?php
/**
 * Chip & Pin payment gateway class.
 *
 * @author  YITH
 * @package YITH\POS\Classes
 */

defined( 'YITH_POS' ) || exit;

if ( ! class_exists( 'WC_Payment_Gateway' ) ) {
	return;
}

if ( ! class_exists( 'YITH_POS_Payment_Gateway_Chip_Pin' ) ) {
	/**
	 * Class YITH_POS_Payment_Gateway_Chip_Pin
	 */
	class YITH_POS_Payment_Gateway_Chip_Pin extends WC_Payment_Gateway {
		/**
		 * Constructor for the gateway.
		 */
		public function __construct() {
			$this->id                 = 'yith_pos_chip_pin_gateway';
			$this->has_fields         = false;
			$this->method_title       = __( 'Chip and Pin', 'yith-point-of-sale-for-woocommerce' );
			$this->method_description = __( 'Allow Credit Card payments.', 'yith-point-of-sale-for-woocommerce' );

			// Load the settings.
			$this->init_form_fields();
			$this->init_settings();

			// Define user set variables.
			$this->title        = $this->get_option( 'title' );
			$this->description  = $this->get_option( 'description' );
			$this->instructions = $this->get_option( 'instructions', $this->description );

			add_action( 'woocommerce_update_options_payment_gateways_' . $this->id, array( $this, 'process_admin_options' ) );

			// Customer emails.
			remove_action( 'woocommerce_email_before_order_table', 'action_woocommerce_email_before_order_table', 10, 3 );
		}

		/**
		 * Initialize Gateway Settings Form Fields
		 */
		public function init_form_fields() {
			$this->form_fields = array(
				'enabled'     => array(
					'title'   => __( 'Enable/Disable', 'yith-point-of-sale-for-woocommerce' ),
					'type'    => 'checkbox',
					'label'   => __( 'This is a required payment', 'yith-point-of-sale-for-woocommerce' ),
					'default' => 'yes',
					'css'     => 'display:none',
				),
				'title'       => array(
					'title'       => __( 'Title', 'yith-point-of-sale-for-woocommerce' ),
					'type'        => 'text',
					'description' => __( 'This is the title for the Cash Payment.', 'yith-point-of-sale-for-woocommerce' ),
					'default'     => __( 'Chip and Pin', 'yith-point-of-sale-for-woocommerce' ),
					'desc_tip'    => true,
				),
				'description' => array(
					'title'       => __( 'Description', 'yith-point-of-sale-for-woocommerce' ),
					'type'        => 'textarea',
					'description' => __( 'This payment method is for YITH Point of Sale for WooCommerce.', 'yith-point-of-sale-for-woocommerce' ),
					'default'     => __( 'This payment method is for YITH Point of Sale for WooCommerce.', 'yith-point-of-sale-for-woocommerce' ),
					'desc_tip'    => true,
				),
			);
		}


		/**
		 * Process the payment and return the result
		 *
		 * @param int $order_id Order ID.
		 *
		 * @return array
		 */
		public function process_payment( $order_id ) {

			$order = wc_get_order( $order_id );

			$order->update_status( 'processing', __( 'Paid by Credit Card', 'yith-point-of-sale-for-woocommerce' ) );

			// Return thank-you page redirect.
			return array(
				'result'   => 'success',
				'redirect' => $this->get_return_url( $order ),
			);
		}
	}
}
