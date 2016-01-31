<?php

require_once dirname(dirname(__FILE__)).'/vendor/autoload.php';

define(DDBB_START, microtime(true));

ddbb\Ddbb::createApp()->run();