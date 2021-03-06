<?php

require 'classes/product_pricing_rules_admin.class.php';
require 'classes/category_pricing_rules_admin.class.php';
require 'classes/membership_pricing_rules_admin.class.php';
require 'classes/totals_pricing_rules_admin.class.php';
require 'classes/store_pricing_rules_admin.class.php';

$wc_store_pricing_admin = new woocommerce_store_pricing_rules_admin();

$wc_product_pricing_admin = new woocommerce_product_pricing_rules_admin();

function woocommerce_pricing_product_admin_create_empty_ruleset() {
    global $wc_product_pricing_admin;
    $wc_product_pricing_admin->create_empty_ruleset( uniqid('set_') );
    die();
}

function woocommerce_pricing_category_admin_create_empty_ruleset(){
    global $wc_store_pricing_admin;
    $wc_store_pricing_admin->category_admin->create_empty_ruleset( uniqid('set_') );
    die();
}

function woocommerce_pricing_totals_admin_create_empty_ruleset(){
    global $wc_store_pricing_admin;
    $wc_store_pricing_admin->totals_admin->create_empty_ruleset( uniqid('set_') );
    die();
}

add_action('wp_ajax_create_empty_ruleset', 'woocommerce_pricing_product_admin_create_empty_ruleset');
add_action('wp_ajax_create_empty_category_ruleset', 'woocommerce_pricing_category_admin_create_empty_ruleset');
add_action('wp_ajax_create_empty_totals_ruleset', 'woocommerce_pricing_totals_admin_create_empty_ruleset');
