
<?php
/**
 * Plugin Name: Kristal Helder Licht Plugin
 * Plugin URI: https://www.example.com/
 * Description: Plugin voor het uitlezen van WordPress-tabel(len) en het tonen van gegevens op de website.
 * Version: 1.0.0
 * Author: Ali Celiksu
 * Author URI: https://www.AliCeliksu.com/
 * License: GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain: kristal-helder-licht-plugin
 * Domain Path: /Nederlands 
 */


 add_action('plugins_loaded', 'kristal_helder_licht_plugin_init');
 function kristal_helder_licht_plugin_init() {
     $plugin_instance = new Kristal_Helder_Licht_Plugin();
 }
 
 class Kristal_Helder_Licht_Plugin {
   
     public function __construct() {
         add_action('init', array($this, 'register_shortcode'));
     }
     
     public function register_shortcode() {
         add_shortcode('kristal-helder-licht', array($this, 'display_data'));
     }
     
     public function display_data() {
         // Logica voor het ophalen en weergeven van de gegevens
     }
     
 }



?>

