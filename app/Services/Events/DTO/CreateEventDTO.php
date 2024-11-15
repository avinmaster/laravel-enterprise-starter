<?php

namespace App\Services\Events\DTO;

use Spatie\LaravelData\Data;
use App\Http\Requests\Event\CreateEventRequest;

class CreateEventDTO extends Data
{
    public string $name;
    public string $user_id;
    public string $advertiser_id;
    public string $attribution;
    public string $event_type;
    public string $segment_id;
    public float $default_value;
    public int $click_window_days;
    public int $view_window_days;
    public string $external_id;
    public string $notes;
    public bool $active;

    public static function fromRequest(CreateEventRequest $request): self
    {
        return self::from([
            'name' => $request->getName(),
            'user_id' => $request->user()->id,
            'advertiser_id' => $request->getAdvertiserId(),
            'attribution' => $request->getAttribution(),
            'event_type' => $request->getEventType(),
            'segment_id' => $request->getSegmentId(),
            'default_value' => $request->getDefaultValue(),
            'click_window_days' => $request->getClickWindowDays(),
            'view_window_days' => $request->getViewWindowDays(),
            'external_id' => $request->getExternalId(),
            'notes' => $request->getNotes(),
            'active' => $request->getActive()
        ]);
    }
}
