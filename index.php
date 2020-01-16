<?php

require_once "vendor/autoload.php";

use Treole\ENV;
use Treole\GET;
use Treole\KEY;
use Treole\REQUEST;
use Treole\SERVER;
use Treole\POST;
use Treole\SESSION;
use Treole\COOKIE;

var_dump(REQUEST::HOST());

echo GET::VAL(KEY::M);

