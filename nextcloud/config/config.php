<?php
$CONFIG = array (
  'htaccess.RewriteBase' => '/',
  'memcache.local' => '\\OC\\Memcache\\APCu',
  'apps_paths' => 
  array (
    0 => 
    array (
      'path' => '/var/www/html/apps',
      'url' => '/apps',
      'writable' => false,
    ),
    1 => 
    array (
      'path' => '/var/www/html/custom_apps',
      'url' => '/custom_apps',
      'writable' => true,
    ),
  ),
  'memcache.distributed' => '\\OC\\Memcache\\Redis',
  'memcache.locking' => '\\OC\\Memcache\\Redis',
  'redis' => 
  array (
    'host' => 'redis',
    'password' => '',
    'port' => 6379,
  ),
  'upgrade.disable-web' => true,
  'instanceid' => 'ocz3zzkzz3kw',
  'passwordsalt' => 'U9/bc4C7NhatvO96FuofthW18ZHxuQ',
  'secret' => 'br54yXDdEIcXzhD4bIXqnrfXJXEieJXNlHybZV7BkkM7KNCN',
  'trusted_domains' => 
  array (
    0 => 'nextcloud.jakobmichaelsen.dk',
  ),
  'datadirectory' => '/var/www/html/data',
  'dbtype' => 'mysql',
  'version' => '31.0.5.1',
  'overwrite.cli.url' => 'https://nextcloud.jakobmichaelsen.dk',
  'overwriteprotocol'    => 'https',
  'overwritehost'        => 'nextcloud.jakobmichaelsen.dk',
  'dbname' => 'nextcloud',
  'dbhost' => 'nextclouddb',
  'dbport' => '',
  'dbtableprefix' => 'oc_',
  'mysql.utf8mb4' => true,
  'dbuser' => 'nextcloud',
  'dbpassword' => 'dbpassword',
  'installed' => true,
);
