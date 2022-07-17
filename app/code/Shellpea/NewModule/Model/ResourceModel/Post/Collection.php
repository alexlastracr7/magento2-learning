<?php
namespace Shellepa\NewModule\Model\ResourceModel\Post;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{


    protected function _construct()
    {
        $this->_init('Shellpea\NewModule\Model\Post', 'Shellpea\NewModule\Model\ResourceModel\Post');
    }

}
