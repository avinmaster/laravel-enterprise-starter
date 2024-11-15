<?php

namespace App\Enums\BidModifierTerms;

enum TargetingKeysEnum: string
{
    case AD_POSITION = 'ad_position';
    case AD_SIZE = 'ad_size';
    case ADS_TXT = 'ads_txt';
    case APP_BUNDLE_LIST = 'app_bundle_list';
    case APP_ID_LIST = 'app_id_list';
    case APP_NAME = 'app_name';
    case AUCTION_TYPE = 'auction_type';
    case BANDWIDTH = 'bandwidth';
    case BROWSER = 'browser';
    case BROWSER_VERSION = 'browser_version';
    case CARRIER = 'carrier';
    case CITY = 'city';
    case COMPANION_REQUIRED = 'companion_required';
    case CONTENT_CATEGORY = 'content_category';
    case CONTENT_RATING = 'content_rating';
    case COUNTRY = 'country';
    case DEAL_ID = 'deal_id';
    case DEAL_ID_LIST = 'deal_id_list';
    case DEVICE_MAKE = 'device_make';
    case DEVICE_MODEL = 'device_model';
    case DEVICE_SCREEN_SIZE = 'device_screen_size';
    case DEVICE_TYPE = 'device_type';
    case DOMAIN_LIST = 'domain_list';
    case ENVIRONMENT_TYPE = 'environment_type';
    case INTERSTITIAL = 'interstitial';
    case INTERSTITIAL_TYPE = 'interstitial_type';
    case INVENTORY_SOURCE = 'inventory_source';
    case LANGUAGE = 'language';
    case LAT_LONG_LIST = 'lat_long_list';
    case LAT_LONG_PRESENT = 'lat_long_present';
    case LOCATION_TYPE = 'location_type';
    case METRO = 'metro';
    case NATIVE_LAYOUT = 'native_layout';
    case OPERATING_SYSTEM = 'operating_system';
    case OPERATING_SYSTEM_VERSION = 'operating_system_version';
    case PLACEMENT = 'placement';
    case PLACEMENT_LIST = 'placement_list';
    case PLAYBACK_METHOD = 'playback_method';
    case PLAYER_SIZE = 'player_size';
    case PUBLISHER_ID = 'publisher_id';
    case PUBLISHER_ID_LIST = 'publisher_id_list';
    case REGION = 'region';
    case REWARDED = 'rewarded';
    case TOP_FRAME = 'top_frame';
    case API_FRAMEWORK = 'api_framework';
    case SITE = 'site';
    case SITE_LIST = 'site_list';
    case START_DELAY = 'start_delay';
    case USER_TIME_OF_WEEK = 'user_time_of_week';
    case VIDEO_PLACEMENT_TYPE = 'video_placement_type';
    case ZIP = 'zip';
    case ZIP_CODE_LIST = 'zip_code_list';
}
