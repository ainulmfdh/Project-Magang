<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('detect_device_and_redirect')) {
    function detect_device_and_redirect($mobile_url = 'index.php/Home_Mobile', $tablet_url = 'index.php/HomeDekstop', $desktop_url = 'index.php/HomeDekstop', $use_external_url_for_desktop = true)
    {
        // Get CI instance
        $CI = &get_instance();
        
        // Make sure Composer autoloader is loaded
        require_once FCPATH . 'vendor/autoload.php';
        
        // Create Mobile_Detect instance - use the correct namespace
        $detect = new \Mobile_Detect();
        
        // Check device type
        if ($detect->isMobile() && !$detect->isTablet()) {
            $deviceType = 'Mobile';
        } elseif ($detect->isTablet()) {
            $deviceType = 'Tablet';
        } else {
            $deviceType = 'Desktop';
        }
        
        // Get user IP address
        $ip = $CI->input->ip_address();
        
        // Redirect based on device type
        if ($deviceType == 'Mobile') {
            redirect(site_url($mobile_url));
        } elseif ($deviceType == 'Tablet') {
            redirect(site_url($tablet_url));
        } else {
            // For desktop, use direct URL or site_url depending on configuration
            if ($use_external_url_for_desktop && filter_var($desktop_url, FILTER_VALIDATE_URL)) {
                // Redirect to external URL directly
                header('Location: ' . $desktop_url);
                exit;
            } else {
                // Use internal URL with site_url
                redirect(site_url($desktop_url));
            }
        }
    }
}