<?php

/**
 * @file
 * pfthromb360eduau dev environment settings.
 */

require_once 'settings.base.php';

// ERROR_REPORTING_DISPLAY_ALL = 2
$conf['error_level'] = 2;
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

$conf['acquia_agent_hide_signup_messages'] = TRUE;

$conf['securepages_enable'] = TRUE;

$conf['preprocess_js'] = FALSE;
$conf['preprocess_css'] = FALSE;
$conf['cache'] = FALSE;

// Environment indicator.
$conf['environment_indicator_overwritten_color'] = '#f7d417';
$conf['environment_indicator_overwritten_name'] = 'Env: Dev';
