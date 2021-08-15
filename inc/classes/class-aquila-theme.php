<?php
/*
    * Bootstraps the theme - I means that it adds all the basics functionality of the theme
    * @package Aquila
*/


namespace AQUILA_THEME\Inc;

use AQUILA_THEME\Inc\Traits\Singleton;

class AUILA_THEME {
    use Singleton;

    protected function __construct() {

        // load other classes
        $this -> setup_hooks();
    }

    protected function setup_hook() {
        // actions
    }
}

?>

