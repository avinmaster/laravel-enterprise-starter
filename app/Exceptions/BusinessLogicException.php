<?php

namespace App\Exceptions;

use Exception;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;


abstract class BusinessLogicException extends Exception
{
    public const VALIDATION_FAILED = 422;

    public const USER_DOES_NOT_EXIST = 600;
    public const FAILED_TO_CREATE_USER = 601;
    public const FAILED_TO_UPDATE_USER = 602;
    public const USER_INVITATION_NOT_FOUND = 603;
    public const FAILED_TO_CREATE_USER_INVITATION = 604;
    public const FAILED_TO_UPDATE_USER_INVITATION = 605;
    public const TEAM_NOT_FOUND = 606;
    public const FAILED_TO_CREATE_TEAM = 607;
    public const FAILED_TO_UPDATE_TEAM = 608;
    public const FAILED_TO_CREATE_ADVERTISER = 612;
    public const FAILED_TO_DELETE_ADVERTISER = 613;
    public const FAILED_TO_BULK_DELETE_ADVERTISER = 614;
    public const ADVERTISER_DOES_NOT_EXIST = 615;
    public const FAILED_TO_CREATE_EVENT = 616;
    public const EVENT_DOES_NOT_EXIST = 617;
    public const FAILED_TO_DELETE_EVENT = 618;
    public const FAILED_TO_CREATE_CAMPAIGN = 619;
    public const FAILED_TO_DELETE_CAMPAIGN = 620;
    public const CAMPAIGN_DOES_NOT_EXIST = 621;
    public const FAILED_TO_CREATE_DELIVERY_MODIFIER = 622;
    public const DELIVERY_MODIFIER_DOES_NOT_EXIST = 623;
    public const FAILED_TO_DELETE_DELIVERY_MODIFIER = 624;
    public const CREATIVE_DOES_NOT_EXIST = 625;
    public const FAILED_TO_CREATE_CREATIVE = 626;
    public const FAILED_TO_DELETE_CREATIVE = 627;
    public const FAILED_TO_UPDATE_CREATIVE = 628;
    public const CREATIVE_TEMPLATE_DOES_NOT_EXIST = 629;
    public const MEDIA_FILE_DOES_NOT_EXIST = 630;
    public const FAILED_TO_CREATE_LINE_ITEM = 631;
    public const LINE_ITEM_DOES_NOT_EXIST = 632;
    public const FAILED_TO_CREATE_VENDOR_FEE = 633;
    public const VENDOR_FEE_DOES_NOT_EXIST = 634;
    public const FAILED_TO_CREATE_BID_MODIFIER = 635;
    public const BID_MODIFIER_DOES_NOT_EXIST = 636;
    public const FAILED_TO_CREATE_CREATIVE_LINE_ITEM = 637;
    public const CREATIVE_LINE_ITEM_DOES_NOT_EXIST = 638;
    public const FAILED_TO_CREATE_TARGETING_EXPRESSION = 639;
    public const TARGETING_EXPRESSION_DOES_NOT_EXIST = 640;
    public const FAILED_TO_INSERT_TARGETING_EXPRESSION_MODULES = 641;
    public const TARGETING_EXPRESSION_MODULE_DOES_NOT_EXIST = 642;
    public const FAILED_TO_UPDATE_LINE_ITEM = 643;
    public const FAILED_TO_INSERT_LINE_ITEM_FLIGHT = 644;
    public const APP_DOES_NOT_EXIST = 645;
    public const FAILED_TO_CREATE_CAMPAIGN_CREATIVE = 646;
    public const CAMPAIGN_CREATIVE_DOES_NOT_EXIST = 647;
    public const FAILED_TO_UPDATE_CAMPAIGN = 648;
    public const FAILED_TO_UPDATE_ADVERTISER = 649;
    public const FAILED_TO_UPDATE_BID_MODIFIER = 650;
    public const FAILED_TO_UPDATE_DELIVERY_MODIFIER = 651;

    private int $httpStatusCode = ResponseAlias::HTTP_BAD_REQUEST;

    public function getHttpStatusCode(): int
    {
        return $this->httpStatusCode;
    }

    abstract public function getStatus(): int;

    abstract public function getStatusMessage(): string;
}
