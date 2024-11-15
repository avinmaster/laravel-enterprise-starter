<?php

namespace App\Services\Creative\Actions;

use App\Repositories\Read\Creative\CreativeReadRepositoryInterface;
use App\Repositories\Write\Creative\CreativeWriteRepositoryInterface;

class DeleteCreativeAction
{
    public function __construct(
        protected CreativeReadRepositoryInterface $creativeReadRepository,
        protected CreativeWriteRepositoryInterface $creativeWriteRepository,
    ) {
    }

    public function run(string $id): void
    {
        $creative = $this->creativeReadRepository->getById($id);

        $this->creativeWriteRepository->detachCreativeAddons($creative);
        $this->creativeWriteRepository->removePrimaryAsset($creative);
        $this->creativeWriteRepository->removeSecondaryAsset($creative);
        $this->creativeWriteRepository->delete($id);
    }
}
