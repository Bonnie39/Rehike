<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: browse_continuation.proto

namespace Com\Google\Protos\Youtube\Api\Innertube;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Stores the actual specific information about a browse continuation. 
 *
 * Generated from protobuf message <code>com.google.protos.youtube.api.innertube.BrowseContinuation</code>
 */
class BrowseContinuation extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 timestamp = 3;</code>
     */
    protected $timestamp = 0;
    /**
     * Generated from protobuf field <code>.com.google.protos.youtube.api.innertube.BrowseContinuationContextWrapper context = 11;</code>
     */
    protected $context = null;
    /**
     * Generated from protobuf field <code>.com.google.protos.youtube.api.innertube.BrowseContinuationAction action = 12;</code>
     */
    protected $action = null;
    /**
     * Generated from protobuf field <code>optional .com.google.protos.youtube.api.innertube.BrowseContinuationReloadAction reload_action = 325832737;</code>
     */
    protected $reload_action = null;
    /**
     * Generated from protobuf field <code>optional .com.google.protos.youtube.api.innertube.BrowseContinuationAppendAction append_action = 318126543;</code>
     */
    protected $append_action = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $timestamp
     *     @type \Com\Google\Protos\Youtube\Api\Innertube\BrowseContinuationContextWrapper $context
     *     @type \Com\Google\Protos\Youtube\Api\Innertube\BrowseContinuationAction $action
     *     @type \Com\Google\Protos\Youtube\Api\Innertube\BrowseContinuationReloadAction $reload_action
     *     @type \Com\Google\Protos\Youtube\Api\Innertube\BrowseContinuationAppendAction $append_action
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\BrowseContinuation::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 timestamp = 3;</code>
     * @return int|string
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Generated from protobuf field <code>int64 timestamp = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTimestamp($var)
    {
        GPBUtil::checkInt64($var);
        $this->timestamp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.com.google.protos.youtube.api.innertube.BrowseContinuationContextWrapper context = 11;</code>
     * @return \Com\Google\Protos\Youtube\Api\Innertube\BrowseContinuationContextWrapper|null
     */
    public function getContext()
    {
        return $this->context;
    }

    public function hasContext()
    {
        return isset($this->context);
    }

    public function clearContext()
    {
        unset($this->context);
    }

    /**
     * Generated from protobuf field <code>.com.google.protos.youtube.api.innertube.BrowseContinuationContextWrapper context = 11;</code>
     * @param \Com\Google\Protos\Youtube\Api\Innertube\BrowseContinuationContextWrapper $var
     * @return $this
     */
    public function setContext($var)
    {
        GPBUtil::checkMessage($var, \Com\Google\Protos\Youtube\Api\Innertube\BrowseContinuationContextWrapper::class);
        $this->context = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.com.google.protos.youtube.api.innertube.BrowseContinuationAction action = 12;</code>
     * @return \Com\Google\Protos\Youtube\Api\Innertube\BrowseContinuationAction|null
     */
    public function getAction()
    {
        return $this->action;
    }

    public function hasAction()
    {
        return isset($this->action);
    }

    public function clearAction()
    {
        unset($this->action);
    }

    /**
     * Generated from protobuf field <code>.com.google.protos.youtube.api.innertube.BrowseContinuationAction action = 12;</code>
     * @param \Com\Google\Protos\Youtube\Api\Innertube\BrowseContinuationAction $var
     * @return $this
     */
    public function setAction($var)
    {
        GPBUtil::checkMessage($var, \Com\Google\Protos\Youtube\Api\Innertube\BrowseContinuationAction::class);
        $this->action = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .com.google.protos.youtube.api.innertube.BrowseContinuationReloadAction reload_action = 325832737;</code>
     * @return \Com\Google\Protos\Youtube\Api\Innertube\BrowseContinuationReloadAction|null
     */
    public function getReloadAction()
    {
        return $this->reload_action;
    }

    public function hasReloadAction()
    {
        return isset($this->reload_action);
    }

    public function clearReloadAction()
    {
        unset($this->reload_action);
    }

    /**
     * Generated from protobuf field <code>optional .com.google.protos.youtube.api.innertube.BrowseContinuationReloadAction reload_action = 325832737;</code>
     * @param \Com\Google\Protos\Youtube\Api\Innertube\BrowseContinuationReloadAction $var
     * @return $this
     */
    public function setReloadAction($var)
    {
        GPBUtil::checkMessage($var, \Com\Google\Protos\Youtube\Api\Innertube\BrowseContinuationReloadAction::class);
        $this->reload_action = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .com.google.protos.youtube.api.innertube.BrowseContinuationAppendAction append_action = 318126543;</code>
     * @return \Com\Google\Protos\Youtube\Api\Innertube\BrowseContinuationAppendAction|null
     */
    public function getAppendAction()
    {
        return $this->append_action;
    }

    public function hasAppendAction()
    {
        return isset($this->append_action);
    }

    public function clearAppendAction()
    {
        unset($this->append_action);
    }

    /**
     * Generated from protobuf field <code>optional .com.google.protos.youtube.api.innertube.BrowseContinuationAppendAction append_action = 318126543;</code>
     * @param \Com\Google\Protos\Youtube\Api\Innertube\BrowseContinuationAppendAction $var
     * @return $this
     */
    public function setAppendAction($var)
    {
        GPBUtil::checkMessage($var, \Com\Google\Protos\Youtube\Api\Innertube\BrowseContinuationAppendAction::class);
        $this->append_action = $var;

        return $this;
    }

}
