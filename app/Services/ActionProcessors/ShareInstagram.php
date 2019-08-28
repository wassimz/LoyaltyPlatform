<?php

namespace App\Services\ActionProcessors;

use App\DTO\ShareData;
use App\Models\StoreEntity;
use App\Models\StoreEvent;

class ShareInstagram extends Base
{
    protected $requiresEntity = true;
    protected $requiresEntityConfirmation = true;

    public function canHandle(StoreEvent $event)
    {
        $type = $event->entity->data->type ?? null;

        if (ShareData::TYPE_INSTAGRAM !== $type) {
            return false;
        }

        return parent::canHandle($event);
    }

    public function getEntityType()
    {
        return StoreEntity::TYPE_SHARE;
    }
}
