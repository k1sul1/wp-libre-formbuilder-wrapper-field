<?php
/**
 * Plugin name: Wrapper field for WP Libre Formbuilder
 * Version: 1.0
 * Author: @k1sul1
 * Author URI: https://github.com/k1sul1/
 * License: GPLv2
 * License URI: https://www.gnu.org/licenses/gpl.html
 *
 */


if (class_exists("WP_Libre_Formbuilder")) {
  $wplfb = WP_Libre_Formbuilder::instance();
  $wplfb->addField([
    "key" => "wrapper",
    "name" => "Wrapper",
    "html" => "<div class='wrapper'><p>Noot</p></div>",
    "children" => true,
  ]);

  $wplfb->addField([
    "key" => "text",
    "name" => "Text input",
    "html" => "<input type='text' name='test' placeholder='Test'>",
    "children" => false,
  ]);
}
