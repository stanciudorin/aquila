<?php

trait Singleton {
    public static function get_instance() {
        static $instance = [];

        $called_class = get_called_class();

        if (! isset( $instance[ $called_class])) {
            $instance[ $called_class ] = new $called_class;
        }

        return $instance[$called_class];
    }
}

class User {
    use Singleton;

    public function __construct() {
        echo 'User';
    }
}

$user_one = User::get_instance();
$user_two = User::get_instance();