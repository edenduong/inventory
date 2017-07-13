<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Inventory\Model\ResourceModel\SourceItem;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Magento\Inventory\Model\ResourceModel\SourceItem as SourceItemResourceModel;
use Magento\Inventory\Model\SourceItem as SourceItemModel;

/**
 * Resource Collection of Source Items entity
 *
 * @api
 */
class Collection extends AbstractCollection
{
    /**
     * @inheritdoc
     */
    protected function _construct()
    {
        $this->_init(SourceItemModel::class, SourceItemResourceModel::class);
    }
}
