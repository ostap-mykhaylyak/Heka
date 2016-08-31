#!/usr/bin/php
<?php

/**
 * @author Ostap Mykhaylyak <ostap.mykhaylyak@gmail.com>
 * @copyright 2016
 */

// Read environment variables
$username = getenv('username');
$trusted_ip = getenv('trusted_ip');

$db = new mysqli('localhost', 'root', '', 'test');

?>