<?php

  // Multiple servers - stored as host:port, host:port
  $memcache = new Memcache;
  echo "MEMCACHED_SERVERS". $_SERVER["MEMCACHED_SERVERS"] ."\n";;

  define('MEMCACHED_SERVERS', $_SERVER['MEMCACHED_SERVERS']);

  $servers = array();
  foreach (explode(',', $_SERVER['MEMCACHED_SERVERS']) as $server) {
    list($host, $port) = explode(':', $server);
    $memcache->addServer($host, $port);
  }

  echo "Version: ". $memcache->getVersion() ."\n";;
?>
