<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * 
 *
 * @author   ttqr Team
 * @since    
 *
 */

require_once('class-ttqr-base.php');
class WC_Gateway_Ttqr_SHB extends WC_Base_Ttqr {
	public function __construct() {
		$this->bank_id 			  = 'shb';
		$this->bank_name		  = "SHB";

		// $this->icon               = apply_filters( 'woocommerce_payleo_icon', plugins_url('../assets/agribank.png', __FILE__ ) );
		$this->has_fields         = false;
		$this->method_title       = sprintf(__('Payment via %s', 'ttqr'), $this->bank_name);
		$this->method_description = __('Payment by bank transfer', 'ttqr');
		$this->title        = sprintf(__('Payment via %s', 'ttqr'), $this->bank_name);
		parent::__construct();
	}
	public function configure_payment()
	{
		$this->method_title       = sprintf(__('Payment via %s', 'ttqr'), $this->bank_name);
		$this->method_description = __('Make payment by bank transfer.', 'ttqr');
	}
}