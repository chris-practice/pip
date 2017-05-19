<?php

/**
 * @file
 * pfthromb360eduau stage environment settings.
 */

require_once 'settings.base.php';

// ERROR_REPORTING_HIDE = 0
$conf['error_level'] = 0;
ini_set('display_errors', FALSE);

// Cache pages for 15 minutes on stage.
$conf['page_cache_maximum_age'] = 900;
$conf['preprocess_js'] = FALSE;
$conf['preprocess_css'] = FALSE;
// Environment indicator.
$conf['environment_indicator_overwritten_color'] = '#00a950';
$conf['environment_indicator_overwritten_name'] = 'Env: Stage';
