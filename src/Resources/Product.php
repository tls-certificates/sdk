<?php

namespace TlsCertificates\Sdk\Resources;

class Product extends AbstractResource
{
    /**
     * 列出产品及价格
     *
     * @return \TlsCertificates\Sdk\Scheme\ProductListScheme
     *
     * @link https://www.digital-sign.com.cn/api/product-list
     */
    public function productList()
    {
        return $this->client->get('product/list');
    }
}