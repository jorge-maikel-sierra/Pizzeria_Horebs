<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/errors/feed_item_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V12\Errors;

class FeedItemError
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
5google/ads/googleads/v12/errors/feed_item_error.protogoogle.ads.googleads.v12.errors"�
FeedItemErrorEnum"�
FeedItemError
UNSPECIFIED 
UNKNOWN.
*CANNOT_CONVERT_ATTRIBUTE_VALUE_FROM_STRING\'
#CANNOT_OPERATE_ON_REMOVED_FEED_ITEM*
&DATE_TIME_MUST_BE_IN_ACCOUNT_TIME_ZONE
KEY_ATTRIBUTES_NOT_FOUND
INVALID_URL
MISSING_KEY_ATTRIBUTES
KEY_ATTRIBUTES_NOT_UNIQUE%
!CANNOT_MODIFY_KEY_ATTRIBUTE_VALUE	,
(SIZE_TOO_LARGE_FOR_MULTI_VALUE_ATTRIBUTE

LEGACY_FEED_TYPE_READ_ONLYB�
#com.google.ads.googleads.v12.errorsBFeedItemErrorProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v12/errors;errors�GAA�Google.Ads.GoogleAds.V12.Errors�Google\\Ads\\GoogleAds\\V12\\Errors�#Google::Ads::GoogleAds::V12::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

