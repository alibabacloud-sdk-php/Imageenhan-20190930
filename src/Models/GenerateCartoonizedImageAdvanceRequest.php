<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class GenerateCartoonizedImageAdvanceRequest extends Model
{
    /**
     * @example girl
     *
     * @var string
     */
    public $imageType;

    /**
     * @example https://viapi-test.oss-cn-shanghai.aliyuncs.com/test-team/zhangchaorun/1025.jpg
     *
     * @var Stream
     */
    public $imageUrlObject;

    /**
     * @example 0
     *
     * @var string
     */
    public $index;
    protected $_name = [
        'imageType'      => 'ImageType',
        'imageUrlObject' => 'ImageUrl',
        'index'          => 'Index',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageType) {
            $res['ImageType'] = $this->imageType;
        }
        if (null !== $this->imageUrlObject) {
            $res['ImageUrl'] = $this->imageUrlObject;
        }
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateCartoonizedImageAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageType'])) {
            $model->imageType = $map['ImageType'];
        }
        if (isset($map['ImageUrl'])) {
            $model->imageUrlObject = $map['ImageUrl'];
        }
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }

        return $model;
    }
}
