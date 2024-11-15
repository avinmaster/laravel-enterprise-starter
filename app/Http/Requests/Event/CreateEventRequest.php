<?php

namespace App\Http\Requests\Event;

use Illuminate\Foundation\Http\FormRequest;

class CreateEventRequest extends FormRequest
{
    public const NAME = 'name';
    public const ADVERTISER_ID = 'advertiser_id';
    public const ATTRIBUTION = 'attribution';
    public const EVENT_TYPE = 'event_type';
    public const SEGMENT_ID = 'segment_id';
    public const DEFAULT_VALUE = 'default_value';
    public const CLICK_WINDOW_DAYS = 'click_window_days';
    public const VIEW_WINDOW_DAYS = 'view_window_days';
    public const EXTERNAL_ID = 'external_id';
    public const NOTES = 'notes';
    public const ACTIVE = 'active';

    public function rules(): array
    {
        return [
            self::NAME => [
                'string',
                'required'
            ],
            self::ADVERTISER_ID => [
                'uuid',
                'required'
            ],
            self::ATTRIBUTION => [
                'string',
                'required'
            ],
            self::EVENT_TYPE => [
                'string',
                'required'
            ],
            self::SEGMENT_ID => [
                'string',
                'required'
            ],
            self::DEFAULT_VALUE => [
                'numeric',
                'required'
            ],
            self::CLICK_WINDOW_DAYS => [
                'integer',
                'required',
                'max:30'
            ],
            self::VIEW_WINDOW_DAYS => [
                'integer',
                'required',
                'max:30'
            ],
            self::EXTERNAL_ID => [
                'string',
                'required'
            ],
            self::NOTES => [
                'string',
                'required'
            ],
            self::ACTIVE => [
                'boolean',
                'required'
            ],
        ];
    }

    public function getName(): string
    {
        return $this->get(self::NAME);
    }

    public function getAdvertiserId(): string
    {
        return $this->get(self::ADVERTISER_ID);
    }

    public function getAttribution(): string
    {
        return $this->get(self::ATTRIBUTION);
    }

    public function getEventType(): string
    {
        return $this->get(self::EVENT_TYPE);
    }

    public function getSegmentId(): string
    {
        return $this->get(self::SEGMENT_ID);
    }

    public function getDefaultValue(): float
    {
        return $this->get(self::DEFAULT_VALUE);
    }

    public function getClickWindowDays(): int
    {
        return $this->get(self::CLICK_WINDOW_DAYS);
    }

    public function getViewWindowDays(): int
    {
        return $this->get(self::VIEW_WINDOW_DAYS);
    }

    public function getExternalId(): string
    {
        return $this->get(self::EXTERNAL_ID);
    }

    public function getNotes(): string
    {
        return $this->get(self::NOTES);
    }

    public function getActive(): bool
    {
        return $this->get(self::ACTIVE);
    }
}
