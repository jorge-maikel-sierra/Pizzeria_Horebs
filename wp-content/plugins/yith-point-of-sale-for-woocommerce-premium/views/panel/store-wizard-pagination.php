<?php
/**
 * Store wizard pagination.
 *
 * @var int $current_page Current page number.
 *
 * @author  YITH
 * @package YITH\POS\Views
 */

defined( 'YITH_POS' ) || exit();

// translators: %s is the previous step number.
$prev_text = __( 'Back to step %s', 'yith-point-of-sale-for-woocommerce' );
// translators: %s is the next step number.
$next_text = __( 'Proceed to step %s', 'yith-point-of-sale-for-woocommerce' );
?>
<div id="yith-pos-wizard-pagination" class="yith-pos-wizard__has-current-page-data" data-current-page="<?php echo esc_attr( $current_page ); ?>">
	<span id="yith-pos-wizard-pagination__prev" data-text="<?php echo esc_attr( $prev_text ); ?>"><?php echo esc_html( sprintf( $prev_text, $current_page - 1 ) ); ?></span>
	<span id="yith-pos-wizard-pagination__next" data-text="<?php echo esc_attr( $next_text ); ?>"><?php echo esc_html( sprintf( $next_text, $current_page + 1 ) ); ?></span>
	<span id="yith-pos-wizard-pagination__save"><?php esc_html_e( 'Save Store', 'yith-point-of-sale-for-woocommerce' ); ?></span>
</div>
