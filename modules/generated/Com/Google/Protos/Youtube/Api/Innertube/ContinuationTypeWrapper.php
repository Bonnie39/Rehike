<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: continuation_type_wrapper.proto

namespace Com\Google\Protos\Youtube\Api\Innertube;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>com.google.protos.youtube.api.innertube.ContinuationTypeWrapper</code>
 */
class ContinuationTypeWrapper extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional string append_continuation = 15;</code>
     */
    protected $append_continuation = null;
    /**
     * Generated from protobuf field <code>optional string reload_continuation = 72;</code>
     */
    protected $reload_continuation = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $append_continuation
     *     @type string $reload_continuation
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\ContinuationTypeWrapper::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional string append_continuation = 15;</code>
     * @return string
     */
    public function getAppendContinuation()
    {
        return isset($this->append_continuation) ? $this->append_continuation : '';
    }

    public function hasAppendContinuation()
    {
        return isset($this->append_continuation);
    }

    public function clearAppendContinuation()
    {
        unset($this->append_continuation);
    }

    /**
     * Generated from protobuf field <code>optional string append_continuation = 15;</code>
     * @param string $var
     * @return $this
     */
    public function setAppendContinuation($var)
    {
        GPBUtil::checkString($var, True);
        $this->append_continuation = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string reload_continuation = 72;</code>
     * @return string
     */
    public function getReloadContinuation()
    {
        return isset($this->reload_continuation) ? $this->reload_continuation : '';
    }

    public function hasReloadContinuation()
    {
        return isset($this->reload_continuation);
    }

    public function clearReloadContinuation()
    {
        unset($this->reload_continuation);
    }

    /**
     * Generated from protobuf field <code>optional string reload_continuation = 72;</code>
     * @param string $var
     * @return $this
     */
    public function setReloadContinuation($var)
    {
        GPBUtil::checkString($var, True);
        $this->reload_continuation = $var;

        return $this;
    }

}
