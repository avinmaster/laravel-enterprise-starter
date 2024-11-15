<?php

namespace App\Http\Controllers\Api\V1\AuctionResult;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\AuctionResult;
use App\Http\Controllers\ApiController;
use App\Enums\AuctionResult\AuctionResultEnum;

class AuctionResultController extends ApiController
{
    public function win(Request $request): AuctionResult
    {
        $requestData = $this->decodeRequestData($request);

        $data = [
            'id' => Str::uuid()->toString(),
            'ad_id' => $request->route('ad_id'),
            'data' => json_encode($requestData),
            'type' => AuctionResultEnum::WON()->value
        ];

        /* @var AuctionResult */
        return AuctionResult::query()->create($data);
    }

    public function lose(Request $request): AuctionResult
    {
        $requestData = $this->decodeRequestData($request);

        $data = [
            'id' => Str::uuid()->toString(),
            'ad_id' => $request->route('ad_id'),
            'data' => json_encode($requestData),
            'type' => AuctionResultEnum::LOST()->value
        ];

        /* @var AuctionResult */
        return AuctionResult::query()->create($data);
    }

    public function billing(Request $request): AuctionResult
    {
        $requestData = $this->decodeRequestData($request);

        $data = [
            'id' => Str::uuid()->toString(),
            'ad_id' => $request->route('ad_id'),
            'data' => json_encode($requestData),
            'type' => AuctionResultEnum::BILLING()->value
        ];

        /* @var AuctionResult */
        return AuctionResult::query()->create($data);
    }

    private function decodeRequestData(Request $request): array
    {
        $requestContent = $request->getContent();

        // Декодировать, если данные запроса в формате gzip
        if ($this->isGzipCompressed($requestContent)) {
            $decodedGzip = gzdecode($requestContent);

            return json_decode(stripslashes($decodedGzip), true);
        }

        return [];
    }

    private function isGzipCompressed($data): bool
    {
        if (strlen($data) > 0) {
            $byteArray = unpack('C3chars', substr($data, 0, 3));
            return $byteArray['chars1'] === 0x1f &&
                $byteArray['chars2'] === 0x8b &&
                $byteArray['chars3'] === 0x08;
        }

        return false;
    }
}
