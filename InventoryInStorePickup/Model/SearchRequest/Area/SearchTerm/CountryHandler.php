<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\InventoryInStorePickup\Model\SearchRequest\Area\SearchTerm;

use Magento\Directory\Helper\Data;
use Magento\Framework\DataObject;
use Magento\InventoryInStorePickupApi\Model\SearchResult\Area\SearchTerm\HandlerInterface;

/**
 * Provide Default country for area search.
 */
class CountryHandler implements HandlerInterface
{
    public const COUNTRY = 'country';

    /**
     * @var Data
     */
    private $data;

    /**
     * @param Data $data
     */
    public function __construct(Data $data)
    {
        $this->data = $data;
    }

    /**
     * @inheritdoc
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function execute(string $searchTerm, DataObject $result): void
    {
        $result->setData(self::COUNTRY, $this->data->getDefaultCountry());
    }
}
