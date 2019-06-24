<?php
/**
 * Webino™ (http://webino.sk)
 *
 * @interpreter php-cgi
 *
 * @link        https://github.com/webino/testing
 * @copyright   Copyright (c) 2019 Webino, s.r.o. (http://webino.sk)
 * @author      Peter Bačinský <peter@bacinsky.sk>
 * @license     BSD-3-Clause
 */

use Tester\Assert;

Tester\Environment::setup();


Assert::same('cgi-fcgi', php_sapi_name());
