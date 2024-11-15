<?php

namespace App\Services\Media;

use FFMpeg\FFProbe;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class MediaService
{
    public function getMediaSizes($thumbnail_url): array
    {
        $sizes = [
            'width' => 0,
            'height' => 0,
        ];

        $path = parse_url($thumbnail_url, PHP_URL_PATH);
        $parts = explode('/', $path);
        $id = $parts[count($parts) - 2];
        $file_name = $parts[count($parts) - 1];

        /* @var Media $media */
        $media = Media::query()->where('id', $id)->where('file_name', $file_name)->first();

        $mediaPath = $media->getPath();
        $mediaType = explode('/', $media->mime_type)[0];

        if ($mediaType === 'image') {
            list($sizes['width'], $sizes['height']) = getimagesize($mediaPath);
        } elseif ($mediaType === 'video') {
            $ffprobe = FFProbe::create();
            $streams = $ffprobe->streams($mediaPath);

            foreach ($streams as $stream) {
                if ($stream->get('codec_type') === 'video') {
                    $sizes['width'] = $stream->get('width');
                    $sizes['height'] = $stream->get('height');
                }
            }
        }

        return $sizes;
    }
}