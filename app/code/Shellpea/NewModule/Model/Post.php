<?php
namespace Shellpea\NewModule\Model;

class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface

{

    protected function _construct()
    {
        $this->_init('Shellpea\NewModule\Model\ResourceModel\Post');
    }

    public function getIdentities()
    {
        return ['Shellpea_Table' . '_' . $this->getId()];
    }

}
