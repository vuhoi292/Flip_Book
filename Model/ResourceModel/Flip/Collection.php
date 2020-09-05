<?php


namespace Book\Flip\Model\ResourceModel\Flip;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(
            'Book\Flip\Model\Flip',
            'Book\Flip\Model\ResourceModel\Flip'
        );
    }
}
