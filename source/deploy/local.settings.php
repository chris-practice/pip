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
