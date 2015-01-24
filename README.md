## Netsuite PHP Toolkit - Package

[![Latest Stable Version](https://poser.pugx.org/fungku/netsuite-php-toolkit/v/stable.svg)](https://packagist.org/packages/fungku/netsuite-php-toolkit) [![Total Downloads](https://poser.pugx.org/fungku/netsuite-php-toolkit/downloads.svg)](https://packagist.org/packages/fungku/netsuite-php-toolkit) [![Latest Unstable Version](https://poser.pugx.org/fungku/netsuite-php-toolkit/v/unstable.svg)](https://packagist.org/packages/fungku/netsuite-php-toolkit) [![License](https://poser.pugx.org/fungku/netsuite-php-toolkit/license.svg)](https://packagist.org/packages/fungku/netsuite-php-toolkit)

Netsuite PHP Toolkit worked into a composer package.

### Adding it to your project:

```
composer require "fungku/netsuite-php-toolkit:~1.0"
```

### Examples:

#### Retreiving a customer record:

```php
$config = array(
   "endpoint"  => "2014_2",
    "host"     => "https://webservices.netsuite.com",
    "email"    => "jDoe@netsuite.com",
    "password" => "mySecretPwd",
    "role"     => "3",
    "account"  => "MYACCT1",
);

$service = new NetSuiteService($config);

$request = new GetRequest();
$request->baseRef = new RecordRef();
$request->baseRef->internalId = "123";
$request->baseRef->type = "customer";
$getResponse = $service->get($request);

if ( ! $getResponse->readResponse->status->isSuccess) {
    echo "GET ERROR";
} else {
    $customer = $getResponse->readResponse->record;
}
```

Original work Copyright (c) 2010-2012 NetSuite Inc., refer to `Netsuite Toolkit License Agreement`
Modified work Copyright (c) 2015 Ryan Winchester (fungku), refer to `LICENSE`