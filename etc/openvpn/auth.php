#!/usr/bin/php
<?php

/**
 * @author Ostap Mykhaylyak <ostap.mykhaylyak@gmail.com>
 * @copyright 2016
 */

/**
 * 
 * script-security 3
 * username-as-common-name
 * auth-user-pass-verify /etc/openvpn/scripts/auth.php via-env
 * client-connect /etc/openvpn/scripts/connect.php 
 * client-disconnect /etc/openvpn/scripts/disconnect.php
 * 
 */

// Read environment variables
$username = getenv('username');
$password = getenv('password');
$untrusted_ip = getenv('untrusted_ip');

$db = new mysqli('localhost', 'root', '', 'test');

?>