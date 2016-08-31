#!/usr/bin/php
<?php

/**
 * @author Ostap Mykhaylyak <ostap.mykhaylyak@gmail.com>
 * @copyright 2016
 */

// Read environment variables
$username = getenv('username');
$bytes_received = getenv('bytes_received');
$bytes_sent = getenv('bytes_sent');

$db = new mysqli('localhost', 'root', '', 'test');

?>