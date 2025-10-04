<?php
/*
 * Plugin Name: Woo Alipay - Reconcile Pro
 * Plugin URI: https://woocn.com/
 * Description: 对账扩展：后台页面手动拉取、解析、比对支付宝对账单，并提供计划任务配置（后续版本）。需要先安装并启用 Woo Alipay 与 WooCommerce。
 * Version: 0.1.0
 * Author: WooCN.com
 * Author URI: https://woocn.com/
 * Requires Plugins: woocommerce, woo-alipay
 * Text Domain: woo-alipay-reconcile-pro
 * Domain Path: /languages
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

require_once plugin_dir_path( __FILE__ ) . 'bootstrap.php';
