<?php

if (!function_exists('get_setting')) {
    function get_setting($userId, $key, $default = '')
    {
        $setting = new \App\Setting();
        return $setting->getSetting($userId, $key, $default);
    }
}

if (!function_exists('get_setting')) {
    function get_setting_app($key, $default = '')
    {
        $setting = new \App\Setting();
        return $setting->getSetting(null, $key, $default);
    }
}

if (!function_exists('format_date')) {
    function format_date($dateString, $format = 'Y-m-d')
    {
        return \Carbon\Carbon::parse($dateString)->format($format);
    }
}

if (!function_exists('validate_date')) {
    function validate_date($date, $format = 'Y-m-d')
    {
        $d = DateTime::createFromFormat($format, $date);
        // The Y ( 4 digits year ) returns TRUE for any integer with any number of digits
        // so changing the comparison from == to === fixes the issue.
        return $d && $d->format($format) === $date;
    }
}

if (!function_exists('if_empty')) {
    function if_empty($value, $default = '')
    {
        if (empty($value)) {
            return $default;
        }
        return $value;
    }
}

if (!function_exists('get_period_path')) {
    function get_period_path($baseName)
    {
        return $baseName . '/' . date('Y') . '/' . date('m') . '/';
    }
}

if (!function_exists('get_unique_name')) {
    function get_unique_name($baseName, $label, $ext = '')
    {
        $name = $baseName . '_' . uniqid() . '_' . $label;
        if (!empty($ext)) {
            $name .= '.' . $ext;
        }
        return $name;
    }
}