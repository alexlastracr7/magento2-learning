<?php

namespace CustomGrid\SalesOrderGrid\Plugin;

use Magento\Framework\Exception\LocalizedException;
use Magento\Sales\Model\ResourceModel\Order\Grid\Collection;

class SalesOrderGrid
{
    /**
     * @param Collection $subject
     * @return null
     * @throws LocalizedException
     */
    public function beforeLoad(Collection $subject)
    {
        if (!$subject->isLoaded()) {
            $primaryKey = $subject->getResource()->getIdFieldName();
            $tableName = $subject->getResource()->getTable('sales_order_grid');

            $subject->getSelect()->joinLeft(
                $tableName,
                $tableName . '.entity_id = main_table.' . $primaryKey,
                $tableName . '.updated_at'
            );
        }

        if (!$subject->isLoaded()) {
            $primaryKey = $subject->getResource()->getIdFieldName();
            $tableName = $subject->getResource()->getTable('customer_entity');

            $subject->getSelect()->joinLeft(
                $tableName,
                $tableName . '.entity_id = main_table.' . $primaryKey,
                $tableName . '.created_at'
            );
        }

        return null;
    }
}
