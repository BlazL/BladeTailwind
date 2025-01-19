<?php

    if (! file_exists($composer = BT_PATH . '/vendor/autoload.php')) {
        wp_die(__('Error locating autoloader. Please run <code>composer install</code>.', 'bt'));
    }

    require $composer;

    if (! function_exists('bt')) {
        function bt(): BT\App
        {
            return BT\App::get();
        }
    }