# Middlewares

:boom: Middleware / Relay / PSR-7 support to [`Nette Framework`](https://github.com/nette).

-----

[![Build Status](https://img.shields.io/travis/contributte/middlewares.svg?style=flat-square)](https://travis-ci.org/contributte/middlewares)
[![Code coverage](https://img.shields.io/coveralls/contributte/middlewares.svg?style=flat-square)](https://coveralls.io/r/contributte/middlewares)
[![HHVM Status](https://img.shields.io/hhvm/contributte/middlewares.svg?style=flat-square)](http://hhvm.h4cc.de/package/contributte/middlewares)
[![Licence](https://img.shields.io/packagist/l/contributte/middlewares.svg?style=flat-square)](https://packagist.org/packages/contributte/middlewares)

[![Downloads this Month](https://img.shields.io/packagist/dm/contributte/middlewares.svg?style=flat-square)](https://packagist.org/packages/contributte/middlewares)
[![Downloads total](https://img.shields.io/packagist/dt/contributte/middlewares.svg?style=flat-square)](https://packagist.org/packages/contributte/middlewares)
[![Latest stable](https://img.shields.io/packagist/v/contributte/middlewares.svg?style=flat-square)](https://packagist.org/packages/contributte/middlewares)
[![Latest unstable](https://img.shields.io/packagist/vpre/contributte/middlewares.svg?style=flat-square)](https://packagist.org/packages/contributte/middlewares)

## Discussion / Help

[![Join the chat](https://img.shields.io/gitter/room/contributte/contributte.svg?style=flat-square)](http://bit.ly/ctteg)

## Install

```
composer require contributte/middlewares
```

## Versions

| State       | Version | Branch   | PHP      |
|-------------|---------|----------|----------|
| development | `^0.1`  | `master` | `>= 5.6` |

## Prolog

Middleware / Relay pattern is widely used for handling any HTTP requests, such as API request, streams, dynamic websites 
or just any suitable requests.

We have a many solutions and prepared libraries in PHP world. 

3rd party middlewares:

- [oscarotero/psr7-middlewares](https://github.com/oscarotero/psr7-middlewares) - biggest collection of PHP middlewares
- [stackphp](https://github.com/stackphp) - connect middleware pattern and symfony HttpKernel
- [zendframework/zend-diactoros](https://github.com/zendframework/zend-diactoros/) - Zend PSR-7 middleware

## Overview

- [Extension - how to register](https://github.com/contributte/middlewares/blob/master/.docs/README.md#psr7request)
- [Application - nette/standalone mode](https://github.com/contributte/middlewares/blob/master/.docs/README.md#psr7response)

## Design

![Cycle](https://raw.githubusercontent.com/contributte/middlewares/master/.docs/assets/cycle.png)

-----

The development is sponsored by [Tlapnet](http://www.tlapnet.cz). Thank you guys! :+1:

-----

Thank you for testing, reporting and contributing.