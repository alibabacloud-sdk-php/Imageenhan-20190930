<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Models;

use AlibabaCloud\Tea\Model;

class ImageBlindPicWatermarkRequest extends Model
{
    /**
     * @var string
     */
    public $functionType;

    /**
     * @var string
     */
    public $logoURL;

    /**
     * @var string
     */
    public $watermarkImageURL;

    /**
     * @var string
     */
    public $outputFileType;

    /**
     * @var int
     */
    public $qualityFactor;

    /**
     * @var string
     */
    public $originImageURL;
    protected $_name = [
        'functionType'      => 'FunctionType',
        'logoURL'           => 'LogoURL',
        'watermarkImageURL' => 'WatermarkImageURL',
        'outputFileType'    => 'OutputFileType',
        'qualityFactor'     => 'QualityFactor',
        'originImageURL'    => 'OriginImageURL',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->functionType) {
            $res['FunctionType'] = $this->functionType;
        }
        if (null !== $this->logoURL) {
            $res['LogoURL'] = $this->logoURL;
        }
        if (null !== $this->watermarkImageURL) {
            $res['WatermarkImageURL'] = $this->watermarkImageURL;
        }
        if (null !== $this->outputFileType) {
            $res['OutputFileType'] = $this->outputFileType;
        }
        if (null !== $this->qualityFactor) {
            $res['QualityFactor'] = $this->qualityFactor;
        }
        if (null !== $this->originImageURL) {
            $res['OriginImageURL'] = $this->originImageURL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImageBlindPicWatermarkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FunctionType'])) {
            $model->functionType = $map['FunctionType'];
        }
        if (isset($map['LogoURL'])) {
            $model->logoURL = $map['LogoURL'];
        }
        if (isset($map['WatermarkImageURL'])) {
            $model->watermarkImageURL = $map['WatermarkImageURL'];
        }
        if (isset($map['OutputFileType'])) {
            $model->outputFileType = $map['OutputFileType'];
        }
        if (isset($map['QualityFactor'])) {
            $model->qualityFactor = $map['QualityFactor'];
        }
        if (isset($map['OriginImageURL'])) {
            $model->originImageURL = $map['OriginImageURL'];
        }

        return $model;
    }
}