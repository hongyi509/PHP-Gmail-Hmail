<?php

function getBaseUrl()
{
    // $use_forwarded_host = false;
    // $ssl = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on');
    // $server_protocol = strtolower($_SERVER['SERVER_PROTOCOL']);
    // $protocol = substr($server_protocol, 0, strpos($server_protocol, '/')) . (($ssl) ? 's' : '');
    // $port = $_SERVER['SERVER_PORT'];
    // $port = ((!$ssl && $port == '80') || ($ssl && $port == '443')) ? '' : ':' . $port;
    // $host = ($use_forwarded_host && isset($_SERVER['HTTP_X_FORWARDED_HOST'])) ? $_SERVER['HTTP_X_FORWARDED_HOST'] : (isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : null);
    // $host = isset($host) ? $host : $_SERVER['SERVER_NAME'] . $port;
    // return $protocol . '://' . $host;
    return 'https://thawing-headland-68770.herokuapp.com';
}

$BASE_URL = getBaseUrl();
// $BASE_URL = 'https://thawing-headland-68770.herokuapp.com';
/* Google App Client Id */
define('CLIENT_ID', '233119568975-l0t6n9934cqq9tiulkpd1jk6hu0trs4s.apps.googleusercontent.com');

/* Google App Client Secret */
define('CLIENT_SECRET', 'HGkY7uoS5PZrJbzydGXGOq44');

/* Google App Redirect Url */
define('CLIENT_REDIRECT_URL', $BASE_URL);// http://c9cb9aba686d.ngrok.io, $BASE_URL

