<?php defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Untuk satu Controller dalam satu menu
 *
 * @param String (nama Controller)
 * @return string (Active Menu)
 **/
if (!function_exists('active_link_controller')) {
    function active_link_controller($controller)
    {
        $ci =& get_instance();
        $class = $ci->router->fetch_class();

        return ($class == $controller) ? 'menu-item-active' : null;
    }
}

/**
 * Untuk satu Controller dan Method dalam satu menu
 *
 * @param String (nama Controller)
 * @param String (nama Method)
 * @return string (Active Menu)
 **/
if (!function_exists('active_link_method')) {
    function active_link_method($controller, $class_controller = false)
    {
        $ci =& get_instance();
        $method = $ci->router->fetch_method();
        $class = $ci->router->fetch_class();

        if ($class_controller !== false) {
            return ($method == $controller && $class == $class_controller) ? 'menu-item-open' : null;
        }
        return ($method == $controller) ? 'menu-item-open' : null;
    }
}
 
/**
 * Untuk beberapa Controller dalam satu hierarki menu
 *
 * @param Array
 * @return string (Active Menu)
 **/
if (!function_exists('active_link_multiple')) {
    function active_link_multiple($controller)
    {
        $ci =& get_instance();

        if (is_array($controller)) {
            if (in_array($ci->router->fetch_class(), $controller)) {
                return 'menu-item-open';
            }
        } else {
            show_error('Masukkan beberapa nama Controller menggunakan array.', 200, 'Error menus helper');
            return false;
        }
    }
}
