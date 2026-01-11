# WooCommerce + WhatsApp API Integration
This repository demonstrates the logic for triggering automated customer notifications via WhatsApp once a WooCommerce order is verified.

## 🚀 Use Case
Ideal for digital product stores (PDFs, Courses) where the customer expects an immediate download link on their phone right after an M-Pesa or Credit Card payment.

## 🛠️ Integration Steps:
1. **Hook:** Use the `woocommerce_payment_complete` action.
2. **Data Extraction:** Pull customer phone numbers and order IDs dynamically.
3. **API Request:** Send a JSON payload to the WhatsApp Business API.
4. **Error Handling:** Log failed sends to ensure no customer is left without their product.

## 📱 Why this matters:
Automating this process reduces manual customer support by 80% and increases customer trust.
