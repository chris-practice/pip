<?php

/**
 * @file
 * pfthromb360eduau base settings for all the environments.
 */

// expire session on browser close
ini_set('session.cookie_lifetime', 0);

// Flush session after 24 hours of inactivity
ini_set('session.gc_maxlifetime', 86400);

// Always use pfizer_profile for Pfizer sites.
$conf['install_profile'] = 'pfizer_profile';

$conf['pfizer_deploy_next_user'] = 'pfizer-admin';

$conf['cache_backends'][] = 'sites/all/modules/contrib/memcache/memcache.inc';
$conf['cache_default_class'] = 'MemCacheDrupal';
$conf['cache_class_cache_form'] = 'DrupalDatabaseCache';

// Force SSL on for all requests.
$conf['securepages_enable'] = 1;
$conf['securepages_secure'] = 1;
$conf['securepages_pages'] = '*';
$conf['securepages_ignore'] = '';

// Enable caching
$conf['cache_lifetime'] = 0;
$conf['cache'] = 1;
$conf['block_cache'] = 1;
$conf['page_cache_maximum_age'] = 3600;
$conf['preprocess_css'] = 1;
$conf['preprocess_js'] = 1;

// Don't verify SSL peers
$conf['deploy_verify_ssl'] = FALSE;

// Detect SSL properly.
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && 'https' == $_SERVER['HTTP_X_FORWARDED_PROTO']) {
  $_SERVER['HTTPS'] = 'on';
}

$conf['site_mail'] = 'DL-BT-DIGITALMARKETING@pfizer.com';

// Environment Indicator
$conf['environment_indicator_overwrite'] = TRUE;

// Fast 404
$fast_404_inc = realpath(__DIR__ . '/../../') . '/sites/all/modules/contrib/fast_404/fast_404.inc';
if (file_exists($fast_404_inc)) {
  require_once $fast_404_inc;
  $conf['fast_404_exts'] = '/^(?!robots).*\.(txt|png|gif|jpe?g|css|js|ico|swf|flv|cgi|bat|pl|dll|exe|asp)$/i';
  $conf['fast_404_string_whitelisting'] = array('cdn/farfuture', '/advagg_');
  $conf['fast_404_html'] = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN" "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><title>404 Not Found</title></head><body><h1>Not Found</h1><p>The requested URL "@path" was not found on this server.</p></body></html>';
  fast_404_ext_check();
}
