<?php
/**
 * PURPOSE: Automatically send a WhatsApp message when a WooCommerce order is paid.
 * TRIGGER: woocommerce_payment_complete
 */

add_action( 'woocommerce_payment_complete', 'send_whatsapp_on_payment');

function send_whatsapp_on_payment( $order_id ) {
    
    // 1. Get the order details
    $order = wc_get_order( $order_id );
    $phone = $order->get_billing_phone();
    $first_name = $order->get_billing_first_name();

    // 2. Prepare the Message
    $message = "Hello " . $first_name . ", your payment was successful! Here is your download link: [LINK]";

    // 3. Send to WhatsApp API (Logic)
    // This is where we connect to WhatsApp Cloud API or a tool like Interakt
    $api_url = 'https://graph.facebook.com/v17.0/YOUR_PHONE_NUMBER_ID/messages';
    
    // Logic: If payment = Success, then HTTP POST to $api_url
}
?>
