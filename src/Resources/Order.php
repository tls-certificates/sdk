<?php

namespace TlsCertificates\Sdk\Resources;

use TlsCertificates\Sdk\Requests\CertificateAddSanRequest;
use TlsCertificates\Sdk\Requests\CertificateCreateRequest;
use TlsCertificates\Sdk\Requests\CertificateDetailRequest;
use TlsCertificates\Sdk\Requests\CertificateRefundRequest;
use TlsCertificates\Sdk\Requests\CertificateReissueRequest;
use TlsCertificates\Sdk\Requests\CertificateUpdateDcvRequest;
use TlsCertificates\Sdk\Requests\CertificateValidateDcvRequest;

class Order extends AbstractResource
{
    /**
     * 证书下单接口
     *
     * @param CertificateCreateRequest $certificateCreateRequest
     * @return \TlsCertificates\Sdk\Scheme\CertificateDetailScheme
     *
     * @link https://www.digital-sign.com.cn/api/cert-issue
     */
    public function certificateCreate(CertificateCreateRequest $certificateCreateRequest)
    {
        return $this->client->post('certificate/create', $certificateCreateRequest->toArray());
    }


     /**
      * 证书重签接口
      *
      * @param CertificateReissueRequest $certificateReissueRequest
      * @return \TlsCertificates\Sdk\Scheme\CertificateDetailScheme
      *
      * @link https://www.digital-sign.com.cn/api/cert-reissue
      */
     public function certificateReissue(CertificateReissueRequest $certificateReissueRequest)
     {
         return $this->client->post('certificate/reissue', $certificateReissueRequest->toArray());
    }

    /**
     * 证书查询接口
     *
     * @param CertificateDetailRequest $certificateDetailRequest
     * @return \TlsCertificates\Sdk\Scheme\CertificateDetailScheme
     *
     * @link https://www.digital-sign.com.cn/api/cert-detail
     */
    public function certificateDetail(CertificateDetailRequest $certificateDetailRequest)
    {
        return $this->client->get('certificate/detail', $certificateDetailRequest->toArray());
    }

    /**
     * 证书更新 DCV 接口
     *
     * @param CertificateUpdateDcvRequest $certificateUpdateDcvRequest
     * @return \TlsCertificates\Sdk\Scheme\Certificate\DnsDCV[]|\TlsCertificates\Sdk\Scheme\Certificate\EmailDCV[]|\TlsCertificates\Sdk\Scheme\Certificate\HttpDCV[]|\TlsCertificates\Sdk\Scheme\Certificate\HttpsDCV[]
     *
     * @link https://www.digital-sign.com.cn/api/cert-update-dcv
     */
    public function certificateUpdateDcv(CertificateUpdateDcvRequest $certificateUpdateDcvRequest)
    {
        return $this->client->post('certificate/update-dcv', $certificateUpdateDcvRequest->toArray());
    }

    /**
     * 证书提交检查DCV接口
     *
     * @param CertificateValidateDcvRequest $certificateValidateDcvRequest
     * @return \TlsCertificates\Sdk\Scheme\CertificateDetailScheme
     *
     * @link https://www.digital-sign.com.cn/api/cert-validate-dcv
     */
    public function certificateValidateDcv(CertificateValidateDcvRequest $certificateValidateDcvRequest)
    {
        return $this->client->post('certificate/validate-dcv', $certificateValidateDcvRequest->toArray());
    }

    /**
     * 添加DCV接口
     *
     * @param CertificateAddSanRequest $certificateAddSanRequest
     * @return \TlsCertificates\Sdk\Scheme\CertificateAddSanScheme
     *
     * @link https://www.digital-sign.com.cn/api/cert-add-san
     */
    public function certificateAddSan(CertificateAddSanRequest $certificateAddSanRequest)
    {
        return $this->client->post('certificate/add-san', $certificateAddSanRequest->toArray());
    }

    /**
     * 退款
     *
     * @param CertificateRefundRequest $certificateRefundRequest
     * @return \TlsCertificates\Sdk\Scheme\CertificateRefundScheme
     *
     * @link https://www.digital-sign.com.cn/api/cert-refund
     */
    public function certificateRefund(CertificateRefundRequest $certificateRefundRequest)
    {
        return $this->client->post('certificate/refund', $certificateRefundRequest->toArray());
    }
}
