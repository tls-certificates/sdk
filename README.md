tls-certificates/sdk

这是 TLS certificates 开放API的 PHP SDK.

[![Build Status](https://travis-ci.com/tls-certificates/sdk.svg?branch=master)](https://travis-ci.com/tls-certificates/sdk)

[获取](https://www.TlsCertificates.com.cn/dashboard/api-credentials) `AccessKey` 秘钥对.

此SDK包仅面向开发者提供支持，若您是分销商，您可以需要:
- [TlsCertificates Module for WHMCS]()
- [TlsCertificates Module for HostBill]()
- [TlsCertificates Module for 宝塔(bt.cn)]()

## 安装

```bash
composer require tls-certificates/sdk -vvv
```

## 使用

```php
<?php

use TlsCertificates\Sdk\Client;

require __DIR__ . '/../vendor/autoload.php';

$sdk = new Client('accessKeyId', 'accessKeySecret');
$result = $sdk->product->productList();
print($result->products);
```

## 智能感知

我们的 SDK 将智能感知 Intellisense (VS Code、PHPStorm) 做为目标之一.
![Intellisense.png](https://user-images.githubusercontent.com/6964962/64444468-c5336700-d106-11e9-81aa-e660e72a1149.png)

## License

MIT
