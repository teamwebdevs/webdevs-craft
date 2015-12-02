<?php

/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/general.php
 */

// Ensure our urls have the right scheme
define('URI_SCHEME', ( isset($_SERVER['HTTPS'] ) ) ? "https://" : "http://" );

// The site url
define('SITE_URL', URI_SCHEME . $_SERVER['SERVER_NAME'] . '/');

// The site basepath
define('BASEPATH', realpath(CRAFT_BASE_PATH . '/../') . '/');

return array(
  '*' => array(
    'omitScriptNameInUrls' => true,
  ),
  'webdevs.local' => array(
    'siteUrl' => SITE_URL,
    'devMode' => true,
    'useCompressedJs' => false,
    'environment' => 'local',
    'environmentVariables' => array(
      'basePath' => BASEPATH,
      'baseUrl'  => SITE_URL
    )
  ),
  'webdevs.xyz' => array(
    'siteUrl' => SITE_URL,
    'cooldownDuration' => 0,
    'environment' => 'prod',
    'devMode' => false,
    'useCompressedJs' => false,
    'environmentVariables' => array(
      'basePath' => BASEPATH,
      'baseUrl'  => SITE_URL
    )
  )
);
