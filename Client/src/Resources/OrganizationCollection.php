<?php

// Mollie Shopware Plugin Version: 1.4.4

namespace Mollie\Api\Resources;

class OrganizationCollection extends \Mollie\Api\Resources\CursorCollection
{
    /**
     * @return string
     */
    public function getCollectionResourceName()
    {
        return "organizations";
    }
    /**
     * @return BaseResource
     */
    protected function createResourceObject()
    {
        return new \Mollie\Api\Resources\Organization($this->client);
    }
}
