<?php

/**
 * @file
 * pfthromb360eduau prod environment settings.
 */

require_once 'settings.base.php';

// Disable error reporting.
$conf['error_level'] = 0;
ini_set('display_errors', FALSE);

// Disable Environment indicator.
$conf['environment_indicator_overwrite'] = FALSE;
