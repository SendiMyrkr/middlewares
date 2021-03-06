<?php

/**
 * Test: Utils\Lambda
 */

use Contributte\Middlewares\Utils\Lambda;
use Contributte\Psr7\Psr7RequestFactory;
use Contributte\Psr7\Psr7ResponseFactory;
use Psr\Http\Message\ResponseInterface;
use Tester\Assert;

require_once __DIR__ . '/../../bootstrap.php';

// Blank
test(function () {
	$fn = Lambda::blank();
	Assert::null($fn());
});

// Blank
test(function () {
	$fn = Lambda::leaf();
	Assert::type(ResponseInterface::class, $fn(Psr7RequestFactory::fromGlobal(), Psr7ResponseFactory::fromGlobal()));
});
