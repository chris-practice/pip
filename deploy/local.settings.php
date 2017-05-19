<?php

/**
 * @file
 * Site specific configuration.
 *
 * You are encouraged to use the settings.[env].php files
 * instead of adding configuration directly into thise file.
 */

if (!empty($_ENV['AH_SITE_ENVIRONMENT'])) {
  $env = substr($_ENV['AH_SITE_ENVIRONMENT'], 0, 4);
  require_once __DIR__ . "/settings/settings.{$env}.php";
}

// Settings.php use once in 1st deployment later we need to extend configuration using local.settings.php
// Maximum size of POST data that PHP will accept.
ini_set('post_max_size', '512M');

// Maximum allowed size for uploaded files.
ini_set('upload_max_filesize', '512M');
