<?php  if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

if (! function_exists('gravatar')) {
    function gravatar($email, $s = 80, $img = true, $d = 'identicon', $r = 'x', $atts = array())
    {
        $url = (isset($_SERVER['HTTPS'])) ? 'https://secure.' : 'http://www.';
        $url .= 'gravatar.com/avatar/';
        $url .= md5(strtolower(trim($email)));
        $url .= "?s=$s&d=$d&r=$r";
        if ($img) {
            $url = '<img src="' . $url . '"';
            foreach ($atts as $key => $val) {
                $url .= ' ' . $key . '="' . $val . '"';
            }
            $url .= ' />';
        }
        return $url;
    }
}
