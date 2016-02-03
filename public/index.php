<?php

require_once dirname(dirname(__FILE__)).'/vendor/autoload.php';

define('DDBB_START', microtime(true));

ddbb\ddbb::createApp(dirname(dirname(__FILE__)))->run();