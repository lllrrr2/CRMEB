<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: live/business/deny_config.proto

namespace Volc\Service\Live\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Live.Models.Business.DescribeDenyConfigResult</code>
 */
class DescribeDenyConfigResult extends \Google\Protobuf\Internal\Message
{
    /**
     *配置列表
     *
     * Generated from protobuf field <code>repeated .Volcengine.Live.Models.Business.VhostWithDenyConfig DenyList = 1;</code>
     */
    private $DenyList;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Volc\Service\Live\Models\Business\VhostWithDenyConfig[]|\Google\Protobuf\Internal\RepeatedField $DenyList
     *          配置列表
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Live\Models\GPBMetadata\DenyConfig::initOnce();
        parent::__construct($data);
    }

    /**
     *配置列表
     *
     * Generated from protobuf field <code>repeated .Volcengine.Live.Models.Business.VhostWithDenyConfig DenyList = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDenyList()
    {
        return $this->DenyList;
    }

    /**
     *配置列表
     *
     * Generated from protobuf field <code>repeated .Volcengine.Live.Models.Business.VhostWithDenyConfig DenyList = 1;</code>
     * @param \Volc\Service\Live\Models\Business\VhostWithDenyConfig[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDenyList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Volc\Service\Live\Models\Business\VhostWithDenyConfig::class);
        $this->DenyList = $arr;

        return $this;
    }

}
