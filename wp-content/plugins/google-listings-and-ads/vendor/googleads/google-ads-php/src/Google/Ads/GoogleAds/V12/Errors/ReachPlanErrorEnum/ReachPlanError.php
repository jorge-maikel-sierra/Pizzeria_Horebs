<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/errors/reach_plan_error.proto

namespace Google\Ads\GoogleAds\V12\Errors\ReachPlanErrorEnum;

use UnexpectedValueException;

/**
 * Enum describing possible errors from ReachPlanService.
 *
 * Protobuf type <code>google.ads.googleads.v12.errors.ReachPlanErrorEnum.ReachPlanError</code>
 */
class ReachPlanError
{
    /**
     * Enum unspecified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The received error code is not known in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Not forecastable due to missing rate card data.
     *
     * Generated from protobuf enum <code>NOT_FORECASTABLE_MISSING_RATE = 2;</code>
     */
    const NOT_FORECASTABLE_MISSING_RATE = 2;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::NOT_FORECASTABLE_MISSING_RATE => 'NOT_FORECASTABLE_MISSING_RATE',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ReachPlanError::class, \Google\Ads\GoogleAds\V12\Errors\ReachPlanErrorEnum_ReachPlanError::class);

